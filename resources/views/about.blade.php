<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımızda - Finansal Çözümler</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
        }
        .team-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 1rem;
            border: 1px solid rgba(229, 231, 235, 0.5);
        }
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
            border-color: rgba(99, 102, 241, 0.3);
        }
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .stat-card {
            transition: all 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation Bar -->
    <nav class="bg-white/95 backdrop-blur-md shadow-sm sticky top-0 z-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <span class="text-xl font-bold text-gray-900">Finansal Çözümler</span>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Ana Sayfa</a>
                        <a href="/hizmetler" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Hizmetlerimiz</a>
                        <a href="/hakkimizda" class="text-blue-600 font-medium px-3 py-2 rounded-md text-sm">Hakkımızda</a>
                        <a href="/iletisim" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">İletişim</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="text-gray-600 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-label="Toggle menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6">
                    <span class="gradient-text">Hakkımızda</span>
                </h1>
                <p class="text-xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                    15 yılı aşkın deneyimimizle, müşterilerimizin finansal başarısı için çalışıyoruz.
                </p>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Hikayemiz
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        2008 yılında kurulan Finansal Çözümler, Türkiye'nin önde gelen bağımsız finansal danışmanlık şirketlerinden biri haline geldi. Müşterilerimizin finansal hedeflerine ulaşması için yenilikçi çözümler geliştiriyoruz.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Deneyimli ekibimiz ve güçlü teknoloji altyapımızla, bireysel ve kurumsal müşterilerimize kapsamlı finansal hizmetler sunuyoruz. Güven, şeffaflık ve müşteri memnuniyeti bizim için her şeyden önce gelir.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="stat-card text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-3xl font-bold text-blue-600 mb-2">15+</div>
                            <div class="text-gray-600">Yıllık Deneyim</div>
                        </div>
                        <div class="stat-card text-center p-4 bg-gray-50 rounded-lg">
                            <div class="text-3xl font-bold text-purple-600 mb-2">5000+</div>
                            <div class="text-gray-600">Mutlu Müşteri</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Misyonumuz</h3>
                        <p class="text-lg mb-6 leading-relaxed">
                            Müşterilerimizin finansal hedeflerine ulaşması için güvenilir, şeffaf ve yenilikçi çözümler sunmak.
                        </p>
                        <h3 class="text-2xl font-bold mb-4">Vizyonumuz</h3>
                        <p class="text-lg leading-relaxed">
                            Türkiye'nin en güvenilir ve tercih edilen finansal danışmanlık şirketi olmak.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Değerlerimiz
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Çalışma prensiplerimizi oluşturan temel değerlerimiz.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-white rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Güven</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Müşterilerimizin güvenini kazanmak ve korumak bizim için en önemli değerdir.
                    </p>
                </div>
                <div class="text-center p-8 bg-white rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Şeffaflık</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tüm işlemlerimizde tam şeffaflık sağlayarak müşterilerimizin güvenini kazanıyoruz.
                    </p>
                </div>
                <div class="text-center p-8 bg-white rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Yenilikçilik</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sürekli gelişen teknoloji ve piyasa koşullarına uyum sağlayarak yenilikçi çözümler sunuyoruz.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Uzman Ekibimiz
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Deneyimli ve uzman kadromuzla hizmetinizdeyiz.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="team-card bg-white p-6 shadow-lg text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Ahmet Yılmaz</h3>
                    <p class="text-blue-600 font-medium mb-4">Genel Müdür</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        20 yıllık finans sektörü deneyimi ile şirketimizin vizyonunu yönlendiriyor.
                    </p>
                </div>
                <div class="team-card bg-white p-6 shadow-lg text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Ayşe Demir</h3>
                    <p class="text-purple-600 font-medium mb-4">Portföy Yöneticisi</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        CFA sertifikalı uzmanımız, müşteri portföylerinin optimal performansını sağlıyor.
                    </p>
                </div>
                <div class="team-card bg-white p-6 shadow-lg text-center">
                    <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mehmet Kaya</h3>
                    <p class="text-green-600 font-medium mb-4">Risk Yöneticisi</p>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Gelişmiş risk analizi araçları ile yatırımlarınızı koruyor ve optimize ediyor.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ekibimizle Tanışın
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto leading-relaxed">
                Uzman ekibimizle tanışın ve finansal hedeflerinize ulaşma yolculuğunuza başlayın.
            </p>
            <a href="/iletisim" 
               class="group inline-flex items-center bg-white text-blue-700 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-xl">
                <span>Bizimle İletişime Geçin</span>
                <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-semibold">Finansal Çözümler</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed">Geleceğinizi şekillendiren akıllı finansal stratejiler.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Hızlı Linkler</h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors duration-200">Ana Sayfa</a></li>
                        <li><a href="/hizmetler" class="text-gray-400 hover:text-white transition-colors duration-200">Hizmetlerimiz</a></li>
                        <li><a href="/hakkimizda" class="text-blue-400 font-medium">Hakkımızda</a></li>
                        <li><a href="/iletisim" class="text-gray-400 hover:text-white transition-colors duration-200">İletişim</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">İletişim Bilgileri</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span>+90 212 555 0123</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span>info@finansalcozumler.com</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span>İstanbul, Türkiye</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Finansal Çözümler. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>
</body>
</html> 