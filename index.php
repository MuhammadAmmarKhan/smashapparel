<?php
$page_slug = "home";
$page_title = "Smash Apparel";
$page_description = "Smash Apparel";
$page_keywords = "Smash Apparel";
ob_start(); ?>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="position-relative w-100 vh-100 rounded-4 overflow-hidden bg-black text-white d-flex align-items-between flex-column justify-content-between p-4 p-md-5 js-hero-banner" style="height:calc(100vh - 107px) !important; min-height: 450px;">

        <!-- 1. FADING BACKGROUND SLIDES -->
        <div class="hero-slides-wrapper position-absolute top-0 start-0 w-100 h-100 z-0">
            <div class="hero-slide active position-absolute top-0 start-0 w-100 h-100" data-slide="0">
                <img src="/smashapparel/assets/images/slide_1.webp" alt="PPA Tour Melbourne Pro Pickleball"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="1">
                <img src="/smashapparel/assets/images/slide_2.webp" alt="Pro Court Tech Tee"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="2">
                <img src="/smashapparel/assets/images/slide_3.webp" alt="Pro Doubles Match Play"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="3">
                <img src="/smashapparel/assets/images/slide_5.webp" alt="Tennis Performance Activewear"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="4">
                <img src="/smashapparel/assets/images/slide_6.webp" alt="Championship Match Victory"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="5">
                <img src="/smashapparel/assets/images/slide_7.webp" alt="Post Match Sportsmanship"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="6">
                <img src="/smashapparel/assets/images/slide_8.webp" alt="Kinetic Gradient Pro Top"
                     class="w-100 h-100 object-fit-cover">
            </div>
        </div>

        <!-- 2. DYNAMIC MOVING VIGNETTE (Follows Cursor) -->
        <div class="dynamic-vignette position-absolute top-0 start-0 w-100 h-100 z-1 pointer-events-none js-dynamic-vignette"></div>

        <!-- 3. SUBTLE GRADIENT OVERLAY (Text Contrast Guarantee) -->
        <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-overlay-editorial pointer-events-none"></div>

        <!-- TOP BAR: BRAND MARK & MINIMAL METRICS -->
        <div class="position-relative z-2 w-100 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <span class="live-status-dot"></span>
                <span class="text-uppercase tracking-widest fs-8 fw-semibold text-white-50">Edition 2026</span>
            </div>
            <div class="slide-indicators text-white-50 fw-bold fs-7 tracking-widest font-monospace">
                <span class="js-current-slide text-white">01</span> &mdash; 07
            </div>
        </div>

        <!-- CENTER/BOTTOM: EDITORIAL ASYMMETRIC CONTENT HOOK -->
        <div class="position-relative z-2 w-100 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-4 my-auto my-md-0">

            <!-- Dynamic Content Swapper -->
            <div class="hero-text-content position-relative max-w-2xl">

                <!-- Slide 1 Content (Melbourne PPA Low Stretch Action) -->
                <div class="hero-text-group active" data-slide-text="0">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 01 — PPA Tour Melbourne</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Low <br>
                        <span class="editorial-accent-text">Reach.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Engineered four-way stretch apparel tailored for max reach and kitchen line intensity.</p>
                </div>

                <!-- Slide 2 Content (Obsidian Sun-Shielding Pro Tee) -->
                <div class="hero-text-group d-none" data-slide-text="1">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 02 — Australian Open Air</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Sun <br>
                        <span class="editorial-accent-text">Armor.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Ultra-lightweight moisture dissipation fabric crafted for intense sunny court conditions.</p>
                </div>

                <!-- Slide 3 Content (Pro Doubles Match Sync) -->
                <div class="hero-text-group d-none" data-slide-text="2">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 03 — Pro Tour Doubles</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Kitchen <br>
                        <span class="editorial-accent-text">Control.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">High-breathability tech tees built for lightning-fast dink exchanges and baseline drives.</p>
                </div>

                <!-- Slide 4 Content (Tennis Forehand Drive) -->
                <div class="hero-text-group d-none" data-slide-text="3">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 04 — Court Performance</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Full <br>
                        <span class="editorial-accent-text">Torque.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Zero-restriction shoulder seam geometry designed for heavy topspin baseline play.</p>
                </div>

                <!-- Slide 5 Content (Championship Confetti Arena Walk) -->
                <div class="hero-text-group d-none" data-slide-text="4">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 05 — Championship Stage</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Arena <br>
                        <span class="editorial-accent-text">Victory.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Pro-tier gradient compression wear tested and proven under stadium lights.</p>
                </div>

                <!-- Slide 6 Content (Post-Match Net Hug) -->
                <div class="hero-text-group d-none" data-slide-text="5">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 06 — Post Match</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Court <br>
                        <span class="editorial-accent-text">Respect.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Quick-dry anti-cling fibers keeping athletes cool from championship point to handshake.</p>
                </div>

                <!-- Slide 7 Content (Kinetic Neon Gradient Reach) -->
                <div class="hero-text-group d-none" data-slide-text="6">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 07 — Kinetic Series</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Speed <br>
                        <span class="editorial-accent-text">Spectrum.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">High-visibility gradient sublimated performance gear built for explosive athletic output.</p>
                </div>

            </div>

            <!-- SHOP CTA & PROGRESS CONTROLS -->
            <div class="d-flex flex-column align-items-start align-items-md-end gap-4 flex-shrink-0">

                <!-- SHOP NOW BUTTON -->
                <a href="/collections/all"
                   class="btn btn-brand text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                    <span>Explore Collection</span>
                    <span class="btn-indicator-line"></span>
                </a>

                <!-- NO-ARROW MINIMALIST CONTROLS -->
                <div class="d-flex align-items-center gap-3">
                    <button class="btn p-0 text-white-50 hover-white js-prev-slide font-monospace fs-8"
                            aria-label="Previous Slide">[PREV]
                    </button>

                    <div class="hero-progress-bar bg-white-10 position-relative overflow-hidden">
                        <div class="hero-progress-fill bg-white position-absolute top-0 start-0 h-100 js-progress-fill"></div>
                    </div>

                    <button class="btn p-0 text-white-50 hover-white js-next-slide font-monospace fs-8"
                            aria-label="Next Slide">[NEXT]
                    </button>
                </div>

            </div>

        </div>

    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <div class="row g-3 flex-nowrap overflow-x-auto no-scrollbar align-items-center">

        <!-- DIV 1: MEN -->
        <div class="col-9 col-sm-6 col-md-4 col-lg-3 flex-shrink-0">
            <a href="/collections/men"
               class="hover-card d-block w-100 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
               style="aspect-ratio: 3/4;">
                <img src="assets/images/cat-men.webp" alt="Men" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Collection</span>
                            <h3 class="display-4 fw-black text-uppercase text-white tracking-tight m-0">Men</h3>
                        </div>
                        <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

        <!-- DIV 2: LADIES -->
        <div class="col-9 col-sm-6 col-md-4 col-lg-3 flex-shrink-0">
            <a href="/collections/ladies"
               class="hover-card d-block w-100 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
               style="aspect-ratio: 3/4;">
                <img src="assets/images/cat-women.webp" alt="Ladies" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Collection</span>
                            <h3 class="display-4 fw-black text-uppercase text-white tracking-tight m-0">Ladies</h3>
                        </div>
                        <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

        <!-- DIV 3: BOY -->
        <div class="col-9 col-sm-6 col-md-4 col-lg-3 flex-shrink-0">
            <a href="/collections/boy"
               class="hover-card d-block w-100 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
               style="aspect-ratio: 3/4;">
                <img src="assets/images/cat-boy.webp" alt="Boy" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Youth</span>
                            <h3 class="display-4 fw-black text-uppercase text-white tracking-tight m-0">Boy</h3>
                        </div>
                        <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

        <!-- DIV 4: GIRL -->
        <div class="col-9 col-sm-6 col-md-4 col-lg-3 flex-shrink-0">
            <a href="/collections/girl"
               class="hover-card d-block w-100 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
               style="aspect-ratio: 3/4;">
                <img src="assets/images/cat-girl.webp" alt="Girl" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Youth</span>
                            <h3 class="display-4 fw-black text-uppercase text-white tracking-tight m-0">Girl</h3>
                        </div>
                        <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="row g-2 g-md-3 align-items-stretch">

        <!-- Image Card (First on Mobile, Right Side on Desktop) -->
        <div class="col-12 col-lg-9 order-1 order-lg-2">
            <div class="w-100 h-100 bg-body-tertiary rounded-4 border border-body-subtle overflow-hidden position-relative" style="min-height: 600px !important;">
                <img src="/smashapparel/assets/images/slide_8.webp" alt="Engineered for the rally" class="w-100 h-100 object-fit-cover object-fit-top position-absolute inset-0" loading="lazy">
            </div>
        </div>

        <!-- Content Card (Second on Mobile, Left Side on Desktop) -->
        <div class="col-12 col-lg-3 order-2 order-lg-1">
            <div class="w-100 h-100 bg-brand text-white rounded-4 border border-body-subtle p-4 p-md-5 d-flex flex-column justify-content-center">
<!--                                <p class="text-uppercase tracking-widest fw-bold text-body-secondary fs-8 mb-2">-->
<!--                                    Edition 01 — Dri-Motion™ Tech-->
<!--                                </p>-->

                <h2 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3 text-body">
                    Engineered for the rally.<br>
                    <span class=""></span>
                </h2>

                <p class="lead text-body-secondary fs-6 mb-4 font-monospace">
                    Breathable dri-motion, lightweight core material keeps you cool under pressure.
                </p>

                <div>
                    <a href="/collections/all"
                       class="btn btn-brand bg-black text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                        <span>Our Story</span>
                        <span class="btn-indicator-line"></span>
                    </a>
                </div>
            </div>
        </div>

    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5">
        <!-- SECTION HEADER -->
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-between gap-3 mb-3 pb-3 border-bottom border-body-subtle">
            <div>
        <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-1">
            <i class="bi bi-droplet"></i> Fresh Drops
        </span>
                <h3 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-0 text-body">
                    New <br>
                    <span class="editorial-accent-text">Arrivals.</span>
                </h3>
            </div>

            <div class="d-flex gap-2 align-self-end align-self-md-auto">
                <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-arrival-prev"
                        style="width: 40px; height: 40px;" aria-label="Previous Products">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-arrival-next"
                        style="width: 40px; height: 40px;" aria-label="Next Products">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="d-flex gap-3 overflow-x-auto pt-3 pb-3 js-arrival-track no-scrollbar" style="margin-top: -8px;">

            <!-- ITEM 1: LADIES PERFORMANCE TOP - TEAL -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-25%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Teal 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Teal Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Teal 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Teal Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Teal</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$62.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$85.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 2: LADIES PERFORMANCE TOP - PURPLE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Purple Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Purple</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$62.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 3: LADIES PERFORMANCE TOP - YELLOW -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Yellow 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Yellow Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Yellow 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Yellow Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Yellow</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$62.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 4: MEN'S SLEEVELESS SHIRT - BLUE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-15%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Blue 1.webp" alt="Mens Performance Sleeveless Shirt Blue Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Blue 2.webp" alt="Mens Performance Sleeveless Shirt Blue Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Pro Performance</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Sleeveless - Blue</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$42.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$50.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 5: MEN'S SLEEVELESS SHIRT - GREEN -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Green 1.webp" alt="Mens Performance Sleeveless Shirt Green Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Green 2.webp" alt="Mens Performance Sleeveless Shirt Green Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Pro Performance</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Sleeveless - Green</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$42.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 6: LADIES SINGLET - PURPLE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" alt="Ladies SA Performance Singlet Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp" alt="Ladies SA Performance Singlet Purple Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Activewear</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Singlet - Purple</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$38.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 7: LADIES SINGLET - TEAL -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Teal 1.webp" alt="Ladies SA Performance Singlet Teal Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Teal 2.webp" alt="Ladies SA Performance Singlet Teal Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Activewear</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Singlet - Teal</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$38.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 8: MEN'S PERFORMANCE SHIRT - WHITE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 SA Performance Shirt Mens - White 1.webp" alt="Mens SA Performance Shirt White Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 SA Performance Shirt Mens - White 2.webp" alt="Mens SA Performance Shirt White Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Training Essentials</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Tee - White</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$45.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

        </div>
    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-brand py-5 px-4 px-md-5  position-relative overflow-hidden">
        <div class="row align-items-center justify-content-between gy-4">

            <!-- LEFT COLUMN: LARGE EDITORIAL STATEMENT -->
            <div class="col-12 col-lg-7 col-xl-8">
                <h2 class="display-5 fw-black text-white text-uppercase tracking-tight lh-1 mb-0">
                    The new standard in court apparel, training and activewear.
                </h2>
            </div>

            <!-- RIGHT COLUMN: ACTION & TAGLINE -->
            <div class="col-12 col-lg-5 col-xl-4 text-start text-lg-end d-flex flex-column align-items-start align-items-lg-end">
                <!-- BLACK PILL BUTTON -->
                <a href="/collections/all"
                   class="btn btn-brand bg-black text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                    <span>Shop Smash</span>
                    <span class="btn-indicator-line"></span>
                </a>

                <!-- TAGLINE -->
                <p class="fs-6 text-white text-opacity-80 fw-bold text-uppercase tracking-wider mb-0">
                    Play hard, look sharp, smash everything.
                </p>
            </div>

        </div>
    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 min-vh-100 d-flex flex-column flex-lg-row gap-3">

        <!-- LEFT PANEL: SPOTLIGHT MEDIA -->
        <div class="w-100 w-lg-50 rounded-4 overflow-hidden position-relative bg-body-tertiary d-flex flex-column justify-content-between p-4 p-md-5">
            <img src="/smashapparel/assets/images/premium-cat.webp" alt="Featured Activewear"
                 class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0 spot-img">
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-overlay-editorial pointer-events-none"></div>

            <!-- TOP STATUS BADGE -->
            <div class="position-relative z-2 w-100 d-flex align-items-center gap-3">
                <span class="live-status-dot"></span>
                <span class="text-uppercase tracking-widest fs-8 fw-bold text-brand">Pro-Series Focus</span>
            </div>

            <!-- EDITORIAL HEADING & SUBTITLE -->
            <div class="position-relative z-2 text-white mt-auto">
                <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Thermal Engineering</p>
                <h2 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                    Engineered <br>
                    <span class="editorial-accent-text">To Disrupt.</span>
                </h2>
                <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">High-tension compression fabric designed
                    for thermal regulation and zero drag.</p>
            </div>
        </div>

        <!-- RIGHT PANEL: DETAILS & CAROUSEL -->
        <div class="w-100 w-lg-50 rounded-4 bg-body-tertiary text-body p-4 p-md-5 d-flex flex-column justify-content-between position-relative overflow-hidden border border-body-subtle">

            <!-- 1. HEADER & CONTROLS -->
            <div class="d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-between gap-3 mb-4">
                <div>
        <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-1">
            <i class="bi bi-droplet"></i> Precision Engineering
        </span>
                    <h3 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-0 text-body">
                        DESIGNED TO <br>
                        <span class="editorial-accent-text">Perform.</span>
                    </h3>
                </div>

                <div class="d-flex gap-2 align-self-end align-self-md-auto">
                    <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-arrival-prev"
                            aria-label="Scroll Left" style="width: 44px; height: 44px;">
                        <i class="bi bi-arrow-left fs-5"></i>
                    </button>
                    <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-arrival-next"
                            aria-label="Scroll Right" style="width: 44px; height: 44px;">
                        <i class="bi bi-arrow-right fs-5"></i>
                    </button>
                </div>
            </div>

            <!-- 2. PRODUCT CAROUSEL TRACK -->
            <div class="d-flex gap-3 overflow-x-auto pt-3 pb-3 js-arrival-track no-scrollbar" style="margin-top: -8px;">

                <!-- ITEM 1: LADIES PERFORMANCE TOP - TEAL -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-25%</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Teal 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Teal Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Teal 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Teal Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Teal</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$62.00</span>
                                <span class="text-danger text-decoration-line-through fs-8 me-1">$85.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 2: LADIES PERFORMANCE TOP - PURPLE -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Purple Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Purple</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$62.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 3: LADIES PERFORMANCE TOP - YELLOW -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Yellow 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Yellow Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Yellow 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Yellow Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Yellow</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$62.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 4: MEN'S SLEEVELESS SHIRT - BLUE -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-15%</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Blue 1.webp" alt="Mens Performance Sleeveless Shirt Blue Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Blue 2.webp" alt="Mens Performance Sleeveless Shirt Blue Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Pro Performance</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Sleeveless - Blue</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$42.00</span>
                                <span class="text-danger text-decoration-line-through fs-8 me-1">$50.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 5: MEN'S SLEEVELESS SHIRT - GREEN -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Green 1.webp" alt="Mens Performance Sleeveless Shirt Green Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Green 2.webp" alt="Mens Performance Sleeveless Shirt Green Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Pro Performance</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Sleeveless - Green</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$42.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 6: LADIES SINGLET - PURPLE -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" alt="Ladies SA Performance Singlet Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp" alt="Ladies SA Performance Singlet Purple Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Activewear</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Singlet - Purple</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$38.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 7: LADIES SINGLET - TEAL -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 Ladies SA Performance Singlet - Teal 1.webp" alt="Ladies SA Performance Singlet Teal Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 Ladies SA Performance Singlet - Teal 2.webp" alt="Ladies SA Performance Singlet Teal Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Activewear</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Singlet - Teal</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$38.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

                <!-- ITEM 8: MEN'S PERFORMANCE SHIRT - WHITE -->
                <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>
                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="assets/images/2026 SA Performance Shirt Mens - White 1.webp" alt="Mens SA Performance Shirt White Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                                <img src="assets/images/2026 SA Performance Shirt Mens - White 2.webp" alt="Mens SA Performance Shirt White Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            </div>
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Training Essentials</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Tee - White</h4>
                        </div>
                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$45.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                        </div>
                    </div>
                </article>

            </div>

            <!-- 3. BOTTOM LINK -->
            <div class="d-flex justify-content-center pt-2">
                <a href="/collections/all"
                   class="btn btn-brand text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                    <span>Explore Performance Collection</span>
                    <span class="btn-indicator-line"></span>
                </a>
            </div>

        </div>
    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5">
        <!-- SECTION HEADER -->
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-between gap-3 mb-3 pb-3 border-bottom border-body-subtle">
            <div>
        <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-1">
            <i class="bi bi-fire"></i> What's Hot
        </span>
                <h3 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-0 text-body">
                    Trending <br>
                    <span class="editorial-accent-text">Now!</span>
                </h3>
            </div>

            <!-- SCROLL CONTROLS -->
            <div class="d-flex gap-2 align-self-end align-self-md-auto">
                <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-arrival-prev"
                        style="width: 40px; height: 40px;" aria-label="Previous Trending Item">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-arrival-next"
                        style="width: 40px; height: 40px;" aria-label="Next Trending Item">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="d-flex gap-3 overflow-x-auto pt-3 pb-3 js-arrival-track no-scrollbar" style="margin-top: -8px;">

            <!-- ITEM 1: LADIES PERFORMANCE TOP - TEAL -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-25%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Teal 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Teal Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Teal 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Teal Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Teal</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$62.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$85.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 2: LADIES PERFORMANCE TOP - PURPLE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Purple Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Purple</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$62.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 3: LADIES PERFORMANCE TOP - YELLOW -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Yellow 1.webp" alt="Ladies SA Performance Top Qtr Sleeve Yellow Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Yellow 2.webp" alt="Ladies SA Performance Top Qtr Sleeve Yellow Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Court Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Qtr Sleeve Performance Top - Yellow</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$62.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 4: MEN'S SLEEVELESS SHIRT - BLUE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-15%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Blue 1.webp" alt="Mens Performance Sleeveless Shirt Blue Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Blue 2.webp" alt="Mens Performance Sleeveless Shirt Blue Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Pro Performance</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Sleeveless - Blue</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$42.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$50.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 5: MEN'S SLEEVELESS SHIRT - GREEN -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Green 1.webp" alt="Mens Performance Sleeveless Shirt Green Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 SA Performance Sleeveless Shirt Mens - Green 2.webp" alt="Mens Performance Sleeveless Shirt Green Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Pro Performance</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Sleeveless - Green</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$42.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 6: LADIES SINGLET - PURPLE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" alt="Ladies SA Performance Singlet Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp" alt="Ladies SA Performance Singlet Purple Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Activewear</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Singlet - Purple</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$38.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 7: LADIES SINGLET - TEAL -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Teal 1.webp" alt="Ladies SA Performance Singlet Teal Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 Ladies SA Performance Singlet - Teal 2.webp" alt="Ladies SA Performance Singlet Teal Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Activewear</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Singlet - Teal</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$38.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 8: MEN'S PERFORMANCE SHIRT - WHITE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2026 SA Performance Shirt Mens - White 1.webp" alt="Mens SA Performance Shirt White Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2026 SA Performance Shirt Mens - White 2.webp" alt="Mens SA Performance Shirt White Back" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Training Essentials</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Performance Tee - White</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$45.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

        </div>
    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-brand py-5 px-4 px-md-5 position-relative overflow-hidden">
        <div class="row align-items-center justify-content-between gy-4">

            <!-- LEFT COLUMN: LARGE EDITORIAL STATEMENT -->
            <div class="col-12 col-lg-7 col-xl-8">
                <span class="text-uppercase tracking-widest fw-bold text-white fs-8 mb-2 d-inline-block">
                    <i class="bi bi-heart-fill me-1"></i> Our Philosophy
                </span>
                <h2 class="display-5 fw-black text-white text-uppercase tracking-tight lh-1 mb-0">
                    Forged In The Weight Room.
                </h2>
            </div>

            <!-- RIGHT COLUMN: ACTION & TAGLINE -->
            <div class="col-12 col-lg-5 col-xl-4 text-start text-lg-end d-flex flex-column align-items-start align-items-lg-end gap-3">
                <!-- BLACK PILL BUTTON -->
                <a href="/collections/all"
                   class="btn btn-brand bg-black text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                    <span>Shop Smash</span>
                    <span class="btn-indicator-line"></span>
                </a>

                <!-- TAGLINE / BODY TEXT -->
                <p class="fs-6 text-white text-opacity-80 fw-normal mb-0 lh-base">
                    Smash Apparel was born from an obsession with raw training. We construct precision activewear engineered to eliminate friction and elevate every rep—built by lifters, for lifters.
                </p>
            </div>

        </div>
    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 overflow-hidden position-relative p-4 p-md-5  d-flex align-items-center"
             style="min-height: 410px; background: url('assets/images/slide_7.webp') center center / cover no-repeat fixed;">

        <!-- DARK VIGNETTE GRADIENT OVERLAY FOR READABILITY -->
        <div class="position-absolute top-0 start-0 w-100 h-100 z-1"
             style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%);"></div>

        <!-- CONTENT LAYER -->
        <div class="position-relative z-2 container-fluid p-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-6 text-start">

                    <!-- BRAND BADGE -->
                    <div class="d-inline-flex align-items-center gap-2 py-1 rounded-pill bg-transparent bg-opacity-75 mb-1 backdrop-blur">

                            <i class="bi bi-lightning-charge-fill fs-8 text-brand"></i>

                        <span class="fs-8 text-uppercase tracking-widest fw-bold text-white">Smash Apparel Drop</span>
                    </div>

                    <!-- HERO HEADING -->
                    <h3 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3 text-white">Elevate Your<br><span class="editorial-accent-text">Daily Motion.</span></h3>

                    <!-- SUBTEXT -->
                    <p class="fs-6 text-white-50 fw-normal mb-4 pe-md-3">
                        Heavyweight comfort meets street-ready durability. Explore the latest oversize collection designed for ultimate versatility.
                    </p>

                    <!-- ACTION BUTTONS -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="/collections/all"
                           class="btn btn-brand text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                            <span>Shop the Collection</span>
                            <span class="btn-indicator-line"></span>
                        </a>

                        <a href="/collections/trending" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill fw-bold text-uppercase fs-7 tracking-wider backdrop-blur">
                            View Lookbook
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">

    <!-- INFINITE MARQUEE TICKER -->
    <div class="w-100 bg-black text-white rounded-3 overflow-hidden position-relative border border-dark">
        <div class="ticker-track d-flex align-items-center">

            <!-- TRACK CONTENT (LOOP 1) -->
            <div class="ticker-content d-flex align-items-center flex-nowrap fw-black text-uppercase tracking-wider fs-6 text-nowrap">
                <span class="px-4">Engineered For The Rally</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Breathable</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Pro Tested</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Sweat Absorbing</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Built For Every Point</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Performance Driven Design</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Premium Quality</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Made For Competitors</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Play Hard. Look Sharp. Smash Everything</span>
                <span class="text-danger fs-8">•</span>
            </div>

            <!-- DUPLICATED TRACK CONTENT FOR ZERO-GLITCH INFINITE LOOP -->
            <div class="ticker-content d-flex align-items-center flex-nowrap fw-black text-uppercase tracking-wider fs-6 text-nowrap" aria-hidden="true">
                <span class="px-4">Engineered For The Rally</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Breathable</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Pro Tested</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Sweat Absorbing</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Built For Every Point</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Performance Driven Design</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Premium Quality</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Made For Competitors</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Play Hard. Look Sharp. Smash Everything</span>
                <span class="text-danger fs-8">•</span>
            </div>

        </div>
    </div>
</div>
<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>
