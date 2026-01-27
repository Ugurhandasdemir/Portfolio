<?php
include __DIR__ . '/navbar.php';

function asset($path) {
    return '/static/' . ltrim($path, '/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Uğurhan Daşdemir</title>
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <!-- home section -->
    <section id="home" class="flex s-around sw-80 m-auto">
        <main class="container">
            <p>Hello 👋 I'm</p>
            <section class="animation">
                <div class="anim-wrapper">
                    <div class="first">Uğurhan Daşdemir</div>
                    <div class="second">Web Developer </div>
                    <div class="third"> AI Developer</div>
                    <div class="fourth">Software Engineer</div>
                </div>
            </section>
        </main>
    </section>

    <!-- about section -->
    <section id="about">
        <h1 class="t-center my-2 t-white f-2 about-title">About Me</h1>
        <div class="about-container flex s-center items-center">
            <div class="about-image">
                <!-- Image is hidden via CSS -->
            </div>
            <div class="about-content about-centered">
                <p class="t-white m-b-1 popinss about-name">Uğurhan Daşdemir</p>
                <p class="t-white">
                    Merhaba, ben Uğurhan Daşdemir. Atatürk Üniversitesi'nde Bilgisayar Mühendisliği okuyorum. Özellikle yapay zeka, veri mühendisliği ve algoritmalarla uğraşmayı seviyorum. Son zamanlarda Teknofest gibi yarışmalarda yer aldım; ulaşımda yapay zeka uygulamaları ve otonom İHA projelerinde çalıştım.
                    Zor görünen problemleri parçalayıp anlaşılır ve işe yarar çözümler üretmek hoşuma gidiyor. Şu sıralar daha çok makine öğrenmesi, algoritmalar ve backend tarafında kendimi geliştirmeye odaklandım. Öğrenmeyi seven, yeni şeyler denemekten çekinmeyen ve üretmekten keyif alan biriyim.
                </p>
                <div class="home-buttons">
                    <a href="<?= asset('pdf/ozgecmis.pdf') ?>" target="_blank">
                        <button class="btn live popinss">Resume</button>
                    </a>
                    <a class="btn live popinss" id="hireme" href="mailto:ugurhandasdemir@gmail.com">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- skills section -->
    <section id="skills">
        <h1 class="t-center my-2 t-white f-2">Skills</h1>
        <div class="skills-list about-centered">
            <span class="skill-item">C++</span>
            <span class="skill-item">Python</span>
            <span class="skill-item">HTML / CSS</span>
            <span class="skill-item">JavaScript</span>
            <span class="skill-item">Django</span>
            <span class="skill-item">Numpy</span>
            <span class="skill-item">Pandas</span>
            <span class="skill-item">Matplotlib</span>
            <span class="skill-item">Seaborn</span>
            <span class="skill-item">Scikit-learn</span>
            <span class="skill-item">PyTorch</span>
            <span class="skill-item">OpenCV</span>
            <span class="skill-item">Oracle SQL</span>
            <span class="skill-item">Microsoft Server SQL</span>
            <span class="skill-item">LLM</span>
            <span class="skill-item">n8n</span>
            <span class="skill-item">Linux</span>
            <span class="skill-item">LangChain</span>
        </div>
    </section>

    <!-- project section -->
    <section id="projects">
        <h1 class="t-center my-2 t-white f-2">Projects</h1>

        <div class="projects-slider">
            <button class="slider-btn prev" aria-label="Previous projects">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <div class="projects-viewport">
                <div class="projects-track" id="projects-track">
                    <!-- JS dolduracak -->
                </div>
            </div>

            <button class="slider-btn next" aria-label="Next projects">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </section>

    <!-- contact section -->
    <section id="contact">
        <h1 class="t-center my-2 t-white f-2">Contact</h1>
        <div class="contact-container flex s-center items-center" style="gap:2rem; flex-wrap:wrap;">
            <div class="contact-card flex f-col s-center items-center">
                <span class="contact-icon"><i class="fa-solid fa-user"></i></span>
                <span class="contact-label">Uğurhan Daşdemir</span>
            </div>
            <div class="contact-card flex f-col s-center items-center">
                <span class="contact-icon"><i class="fa-solid fa-envelope"></i></span>
                <a href="mailto:ugurhandasdemir@gmail.com" class="contact-link">ugurhandasdemir@gmail.com</a>
            </div>
            <div class="contact-card flex f-col s-center items-center">
                <span class="contact-icon"><i class="fa-brands fa-github"></i></span>
                <a href="https://github.com/ugurhandasdemir" target="_blank" class="contact-link">ugurhandasdemir</a>
            </div>
            <div class="contact-card flex f-col s-center items-center">
                <span class="contact-icon"><i class="fa-brands fa-linkedin"></i></span>
                <a href="https://www.linkedin.com/in/ugurhandasdemir" target="_blank" class="contact-link">Uğurhan Daşdemir</a>
            </div>
            <div class="contact-card flex f-col s-center items-center">
                <span class="contact-icon"><i class="fa-solid fa-phone"></i></span>
                <a href="tel:+905364078583" class="contact-link">+90 536 407 8583</a>
            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer class="flex s-around">
        <p class="t-center my-2 popinss">&copy; All rights reserved - <span class="cpy-white popins">Uğurhan Daşdemir</span></p>
    </footer>



<script>
    document.addEventListener('DOMContentLoaded', ()=> {
        const track = document.querySelector('.projects-track');
        const prev = document.querySelector('.slider-btn.prev');
        const next = document.querySelector('.slider-btn.next');

        if(!track || !prev || !next){
            return;
        }

        const scrollAmount = () => {
            const firstSlide = track.querySelector('.projects-slide');
            return firstSlide ? firstSlide.getBoundingClientRect().width + 24 : 320;
        };

        prev.addEventListener('click', () => {
            track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' });
        });

        next.addEventListener('click', () => {
            track.scrollBy({ left: scrollAmount(), behavior: 'smooth' });
        });
    } );
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const track = document.querySelector('.projects-track');
  if (!track) return;

  let timer = setInterval(() => {
    track.scrollBy({ left: 340, behavior: 'smooth' });
    if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 5) {
      track.scrollTo({ left: 0, behavior: 'smooth' });
    }
  }, 2500);

  track.addEventListener('mouseenter', () => clearInterval(timer));
  track.addEventListener('mouseleave', () => {
    timer = setInterval(() => {
      track.scrollBy({ left: 340, behavior: 'smooth' });
      if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 5) {
        track.scrollTo({ left: 0, behavior: 'smooth' });
      }
    }, 2500);
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', async () => {
  const track = document.getElementById('projects-track');
  if (!track) return;

  const username = "ugurhandasdemir";

  const formatDate = (iso) => {
    const d = new Date(iso);
    return d.toLocaleDateString('tr-TR', { year: 'numeric', month: 'short', day: 'numeric' });
  };

  const getReadmeIntro = async (repoName) => {
    try {
      const res = await fetch(`https://api.github.com/repos/${username}/${repoName}/readme`, {
        headers: { 'Accept': 'application/vnd.github.v3.raw' }
      });
      if (!res.ok) return null;
      const text = await res.text();
      const lines = text.split('\n');
      let paragraph = '';
      for (const line of lines) {
        const trimmed = line.trim();
        if (!trimmed || trimmed.startsWith('#') || trimmed.startsWith('!') || trimmed.startsWith('[!') || trimmed.startsWith('[![')) {
          if (paragraph) break;
          continue;
        }
        paragraph += (paragraph ? ' ' : '') + trimmed;
      }
      paragraph = paragraph.replace(/\[([^\]]+)\]\([^)]+\)/g, '$1');
      if (paragraph.length > 200) paragraph = paragraph.substring(0, 200).trim() + '...';
      return paragraph || null;
    } catch { return null; }
  };

  try {
    const listRes = await fetch('/repos.json', { cache: 'no-cache' });
    if (!listRes.ok) throw new Error('Repos listesi alınamadı');
    const listData = await listRes.json();
    const allowed = new Set(listData.repos || []);
    const manualProjects = listData.manual || [];

    const reposRes = await fetch(`https://api.github.com/users/${username}/repos?per_page=100`);
    if (!reposRes.ok) throw new Error('GitHub API hatası');
    let repos = await reposRes.json();

    repos = repos.filter(r => allowed.has(r.name));

    const reposWithReadme = await Promise.all(
      repos.map(async (r) => {
        const readmeIntro = await getReadmeIntro(r.name);
        return { 
          ...r, 
          readmeIntro, 
          isManual: false,
          image: null,
          youtube: null,
          kaggle: null
        };
      })
    );

    // Elle eklenen projeleri ekle
    const allProjects = [
      ...reposWithReadme,
      ...manualProjects.map(m => ({
        name: m.name,
        description: m.description,
        readmeIntro: m.description,
        updated_at: m.updated_at,
        html_url: m.html_url,
        homepage: m.homepage,
        image: m.image || null,
        youtube: m.youtube || null,
        kaggle: m.kaggle || null,
        isManual: true
      }))
    ];

    // Tarihe göre sırala
    allProjects.sort((a, b) => new Date(b.updated_at) - new Date(a.updated_at));

    track.innerHTML = allProjects.map(r => `
      <div class="projects-item projects-slide flex f-col s-center items-center">
        <h1 class="t-white popinss">${r.name}</h1>
        <p class="t-white">${r.readmeIntro ?? r.description ?? "Açıklama yok."}</p>
        <p class="t-white" style="opacity:.7; margin-top:.5rem;">
          Güncelleme: ${formatDate(r.updated_at)}
        </p>
        <div class="button flex s-around" style="flex-wrap:wrap; gap:.5rem;">
          ${r.html_url ? `
            <a href="${r.html_url}" target="_blank">
              <button class="btn-project mx-1 m-top"><i class="fa-brands fa-github"></i> Github</button>
            </a>` : ''}
          ${r.homepage ? `
            <a href="${r.homepage}" target="_blank">
              <button class="btn-project mx-1 m-top"><i class="fa-solid fa-globe"></i> Live</button>
            </a>` : ''}
          ${r.image ? `
            <a href="${r.image}" target="_blank">
              <button class="btn-project mx-1 m-top"><i class="fa-solid fa-image"></i> Görsel</button>
            </a>` : ''}
          ${r.youtube ? `
            <a href="${r.youtube}" target="_blank">
              <button class="btn-project mx-1 m-top"><i class="fa-brands fa-youtube"></i> YouTube</button>
            </a>` : ''}
          ${r.kaggle ? `
            <a href="${r.kaggle}" target="_blank">
              <button class="btn-project mx-1 m-top"><i class="fa-brands fa-kaggle"></i> Kaggle</button>
            </a>` : ''}
          ${!r.html_url && !r.homepage && !r.image && !r.youtube && !r.kaggle ? `<span class="t-white" style="opacity:.5;">Private</span>` : ''}
        </div>
      </div>
    `).join("") || `<p class="t-white">Gösterilecek proje bulunamadı.</p>`;
  } catch (e) {
    track.innerHTML = `<p class="t-white">Projeler yüklenemedi.</p>`;
  }
});
</script>
</body>
</html>