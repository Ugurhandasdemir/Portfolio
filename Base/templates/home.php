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
                    <a class="btn live popinss" id="hireme" href="#contact">Let's talk</a>
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
                <div class="projects-track">
                    <div class="projects-item projects-slide flex f-col s-center items-center">
                        <h1 class="t-white popinss">Manga Translator</h1>
                        <p class="t-white">
                            Manga Translator, manga panelindeki konuşma balonlarından Tesseract OCR ile metin çıkaran, Googletrans API ile İngilizceden Türkçeye çeviri yapan ve çeviriyi OpenCV ile görsel üzerinde yeniden yerleştiren bir Python uygulamasıdır.
                        </p>
                        <div class="button flex s-around">
                            <a href="https://github.com/Ugurhandasdemir/manga_translator" target="_blank">
                                <button class="btn-project mx-1 m-top">Github</button>
                            </a>
                        </div>
                    </div>

                    <div class="projects-item projects-slide flex f-col s-center items-center">
                        <h1 class="t-white popinss">Flights-Booking</h1>
                        <p class="t-white">
                            Flights-Booking, Türk Hava Yolları web sitesinin Django ile geliştirilmiş bir klonudur. Kullanıcılar uçuş arayabilir, bilet seçimi yapabilir ve müşteri bilgilerini yönetebilir. 
                        </p>
                        <div class="button flex s-around">
                            <a href="https://github.com/Ugurhandasdemir/Flights-Booking" target="_blank">
                                <button class="btn-project mx-1 m-top">Github</button>
                            </a>
                        </div>
                    </div>

                    <div class="projects-item projects-slide flex f-col s-center items-center">
                        <h1 class="t-white popinss">YOLOv8 UAV Vehicle & Human Detection</h1>
                        <p class="t-white">
                            Bu proje, YOLOv8l mimarisi kullanılarak gerçekleştirilmiş bir nesne tespiti uygulamasıdır. Model, 26.000'den fazla görsel ile eğitilmiş ve yüksek doğruluk oranlarına ulaşmıştır.
                        </p>
                        <div class="button flex s-around">
                            <a href="https://github.com/Ugurhandasdemir/YOLOv8_UAV_Vehicle_Detection" target="_blank">
                                <button class="btn-project mx-1 m-top">Github</button>
                            </a>
                            <a href="https://www.youtube.com/watch?v=rUq1ZLTppGM" target="_blank">
                                <button class="btn-project mx-1 m-top">Live</button>
                            </a>
                        </div>
                    </div>

                    <div class="projects-item projects-slide flex f-col s-center items-center">
                        <h1 class="t-white popinss">Automated Document Processing from Government Portals</h1>
                        <p class="t-white">
                            QNB'nin bir iştiraki olan Ibtech'te, fazladan bir proje kapsamında resmi kurumlardan gelen belgelerin otomatik işlenmesini amaçlayan bir otomasyon projesinde görev aldım. Ekip olarak Selenium kullanarak çeşitli web sitelerinden belgeleri otomatik olarak indirip işleme aldık. Ardından bu belgeleri Python, LLM (Large Language Models) ve LangChain teknolojilerini kullanarak kategorize ettik ve kapsamlı veri kazıma (data scraping) işlemleri gerçekleştirdik. Projede özellikle Python tabanlı veri kazıma süreçleri ve LangChain entegrasyonu alanlarında aktif sorumluluk üstlendim.
                        </p>
                    </div>

                    <div class="projects-item projects-slide flex f-col s-center items-center">
                        <h1 class="t-white popinss">UAV Path Planning with Obstacle Avoidance and Spline Optimization</h1>
                        <p class="t-white">
                            Yasaklı bölgelerin enlem ve boylam bilgilerini işleyerek, bu alanlara ek bir güvenlik tamponu ekledim. PRM (Probabilistic Roadmap) algoritmasıyla harita üzerinde rastgele noktalar oluşturdum ve yalnızca güvenli bölgelerde kalan noktaları seçtim. Bu noktaları, en yakın k komşuluk bağlantılarıyla birbirine bağladım. Daha sonra, İHA'nın hedefe ulaşması için en optimal rotayı A* algoritmasıyla hesapladım. Hesaplanan rotayı spline enterpolasyonu ile yumuşatarak İHA'nın uçuş sistemine uygun hale getirdim. Son olarak, bu rotayı yer kontrol istasyonu üzerinden İHA'ya başarıyla ilettim.
                        </p>
                        <div class="button flex s-around">
                            <a href="<?= asset('images/b.jpeg') ?>" target="_blank">
                                <button class="btn-project mx-1 m-top">Resmi Gör</button>
                            </a>
                        </div>
                    </div>
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
</body>
</html>