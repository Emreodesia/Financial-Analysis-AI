<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\AnalysisController;

// Ana sayfa
Route::get('/', [HomeController::class, 'index'])->name('home');

// Finans sitesi sayfaları
Route::get('/hizmetler', [HomeController::class, 'services'])->name('services');
Route::get('/hakkimizda', [HomeController::class, 'about'])->name('about');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contact');
Route::get('/yatirim-danismanligi', [HomeController::class, 'consulting'])->name('consulting');
Route::get('/portfoy-yonetimi', [HomeController::class, 'portfolio'])->name('portfolio');

// Analiz sayfaları
Route::get('/analiz', [AnalysisController::class, 'index'])->name('analysis.index');
Route::post('/analiz/bilgiler', [AnalysisController::class, 'processAnalysis'])->name('analysis.process');
Route::get('/analiz/chat', [AnalysisController::class, 'chat'])->name('analysis.chat');
Route::post('/analiz/message', [AnalysisController::class, 'sendMessage'])->name('analysis.message');

// Test route
Route::get('/test-gemini', function() {
    $apiKey = config('services.gemini.api_key');
    return response()->json([
        'api_key_exists' => !empty($apiKey),
        'api_key_length' => strlen($apiKey),
        'api_key_preview' => substr($apiKey, 0, 10) . '...'
    ]);
});

// Chatbot API
Route::post('/chatbot/message', [ChatbotController::class, 'sendMessage'])->name('chatbot.message');
