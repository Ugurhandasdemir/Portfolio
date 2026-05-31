# Portfolio — Claude Code Rehberi

Uğurhan Daşdemir kişisel portföy sitesi. PHP backend, Vercel (`vercel-php`) üzerinde yayınlanır.

## Mimari / İstek akışı
- **Local:** `php -S localhost:8000 router.php`
  - `router.php` → `static/`, `repos.json`, `project_details.html` dosyalarını doğrudan servis eder; geri kalan her şey → `api/index.php`.
- **Vercel:** `vercel.json` routes → `repos.json` ve `static/*` statik; geri kalan `/(.*)` → `api/index.php`.
- **`api/index.php`** path'e göre dağıtım yapar:
  - `/project_details.html` veya `/project_details` → `readfile(project_details.html)`
  - diğer her şey → `require Base/templates/home.php` (ana sayfa)

## Dosyalar
- **`index.html`** — ana sayfa TASARIM kaynağı (Google Stitch çıktısı). **ELLE DEĞİŞTİRME.** Tasarım buradan gelir.
- **`Base/templates/home.php`** — gerçekte servis edilen ana sayfa. `index.html` tasarımının birebir kopyası + backend bağlantısı. Tasarımı yeniden düzenleme; sadece backend kabloları (proje yükleyici, CV, linkler).
- **`project_details.html`** — proje detay sayfası. Şu an `?repo=<ad>` parametresiyle **GitHub README** çeker ve gösterir (marked.js). Eski statik "case study" tasarımı dosyanın altında `<!-- ESKI TASARIM ... -->` yorumunda, sonra güncellenecek.
- **`repos.json`** — `repos[]` (gösterilecek GitHub repo allowlist'i) + `manual[]` (elle eklenen projeler). Ana sayfa yükleyicisi bunu kullanır.
- **`projects.json`** — şu an KULLANILMIYOR (zengin tech-tag verisi, ileride alternatif kaynak olabilir).
- **`static/`** — `css/`, `pdf/ozgecmis.pdf` (CV), `images/`.

## Ana sayfa proje yükleyici (home.php içindeki script)
- `/repos.json` → allowlist + manual.
- `https://api.github.com/users/ugurhandasdemir/repos` → allowlist'e göre filtrele, README intro çek.
- Manual projelerle birleştir, tarihe göre sırala, yeni kart tasarımına bas.
- Kart "View Case Study" → `/project_details.html?repo=<repo|name>`.
- GitHub erişilemezse manual projelerle devam eder (graceful fallback).

## Kurallar
- **Frontend tasarımını koru.** Backend aktarırken görsel tasarımı değiştirme. (`index.html` dokunulmaz.)
- GitHub API auth'suz 60 istek/saat limitli — yükleyiciler hatayı yakalar.
- UI metinleri Türkçe olabilir.
- **HER OTURUMDA `MEMORY.md`'yi güncelle** — ne değişti, neden, sıradaki adım.
