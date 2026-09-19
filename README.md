# Portfolio — Uğurhan Daşdemir

Yapay zekâ, bilgisayarlı görü ve otonom sistemler üzerine çalışan bir yazılım mühendisinin kişisel portfolyo sitesi. Öne çıkan projeler, deneyim, yetkinlikler ve iletişim tek sayfada toplanır; her proje için ayrı bir vaka sayfası vardır.

**Canlı site:** https://ugurhandasdemir.com

## Özellikler

- **Tek sayfalık ana sayfa:** Hero, öne çıkan projeler, deneyim zaman çizelgesi, yetkinlikler ve iletişim bölümü.
- **Proje kataloğu:** `repos.json` içindeki repolar GitHub API'den okunur; ekran görüntüsü, YouTube bağlantısı ve elle yazılmış projeler aynı dosyadan yönetilir.
- **Vaka sayfaları:** Proje ayrıntıları `static/projects/*.md` dosyalarından `project_details.html` içinde gösterilir (Avcı Drone, Edge AI termal tespit, EscapeUAV, NoFlyZone).
- **Özgeçmiş indirme:** `static/pdf/ozgecmis.pdf`.
- **Erişilebilirlik ve performans:** Tailwind CLI ile derlenmiş küçültülmüş CSS, WebP görseller, lazy loading, `prefers-reduced-motion` desteği, klavye odak göstergeleri.

## Teknoloji Yığını

| Katman | Teknoloji |
| --- | --- |
| Arayüz | HTML, Tailwind CSS 3, vanilla JavaScript |
| Sunucu (yerel) | Node.js 18+ (`server.mjs`) |
| Sunucu (üretim) | Vercel Serverless Function (`api/index.ts`, TypeScript) |
| Derleme | Tailwind CLI |

## Kurulum

```bash
git clone https://github.com/Ugurhandasdemir/Portfolio.git
cd Portfolio
npm install
npm run dev        # CSS'i derler ve http://localhost:8000 adresinde sunar
```

Yalnızca CSS'i yeniden derlemek için: `npm run build:css`

## Proje Yapısı

```
Portfolio/
├── Base/templates/home.html   # ana sayfa
├── project_details.html       # proje vaka sayfası şablonu
├── repos.json                 # listelenecek repolar, görseller, elle eklenen projeler
├── static/
│   ├── css/site.css           # Tailwind çıktısı (derlenir)
│   ├── projects/*.md          # vaka sayfası içerikleri
│   └── pdf/ozgecmis.pdf
├── src/tailwind.css           # Tailwind girdisi
├── api/index.ts               # Vercel fonksiyonu: ana sayfayı döndürür
├── server.mjs                 # yerel geliştirme sunucusu
└── vercel.json                # yönlendirme kuralları
```

## Yeni Proje Ekleme

1. GitHub reposunu `repos.json` → `repos` listesine ekleyin. İsteğe bağlı olarak `images` altında görsel, `youtube` altında video bağlantısı tanımlayın.
2. Repo dışı bir çalışma için `manual` listesine `name`, `slug`, `description` ve `details` (Markdown yolu) alanlarıyla bir kayıt ekleyin.
3. `static/projects/<slug>.md` dosyasını oluşturun.

## Yayına Alma

Site Vercel üzerinde yayındadır (`vercel.json`, `api/index.ts`). `static/css/site.css` derlenmiş çıktı olduğundan, Tailwind sınıfı değiştiren her commit'ten önce `npm run build:css` çalıştırılmalıdır.

## İletişim

- E-posta: ugurhandasdemir@gmail.com
- LinkedIn: [ugurhandasdemir](https://linkedin.com/in/ugurhandasdemir)
- GitHub: [Ugurhandasdemir](https://github.com/Ugurhandasdemir)
