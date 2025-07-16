<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function sendMessage(Request $request)
    {
        $userMessage = $request->input('message');
        if (!$userMessage) {
            return response()->json(['error' => 'Mesaj boş olamaz.'], 400);
        }

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
                            ["text" => $userMessage]
                        ]
                    ]
                ]
            ]);

            if ($response->failed()) {
                return response()->json(['error' => 'API isteği başarısız oldu.'], 500);
            }

            $data = $response->json();
            $botMessage = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Yanıt alınamadı.';

            return response()->json(['message' => $botMessage]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Bir hata oluştu: ' . $e->getMessage()], 500);
        }
    }
} 