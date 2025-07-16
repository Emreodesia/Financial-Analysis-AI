<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finansal Çözümler - Geleceğinize Yatırım</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Heroicons - for professional SVG icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/24/outline/index.css">
    <!-- Boxicons for social media icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Deeper, more sophisticated gradient for hero section */
        .hero-gradient {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
        }
        /* Feature card styling for a premium feel */
        .feature-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); /* Smoother transition */
            border-radius: 1rem; /* More rounded corners */
            border: 1px solid rgba(229, 231, 235, 0.5); /* Subtle border */
        }
        .feature-card:hover {
            transform: translateY(-8px); /* More pronounced lift effect */
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15); /* Stronger, more elegant shadow */
            border-color: rgba(99, 102, 241, 0.3); /* Highlight border on hover */
        }
        /* Background floating animation for subtle depth */
        .floating-animation {
            animation: float 6s ease-in-out infinite; /* Slower, more graceful float */
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(1deg); } /* Slight rotation for organic feel */
        }
        /* Pulse animation for scroll indicator */
        .pulse-animation {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; } /* More subtle pulse */
        }
        /* Gradient text for modern headings */
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6, #8b5cf6); /* Blue to purple gradient */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        /* Added for new hero background pattern */
        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0 0v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zM12 34v-4h-2v4H6v2h4v4h2v-4h4v-2h-4zm0 0v-4h-2v4H6v2h4v4h2v-4h4v-2h-4zM36 10v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0 0v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zM12 10v-4h-2v4H6v2h4v4h2v-4h4v-2h-4zm0 0v-4h-2v4H6v2h4v4h2v-4h4v-2h-4z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 60px 60px;
            opacity: 0.05; /* Very subtle */
        }
        /* FAQ accordion styling */
        .accordion-item {
            border-bottom: 1px solid #e2e8f0; /* gray-200 */
            transition: all 0.3s ease; /* Smooth transition for background/shadow */
        }
        .accordion-item:hover {
            background-color: #f9fafb; /* gray-50 on hover */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        .accordion-header {
            cursor: pointer;
            padding: 1.5rem 1.5rem; /* Consistent padding */
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #1a202c; /* gray-900 */
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out, padding 0.4s ease-in-out; /* Smoother animation */
            padding: 0 1.5rem;
            color: #4a5568; /* gray-600 */
        }
        .accordion-content.active {
            max-height: 200px; /* Adjust as needed */
            padding-bottom: 1.5rem;
        }
        .accordion-icon {
            transition: transform 0.3s ease-out;
        }
        .accordion-icon.rotate {
            transform: rotate(180deg);
        }
        /* Testimonial card improvements */
        .testimonial-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 1rem;
            border: 1px solid rgba(229, 231, 235, 0.5);
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: rgba(99, 102, 241, 0.3);
        }
        /* Blog card improvements */
        .blog-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 1rem;
            border: 1px solid rgba(229, 231, 235, 0.5);
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: rgba(99, 102, 241, 0.3);
        }
        .blog-read-more:hover svg {
            transform: translateX(4px); /* Arrow moves on hover */
        }
        .chatbot-container {
            position: fixed;
            bottom: 1rem;         /* Sağ alt köşe */
            right: 1rem;          /* Sağ alt köşe */
            z-index: 1000;
           
        }
        .chatbot-window {
            width: 360px;
            height: 500px;
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transform: scale(0.8) translateX(100%);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: absolute;
            bottom: 0;
            right: 0;
            
        }
        .chatbot-window.open {
            transform: scale(1) translateX(0);
            opacity: 1;
            pointer-events: all;
            
        }
        .message-bubble {
            max-width: 80%;
            padding: 0.75rem 1rem;
            border-radius: 0.75rem;
            margin-bottom: 0.5rem;
            word-wrap: break-word;
            
        }
        .message-user {
            background-color: #3b82f6;
            color: white;
            align-self: flex-end;
            border-bottom-right-radius: 0.25rem;
        }
        .message-bot {
            background-color: #e2e8f0;
            color: #1a202c;
            align-self: flex-start;
            border-bottom-left-radius: 0.25rem;
        }
        .message-area::-webkit-scrollbar {
            width: 8px;
        }
        .message-area::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        .message-area::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        .message-area::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        /* New hero section styles */
        .banner-column {
            position: relative;
            display: grid;
            align-items: center;
            row-gap: 3rem;
            column-gap: 2rem;
            margin-left: 14px;
        }
        .banner-image {
            display: block;
            max-width: 16rem;
            height: auto;
            object-fit: cover;
            justify-self: center;
        }
        .banner-inner {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            row-gap: 1.5rem;
            margin-left: 0;
            padding-left: 0;
        }
        .banner-link {
            position: absolute;
            display: grid;
            top: 30%;
            right: 1.5rem;
            justify-items: center;
            row-gap: 0.5rem;
            visibility: hidden;
        }
        .banner-link > * {
            font-size: 1.25rem;
            line-height: inherit;
            color: #f1f5f9;
        }
        .banner-link::before,
        .banner-link::after {
            content: "";
            position: absolute;
            width: 4rem;
            height: 1.5px;
            transform: rotate(90deg);
            background: #f1f5f9;
        }
        .banner-link::before {
            top: -3rem;
        }
        .banner-link::after {
            bottom: -3rem;
        }
        @media screen and (min-width: 48rem) {
            .banner-column {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                justify-content: center;
                margin-top: 4rem;
            }
            .banner-image {
                max-width: 20rem;
                order: 1;
            }
        }
        @media screen and (min-width: 64rem) {
            .banner-column {
                grid-template-columns: 1fr max-content;
                column-gap: 4rem;
            }
            .banner-image {
                max-width: 24rem;
                margin-right: 5rem;
            }
            .banner-link {
                visibility: visible;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation Bar - Now transparent and positioned absolutely over the hero -->
    <nav class="absolute top-0 left-0 right-0 z-50 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center space-x-2">
                            <!-- Logo with gradient background and chart icon -->
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <!-- Company Name - Text color adjusted for visibility on dark hero -->
                            <span class="text-xl font-bold text-white">Finansal Çözümler</span>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <!-- Navigation Links - Text color adjusted for visibility on dark hero -->
                        <a href="/" class="text-gray-200 hover:text-blue-300 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Ana Sayfa</a>
                        <a href="/hizmetler" class="text-gray-200 hover:text-blue-300 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Hizmetlerimiz</a>
                        <a href="/analiz" class="text-gray-200 hover:text-blue-300 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">AI Analiz</a>
                        <a href="/hakkimizda" class="text-gray-200 hover:text-blue-300 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Hakkımızda</a>
                        <a href="/iletisim" class="text-gray-200 hover:text-blue-300 px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">İletişim</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <!-- Mobile Menu Button (Hamburger Icon) - Color adjusted for visibility -->
                    <button class="text-gray-200 hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" aria-label="Toggle menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Modern Black Design -->
    <section class="bg-black min-h-screen flex items-center justify-center relative overflow-hidden py-20">
        <!-- Modern Background Pattern -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900"></div>
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.1) 0%, transparent 50%), radial-gradient(circle at 75% 75%, rgba(139, 92, 246, 0.1) 0%, transparent 50%);"></div>
        </div>

        <div class="relative z-10 container">
            <div class="banner-column">
                <!-- Enhanced Hero Content -->
                <div class="banner-inner" style="margin-left: 0; padding-left: 0;">
                    <div class="mb-4">
                        <span class="inline-block px-4 py-2 bg-blue-600/20 text-blue-400 text-sm font-medium rounded-full border border-blue-500/30">
                             Yenilikçi Finansal Çözümler
                        </span>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-black text-white mb-6 leading-tight tracking-tight">
                        Finansal Geleceğinizi <br>
                        <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-blue-600 bg-clip-text text-transparent">
                            Güvenle İnşa Edin
                        </span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl leading-relaxed">
                        Yenilikçi araçlar ve uzman desteğiyle akıllı yatırım kararları alın, hedeflerinize ulaşın.
                    </p>
                    
                    <!-- Enhanced CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button type="button" class="group bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-2xl flex items-center justify-center space-x-3 border border-blue-500/30">
                            <span>Hemen Başlayın</span>
                            <i class="bx bx-chevron-right group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        
                        <button type="button" class="group border-2 border-gray-600 text-gray-300 px-8 py-4 rounded-xl font-semibold text-lg hover:border-blue-500 hover:text-blue-400 transition-all duration-300 transform hover:scale-105 backdrop-blur-sm flex items-center justify-center space-x-3">
                            <i class="bx bx-play-circle text-xl"></i>
                            <span>Demo İzleyin</span>
                        </button>
                    </div>
                    
                    <!-- Stats Section -->
                    <div class="flex flex-wrap gap-8 mt-12 pt-8 border-t border-gray-800">
                        <div class="text-center">
                            <div class="text-2xl md:text-3xl font-bold text-white">10K+</div>
                            <div class="text-sm text-gray-400">Mutlu Müşteri</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl md:text-3xl font-bold text-white">$50M+</div>
                            <div class="text-sm text-gray-400">Yönetilen Varlık</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl md:text-3xl font-bold text-white">99%</div>
                            <div class="text-sm text-gray-400">Müşteri Memnuniyeti</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
    <img src="{{ asset('images/emre-bg.png') }}" class="banner-image drop-shadow-2xl" alt="Kripto Para Çözümleri">
    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl"></div>
          </div>
                
                <!-- Enhanced Social Media Links -->
                <div class="banner-link">
                    <a href="#" title="Facebook" class="hover:text-blue-400 transition-colors duration-300">
                        <i class="bx bxl-facebook text-2xl"></i>
                    </a>
                    <a href="#" title="Instagram" class="hover:text-pink-400 transition-colors duration-300">
                        <i class="bx bxl-instagram text-2xl"></i>
                    </a>
                    <a href="#" title="Twitter" class="hover:text-blue-400 transition-colors duration-300">
                        <i class="bx bxl-twitter text-2xl"></i>
                    </a>
                    <a href="#" title="YouTube" class="hover:text-red-400 transition-colors duration-300">
                        <i class="bx bxl-youtube text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Enhanced Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white pulse-animation">
            <div class="flex flex-col items-center space-y-2">
                <span class="text-xs text-gray-400 uppercase tracking-wider">Keşfedin</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <!-- Section Title - Larger and bolder -->
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Neden Finansal Çözümleri Seçmelisiniz?
                </h2>
                <!-- Section Subtitle - Improved readability -->
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Finansal hedeflerinize ulaşmanız için tasarlanmış üstün özellikler ve hizmetler.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Card 1: Gelişmiş Analiz Araçları -->
                <div class="feature-card bg-white p-8 shadow-lg">
                    <!-- Icon with gradient background -->
                    <div class="w-14 h-14 bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Gelişmiş Analiz Araçları</h3>
                    <p class="text-gray-600 leading-relaxed">Piyasa trendlerini derinlemesine inceleyin ve veriye dayalı kararlar alın.</p>
                </div>

                <!-- Feature Card 2: Güvenli ve Şeffaf İşlemler -->
                <div class="feature-card bg-white p-8 shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Güvenli ve Şeffaf İşlemler</h3>
                    <p class="text-gray-600 leading-relaxed">Yatırımlarınızın her adımında tam güvenlik ve şeffaflık garantisi.</p>
                </div>

                <!-- Feature Card 3: Kişiselleştirilmiş Portföy Yönetimi -->
                <div class="feature-card bg-white p-8 shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-r from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Kişiselleştirilmiş Portföy Yönetimi</h3>
                    <p class="text-gray-600 leading-relaxed">Uzmanlarımızla birlikte size özel yatırım stratejileri geliştirin.</p>
                </div>

                <!-- Feature Card 4: 7/24 Uzman Desteği -->
                <div class="feature-card bg-white p-8 shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">7/24 Uzman Desteği</h3>
                    <p class="text-gray-600 leading-relaxed">Her sorunuzda yanınızda olan deneyimli finans danışmanları.</p>
                </div>

                <!-- Feature Card 5: Kolay Kullanım Arayüzü -->
                <div class="feature-card bg-white p-8 shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Kolay Kullanım Arayüzü</h3>
                    <p class="text-gray-600 leading-relaxed">Finansal işlemleri basitleştiren sezgisel ve modern bir platform.</p>
                </div>

                <!-- Feature Card 6: Küresel Piyasalara Erişim -->
                <div class="feature-card bg-white p-8 shadow-lg">
                    <div class="w-14 h-14 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Küresel Piyasalara Erişim</h3>
                    <p class="text-gray-600 leading-relaxed">Dünya genelindeki yatırım fırsatlarına tek bir platformdan ulaşın.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-32 bg-gradient-to-br from-blue-50 to-indigo-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Müşterilerimiz Ne Diyor?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Başarılı yatırımcılarımızın deneyimlerini dinleyin ve neden bizi tercih ettiklerini öğrenin.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial Card 1 -->
                <div class="testimonial-card bg-white p-8 shadow-xl border border-gray-100 rounded-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-full -translate-y-10 translate-x-10 opacity-50"></div>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">AY</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-lg">Ayşe Yılmaz</p>
                            <p class="text-sm text-blue-600 font-medium">Girişimci</p>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic text-lg leading-relaxed">"Finansal Çözümler sayesinde yatırımlarım hiç bu kadar kolay ve karlı olmamıştı. Uzman destekleri paha biçilemez!"</p>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="testimonial-card bg-white p-8 shadow-xl border border-gray-100 rounded-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-200 rounded-full -translate-y-10 translate-x-10 opacity-50"></div>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-purple-500 to-purple-600 flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">MC</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-lg">Mehmet Can</p>
                            <p class="text-sm text-purple-600 font-medium">Finans Analisti</p>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic text-lg leading-relaxed">"Gelişmiş analiz araçları ve anlık verilerle piyasayı yakından takip etmek çok daha kolay. Kesinlikle tavsiye ederim."</p>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="testimonial-card bg-white p-8 shadow-xl border border-gray-100 rounded-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-green-100 to-green-200 rounded-full -translate-y-10 translate-x-10 opacity-50"></div>
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center mr-4">
                            <span class="text-white font-bold text-lg">ZS</span>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-lg">Zeynep Şahin</p>
                            <p class="text-sm text-green-600 font-medium">Yatırımcı</p>
                            <div class="flex items-center mt-1">
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic text-lg leading-relaxed">"Güvenli altyapısı ve kişiselleştirilmiş portföy yönetimi ile finansal hedeflerime emin adımlarla ilerliyorum."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Sıkça Sorulan Sorular
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Merak ettikleriniz için hızlı cevaplar.
                </p>
            </div>
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="accordion-item bg-white rounded-lg shadow-md">
                    <div class="accordion-header">
                        <span class="text-lg font-semibold text-gray-800">Hesap açmak için hangi belgelere ihtiyacım var?</span>
                        <svg class="accordion-icon w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>Kimlik fotokopisi, ikametgah belgesi ve banka hesap bilgileriniz gerekmektedir. Detaylı bilgi için destek ekibimizle iletişime geçebilirsiniz.</p>
                    </div>
                </div>
                <!-- FAQ Item 2 -->
                <div class="accordion-item bg-white rounded-lg shadow-md">
                    <div class="accordion-header">
                        <span class="text-lg font-semibold text-gray-800">Yatırım danışmanlığı hizmetiniz ücretli mi?</span>
                        <svg class="accordion-icon w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>Temel yatırım danışmanlığı hizmetlerimiz ücretsizdir. Daha kapsamlı ve kişiselleştirilmiş danışmanlık paketlerimiz için fiyatlandırma sayfamızı ziyaret edebilirsiniz.</p>
                    </div>
                </div>
                <!-- FAQ Item 3 -->
                <div class="accordion-item bg-white rounded-lg shadow-md">
                    <div class="accordion-header">
                        <span class="text-lg font-semibold text-gray-800">Mobil uygulamanız var mı?</span>
                        <svg class="accordion-icon w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                    <div class="accordion-content">
                        <p>Evet, hem iOS hem de Android cihazlar için mobil uygulamamız bulunmaktadır. Uygulama mağazalarından indirebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog/News Section -->
    <section id="blog" class="py-32 bg-gradient-to-br from-gray-50 to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Blog & Haberler
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Finans dünyasındaki en son gelişmeler, uzman görüşleri ve piyasa analizleri.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="blog-card bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 relative group">
                    <div class="relative overflow-hidden">
                        <img class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500" src="https://placehold.co/600x400/E0E7FF/4F46E5?text=Yatırım+Trendleri" alt="2025 Yatırım Trendleri">
                        <div class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">Trend</div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-500">2 Temmuz 2025</p>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">2025 Yılında Öne Çıkan Yatırım Trendleri</h3>
                        <p class="text-gray-600 text-base leading-relaxed mb-6">Uzmanlarımızdan 2025 yılına damga vuracak yatırım trendleri hakkında detaylı analizler ve öngörüler.</p>
                        <a href="#" class="blog-read-more text-blue-600 hover:text-blue-800 font-semibold flex items-center transition-colors group">
                            Devamını Oku
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="blog-card bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 relative group">
                    <div class="relative overflow-hidden">
                        <img class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500" src="https://placehold.co/600x400/FFE4E6/DC2626?text=Kripto+Piyasası" alt="Kripto Para Piyasası">
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-medium">Kripto</div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-500">28 Haziran 2025</p>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Kripto Para Piyasasında Son Gelişmeler</h3>
                        <p class="text-gray-600 text-base leading-relaxed mb-6">Volatil kripto dünyasındaki en son haberler, analizler ve geleceğe yönelik tahminler.</p>
                        <a href="#" class="blog-read-more text-blue-600 hover:text-blue-800 font-semibold flex items-center transition-colors group">
                            Devamını Oku
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="blog-card bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 relative group">
                    <div class="relative overflow-hidden">
                        <img class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500" src="https://placehold.co/600x400/D1FAE5/059669?text=Portföy+Yönetimi" alt="Etkili Portföy Yönetimi">
                        <div class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">Rehber</div>
                    </div>
                    <div class="p-8">
                        <div class="flex items-center mb-4">
                            <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-sm text-gray-500">20 Haziran 2025</p>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight">Etkili Portföy Yönetimi İçin İpuçları</h3>
                        <p class="text-gray-600 text-base leading-relaxed mb-6">Yatırım portföyünüzü optimize etmek ve riskleri minimize etmek için pratik ipuçları.</p>
                        <a href="#" class="blog-read-more text-blue-600 hover:text-blue-800 font-semibold flex items-center transition-colors group">
                            Devamını Oku
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="py-24 bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <!-- CTA Title - Larger and bolder -->
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                Finansal Başarınız İçin İlk Adımı Atın!
            </h2>
            <!-- CTA Subtitle - Improved readability -->
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                Bugün bize katılın ve finansal hedeflerinize ulaşma yolculuğunuza başlayın.
            </p>
            <!-- CTA Button - More prominent with subtle hover effect -->
            <a href="#" 
               class="group inline-flex items-center bg-white text-blue-700 px-10 py-4 rounded-xl font-semibold text-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-xl">
                <span>Hemen Danışmanlık Alın</span>
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
                        <!-- Footer Logo with gradient background -->
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
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Ana Sayfa</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors duration-200">Hizmetlerimiz</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors duration-200">Yorumlar</a></li>
                        <li><a href="#faq" class="text-gray-400 hover:text-white transition-colors duration-200">SSS</a></li>
                        <li><a href="#blog" class="text-gray-400 hover:text-white transition-colors duration-200">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">İletişim</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-6">Temel Özellikler</h4>
                    <ul class="space-y-3 text-gray-400">
                        <!-- Feature list with checkmark icons for better visual appeal -->
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Gelişmiş Analiz</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Güvenli İşlemler</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Uzman Danışmanlık</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Küresel Erişim</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Finansal Çözümler. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>

    <!-- Chatbot Container -->
    <div class="chatbot-container">
        <!-- Chatbot Toggle Button -->
        <button id="chatbot-toggle" class="w-14 h-14 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300 transition-all duration-300 transform hover:scale-110" aria-label="Chatbotu Aç/Kapat">
            <svg id="chat-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
            <svg id="close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Chatbot Window -->
        <div id="chatbot-window" class="chatbot-window">
            <!-- Chatbot Header -->
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 text-white p-4 rounded-t-xl flex items-center justify-between shadow-md">
                <h3 class="text-xl font-semibold">Finans Botu</h3>
                <button id="chatbot-close-btn" class="text-white hover:text-gray-200 focus:outline-none" aria-label="Chatbotu Kapat">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Chat Messages Area -->
            <div id="message-area" class="flex-1 p-4 overflow-y-auto flex flex-col space-y-3 message-area">
                <!-- Initial bot message -->
                <div class="message-bubble message-bot">Merhaba! Finansal çözümler hakkında size nasıl yardımcı olabilirim?</div>
            </div>

            <!-- Chat Input Area -->
            <div class="p-4 border-t border-gray-200 bg-gray-50 flex items-center">
                <input type="text" id="user-input" placeholder="Mesajınızı buraya yazın..." class="flex-1 p-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-800">
                <button id="send-button" class="ml-3 bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H6"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for FAQ Accordion
        document.addEventListener('DOMContentLoaded', () => {
            const accordionHeaders = document.querySelectorAll('.accordion-header');

            accordionHeaders.forEach(header => {
                header.addEventListener('click', () => {
                    const content = header.nextElementSibling;
                    const icon = header.querySelector('.accordion-icon');

                    // Close all other open accordions
                    accordionHeaders.forEach(otherHeader => {
                        if (otherHeader !== header) {
                            otherHeader.nextElementSibling.classList.remove('active');
                            otherHeader.querySelector('.accordion-icon').classList.remove('rotate');
                        }
                    });

                    // Toggle the clicked accordion
                    content.classList.toggle('active');
                    icon.classList.toggle('rotate');
                });
            });
        });

        const chatbotToggle = document.getElementById('chatbot-toggle');
        const chatbotWindow = document.getElementById('chatbot-window');
        const chatbotCloseBtn = document.getElementById('chatbot-close-btn');
        const chatIcon = document.getElementById('chat-icon');
        const closeIcon = document.getElementById('close-icon');
        const messageArea = document.getElementById('message-area');
        const userInput = document.getElementById('user-input');
        const sendButton = document.getElementById('send-button');

        function toggleChatbot() {
            chatbotWindow.classList.toggle('open');
            chatIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            if (chatbotWindow.classList.contains('open')) {
                userInput.focus();
                messageArea.scrollTop = messageArea.scrollHeight;
            }
        }
        function addMessage(text, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message-bubble', sender === 'user' ? 'message-user' : 'message-bot');
            messageDiv.textContent = text;
            messageArea.appendChild(messageDiv);
            messageArea.scrollTop = messageArea.scrollHeight;
        }
        async function getBotResponse(userMessage) {
            const typingIndicator = document.createElement('div');
            typingIndicator.classList.add('message-bubble', 'message-bot', 'italic', 'text-gray-500');
            typingIndicator.textContent = 'Yazıyor...';
            messageArea.appendChild(typingIndicator);
            messageArea.scrollTop = messageArea.scrollHeight;
            await new Promise(resolve => setTimeout(resolve, 1500));
            messageArea.removeChild(typingIndicator);
            let botResponse = "Üzgünüm, şu anda bu konuda size yardımcı olamıyorum. Lütfen başka bir soru sorun.";
            if (userMessage.toLowerCase().includes("merhaba")) {
                botResponse = "Merhaba! Size nasıl yardımcı olabilirim?";
            } else if (userMessage.toLowerCase().includes("yatırım")) {
                botResponse = "Yatırım konularında size özel danışmanlık hizmetlerimiz bulunmaktadır. Hangi tür yatırımlarla ilgileniyorsunuz?";
            } else if (userMessage.toLowerCase().includes("güvenlik")) {
                botResponse = "Verilerinizin güvenliği bizim önceliğimizdir. En güncel şifreleme teknolojilerini kullanıyoruz.";
            } else if (userMessage.toLowerCase().includes("iletişim")) {
                botResponse = "Bize 7/24 destek hattımızdan veya iletişim formumuzdan ulaşabilirsiniz.";
            } else if (userMessage.toLowerCase().includes("teşekkürler")) {
                botResponse = "Rica ederim, başka bir konuda yardımcı olabilir miyim?";
            }
            addMessage(botResponse, 'bot');
        }
        chatbotToggle.addEventListener('click', toggleChatbot);
        chatbotCloseBtn.addEventListener('click', toggleChatbot);
        sendButton.addEventListener('click', function() {
            const message = userInput.value.trim();
            if (!message) return;

            // Kullanıcı mesajını ekle
            addMessage(message, 'user');
            userInput.value = '';
            userInput.disabled = true;
            sendButton.disabled = true;

            // Backend'e istek at
            fetch('/chatbot/message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message })
            })
            .then(res => res.json())
            .then(data => {
                addMessage(data.message, 'bot');
            })
            .catch(() => {
                addMessage('Bir hata oluştu. Lütfen tekrar deneyin.', 'bot');
            })
            .finally(() => {
                userInput.disabled = false;
                sendButton.disabled = false;
                messageArea.scrollTop = messageArea.scrollHeight;
            });
        });
        userInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                sendButton.click();
            }
        });
    </script>
</body>
</html>
