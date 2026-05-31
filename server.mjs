// Lokal geliştirme sunucusu (eski router.php yerine).
// Çalıştır: npm run dev   ->  http://localhost:8000
// Vercel'de api/index.ts + vercel.json kullanılır; bu dosya sadece lokal.
import { createServer } from 'node:http';
import { readFile } from 'node:fs/promises';
import { existsSync } from 'node:fs';
import { join, extname } from 'node:path';

const ROOT = process.cwd();
const PORT = process.env.PORT || 8000;
const HOME = join(ROOT, 'Base', 'templates', 'home.html');
const CASE_STUDY = join(ROOT, 'project_details.html');

const MIME = {
  '.css': 'text/css',
  '.js': 'application/javascript',
  '.json': 'application/json',
  '.html': 'text/html; charset=utf-8',
  '.png': 'image/png',
  '.jpg': 'image/jpeg',
  '.jpeg': 'image/jpeg',
  '.gif': 'image/gif',
  '.svg': 'image/svg+xml',
  '.pdf': 'application/pdf',
};

function send(res, status, type, body) {
  res.writeHead(status, { 'Content-Type': type });
  res.end(body);
}

createServer(async (req, res) => {
  const path = decodeURIComponent(
    new URL(req.url, `http://${req.headers.host}`).pathname,
  );
  const normalized = path.replace(/\/+$/, '') || '/';

  // Statik dosyalar: static/ ve repos.json
  if (/^\/(static\/|repos\.json)/.test(path)) {
    const file = join(ROOT, path);
    if (existsSync(file)) {
      return send(res, 200, MIME[extname(file)] || 'application/octet-stream', await readFile(file));
    }
    return send(res, 404, 'text/plain; charset=utf-8', `Not found: ${path}`);
  }

  // Proje detay sayfası
  if (path === '/project_details.html' || normalized === '/project_details') {
    return send(res, 200, MIME['.html'], await readFile(CASE_STUDY));
  }

  // Ana sayfa (diğer her şey)
  return send(res, 200, MIME['.html'], await readFile(HOME));
}).listen(PORT, () => console.log(`Dev server: http://localhost:${PORT}`));
