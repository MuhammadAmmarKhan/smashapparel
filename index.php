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
                <img src="/smashapparel/assets/images/slide_1.png" alt="Built For Every Point"
                     class="w-100 h-100 object-fit-cover hero-slide-img">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="1">
                <img src="/smashapparel/assets/images/slide_9.png" alt="Court Wear That Performs"
                     class="w-100 h-100 object-fit-cover hero-slide-img">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="2">
                <img src="/smashapparel/assets/images/slide_4.png" alt="Passion For Performance"
                     class="w-100 h-100 object-fit-cover hero-slide-img">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="6">
                <img src="/smashapparel/assets/images/slide_2.png" alt="Breathable Dri-Motion"
                     class="w-100 h-100 object-fit-cover object-fit-top hero-slide-img" style="object-position: top !important;">
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
                <span class="js-current-slide text-white">01</span> &mdash; 04
            </div>
        </div>

        <!-- CENTER/BOTTOM: EDITORIAL ASYMMETRIC CONTENT HOOK -->
        <div class="position-relative z-2 w-100 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-4 my-auto my-md-0">

            <!-- Dynamic Content Swapper -->
            <div class="hero-text-content position-relative max-w-2xl">

                <!-- Slide 1 Content -->
                <div class="hero-text-group d-none" data-slide-text="2">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 03 — Pro Performance</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Passion For <br>
                        <span class="editorial-accent-text">Performance.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Breathable dri-motion, lightweight core material keeps you cool under pressure.</p>
                </div>

                <!-- Slide 2 Content -->
                <div class="hero-text-group d-none" data-slide-text="1">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 02 — Why Smash Apparel</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Make Team <br>
                        <span class="editorial-accent-text">SMASH&nbsp;APPAREL</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">We create high-performance tennis apparel that blends cutting-edge technology with modern design.</p>
                </div>

                <!-- Slide 3 Content -->
                <div class="hero-text-group active" data-slide-text="0">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 01 — Match Ready</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Built For <br>
                        <span class="editorial-accent-text">Every&nbsp;Point.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">From first serve to match point.</p>
                </div>

                <!-- Slide 4 Content -->
                <div class="hero-text-group d-none" data-slide-text="5">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 05 — Athlete Grade</p>
                    <h1 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Pro <br>
                        <span class="editorial-accent-text">Tested.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Professionally tested by the athletes who set the pace and define the standard.</p>
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
    <div class="row g-2 g-md-3">

        <!-- Card 1: Breathable -->
        <div class="col-12 col-md-4">
            <div class="w-100 h-100 bg-body text-body rounded-4 border border-body-subtle p-4 p-xl-5 d-flex align-items-center gap-3 gap-xl-4">
                <!-- Custom Wind / Air Flow SVG -->
                <div class="flex-shrink-0 text-danger d-flex align-items-center justify-content-center" style="width: 54px; height: 54px;">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M8 20H38C43 20 46 16 43 12C40 8 34 10 35 15" />
                        <path d="M4 32H50C55 32 58 36 55 40C52 44 46 42 47 37" />
                        <path d="M12 44H30C35 44 38 48 35 52C32 56 26 54 27 49" />
                        <path d="M14 20L20 14M20 26L14 20" />
                    </svg>
                </div>
                <div class="flex-grow-1">
                    <h3 class="h4 fw-black text-uppercase fst-italic tracking-tight mb-2">Breathable</h3>
                    <p class="fs-8 text-body-secondary text-uppercase tracking-wider fw-semibold mb-3 lh-sm">
                        Lightweight, perforated fabrics keep air flowing so you stay cool.
                    </p>
                    <div class="bg-danger rounded-pill" style="width: 28px; height: 3px;"></div>
                </div>
            </div>
        </div>

        <!-- Card 2: Pro Tested (Featured Accent Card) -->
        <div class="col-12 col-md-4">
            <div class="w-100 h-100 bg-brand text-white rounded-4 border border-danger p-4 p-xl-5 d-flex align-items-center gap-3 gap-xl-4">
                <!-- Pro Tested Group & Checkmark SVG -->
                <div class="flex-shrink-0 text-white d-flex align-items-center justify-content-center" style="width: 54px; height: 54px;">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Center User -->
                        <circle cx="32" cy="18" r="7" />
                        <!-- Left User -->
                        <circle cx="18" cy="24" r="5" />
                        <!-- Right User -->
                        <circle cx="46" cy="24" r="5" />
                        <!-- Body Outlines -->
                        <path d="M10 44C10 36 18 34 22 34" />
                        <path d="M54 44C54 36 46 34 42 34" />
                        <path d="M20 48C20 38 44 38 44 48" />
                        <!-- Badge Checkmark -->
                        <circle cx="32" cy="48" r="9" fill="currentColor" class="text-white" />
                        <path d="M28 48L31 51L36 45" stroke="#d9251d" stroke-width="3.5" />
                    </svg>
                </div>
                <div class="flex-grow-1">
                    <h3 class="h4 fw-black text-uppercase fst-italic tracking-tight mb-2">Pro Tested</h3>
                    <p class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold mb-3 lh-sm">
                        Professionally tested by the athletes who set the pace and define the standard.
                    </p>
                    <div class="bg-white rounded-pill" style="width: 28px; height: 3px;"></div>
                </div>
            </div>
        </div>

        <!-- Card 3: Sweat Absorbing -->
        <div class="col-12 col-md-4">
            <div class="w-100 h-100 bg-body text-body rounded-4 border border-body-subtle p-4 p-xl-5 d-flex align-items-center gap-3 gap-xl-4">
                <!-- Dual Water Drops SVG -->
                <div class="flex-shrink-0 text-danger d-flex align-items-center justify-content-center" style="width: 54px; height: 54px;">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <!-- Main Water Drop -->
                        <path d="M28 10C28 10 12 30 12 42C12 50.8366 19.1634 58 28 58C36.8366 58 44 50.8366 44 42C44 30 28 10 28 10Z" />
                        <!-- Ripple Arc inside main drop -->
                        <path d="M20 44C22 48 26 50 30 50" />
                        <!-- Small Accent Drop / Spark -->
                        <path d="M46 16C46 16 38 28 38 34C38 38.4183 41.5817 42 46 42C50.4183 42 54 38.4183 54 34C54 28 46 16 46 16Z" stroke-width="2.5" />
                        <path d="M52 14L56 10M50 8L52 4" stroke-width="2" />
                    </svg>
                </div>
                <div class="flex-grow-1">
                    <h3 class="h4 fw-black text-uppercase fst-italic tracking-tight mb-2">Sweat Absorbing</h3>
                    <p class="fs-8 text-body-secondary text-uppercase tracking-wider fw-semibold mb-3 lh-sm">
                        With our dri-motion technology sweat is pulled away before it pulls you back.
                    </p>
                    <div class="bg-danger rounded-pill" style="width: 28px; height: 3px;"></div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <div class="row g-3 flex-nowrap overflow-x-auto no-scrollbar align-items-center">

        <!-- DIV 1: MEN -->
        <div class="col-9 col-sm-6 col-md-4 col-lg-3 flex-shrink-0">
            <a href="/collections/men"
               class="hover-card d-block w-100 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
               style="aspect-ratio: 3/4;">
                <img src="assets/images/cat-men.png" alt="Men" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-0 d-flex flex-column justify-content-end z-1">
                    <!-- BLACK CONTAINER FOR CONTENT -->
                    <div class="bg-black bg-opacity-85 border border-white border-opacity-10 rounded-3 p-3 py-1 d-flex align-items-center justify-content-between shadow">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Collection</span>
                            <h3 class="display-5 fw-black text-uppercase text-white tracking-tight m-0">Men</h3>
                        </div>
                        <!-- RED BUTTON WITH WHITE ARROW -->
                        <span class="hover-card-btn rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-white"></i>
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
                <img src="assets/images/cat-women.png" alt="Ladies" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 d-flex flex-column justify-content-end z-1">
                    <!-- BLACK CONTAINER FOR CONTENT -->
                    <div class="bg-black bg-opacity-85 border border-white border-opacity-10 rounded-3 p-3 py-1 d-flex align-items-center justify-content-between shadow">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Collection</span>
                            <h3 class="display-5 fw-black text-uppercase text-white tracking-tight m-0">Ladies</h3>
                        </div>
                        <!-- RED BUTTON WITH WHITE ARROW -->
                        <span class="hover-card-btn btn btn-danger rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-white"></i>
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
                <img src="assets/images/cat-boy.png" alt="Boy" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 d-flex flex-column justify-content-end z-1">
                    <!-- BLACK CONTAINER FOR CONTENT -->
                    <div class="bg-black bg-opacity-85 border border-white border-opacity-10 rounded-3 p-3 py-1 d-flex align-items-center justify-content-between shadow">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Youth</span>
                            <h3 class="display-5 fw-black text-uppercase text-white tracking-tight m-0">Boy</h3>
                        </div>
                        <!-- RED BUTTON WITH WHITE ARROW -->
                        <span class="hover-card-btn btn btn-danger rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-white"></i>
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
                <img src="assets/images/cat-girl.png" alt="Girl" class="hover-card-img w-100 h-100 object-fit-cover">

                <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 d-flex flex-column justify-content-end z-1">
                    <!-- BLACK CONTAINER FOR CONTENT -->
                    <div class="bg-black bg-opacity-85 border border-white border-opacity-10 rounded-3 p-3 py-1 d-flex align-items-center justify-content-between shadow">
                        <div>
                            <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Youth</span>
                            <h3 class="display-5 fw-black text-uppercase text-white tracking-tight m-0">Girl</h3>
                        </div>
                        <!-- RED BUTTON WITH WHITE ARROW -->
                        <span class="hover-card-btn btn btn-danger rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm flex-shrink-0"
                              style="width: 38px; height: 38px;">
                            <i class="bi bi-arrow-up-right fs-6 text-white"></i>
                        </span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-between gap-3 mb-3 pb-3 border-bottom border-body-subtle">
            <div>
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-droplet"></i> Fresh Drops (2027)
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
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Pink (Front).png" alt="2027 Mens Performance Shirts Black and Pink Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Pink (Rear).png" alt="2027 Mens Performance Shirts Black and Pink Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Mens Performance Shirt - Black &amp; Pink</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Green (Front).png" alt="2027 Mens Performance Shirts Black and Green Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Green (Rear).png" alt="2027 Mens Performance Shirts Black and Green Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Mens Performance Shirt - Black &amp; Green</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Blue (Front).png" alt="2027 Mens Performance Shirts Black and Blue Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Black (Rear).png" alt="2027 Mens Performance Shirts Black and Blue Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Mens Performance Shirt - Black &amp; Blue</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - Blue_Purple (Front View).png" alt="2027 Performance Shorts Blue/Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - Blue_Purple (Rear View).png" alt="2027 Performance Shorts Blue/Purple Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - Blue/Purple</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - White (Front View).png" alt="2027 Performance Shorts White Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - White (Rear View).png" alt="2027 Performance Shorts White Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - White</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - Pink (Front View).png" alt="2027 Performance Shorts Pink Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - Pink (Rear View).png" alt="2027 Performance Shorts Pink Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - Pink</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - Black (Front View).png" alt="2027 Performance Shorts Black Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - Black (Rear View).png" alt="2027 Performance Shorts Black Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - Black</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-20%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Mens Purple Hoodie Front View.png" alt="Mens Purple Hoodie Front View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/Mens Purple Hoodie Rear View.png" alt="Mens Purple Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Purple Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$68.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$85.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-15%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Mens Royal Blue Hoodie Rear View.png" alt="Mens Royal Blue Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Royal Blue Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$59.50</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$70.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Mens Pink Hoodie front View.png" alt="Mens Pink Hoodie Front View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/Mens Pink Hoodie Rear View.png" alt="Mens Pink Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's Pink Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Mens White Hoodie Rear View.png" alt="Mens White Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Men's White Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$72.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Female Purple Hoodie Front View.png" alt="Female Purple Hoodie Front View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/Female Purple Hoodie Rear View.png" alt="Female Purple Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Female Purple Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$68.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Female Black Hoodie Front View.png" alt="Female Black Hoodie Front View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/Female Black Hoodie Rear View.png" alt="Female Black Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Female Black Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$70.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Female Royal Blue Hoodie Front View.png" alt="Female Royal Blue Hoodie Front View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/Female Royal Blue Hoodie Rear View.png" alt="Female Royal Blue Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Female Royal Blue Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$70.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Female Pink Hoodie Front View.png" alt="Female Pink Hoodie Front View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/Female Pink Hoodie Rear View.png" alt="Female Pink Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Female Pink Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/Female White Hoodie Rear View.png" alt="Female White Hoodie Rear View" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Hoodie Collection</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Female White Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$72.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

        </div>
    </section>
</div>
<div class="container-fluid px-2 py-2 px-md-3">
    <div class="w-100 rounded-4 overflow-hidden border border-body-subtle bg-black position-relative">

        <!-- Desktop Image (Visible on lg and up) -->
        <img src="/smashapparel/assets/images/cta-002.png"
             alt="Built for Every Point"
             class="w-100 h-auto d-none d-lg-block object-fit-cover"
             loading="lazy">

        <!-- Mobile Image (Visible on screens smaller than lg) -->
        <img src="/smashapparel/assets/images/cta-002-m.png"
             alt="Built for Every Point"
             class="w-100 h-auto d-block d-lg-none object-fit-cover"
             loading="lazy">

    </div>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 min-vh-100 d-flex flex-column flex-lg-row gap-3">

        <!-- LEFT PANEL: SPOTLIGHT MEDIA -->
        <div class="w-100 w-lg-50 rounded-4 overflow-hidden position-relative bg-body-tertiary d-flex flex-column justify-content-between p-4 p-md-5">
            <img src="/smashapparel/assets/images/ctaaaa.png" alt="Featured Activewear"
                 class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0 spot-img">
            <div class="position-absolute top-0 start-0 w-100 h-100 z-1 bg-overlay-editorial pointer-events-none"></div>

            <!-- TOP STATUS BADGE -->
            <div class="position-relative z-2 w-100 d-flex align-items-center gap-3">
<!--                <span class="live-status-dot"></span>-->
<!--                <span class="text-uppercase tracking-widest fs-8 fw-bold text-brand">Pro-Series Focus</span>-->
            </div>

            <!-- EDITORIAL HEADING & SUBTITLE -->
            <div class="position-relative z-2 text-white mt-auto">
                <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2"></p>
                <h2 class="display-4 fw-black fst-italic text-uppercase tracking-tight lh-09 mb-3">
                    Engineered For <br/>the Rally
                </h2>
                <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Breathable dri-motion, lightweight core material keeps you cool under pressure.</p>
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

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Pink (Front).png" alt="2027 Mens Performance Shirts Black and Pink Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Pink (Rear).png" alt="2027 Mens Performance Shirts Black and Pink Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Mens Performance Shirt - Black &amp; Pink</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Green (Front).png" alt="2027 Mens Performance Shirts Black and Green Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Green (Rear).png" alt="2027 Mens Performance Shirts Black and Green Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Mens Performance Shirt - Black &amp; Green</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Blue (Front).png" alt="2027 Mens Performance Shirts Black and Blue Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Mens Performance Shirts - Black and Black (Rear).png" alt="2027 Mens Performance Shirts Black and Blue Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Mens Performance Shirt - Black &amp; Blue</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$65.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - Blue_Purple (Front View).png" alt="2027 Performance Shorts Blue/Purple Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - Blue_Purple (Rear View).png" alt="2027 Performance Shorts Blue/Purple Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - Blue/Purple</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - White (Front View).png" alt="2027 Performance Shorts White Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - White (Rear View).png" alt="2027 Performance Shorts White Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - White</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - Pink (Front View).png" alt="2027 Performance Shorts Pink Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - Pink (Rear View).png" alt="2027 Performance Shorts Pink Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - Pink</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/2027 Performance Shorts - Black (Front View).png" alt="2027 Performance Shorts Black Front" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                            <img src="assets/images/2027 Performance Shorts - Black (Rear View).png" alt="2027 Performance Shorts Black Rear" class="w-100 h-100 object-fit-cover object-fit-top flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Performance Shorts - Black</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

        </div>
    </section>
</div>
<div class="container-fluid px-2 py-2 px-md-3">
    <div class="w-100 rounded-4 overflow-hidden border border-body-subtle bg-black position-relative">

        <!-- Desktop Image (Visible on lg and up) -->
        <img src="/smashapparel/assets/images/cta-001.png"
             alt="Built for Every Point"
             class="w-100 h-auto d-none d-lg-block object-fit-cover"
             loading="lazy">

        <!-- Mobile Image (Visible on screens smaller than lg) -->
        <img src="/smashapparel/assets/images/cta-001-m.jpeg"
             alt="Built for Every Point"
             class="w-100 h-auto d-block d-lg-none object-fit-cover"
             loading="lazy">

    </div>
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
