<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Smalot\PdfParser\Parser;

class AnalysisController extends Controller
{
    public function index()
    {
        return view('analysis.index');
    }

    public function chat()
    {
        return view('analysis.chat');
    }

    public function processAnalysis(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:100',
            'company_name' => 'required|string|max:255',
            'company_size' => 'required|string|in:small,medium,large',
            'industry' => 'required|string|max:255',
            'position' => 'required|string|max:255',
        ]);

        // Session'a kullanıcı bilgilerini kaydet
        session([
            'analysis_user' => [
                'name' => $request->name,
                'age' => $request->age,
                'company_name' => $request->company_name,
                'company_size' => $request->company_size,
                'industry' => $request->industry,
                'position' => $request->position,
            ]
        ]);

        return redirect()->route('analysis.chat');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx,txt|max:10240', // 10MB max
        ]);

        $userMessage = $request->message;
        $fileContent = '';

        // Dosya yüklendiyse içeriğini oku
        if ($request->hasFile('file')) {
            try {
                $file = $request->file('file');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                
                if ($fileExtension === 'pdf') {
                    // PDF dosyaları için PDF Parser kullan
                    $parser = new Parser();
                    $pdf = $parser->parseFile($file->getRealPath());
                    $fileContent = $pdf->getText();
                    
                    // PDF metni çok uzunsa kısalt
                    if (strlen($fileContent) > 5000) {
                        $fileContent = substr($fileContent, 0, 5000) . "\n\n[PDF içeriği çok uzun olduğu için kısaltıldı]";
                    }
                } else {
                    // TXT, DOC, DOCX dosyaları için
                    $fileContent = file_get_contents($file->getRealPath());
                    
                    // Eğer dosya çok büyükse kısalt
                    if (strlen($fileContent) > 5000) {
                        $fileContent = substr($fileContent, 0, 5000) . "\n\n[Dosya çok büyük olduğu için kısaltıldı]";
                    }
                }
            } catch (\Exception $e) {
                $fileContent = "Dosya okuma hatası: " . $e->getMessage();
            }
        }

        // Gemini API'ye gönderilecek mesajı hazırla
        $systemPrompt = "Sen bir finansal analiz uzmanısın. Kullanıcının şirket raporlarını analiz ederek finansal öneriler sunuyorsun. Türkçe yanıt ver.";
        
        $userData = session('analysis_user', []);
        $contextMessage = "Kullanıcı Bilgileri:\n";
        $contextMessage .= "İsim: " . ($userData['name'] ?? 'Bilinmiyor') . "\n";
        $contextMessage .= "Şirket: " . ($userData['company_name'] ?? 'Bilinmiyor') . "\n";
        $contextMessage .= "Sektör: " . ($userData['industry'] ?? 'Bilinmiyor') . "\n";
        $contextMessage .= "Pozisyon: " . ($userData['position'] ?? 'Bilinmiyor') . "\n\n";
        
        if (!empty($fileContent)) {
            $contextMessage .= "Yüklenen Dosya İçeriği:\n" . $fileContent . "\n\n";
        }
        
        $contextMessage .= "Kullanıcı Sorusu: " . $userMessage;

        // ChatbotController ile aynı şekilde API key kullan
        $apiKey = env('GEMINI_API_KEY');
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent";

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-goog-api-key' => $apiKey,
            ])->post($url, [
                "contents" => [
                    [
                        "parts" => [
                            ["text" => $systemPrompt . "\n\n" . $contextMessage]
                        ]
                    ]
                ]
            ]);

            if ($response->failed()) {
                return response()->json([
                    'success' => false,
                    'message' => 'API isteği başarısız oldu: ' . $response->status() . ' - ' . $response->body()
                ]);
            }

            $data = $response->json();
            $aiResponse = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Yanıt alınamadı.';

            return response()->json([
                'success' => true,
                'message' => $aiResponse
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Bir hata oluştu: ' . $e->getMessage()
            ]);
        }
    }
} 