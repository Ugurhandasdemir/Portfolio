import { readFileSync } from 'node:fs';
import { join } from 'node:path';
import type { VercelRequest, VercelResponse } from '@vercel/node';

// Ana sayfa kaynağı. Statik dosyalar (static/, repos.json,
// project_details.html) vercel.json route'larında ayrılır; geri kalan
// her istek bu fonksiyona düşer ve ana sayfayı döndürür.
const HOME = join(process.cwd(), 'Base', 'templates', 'home.html');

export default function handler(_req: VercelRequest, res: VercelResponse) {
  res.setHeader('Content-Type', 'text/html; charset=utf-8');
  res.status(200).send(readFileSync(HOME, 'utf-8'));
}
