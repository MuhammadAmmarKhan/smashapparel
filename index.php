<?php
$page_slug = "home";
$page_title = "Smash Apparel";
$page_description = "Smash Apparel";
$page_keywords = "Smash Apparel";
ob_start(); ?>
<div class="container-fluid px-2 px-md-3 py-2">
    <section
            class="position-relative w-100 vh-100 rounded-4 overflow-hidden bg-black text-white d-flex align-items-between flex-column justify-content-between p-4 p-md-5 js-hero-banner">

        <!-- 1. FADING BACKGROUND SLIDES -->
        <div class="hero-slides-wrapper position-absolute top-0 start-0 w-100 h-100 z-0">
            <div class="hero-slide active position-absolute top-0 start-0 w-100 h-100" data-slide="0">
                <img src="/assets/images/slide_1.png" alt="Monochrome White Off-Court Hoodie"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="1">
                <img src="/assets/images/slide_2.png" alt="Obsidian Heavyweight Fleece"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="2">
                <img src="/assets/images/slide_3.png" alt="Thermal Red Performance Hoodie"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="3">
                <img src="/assets/images/slide_5.png" alt="Skate Low-Angle Activewear"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="4">
                <img src="/assets/images/slide_6.png" alt="Championship Match Arena Victory"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="5">
                <img src="/assets/images/slide_7.png" alt="Multi-Tone Color Block Collection"
                     class="w-100 h-100 object-fit-cover">
            </div>
            <div class="hero-slide position-absolute top-0 start-0 w-100 h-100" data-slide="6">
                <img src="/assets/images/slide_8.png" alt="Explosive Sprint Block Start"
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

                <!-- Slide 1 Content -->
                <div class="hero-text-group active" data-slide-text="0">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 01 — Oversized Heavyweight</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Off-Court <br>
                        <span class="editorial-accent-text">Volume.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Ultra-dense cotton blend tailoring designed for relaxed recovery and off-court comfort.</p>
                </div>

                <!-- Slide 2 Content -->
                <div class="hero-text-group d-none" data-slide-text="1">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 02 — Stealth Obsidian</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Monolith <br>
                        <span class="editorial-accent-text">Fleece.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Triple-stitched fleece construction built to lock in core temperature during cold sessions.</p>
                </div>

                <!-- Slide 3 Content -->
                <div class="hero-text-group d-none" data-slide-text="2">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 03 — Vibrant Thermal</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Kinetic <br>
                        <span class="editorial-accent-text">Crimson.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">High-contrast thermal isolation fleece designed for high-impact visibility and style.</p>
                </div>

                <!-- Slide 5 Content -->
                <div class="hero-text-group d-none" data-slide-text="3">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 04 — Concrete Series</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Street <br>
                        <span class="editorial-accent-text">Utility.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Lightweight moisture-wicking activewear constructed for maximum maneuverability.</p>
                </div>

                <!-- Slide 6 Content -->
                <div class="hero-text-group d-none" data-slide-text="4">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 05 — Stadium Specs</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Arena <br>
                        <span class="editorial-accent-text">Dominance.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Stress-tested on Australian hardcourts. Rapid moisture expulsion built for the final set.</p>
                </div>

                <!-- Slide 7 Content -->
                <div class="hero-text-group d-none" data-slide-text="5">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 06 — Capsule Collection</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Spectrum <br>
                        <span class="editorial-accent-text">Grid.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Engineered colorways and performance cuts across all high-velocity court disciplines.</p>
                </div>

                <!-- Slide 8 Content -->
                <div class="hero-text-group d-none" data-slide-text="6">
                    <p class="text-uppercase tracking-widest fw-bold text-white-50 fs-8 mb-2">Edition 07 — Explosive Output</p>
                    <h1 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
                        Just <br>
                        <span class="editorial-accent-text">Smash.</span>
                    </h1>
                    <p class="lead text-white-50 fs-6 mb-0 max-w-sm font-monospace">Four-way stretch architecture designed to expand under maximum physical torque.</p>
                </div>

            </div>

            <!-- SHOP CTA & PROGRESS CONTROLS -->
            <div class="d-flex flex-column align-items-start align-items-md-end gap-4 flex-shrink-0">

                <!-- SHOP NOW BUTTON -->
                <a href="/collections/all"
                   class="btn btn-brand text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4 js-shop-btn">
                    <span>Explore Index</span>
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
<style>
    /* CUSTOM HOVER TRANSITIONS & INTERACTION STATES */
    .hover-card {
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: transform;
    }

    .hover-card-img {
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: transform;
    }

    .hover-card-overlay {
        transition: background 0.4s ease, opacity 0.4s ease;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0) 40%, rgba(0, 0, 0, 0.85) 100%);
    }

    .hover-card-btn {
        transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), background-color 0.3s ease, color 0.3s ease;
    }

    /* HOVER TRIGGER BEHAVIORS */
    .hover-card:hover {
        transform: translateY(-4px);
    }

    .hover-card:hover .hover-card-img {
        transform: scale(1.06);
    }

    .hover-card:hover .hover-card-overlay {
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.1) 20%, rgba(0, 0, 0, 0.95) 100%);
    }

    .hover-card:hover .hover-card-btn {
        transform: scale(1.1) rotate(45deg);
        background-color: #ffffff !important;
        color: #000000 !important;
    }

    /* CUSTOM HIDE SCROLLBAR UTILITY */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
<div class="container-fluid px-2 px-md-3 py-2">
    <div class="d-flex gap-3 overflow-x-auto no-scrollbar align-items-center">

        <!-- DIV 1: MEN -->
        <a href="/collections/men"
           class="hover-card flex-shrink-0 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
           style="width: 25%; min-width:300px;aspect-ratio: 3/4;">
            <img src="assets/images/cat-men.png" alt="Men" class="hover-card-img w-100 h-100 object-fit-cover">

            <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Collection</span>
                        <h3 class="display-1 fw-black text-uppercase text-white tracking-tight m-0">Men</h3>
                    </div>
                    <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                          style="width: 38px; height: 38px;">
                        <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                    </span>
                </div>
            </div>
        </a>

        <!-- DIV 2: LADIES -->
        <a href="/collections/ladies"
           class="hover-card flex-shrink-0 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
           style="width: 25%; min-width:300px;aspect-ratio: 3/4;">
            <img src="assets/images/cat-women.png" alt="Ladies" class="hover-card-img w-100 h-100 object-fit-cover">

            <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Collection</span>
                        <h3 class="display-1 fw-black text-uppercase text-white tracking-tight m-0">Ladies</h3>
                    </div>
                    <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                          style="width: 38px; height: 38px;">
                        <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                    </span>
                </div>
            </div>
        </a>

        <!-- DIV 3: BOY -->
        <a href="/collections/boy"
           class="hover-card flex-shrink-0 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
           style="width: 25%; min-width:300px;aspect-ratio: 3/4;">
            <img src="assets/images/cat-boy.png" alt="Boy" class="hover-card-img w-100 h-100 object-fit-cover">

            <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Youth</span>
                        <h3 class="display-1 fw-black text-uppercase text-white tracking-tight m-0">Boy</h3>
                    </div>
                    <span class="hover-card-btn btn btn-light rounded-circle p-0 d-flex align-items-center justify-content-center shadow-sm"
                          style="width: 38px; height: 38px;">
                        <i class="bi bi-arrow-up-right fs-6 text-dark"></i>
                    </span>
                </div>
            </div>
        </a>

        <!-- DIV 4: GIRL -->
        <a href="/collections/girl"
           class="hover-card flex-shrink-0 rounded-4 overflow-hidden position-relative text-decoration-none shadow-sm"
           style="width: 25%; min-width:300px;aspect-ratio: 3/4;">
            <img src="assets/images/cat-girl.png" alt="Girl" class="hover-card-img w-100 h-100 object-fit-cover">

            <div class="hover-card-overlay position-absolute bottom-0 start-0 w-100 h-100 p-3 d-flex flex-column justify-content-end z-1">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="fs-8 text-white-50 text-uppercase tracking-wider fw-semibold d-block mb-1">Youth</span>
                        <h3 class="display-1 fw-black text-uppercase text-white tracking-tight m-0">Girl</h3>
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
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5">
        <!-- SECTION HEADER -->
        <div class="d-flex align-items-end justify-content-between mb-3 pb-3 border-bottom border-body-subtle">
            <div>
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2"><i class="bi bi-droplet"></i> Fresh Drops</span>
                <h3 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 text-body">New <br><span class="editorial-accent-text ">Arrivals.</span></h3>
            </div>

            <!-- SCROLL CONTROLS -->
            <div class="d-flex gap-2">
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

        <!-- HORIZONTALLY SCROLLABLE PRODUCT TRACK (WITH HOVER PADDING SAFETY ZONE) -->
        <div class="d-flex gap-3 overflow-x-auto pt-3 pb-3 js-arrival-track no-scrollbar" style="margin-top: -8px;">

            <!-- ITEM 1: TENNIS ATHLETIC SET -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-25%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr1-1.png" alt="Smash Precision Tennis Set Front" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr2.webp" alt="Smash Precision Skirt Detail" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Precision Tennis Two-Piece Set</h4>
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

            <!-- ITEM 2: GRADIENT PERFORMANCE TANK -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">NEW</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr3-1.png" alt="Aero Gradient Tank Model Shot" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr3.jpg" alt="Aero Gradient Tank Flat" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Aero Ombré Performance Tank</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$48.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 3: BLACK PRO-CUT RACERBACK -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">HOT</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr4-1.png" alt="Core Racerback Model Shot" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr4-2.png" alt="Core Racerback Action View" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr4.webp" alt="Core Racerback Product Shot" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Core Contour Racerback Tank</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$38.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 4: MEN'S PRO TRAINER TEE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-15%</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/product-1.webp" alt="Pro-Series Performance Tee Front" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr38.webp" alt="Pro-Series Performance Tee Back" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Ventilated Tech Athletic Tee</h4>
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

            <!-- ITEM 5: PINK STATEMENT HOODIE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">LIMITED</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr13.webp" alt="Statement Fleece Pullover Pink" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr19.webp" alt="Match Gradient Tech Tee" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                        </div>
                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image"><i class="bi bi-arrow-left fs-7"></i></button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image"><i class="bi bi-arrow-right fs-7"></i></button>
                        </div>
                    </div>
                </div>
                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Outerwear</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Statement Heavyweight Hoodie</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$88.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center" aria-label="Add to cart"><i class="bi bi-bag-plus"></i></button>
                    </div>
                </div>
            </article>

            <!-- ITEM 6: PRO ACTIVE SHORTS -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">CORE</span>
                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center" aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>
                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr50.webp" alt="Active Performance Shorts Front" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr40.webp" alt="Seamless Compression Tank" class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
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
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">Pro-Series Training Shorts</h4>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$36.00</span>
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
                <a href="/shop" class="btn btn-dark bg-black text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-6 d-inline-flex align-items-center gap-2 shadow-sm border-0 mb-3 hover-scale">
                    <span>Shop Smash</span>
                    <i class="bi bi-arrow-right fs-6"></i>
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
            <img src="/assets/images/premium-cat.png" alt="Featured Activewear"
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
                <h2 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3">
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
            <div class="d-flex align-items-end justify-content-between mb-4">
                <div>
                    <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2"><i class="bi bi-droplet"></i> Precision Engineering</span>
                    <h3 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 text-body">The LINE OF <br><span class="editorial-accent-text ">Precision.</span></h3>
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-prod-scroll-left"
                            aria-label="Scroll Left" style="width: 44px; height: 44px;">
                        <i class="bi bi-arrow-left fs-5"></i>
                    </button>
                    <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-prod-scroll-right"
                            aria-label="Scroll Right" style="width: 44px; height: 44px;">
                        <i class="bi bi-arrow-right fs-5"></i>
                    </button>
                </div>
            </div>

            <!-- 2. PRODUCT CAROUSEL TRACK -->
            <div class="d-flex gap-3 overflow-x-auto pb-4 pt-2 js-product-track product-scroll-track align-items-center">

                <!-- Card 1 -->
                <article
                        class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <!-- Padded Outer Frame for Image -->
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">-25%</span>

                            <!-- Wishlist Button -->
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center"
                                    aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>

                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="/assets/images/pr1-1.png" alt="Aero-Vent Tee Front"
                                     class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                                <img src="/assets/images/pr1.webp" alt="Aero-Vent Tee Back"
                                     class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            </div>

                            <!-- Card Image Nav Arrows -->
                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image">
                                    <i class="bi bi-arrow-left fs-7"></i>
                                </button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image">
                                    <i class="bi bi-arrow-right fs-7"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Edge-to-Edge Description Container -->
                    <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Tops Precision</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Aero-Vent Performance Tee</h4>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <div>
                                <span class="text-white fw-bold fs-6">$62.00</span>
                                <span class="text-danger text-decoration-line-through fs-8 me-1">$85.00</span>
                            </div>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center"
                                    aria-label="Add to cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article
                        class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                    <!-- Padded Outer Frame for Image -->
                    <div class="p-2 pb-0">
                        <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                            <!-- Wishlist Button -->
                            <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center"
                                    aria-label="Add to wishlist">
                                <i class="bi bi-heart fs-7"></i>
                            </button>

                            <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                                <img src="/assets/images/pr3-1.png" alt="Hyper-Flex Shorts Front"
                                     class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                                <img src="/assets/images/pr3.jpg" alt="Hyper-Flex Shorts Back"
                                     class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            </div>

                            <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                                <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image">
                                    <i class="bi bi-arrow-left fs-7"></i>
                                </button>
                                <button class="btn btn-card-nav js-card-next" aria-label="Next Image">
                                    <i class="bi bi-arrow-right fs-7"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Edge-to-Edge Description Container -->
                    <div class="p-3 d-flex flex-column bg-black justify-content-between flex-grow-1">
                        <div>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Bottoms Precision</span>
                            <h4 class="h6 text-white fw-bold text-truncate mb-3">Hyper-Flex Utility Shorts</h4>
                        </div>

                        <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                            <span class="text-white fw-bold fs-6">$78.00</span>
                            <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center"
                                    aria-label="Add to cart">
                                <i class="bi bi-bag-plus"></i>
                            </button>
                        </div>
                    </div>
                </article>

            </div>

            <!-- 3. BOTTOM LINK -->
            <div class="d-flex justify-content-center pt-2">
                <a href="/collections/precision"
                   class="btn btn-brand text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-7 tracking-widest d-inline-flex align-items-center gap-4">
                    <span>Explore Precision Collection</span>
                    <span class="btn-indicator-line"></span>
                </a>
            </div>

        </div>
    </section>
</div>
<style>
    /* PERSPECTIVE WRAPPER FOR 3D TILT EFFECT */
    .hero-perspective-wrapper {
        perspective: 1000px;
    }

    /* STACKED STAGE CONTAINER WITH SMOOTH TRANSFORM TRANSITION */
    .hero-feature-stage {
        display: grid;
        grid-template-areas: "hero";
        min-height: 520px;
        transform-style: preserve-3d;
        transition: transform 0.15s ease-out;
        will-change: transform;
    }

    .hero-feature-slide {
        grid-area: hero;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.4s ease, visibility 0.4s ease;
        pointer-events: none;
        transform-style: preserve-3d;
    }

    .hero-feature-slide.is-active {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    /* ITEMIZED ELEMENT BASE STATE */
    .hero-feature-slide .anim-item {
        opacity: 0;
        transform: translateY(14px);
        transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1),
        transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    /* ITEMIZED REVEAL WHEN ACTIVE */
    .hero-feature-slide.is-active .anim-item {
        opacity: 1;
        transform: translateY(0);
    }

    /* SNAPPY STAGGER SEQUENCE */
    .hero-feature-slide.is-active .delay-1 { transition-delay: 0.05s; } /* New Subheading */
    .hero-feature-slide.is-active .delay-2 { transition-delay: 0.15s; } /* Swapped Heading */
    .hero-feature-slide.is-active .delay-3 { transition-delay: 0.25s; } /* Swapped Paragraph */
    .hero-feature-slide.is-active .delay-4 { transition-delay: 0.35s; } /* Button */

    /* TAGS CASCADE QUICKLY AFTER CONTENT */
    .hero-feature-slide.is-active .delay-tag-1 { transition-delay: 0.45s; }
    .hero-feature-slide.is-active .delay-tag-2 { transition-delay: 0.53s; }
    .hero-feature-slide.is-active .delay-tag-3 { transition-delay: 0.61s; }
    .hero-feature-slide.is-active .delay-tag-4 { transition-delay: 0.69s; }

    /* PARALLAX FLOATING TAGS WITH DEPTH LAYER */
    .parallax-tag {
        transition: transform 0.2s ease-out;
        will-change: transform;
    }

    /* TAG STYLING */
    .tag-dot {
        width: 8px;
        height: 8px;
        background-color: #d9381e;
        border-radius: 50%;
        display: inline-block;
    }
</style>
<div class="container-fluid px-2 px-md-3 py-2 hero-perspective-wrapper">
    <section id="heroParallaxSection" class="w-100 rounded-4 bg-brand py-5 px-3 px-md-5 position-relative overflow-hidden min-vh-75 d-flex align-items-center justify-content-center">

        <div id="heroFeatureStage" class="hero-feature-stage w-100 position-relative">

            <!-- 01: BREATHABLE FABRIC -->
            <div class="hero-feature-slide is-active position-relative w-100 h-100 d-flex align-items-center justify-content-center" id="slide-1">

                <!-- SCATTERED TAGS (WITH PARALLAX LAYERS) -->
                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-1 parallax-tag" data-depth="25" style="top: 10%; left: 18%;">
                    <span class="tag-dot"></span>
                    <span>Airflow Tech</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-2 parallax-tag" data-depth="-20" style="top: 15%; right: 15%;">
                    <span class="tag-dot"></span>
                    <span>Perforated Mesh</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-3 parallax-tag" data-depth="30" style="bottom: 12%; left: 20%;">
                    <span class="tag-dot"></span>
                    <span>Cooling Vents</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-4 parallax-tag" data-depth="-15" style="bottom: 18%; right: 18%;">
                    <span class="tag-dot"></span>
                    <span>Ultra-Lightweight</span>
                </div>

                <!-- CENTER CONTENT BLOCK -->
                <div class="text-center mx-auto px-3 my-auto" style="max-width: 680px;">
                    <span class="text-white text-opacity-90 fw-black text-uppercase tracking-widest fs-8 d-block mb-2 anim-item delay-1">
                        Airflow Innovation
                    </span>

                    <h2 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 anim-item delay-2">
                        Breathable <br/><span class="editorial-accent-text">Fabric</span>
                    </h2>

                    <p class="fs-6 text-white text-opacity-90 fw-normal mx-auto mb-4 anim-item delay-3" style="max-width: 540px;">
                        Lightweight perforated fabric keeps air flowing so you can stay cool through every set.
                    </p>

                    <div class="anim-item delay-4">
                        <a href="/technology" class="btn btn-dark bg-black text-white rounded-pill px-4 py-2.5 fw-bold text-capitalize fs-7 shadow-sm border-0">
                            Explore Fabric
                        </a>
                    </div>
                </div>

            </div>

            <!-- 02: PRO TESTED -->
            <div class="hero-feature-slide position-relative w-100 h-100 d-flex align-items-center justify-content-center" id="slide-2">

                <!-- SCATTERED TAGS -->
                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-1 parallax-tag" data-depth="20" style="top: 8%; left: 22%;">
                    <span class="tag-dot"></span>
                    <span>Pace Setters</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-2 parallax-tag" data-depth="-25" style="top: 18%; right: 12%;">
                    <span class="tag-dot"></span>
                    <span>Athlete Standard</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-3 parallax-tag" data-depth="15" style="bottom: 15%; left: 16%;">
                    <span class="tag-dot"></span>
                    <span>Stress Tested</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-4 parallax-tag" data-depth="-30" style="bottom: 10%; right: 22%;">
                    <span class="tag-dot"></span>
                    <span>Zero Distortion</span>
                </div>

                <!-- CENTER CONTENT BLOCK -->
                <div class="text-center mx-auto px-3 my-auto" style="max-width: 680px;">
                    <span class="text-white text-opacity-90 fw-black text-uppercase tracking-widest fs-8 d-block mb-2 anim-item delay-1">
                        Elite Performance
                    </span>

                    <h2 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 anim-item delay-2">
                        Pro <br/><span class="editorial-accent-text">Tested</span>
                    </h2>

                    <p class="fs-6 text-white text-opacity-90 fw-normal mx-auto mb-4 anim-item delay-3" style="max-width: 540px;">
                        Professionally tested by the athletes who set the pace and define the standard for uncompromised quality.
                    </p>

                    <div class="anim-item delay-4">
                        <a href="/athletes" class="btn btn-dark bg-black text-white rounded-pill px-4 py-2.5 fw-bold text-capitalize fs-7 shadow-sm border-0">
                            View Athletes
                        </a>
                    </div>
                </div>

            </div>

            <!-- 03: SWEAT ABSORBING -->
            <div class="hero-feature-slide position-relative w-100 h-100 d-flex align-items-center justify-content-center" id="slide-3">

                <!-- SCATTERED TAGS -->
                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-1 parallax-tag" data-depth="30" style="top: 12%; left: 15%;">
                    <span class="tag-dot"></span>
                    <span>Dri-Motion</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-2 parallax-tag" data-depth="-20" style="top: 10%; right: 20%;">
                    <span class="tag-dot"></span>
                    <span>Rapid Wicking</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-3 parallax-tag" data-depth="20" style="bottom: 18%; left: 24%;">
                    <span class="tag-dot"></span>
                    <span>Fast Drying</span>
                </div>

                <div class="position-absolute d-none d-md-flex align-items-center gap-2 bg-white text-dark fw-bold text-uppercase fs-8 px-3 py-2 rounded-pill shadow-sm anim-item delay-tag-4 parallax-tag" data-depth="-15" style="bottom: 12%; right: 16%;">
                    <span class="tag-dot"></span>
                    <span>Zero Drag</span>
                </div>

                <!-- CENTER CONTENT BLOCK -->
                <div class="text-center mx-auto px-3 my-auto" style="max-width: 680px;">
                    <span class="text-white text-opacity-90 fw-black text-uppercase tracking-widest fs-8 d-block mb-2 anim-item delay-1">
                        Moisture Management
                    </span>

                    <h2 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 anim-item delay-2">
                        Sweat <br/><span class="editorial-accent-text">Absorbing</span>
                    </h2>

                    <p class="fs-6 text-white text-opacity-90 fw-normal mx-auto mb-4 anim-item delay-3" style="max-width: 540px;">
                        With our Dri-Motion technology, sweat is pulled away before it pulls you back during training.
                    </p>

                    <div class="anim-item delay-4">
                        <a href="/collections/dri-motion" class="btn btn-dark bg-black text-white rounded-pill px-4 py-2.5 fw-bold text-capitalize fs-7 shadow-sm border-0">
                            Shop Dri-Motion
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5">
        <!-- SECTION HEADER -->
        <div class="d-flex align-items-end justify-content-between mb-3 pb-3 border-bottom border-body-subtle">
            <div>
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2"><i class="bi bi-fire"></i> What's Hot</span>
                <h3 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 text-body">Trending <br><span class="editorial-accent-text">Now!</span></h3>
            </div>

            <!-- SCROLL CONTROLS -->
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-trending-prev"
                        style="width: 40px; height: 40px;" aria-label="Previous Trending Item">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center js-trending-next"
                        style="width: 40px; height: 40px;" aria-label="Next Trending Item">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- HORIZONTALLY SCROLLABLE PRODUCT TRACK -->
        <div class="d-flex gap-3 overflow-x-auto pt-3 pb-3 js-trending-track no-scrollbar" style="margin-top: -8px;">

            <!-- ITEM 1: SMART APPAREL HOODIE UNISEX - RED -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">#1 HOT</span>

                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center"
                                aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>

                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr38-1.png" alt="SMART APPAREL HOODIE UNISEX RED Full View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr38-2.png" alt="SMART APPAREL HOODIE UNISEX RED Action View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr38-3.webp" alt="SMART APPAREL HOODIE UNISEX RED Product Shot"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                        </div>

                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image">
                                <i class="bi bi-arrow-left fs-7"></i>
                            </button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image">
                                <i class="bi bi-arrow-right fs-7"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Heavyweight Fit</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">SMART APPAREL HOODIE UNISEX RED</h4>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$85.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$110.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center"
                                aria-label="Add to cart">
                            <i class="bi bi-bag-plus"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- ITEM 2: SMART APPAREL HOODIE UNISEX - WHITE -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">VIRAL</span>

                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center"
                                aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>

                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr39-1.png" alt="SMART APPAREL HOODIE UNISEX WHITE Full View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr39-2.png" alt="SMART APPAREL HOODIE UNISEX WHITE Front View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr39-3.jpg" alt="SMART APPAREL HOODIE UNISEX WHITE Product Shot"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                        </div>

                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image">
                                <i class="bi bi-arrow-left fs-7"></i>
                            </button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image">
                                <i class="bi bi-arrow-right fs-7"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Heavyweight Fit</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">SMART APPAREL HOODIE UNISEX WHITE</h4>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$85.00</span>
                            <span class="text-danger text-decoration-line-through fs-8 me-1">$110.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center"
                                aria-label="Add to cart">
                            <i class="bi bi-bag-plus"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- ITEM 3: SMART APPAREL HOODIE UNISEX - RED (DUPLICATE SLOT) -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">MUST HAVE</span>

                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center"
                                aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>

                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr38-2.png" alt="SMART APPAREL HOODIE UNISEX RED Action View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr38-3.webp" alt="SMART APPAREL HOODIE UNISEX RED Product Shot"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr38-1.png" alt="SMART APPAREL HOODIE UNISEX RED Full View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                        </div>

                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image">
                                <i class="bi bi-arrow-left fs-7"></i>
                            </button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image">
                                <i class="bi bi-arrow-right fs-7"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Studio Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">SMART APPAREL HOODIE UNISEX RED</h4>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$85.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center"
                                aria-label="Add to cart">
                            <i class="bi bi-bag-plus"></i>
                        </button>
                    </div>
                </div>
            </article>

            <!-- ITEM 4: SMART APPAREL HOODIE UNISEX - WHITE (DUPLICATE SLOT) -->
            <article class="flex-shrink-0 rounded-4 bg-black border border-body-subtle overflow-hidden d-flex flex-column product-card">
                <div class="p-2 pb-0">
                    <div class="position-relative overflow-hidden rounded-3 card-media-wrapper js-card-media-wrapper">
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand">TOP SELLER</span>

                        <button class="btn btn-wishlist position-absolute top-0 end-0 m-2 z-3 rounded-circle d-flex align-items-center justify-content-center"
                                aria-label="Add to wishlist">
                            <i class="bi bi-heart fs-7"></i>
                        </button>

                        <div class="d-flex h-100 w-100 card-slides-track js-card-slides">
                            <img src="assets/images/pr39-2.png" alt="SMART APPAREL HOODIE UNISEX WHITE Front View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr39-3.jpg" alt="SMART APPAREL HOODIE UNISEX WHITE Product Shot"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                            <img src="assets/images/pr39-1.png" alt="SMART APPAREL HOODIE UNISEX WHITE Full View"
                                 class="w-100 h-100 object-fit-cover flex-shrink-0" loading="lazy">
                        </div>

                        <div class="position-absolute bottom-0 w-100 d-flex justify-content-between p-2 z-3 card-slide-nav">
                            <button class="btn btn-card-nav js-card-prev" aria-label="Previous Image">
                                <i class="bi bi-arrow-left fs-7"></i>
                            </button>
                            <button class="btn btn-card-nav js-card-next" aria-label="Next Image">
                                <i class="bi bi-arrow-right fs-7"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="p-3 d-flex flex-column justify-content-between flex-grow-1">
                    <div>
                        <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider d-block mb-1">Studio Series</span>
                        <h4 class="h6 text-white fw-bold text-truncate mb-3">SMART APPAREL HOODIE UNISEX WHITE</h4>
                    </div>

                    <div class="d-flex align-items-center justify-content-between pt-2 border-top border-body-subtle">
                        <div>
                            <span class="text-white fw-bold fs-6">$85.00</span>
                        </div>
                        <button class="btn btn-brand rounded-3 d-flex align-items-center justify-content-center"
                                aria-label="Add to cart">
                            <i class="bi bi-bag-plus"></i>
                        </button>
                    </div>
                </div>
            </article>

        </div>
    </section>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 overflow-hidden position-relative p-4 p-md-5  d-flex align-items-center"
             style="min-height: 520px; background: url('assets/images/cta-1.png') center center / cover no-repeat fixed;">

        <!-- DARK VIGNETTE GRADIENT OVERLAY FOR READABILITY -->
        <div class="position-absolute top-0 start-0 w-100 h-100 z-1"
             style="background: linear-gradient(90deg, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.4) 50%, rgba(0,0,0,0.1) 100%);"></div>

        <!-- CONTENT LAYER -->
        <div class="position-relative z-2 container-fluid p-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 text-start">

                    <!-- BRAND BADGE -->
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-brand bg-opacity-75 border border-white border-opacity-10 mb-3 backdrop-blur">
                        <span class="badge bg-light text-dark rounded-circle p-1">
                            <i class="bi bi-lightning-charge-fill fs-8"></i>
                        </span>
                        <span class="fs-8 text-uppercase tracking-widest fw-bold text-white">Smash Apparel Drop</span>
                    </div>

                    <!-- HERO HEADING -->
                    <h3 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 text-white">Elevate Your<br><span class="editorial-accent-text">Daily Motion.</span></h3>

                    <!-- SUBTEXT -->
                    <p class="fs-6 text-white-50 fw-normal mb-4 pe-md-3">
                        Heavyweight comfort meets street-ready durability. Explore the latest oversize collection designed for ultimate versatility.
                    </p>

                    <!-- ACTION BUTTONS -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="/collections/all" class="btn btn-brand px-4 py-3 rounded-pill fw-bold text-uppercase fs-7 tracking-wider shadow-sm d-inline-flex align-items-center gap-2">
                            <span>Shop The Collection</span>
                            <i class="bi bi-arrow-right fs-6"></i>
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
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5  position-relative overflow-hidden">

        <!-- TOP EDITORIAL HEADER -->
        <div class="row align-items-end justify-content-between pb-4 mb-5 border-bottom border-body-subtle">
            <div class="col-12 col-lg-6">
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2"><i class="bi bi-heart-fill"></i> Our Philosophy</span>
                <h3 class="display-1 fw-black text-uppercase tracking-tight lh-09 mb-3 text-body">Forged In The<br><span class="editorial-accent-text ">Weight Room.</span></h3>
            </div>
            <div class="col-12 col-lg-5 mt-3 mt-lg-0">
                <p class="fs-6 text-secondary fw-normal mb-0 lh-base">
                    Smash Apparel was born from an obsession with raw training. We construct precision activewear engineered to eliminate friction and elevate every rep—built by lifters, for lifters.
                </p>
            </div>
        </div>

        <!-- 3-COLUMN EDITORIAL MANIFESTO GRID -->
        <div class="row g-4 g-xl-5">

            <!-- FEATURE 01 -->
            <div class="col-12 col-md-4 d-flex flex-column justify-content-between border-end-md border-body-subtle pe-md-4 pe-xl-5">
                <div>
                    <span class="display-5 fw-black text-brand text-opacity-25 d-block mb-2">01</span>
                    <h3 class="h5 fw-bold text-uppercase text-body mb-3 tracking-tight">Precision Cut &amp; Seamless Tech</h3>
                    <p class="fs-7 text-secondary lh-base mb-4">
                        Targeted contouring, high-support architecture, and sweat-wicking 4-way stretch fabrics designed to hold shape through high-intensity conditioning.
                    </p>
                </div>
                <div>
                    <a href="/collections/all" class="btn btn-link p-0 text-decoration-none text-brand fw-bold fs-8 text-uppercase tracking-wider d-inline-flex align-items-center gap-2">
                        <span>Explore Gear</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- FEATURE 02 -->
            <div class="col-12 col-md-4 d-flex flex-column justify-content-between border-end-md border-body-subtle pe-md-4 pe-xl-5">
                <div>
                    <span class="display-5 fw-black text-brand text-opacity-25 d-block mb-2">02</span>
                    <h3 class="h5 fw-bold text-uppercase text-body mb-3 tracking-tight">Heavyweight Street Comfort</h3>
                    <p class="fs-7 text-secondary lh-base mb-4">
                        Transition off the gym floor into high-density oversized hoodies, structured track pants, and drop-shoulder silhouettes built for lifestyle wear.
                    </p>
                </div>
                <div>
                    <a href="/collections/loungewear" class="btn btn-link p-0 text-decoration-none text-brand fw-bold fs-8 text-uppercase tracking-wider d-inline-flex align-items-center gap-2">
                        <span>View Streetwear</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- FEATURE 03 -->
            <div class="col-12 col-md-4 d-flex flex-column justify-content-between ps-md-4 ps-xl-5">
                <div>
                    <span class="display-5 fw-black text-brand text-opacity-25 d-block mb-2">03</span>
                    <h3 class="h5 fw-bold text-uppercase text-body mb-3 tracking-tight">Unlocking Pure Potential</h3>
                    <p class="fs-7 text-secondary lh-base mb-4">
                        More than an outfit—a standard. Designed for athletes devoted to daily discipline, resilience, and uncompromised physical preparation.
                    </p>
                </div>
                <div>
                    <a href="/about" class="btn btn-link p-0 text-decoration-none text-brand fw-bold fs-8 text-uppercase tracking-wider d-inline-flex align-items-center gap-2">
                        <span>Read Manifesto</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

    </section>
</div>
<style>
    /* BUTTON HOVER INTERACTION */
    .hover-scale {
        transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), background-color 0.25s ease;
    }
    .hover-scale:hover {
        transform: translateY(-2px) scale(1.02);
        background-color: #111111 !important;
    }
</style>
<div class="container-fluid px-2 px-md-3 py-2">

    <!-- INFINITE MARQUEE TICKER -->
    <div class="w-100 bg-black text-white rounded-3 overflow-hidden position-relative border border-dark">
        <div class="ticker-track d-flex align-items-center">

            <!-- TRACK CONTENT (LOOP 1) -->
            <div class="ticker-content d-flex align-items-center flex-nowrap fw-black text-uppercase tracking-wider fs-6 text-nowrap">
                <span class="px-4">Court Apparel</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Pro Tested Activewear</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Dri-Motion Technology</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Built For Speed</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Smash Everything</span>
                <span class="text-danger fs-8">•</span>
            </div>

            <!-- DUPLICATED TRACK CONTENT FOR ZERO-GLITCH INFINITE LOOP -->
            <div class="ticker-content d-flex align-items-center flex-nowrap fw-black text-uppercase tracking-wider fs-6 text-nowrap" aria-hidden="true">
                <span class="px-4">Court Apparel</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Pro Tested Activewear</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Dri-Motion Technology</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Built For Speed</span>
                <span class="text-danger fs-8">•</span>
                <span class="px-4">Smash Everything</span>
                <span class="text-danger fs-8">•</span>
            </div>

        </div>
    </div>
</div>

<style>
    /* TAG DOT STYLING */
    .tag-dot {
        width: 6px;
        height: 6px;
        background-color: #d9381e;
        border-radius: 50%;
        display: inline-block;
    }

    /* SMOOTH INFINITE TICKER TRACK */
    .ticker-track {
        width: max-content;
        animation: marqueeLeft 18s linear infinite;
        will-change: transform;
    }

    /* PAUSE ON HOVER FOR ACCESSIBILITY */
    .ticker-track:hover {
        animation-play-state: paused;
    }

    @keyframes marqueeLeft {
        0% {
            transform: translate3d(0, 0, 0);
        }
        100% {
            transform: translate3d(-50%, 0, 0);
        }
    }
</style>
<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>
