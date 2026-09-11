<!doctype html>
<html lang="en-AU" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        (function () {
            const savedTheme = localStorage.getItem('theme');
            const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const theme = savedTheme ? savedTheme : (systemPrefersDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-bs-theme', theme);
        })();
    </script>
    <title>Smash Apparel — Passion For Performance</title>
    <meta name="description" content="Smash Apparel — Premium Courtwear & Athletic Performance Gear. Coming Soon.">
    <meta name="author" content="Smart Servix">
    <meta name="theme-color" content="#000000">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Basic&family=BenchNine:wght@300;400;700&family=Boldonse&family=Libre+Barcode+128+Text&family=Oswald:wght@200..700&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">

    <link href="/smashapparel/assets/css/bootstrap.min.css?v=1.8.4" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="/smashapparel/assets/css/override.css?v=1.8.4" rel="stylesheet">

    <style>
        .backdrop-blur { backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
        .lh-09 { line-height: 0.88; }
        .hover-scale { transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1); }
        .hover-scale:hover { transform: scale(1.03); }
        .editorial-hero-min { min-height: calc(100vh - 80px); }
        .text-glow { text-shadow: 0 0 20px rgba(255, 255, 255, 0.35); }
    </style>
</head>
<body class="bg-secondary-subtle text-white" style="overflow-x:hidden;">

<!-- 1. FLOATING BRAND NAVIGATION & KINETIC ANNOUNCEMENT BAR -->
<header class="sticky-top z-1030 pt-2 px-2 px-md-3">
    <div class="top-announcement-bar bg-black text-white py-2 px-3 rounded-4 border border-secondary border-opacity-25 backdrop-blur shadow-lg">
        <div class="d-flex align-items-center justify-content-between w-100">

            <!-- Social Links -->
            <div class="d-none d-md-flex align-items-center gap-3">
                <a href="https://instagram.com" target="_blank" class="text-white text-opacity-75 hover-scale" aria-label="Instagram">
                    <i class="bi bi-instagram d-block fs-7"></i>
                </a>
                <a href="https://facebook.com" target="_blank" class="text-white text-opacity-75 hover-scale" aria-label="Facebook">
                    <i class="bi bi-facebook d-block fs-7"></i>
                </a>
            </div>

            <!-- Kinetic Ticker -->
            <div class="announcement-ticker-wrapper overflow-hidden mx-auto position-relative d-flex align-items-center justify-content-center flex-grow-1" style="min-height: 24px; max-width: 600px;">
                <ul class="list-unstyled mb-0 text-center fw-bold text-uppercase position-relative w-100 h-100 gsap-ticker-list" style="font-size: clamp(0.6rem, 2.5vw, 0.725rem); letter-spacing: 0.1em; line-height: 1.2;">
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100">COMING SOON • OFFICIAL LAUNCH</li>
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100">PASSION FOR PERFORMANCE</li>
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100">BUILT FOR EVERY POINT</li>
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100">ENGINEERED FOR THE RALLY</li>
                </ul>
            </div>

            <!-- Brand Tag -->
            <div class="d-none d-md-block fs-9 fw-bold text-uppercase tracking-widest text-white text-opacity-50">
                Melbourne • AUS
            </div>

        </div>
    </div>
</header>

<main>
    <!-- 2. EDITORIAL HERO SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <section class="position-relative w-100 rounded-4 overflow-hidden bg-black text-white d-flex flex-column justify-content-between p-4 p-md-5 js-hero-banner editorial-hero-min">

            <!-- Fading Background Campaign Slides -->
            <div class="hero-slides-wrapper position-absolute top-0 start-0 w-100 h-100 z-0">
                <div class="hero-slide active position-absolute top-0 start-0 w-100 h-100 opacity-60" data-slide="0">
                    <img src="/smashapparel/assets/images/ctaaa.png" alt="Passion For Performance" class="w-100 h-100 object-fit-cover">
                </div>
                <div class="hero-slide position-absolute top-0 start-0 w-100 h-100 opacity-60" data-slide="1">
                    <img src="/smashapparel/assets/images/slide_2.png" alt="Breathable Dri-Motion" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <!-- Dark Radial Vignette & Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-dark opacity-50 pointer-events-none"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-overlay-editorial pointer-events-none"></div>

            <!-- Top Left: Brand Crest & Status -->
            <div class="position-relative z-2">
                <div class="d-inline-flex align-items-center gap-2 bg-black bg-opacity-60 border border-white border-opacity-15 rounded-pill px-3 py-1.5 backdrop-blur">
                    <span class="live-status-dot"></span>
                    <span class="fs-8 fw-bold text-uppercase tracking-widest text-white">Smash Apparel • Launching Q4</span>
                </div>
            </div>

            <!-- Center Statement Headline -->
            <div class="position-relative z-2 text-center my-auto py-5">
                <h1 class="display-1 fw-black text-uppercase tracking-tight text-white mb-2 lh-09 text-glow" style="font-size: clamp(3.5rem, 11vw, 8.5rem);">
                    COMING <br/><span class="editorial-accent-text text-brand">SOON.</span>
                </h1>
                <p class="fs-6 fs-md-5 fw-bold text-uppercase tracking-widest text-white text-opacity-80 max-w-600 mx-auto">
                    Pro Tested • Athlete Driven • Performance Apparel
                </p>
            </div>

            <!-- Bottom Row: Narrative (Left) & VIP Access Form (Right) -->
            <div class="position-relative z-2 row align-items-end gy-4 mt-auto">
                <div class="col-12 col-lg-6 col-xl-5">
                    <span class="badge bg-black bg-opacity-75 text-white border border-secondary border-opacity-50 rounded-pill px-3 py-2 fw-bold text-uppercase fs-8 mb-3 d-inline-flex align-items-center gap-2 backdrop-blur">
                        <i class="bi bi-shield-check text-brand"></i> VIP Priority Access
                    </span>
                    <h2 class="fs-2 fs-md-1 fw-black text-uppercase tracking-tight lh-1 mb-2 text-white">
                        Upgrade Your <br><span class="editorial-accent-text">Game First.</span>
                    </h2>
                    <p class="fs-7 text-white text-opacity-75 mb-0 max-w-450">
                        Join our exclusive squad list to unlock early product drops, athlete capsule previews, and court-ready gear guides before public release.
                    </p>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 offset-xl-2">
                    <form onsubmit="event.preventDefault();" class="d-flex align-items-center bg-black bg-opacity-75 backdrop-blur rounded-pill p-1.5 border border-dark border-opacity-20 shadow-lg">
                        <input type="email" class="form-control bg-transparent text-white border-0 px-3 fs-7 fw-bold shadow-none" placeholder="ENTER YOUR EMAIL..." required style="color: #ffffff;">
                        <button type="submit" class="btn btn-brand text-white rounded-pill px-4 py-2.5 fw-black text-uppercase fs-8 tracking-wider d-inline-flex align-items-center gap-2 border-0 flex-shrink-0 hover-scale">
                            <span>Get Access</span>
                            <i class="bi bi-arrow-right fs-6"></i>
                        </button>
                    </form>
                    <small class="fs-9 text-white text-opacity-50 mt-2 d-block px-3 text-start text-lg-end">
                        Strictly limited early drops. Unsubscribe anytime.
                    </small>
                </div>
            </div>

        </section>
    </div>

    <!-- 3. BRAND MANIFESTO SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <section class="w-100 rounded-4 bg-brand py-5 px-4 px-md-5 position-relative overflow-hidden">
            <div class="row align-items-center justify-content-between gy-4">
                <div class="col-12 col-lg-8">
                    <span class="text-uppercase tracking-widest fw-bold text-black fs-8 mb-2 d-inline-flex align-items-center gap-2 opacity-75">
                        <i class="bi bi-lightning-charge-fill"></i> Engineered For The Rally
                    </span>
                    <h2 class="display-5 fw-black text-black text-uppercase tracking-tight lh-1 mb-3">
                        Passion For Performance.
                    </h2>
                    <p class="fs-6 text-black fw-bold mb-0 opacity-90 max-w-2xl">
                        Smash Apparel was created with one purpose: to build courtwear that works as hard as the athletes who wear it. Helping you move freely, stay comfortable under pressure, and compete with confidence from first serve to match point.
                    </p>
                </div>
                <div class="col-12 col-lg-4 text-start text-lg-end">
                    <p class="fs-6 text-black fw-black text-uppercase tracking-wider mb-0 opacity-90">
                        Play hard. Look sharp. <br>Smash everything.
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- 4. FOOTER STATEMENT -->
<footer class="container-fluid px-2 px-md-3 pt-2 pb-3">
    <div class="w-100 bg-black text-white rounded-4 border border-secondary border-opacity-25 pb-4 position-relative overflow-hidden">
        <div class="w-100 text-center py-5 my-2 overflow-hidden user-select-none px-4 px-md-5">
            <img src="/smashapparel/assets/images/logo-white.webp" alt="Smash Apparel" class="img-fluid edge-brand-img opacity-90 hover-scale" loading="lazy" style="max-height: 120px;">
        </div>
        <div class="px-4 px-md-5">
            <div class="d-flex flex-column align-items-center justify-content-between gap-3 pt-3 fs-8 text-white text-opacity-50 border-top border-white border-opacity-10">
                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 text-center">
                    <span>&copy; <?= date('Y') ?> SMASH ACTIVE PTY LTD. ALL RIGHTS RESERVED.</span>
                    <span class="d-none d-md-inline">•</span>
                    <span>Designed with <i class="bi bi-heart-fill text-danger fs-9"></i> by <a href="https://smartservix.com.au" target="_blank" rel="noopener" class="text-white fw-bold text-decoration-none">Smart Servix</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/smashapparel/assets/js/jquery-3.6.0.min.js?v=1.8.4" defer></script>
<script src="/smashapparel/assets/js/bootstrap.bundle.min.js?v=1.8.4" defer></script>
<script src="/smashapparel/assets/js/gsap.min.js?v=1.8.4" defer></script>
<script src="/smashapparel/assets/js/TextPlugin.min.js?v=1.8.4" defer></script>
<script src="/smashapparel/assets/js/ScrollTrigger.min.js?v=1.8.4" defer></script>

<script type="text/javascript">
    function initEditorialAccents() {
        const targets = document.querySelectorAll('.editorial-accent-text');
        if (!targets.length) return;

        targets.forEach((el) => {
            const rawText = el.textContent.trim();
            el.innerHTML = rawText.split('').map(char => char === ' ' ? '&nbsp;' : `<span class="char d-inline-block" data-char="${char}">${char}</span>`).join('');

            const chars = el.querySelectorAll('.char');
            if (!chars.length) return;

            gsap.set(chars, { transformPerspective: 400, transformOrigin: "50% 50%", willChange: "transform, opacity" });

            gsap.timeline({ repeat: -1, repeatDelay: 1.5 })
                .to(chars, { color: '#ffffff', textShadow: '0 0 15px rgba(255, 255, 255, 0.9)', duration: 0.35, stagger: 0.05, ease: 'power2.inOut' })
                .to(chars, { color: 'rgb(213, 213, 213)', textShadow: '0 0 0px rgba(0,0,0,0)', duration: 0.8, stagger: 0.03, ease: 'power2.out' }, '-=0.2');
        });
    }

    function initKineticTicker() {
        const tickerItems = document.querySelectorAll('.gsap-ticker-list .ticker-item');
        if (tickerItems.length <= 1) return;

        tickerItems.forEach((item) => {
            const text = item.textContent.trim();
            item.innerHTML = text.split('').map(char => `<span class="ticker-char d-inline-block">${char === ' ' ? '&nbsp;' : char}</span>`).join('');
        });

        gsap.set(tickerItems, { opacity: 0, visibility: 'hidden', position: 'absolute', top: 0, left: 0 });
        gsap.set(tickerItems[0], { opacity: 1, visibility: 'visible', position: 'relative' });

        let currentIndex = 0;

        function transitionNext() {
            const currentSlide = tickerItems[currentIndex];
            currentIndex = (currentIndex + 1) % tickerItems.length;
            const nextSlide = tickerItems[currentIndex];

            const currentChars = currentSlide.querySelectorAll('.ticker-char');
            const nextChars = nextSlide.querySelectorAll('.ticker-char');

            const tl = gsap.timeline({
                onComplete: () => {
                    gsap.set(currentSlide, { position: 'absolute' });
                    gsap.set(nextSlide, { position: 'relative' });
                    gsap.delayedCall(2.5, transitionNext);
                }
            });

            tl.to(currentChars, { opacity: 0, filter: 'blur(6px)', rotationX: -90, duration: 0.35, stagger: 0.01, ease: 'power3.in' })
                .set(currentSlide, { visibility: 'hidden', opacity: 0 })
                .set(nextSlide, { visibility: 'visible', opacity: 1 })
                .set(nextChars, { opacity: 0, filter: 'blur(6px)', rotationX: 90 })
                .to(nextChars, { opacity: 1, filter: 'blur(0px)', rotationX: 0, duration: 0.45, stagger: 0.01, ease: 'expo.out' });
        }

        gsap.delayedCall(2.5, transitionNext);
    }

    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap !== 'undefined') {
            initEditorialAccents();
            initKineticTicker();
        }
    });
</script>
</body>
</html>