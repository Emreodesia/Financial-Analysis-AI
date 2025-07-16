<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şirket Analizi - Finansal Çözümler</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Heroicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/24/outline/index.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            transform: scale(1.02);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        .step-indicator {
            transition: all 0.3s ease;
        }
        .step-indicator.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-gray-900">
                        Finansal Çözümler
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                        Ana Sayfa
                    </a>
                    <a href="{{ route('services') }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                        Hizmetler
                    </a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                        Hakkımızda
                    </a>
                    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900 transition-colors">
                        İletişim
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="gradient-bg text-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                Şirketinizi AI ile Analiz Edin
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">
                Yapay zeka destekli finansal analiz ile şirketinizin geleceğini planlayın
            </p>
            <div class="flex justify-center space-x-4">
                <div class="flex items-center space-x-2 bg-white bg-opacity-20 rounded-full px-6 py-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Hızlı Analiz</span>
                </div>
                <div class="flex items-center space-x-2 bg-white bg-opacity-20 rounded-full px-6 py-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span>AI Destekli</span>
                </div>
                <div class="flex items-center space-x-2 bg-white bg-opacity-20 rounded-full px-6 py-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span>Detaylı Rapor</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Section -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <!-- Step Indicator -->
            <div class="flex justify-center mb-8">
                <div class="flex items-center space-x-4">
                    <div class="step-indicator active w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 text-white flex items-center justify-center font-bold">
                        1
                    </div>
                    <div class="w-16 h-1 bg-gray-200 rounded"></div>
                    <div class="step-indicator w-10 h-10 rounded-full bg-gray-200 text-gray-500 flex items-center justify-center font-bold">
                        2
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-bold text-center mb-8 text-gray-900">
                Şirket Bilgilerinizi Girin
            </h2>
            <p class="text-center text-gray-600 mb-8">
                Bu bilgiler AI analizinizin daha doğru olması için kullanılacaktır
            </p>

            <form action="{{ route('analysis.process') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kişisel Bilgiler -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Kişisel Bilgiler</h3>
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Ad Soyad *
                            </label>
                            <input type="text" id="name" name="name" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Adınız ve soyadınız">
                        </div>

                        <div>
                            <label for="age" class="block text-sm font-medium text-gray-700 mb-2">
                                Yaş *
                            </label>
                            <input type="number" id="age" name="age" required min="18" max="100"
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Yaşınız">
                        </div>

                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700 mb-2">
                                Pozisyon *
                            </label>
                            <input type="text" id="position" name="position" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="CEO, CFO, Yönetici vb.">
                        </div>
                    </div>

                    <!-- Şirket Bilgileri -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Şirket Bilgileri</h3>
                        
                        <div>
                            <label for="company_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Şirket Adı *
                            </label>
                            <input type="text" id="company_name" name="company_name" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Şirketinizin adı">
                        </div>

                        <div>
                            <label for="industry" class="block text-sm font-medium text-gray-700 mb-2">
                                Sektör *
                            </label>
                            <input type="text" id="industry" name="industry" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                placeholder="Teknoloji, Finans, Üretim vb.">
                        </div>

                        <div>
                            <label for="company_size" class="block text-sm font-medium text-gray-700 mb-2">
                                Şirket Büyüklüğü *
                            </label>
                            <select id="company_size" name="company_size" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Seçiniz</option>
                                <option value="small">Küçük (1-50 çalışan)</option>
                                <option value="medium">Orta (51-250 çalışan)</option>
                                <option value="large">Büyük (250+ çalışan)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="bg-gray-50 rounded-xl p-6 mt-8">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Analiz Özellikleri</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Finansal Performans Analizi</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Risk Değerlendirmesi</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Büyüme Önerileri</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Rapor Yükleme</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">AI Destekli Öneriler</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-700">Detaylı Raporlar</span>
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-6">
                    <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-lg font-semibold text-lg hover:from-blue-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-200 shadow-lg">
                        Analizi Başlat
                        <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-gray-400">
                    © 2024 Finansal Çözümler. Tüm hakları saklıdır.
                </p>
            </div>
        </div>
    </footer>
</body>
</html> 