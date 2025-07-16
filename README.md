# Finansal Çözümler - AI Destekli Analiz Platformu

Modern ve kullanıcı dostu bir finansal analiz platformu. Yapay zeka destekli şirket analizi ve finansal öneriler sunar.

## Özellikler

- 🚀 **Modern Tasarım**: Tailwind CSS ile responsive ve modern arayüz
- 🤖 **AI Destekli Analiz**: Google Gemini Pro ile şirket analizi
- 📊 **Rapor Yükleme**: PDF, DOC, DOCX, TXT dosya desteği
- 💬 **Gerçek Zamanlı Chat**: AI ile interaktif sohbet
- 🔒 **Güvenli API**: API key'ler arka planda saklanır
- 📱 **Mobil Uyumlu**: Tüm cihazlarda mükemmel deneyim

## Kurulum

### Gereksinimler
- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Adımlar

1. **Projeyi klonlayın**
```bash
git clone <repository-url>
cd laravel-12.x
```

2. **Bağımlılıkları yükleyin**
```bash
composer install
npm install
```

3. **Environment dosyasını oluşturun**
```bash
cp .env.example .env
```

4. **Uygulama key'ini oluşturun**
```bash
php artisan key:generate
```

5. **Veritabanını yapılandırın**
```bash
# .env dosyasında veritabanı bilgilerini güncelleyin
php artisan migrate
```

6. **Gemini API Key'ini ekleyin**
```bash
# .env dosyasına Gemini API key'inizi ekleyin
GEMINI_API_KEY=your_gemini_api_key_here
```

7. **Uygulamayı çalıştırın**
```bash
php artisan serve
npm run dev
```

## Kullanım

### AI Analiz Sayfası
1. `/analiz` sayfasına gidin
2. Şirket bilgilerinizi girin
3. Chat sayfasına yönlendirileceksiniz
4. Raporlarınızı yükleyin ve AI ile sohbet edin

### Özellikler
- **Kişisel Bilgiler**: Ad, yaş, pozisyon
- **Şirket Bilgileri**: Şirket adı, sektör, büyüklük
- **Dosya Yükleme**: Raporlarınızı yükleyin
- **AI Sohbet**: Finansal öneriler alın

## API Endpoints

- `GET /analiz` - Analiz ana sayfası
- `POST /analiz/bilgiler` - Kullanıcı bilgilerini işle
- `GET /analiz/chat` - Chat sayfası
- `POST /analiz/message` - AI mesaj gönder

## Güvenlik

- API key'ler `.env` dosyasında saklanır
- CSRF koruması aktif
- Dosya yükleme güvenliği
- Input validation

## Teknolojiler

- **Backend**: Laravel 12.x
- **Frontend**: Tailwind CSS, JavaScript
- **AI**: Google Gemini Pro API
- **Database**: MySQL/PostgreSQL
- **Icons**: Heroicons, Boxicons

## Katkıda Bulunma

1. Fork edin
2. Feature branch oluşturun (`git checkout -b feature/amazing-feature`)
3. Commit edin (`git commit -m 'Add amazing feature'`)
4. Push edin (`git push origin feature/amazing-feature`)
5. Pull Request oluşturun

## Lisans

Bu proje MIT lisansı altında lisanslanmıştır.

---

**Not**: Gemini API key'inizi `.env` dosyasına eklemeyi unutmayın. API key olmadan AI özellikleri çalışmayacaktır.
