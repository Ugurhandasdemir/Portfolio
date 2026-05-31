# MEMORY

Çalışma günlüğü. Her oturumda güncellenir (en yeni en üstte).

## 2026-05-31

### Yeni tasarım + backend aktarımı
- `Base/templates/home.php` artık `index.html` tasarımının birebir kopyası + backend bağlantısı (eski düz `home.php` yerine geçti).
- Ana sayfa projeleri eski yükleyiciden taşındı: `repos.json` (allowlist + manual) + GitHub API, yeni kart tasarımına render ediliyor. GitHub down → manual fallback.
- Statik demo kartları (`index.html` içindekiler) DOMContentLoaded'da yükleyici tarafından anında değiştiriliyor.
- CV modalı gerçek PDF'i `<iframe>` ile gösteriyor; "Download PDF" → `/static/pdf/ozgecmis.pdf`.
- Footer GitHub/LinkedIn gerçek URL'lere bağlandı.
- Bozuk marka adı `Uęurhan Daœdemir` → `Uğurhan Daşdemir` düzeltildi (charset artefaktı).

### Routing
- `api/index.php` path-dispatch yapıyor: `/project_details.html` → `readfile`; diğer → `home.php`.
- Vercel'de kök HTML statik servis edilmediği için `project_details.html` PHP üzerinden servis ediliyor (404 hatası bu yüzden çözüldü).
- `router.php`: static regex'e `project_details.html` ve `html` mime eklendi.

### Proje detay sayfası → GitHub README (geçici)
- `project_details.html` `?repo=<ad>` query'sini okuyup `api.github.com/.../readme` çekiyor, `marked.js` ile markdown→HTML render ediyor.
- Relatif görsel/link'ler GitHub raw/blob URL'lerine çevriliyor. Hata → "GitHub'da aç" linki.
- README için `.readme-body` CSS eklendi (head). Nav "Back to Home" → `/`, "Contact Me" → `/#contact`.
- **Eski statik case-study tasarımı** dosyada `<!-- ESKI TASARIM (gecici gizlendi, sonra guncellenecek) -->` yorumunda saklı. İç yorumlar temizlenip tek blok halinde yorumlandı.
- Ana sayfa kart linki `?repo=` taşıyor; loader objelerine `repo` alanı eklendi.

### Dokümantasyon
- `CLAUDE.md` ve `MEMORY.md` oluşturuldu.

### Açık konular / sıradaki
- `project_details.html` eski tasarımı ileride README ile birleştirilip güncellenecek (kullanıcı yapacak).
- `projects.json` kullanılmıyor; istenirse GitHub yükleyici yerine bu kaynağa geçilebilir.
- Yerelde PHP kurulu değil; canlı test Vercel'de veya `php` kurulunca yapılmalı.
