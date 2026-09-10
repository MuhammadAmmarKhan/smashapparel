<?php
$page_slug = "player-profile";
$player_name = "Oliver Hancin";
$page_title = "{$player_name} | Smash Apparel Athlete";
$page_description = "Discover the career stats, bio, and tournament achievements of elite Australian junior tennis player Oliver Hancin, sponsored by Smash Apparel.";
$page_keywords = "Oliver Hancin, Australian Tennis, ITF Junior, Junior Tennis Star, Smash Apparel Athlete, Pro Tennis Bio";
ob_start(); ?>

    <!-- HERO / PLAYER HEADER SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <div class="position-relative overflow-hidden rounded-4 bg-black border border-dark p-4 p-md-5 text-white">
            <!-- Background Decorative Elements -->
            <div class="position-absolute inset-0 bg-overlay-editorial z-1"></div>
            <div class="position-absolute inset-0 dynamic-vignette z-1"></div>

            <div class="row align-items-center position-relative z-2 g-4">
                <!-- Player Main Image / Badge -->
                <div class="col-12 col-md-5 col-lg-5">
                    <div class="position-relative overflow-hidden rounded-4 border border-dark shadow-lg">
                        <img src="/smashapparel/assets/images/player-ollie-3.webp"
                             alt="<?php echo $player_name; ?>"
                             class="w-100 h-100 object-fit-cover"
                             style="max-height: 480px;">
                        <span class="position-absolute top-0 start-0 m-3 badge badge-brand shadow-sm">
                        ITF Junior Circuit
                    </span>
                    </div>
                </div>

                <!-- Player Quick Info & Intro -->
                <div class="col-12 col-md-7 col-lg-7">
                    <a href="/smashapparel/team.php" class="text-uppercase text-decoration-none tracking-widest fw-bold text-secondary fs-8 mb-2 d-inline-flex align-items-center gap-2">
                        <span class="fa fa-arrow-left"></span> Back to team
                    </a><br/>

                    <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                        <span class="live-status-dot"></span> Team Smash Apparel Sponsored Athlete
                    </span>
                    <h1 class="display-3 fw-black text-uppercase tracking-tight text-white mb-2 lh-09">
                        Oliver <br>
                        <span class="editorial-accent-text">Hancin</span>
                    </h1>
                    <p class="text-secondary fs-6 mb-4 max-w-xl">
                        "Talent gets you on the court. Discipline, sacrifice, and heart decide how far you go." A rising junior star from Melbourne climbing the ITF world rankings with back-to-back J30 titles and relentless determination.
                    </p>

                    <!-- Key Stat Badges Grid -->
                    <div class="row g-2 mb-4">
                        <!-- Australian Ranking -->
                        <div class="col-12 col-md-4">
                            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-bold tracking-wider mb-2">Australian Ranking<br>for Birth Year</span>
                                <span class="display-6 fw-bold text-body">#16</span>
                            </div>
                        </div>

                        <!-- Current UTR -->
                        <div class="col-12 col-md-4">
                            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-bold tracking-wider mb-2">Current UTR</span>
                                <span class="display-6 fw-bold text-body">11.36</span>
                            </div>
                        </div>

                        <!-- Career High Singles -->
                        <div class="col-12 col-md-4">
                            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-bold tracking-wider mb-2">Career High Singles<br>ITF Ranking</span>
                                <span class="display-6 fw-bold text-body">#634</span>
                            </div>
                        </div>

                        <!-- Current ITF Singles -->
                        <div class="col-12 col-md-4">
                            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-bold tracking-wider mb-2">Current ITF<br>Singles Ranking</span>
                                <span class="display-6 fw-bold text-body">#972</span>
                            </div>
                        </div>

                        <!-- Career High Doubles -->
                        <div class="col-12 col-md-4">
                            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-bold tracking-wider mb-2">Career High Doubles<br>ITF Ranking</span>
                                <span class="display-6 fw-bold text-body">#634</span>
                            </div>
                        </div>

                        <!-- Current ITF Doubles -->
                        <div class="col-12 col-md-4">
                            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 text-center h-100 d-flex flex-column justify-content-center align-items-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-bold tracking-wider mb-2">Current ITF<br>Doubles Ranking</span>
                                <span class="display-6 fw-bold text-body">#972</span>
                            </div>
                        </div>
                    </div>

                    <!-- External Stats Link Button -->
                    <div class="pt-1">
                        <a href="https://www.racquetworld.com.au/pages/oliver-hancin-itf-junior-tennis-player"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-outline-secondary rounded-pill px-4 py-2 text-uppercase fw-semibold fs-7 d-inline-flex align-items-center gap-2 hover-text-brand transition-colors">
                            View Profile &amp; Results <i class="bi bi-box-arrow-up-right fs-8"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- DETAILED CONTENT SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <div class="row g-2 align-items-stretch">
            <!-- Main Full Bio -->
            <div class="col-12 col-lg-8">
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-3">Athlete Overview</h2>
                        <blockquote class="fs-4 fst-italic fw-bold">"Talent gets you on the court. Discipline, sacrifice, and heart decide how far you go."</blockquote>
                        <p class="text-secondary fs-6 lh-lg mb-4">
                            I guess I should start by saying that I love tennis. Not just enjoy it, but truly love it. Tennis has been a major part of my life, and my dream is to become a professional tennis player one day.
                        </p>
                        <p class="text-secondary fs-6 lh-lg mb-4">I started playing tennis at 8 and quickly developed a passion for the sport. I spend a lot of time training, competing, and improving my skills because I am always working towards becoming the best player I can be.</p>
                        <p class="text-secondary fs-6 lh-lg mb-4">I am also interested in tennis history and enjoy learning about the journeys of some of the greatest players in the sport. Tennis has taught me important values such as discipline, determination, and resilience, which I carry with me both on and off the court.</p>
                    </div>

                    <div>
                        <hr class="border-body-subtle my-4">

                        <!-- Highlights & Specs -->
                        <h3 class="fs-4 fw-bold text-uppercase text-body mb-3">Playstyle & Attributes</h3>
                        <div class="row g-2">
                            <div class="col-12 col-md-6">
                                <p class="text-secondary fs-7 mb-0">TBA</p>
<!--                                <div class="d-flex align-items-start gap-3">-->
<!--                                    <div class="badge badge-brand rounded-circle p-2 mt-1">-->
<!--                                        <i class="bi bi-trophy-fill"></i>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <h4 class="fs-6 fw-bold mb-1 text-body">Championship Mentality</h4>-->
<!--                                        <p class="text-secondary fs-7 mb-0">TBA</p>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                            <div class="col-12 col-md-6">
<!--                                <div class="d-flex align-items-start gap-3">-->
<!--                                    <div class="badge badge-brand rounded-circle p-2 mt-1">-->
<!--                                        <i class="bi bi-lightning-charge-fill"></i>-->
<!--                                    </div>-->
<!--                                    <div>-->
<!--                                        <h4 class="fs-6 fw-bold mb-1 text-body">Aggressive Baseline Play</h4>-->
<!--                                        <p class="text-secondary fs-7 mb-0">TBA</p>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar / Gear & Info -->
            <div class="col-12 col-lg-4">
                <!-- Player Specifications -->
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <span class="text-uppercase tracking-wider text-brand fw-bold fs-8 d-block mb-1">Official Profile</span>
                        <h3 class="fs-4 fw-bold text-uppercase text-body mb-4">Ollie's Details</h3>

                        <ul class="list-unstyled mb-0 d-flex flex-column gap-3 text-secondary fs-7">
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Age</span>
                                <strong class="text-body">15</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Date of Birth</span>
                                <strong class="text-body">TBA</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Place of Birth</span>
                                <strong class="text-body">Melbourne, Australia</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Lives</span>
                                <strong class="text-body">Melbourne, Australia</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Plays</span>
                                <strong class="text-body">Right Handed (2HBH)</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Coach</span>
                                <strong class="text-body">TBA</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Racquet</span>
                                <strong class="text-body">2026 Yonex VCore 98</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Strings</span>
                                <strong class="text-body">Genesis Hexonic 2.0 (123mm)</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Clothing</span>
                                <strong class="text-brand">Smash Apparel</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ATHLETE TESTIMONIAL & MEDIA GALLERY SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <div class="row g-2">

            <!-- TESTIMONIAL BLOCK -->
            <div class="col-12 col-lg-5">
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between position-relative overflow-hidden">
                    <!-- Background Accent Glow -->

                    <div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand fs-8 text-uppercase tracking-wider">Athlete Endorsement</span>
                            <div class="text-warning fs-8">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>

                        <blockquote class="fs-4 fw-bold text-body mb-4 lh-sm">
TBA
                        </blockquote>
                    </div>

                    <div class="d-flex align-items-center gap-3 pt-3 border-top border-body-subtle">
                        <img src="/smashapparel/assets/images/player-ollie-1.webp"
                             alt="Oliver Hancin"
                             class="rounded-circle object-fit-cover border border-brand"
                             width="48"
                             height="48">
                        <div>
                            <h4 class="fs-6 fw-bold text-body mb-0">Oliver Hancin</h4>
                            <span class="text-secondary fs-8">ITF Junior World Tour Competitor</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WATCH IN ACTION / HORIZONTALLY SCROLLABLE MEDIA GALLERY -->
            <div class="col-12 col-lg-7">
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between">

                    <!-- Gallery Header & Controls -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <span class="text-uppercase tracking-wider text-brand fw-bold fs-8 d-block mb-1">Visual Log</span>
                            <h3 class="fs-3 fw-bold text-uppercase text-body mb-0">Watch In Action</h3>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button type="button" id="galleryPrevBtn" class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;" aria-label="Scroll left">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button type="button" id="galleryNextBtn" class="btn btn-outline-secondary rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;" aria-label="Scroll right">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Horizontal Scrollable Gallery Container -->
                    <div class="position-relative">
                        <div id="galleryScrollTrack" class="d-flex gap-3 overflow-x-auto scrollbar-hidden py-1" style="scroll-behavior: smooth; -webkit-overflow-scrolling: touch;">

                            <!-- Gallery Item 1 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-ollie-1.webp"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-ollie-1.webp"
                                   data-bs-caption="Oliver Hancin — Tournament Matchplay"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-ollie-1.webp"
                                         alt="Oliver Hancin Matchplay"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 2 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-ollie-2.webp"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-ollie-2.webp"
                                   data-bs-caption="Oliver Hancin — Baseline Forehand Drive"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-ollie-2.webp"
                                         alt="Oliver Hancin Forehand"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 3 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-ollie-3.webp"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-ollie-3.webp"
                                   data-bs-caption="Oliver Hancin — Serve Motion"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-ollie-3.webp"
                                         alt="Oliver Hancin Serve"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 4 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-ollie-4.webp"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-ollie-4.webp"
                                   data-bs-caption="Oliver Hancin — Court Warmup & Training"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-ollie-4.webp"
                                         alt="Oliver Hancin Training"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 5 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-ollie-5.webp"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-ollie-5.webp"
                                   data-bs-caption="Oliver Hancin — ITF Trophy Presentation"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-ollie-5.webp"
                                         alt="Oliver Hancin Trophy"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 6 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-ollie-6.webp"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-ollie-6.webp"
                                   data-bs-caption="Oliver Hancin — Gear Check & Post Match"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-ollie-6.webp"
                                         alt="Oliver Hancin Gear Check"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Footer Hint -->
                    <div class="d-flex align-items-center justify-content-between pt-3 mt-1 border-top border-body-subtle text-secondary fs-8">
                        <span><i class="bi bi-arrows-left-right me-1"></i> Drag or scroll to explore photos</span>
                        <span><i class="bi bi-bounding-box me-1"></i> Click photo to view fullscreen</span>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- SPONSORSHIP CTA SECTION -->
<!--    <div class="container-fluid px-2 px-md-3 pt-2">-->
<!--        <div class="bg-black border border-secondary border-opacity-25 rounded-4 p-4 p-md-5 position-relative overflow-hidden text-center text-white">-->
<!---->
<!--            <div class="position-relative z-2 max-w-2xl mx-auto py-2">-->
<!--            <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-block">-->
<!--                Join Team Smash-->
<!--            </span>-->
<!---->
<!--                <h2 class="display-5 fw-black text-uppercase tracking-tight text-white mb-3 fst-italic">-->
<!--                    Want to Get Sponsored<span class="text-brand">?</span>-->
<!--                </h2>-->
<!---->
<!--                <p class="text-white fs-6 mb-4 max-w-lg mx-auto lh-lg">-->
<!--                    We're always on the lookout for talent. Click below to make your application and join our elite roster of court athletes.-->
<!--                </p>-->
<!---->
<!--                <div>-->
<!--                    <a href="/smashapparel/sponsorship-application"-->
<!--                       class="btn btn-brand text-white rounded-pill px-3 px-md-4 py-2 py-md-3 fw-bold text-uppercase fs-8 fs-md-7 tracking-widest d-inline-flex align-items-center gap-2 gap-md-3 js-shop-btn text-nowrap">-->
<!--                        Sponsorship Application-->
<!--                        <i class="bi bi-arrow-right fs-6"></i>-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->

    <!-- LIGHTBOX MODAL COMPONENT -->
    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-black border border-body-subtle rounded-4 overflow-hidden d-flex flex-column" style="height: 90vh;">

                <!-- Modal Header -->
                <div class="modal-header border-bottom border-body-subtle py-2 px-3 flex-shrink-0">
                    <span class="modal-title fs-8 text-uppercase tracking-wider text-secondary" id="lightboxCaption">Media Preview</span>
                    <button type="button" class="btn-close btn-close-white fs-8" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body (Scaled Full Uncropped Image View) -->
                <div class="modal-body p-3 bg-black d-flex align-items-center justify-content-center overflow-hidden flex-grow-1">
                    <img src="" id="lightboxImage" class="mw-100 mh-100 object-fit-contain" alt="Enlarged View" style="max-width: 100%; max-height: 100%; width: auto; height: auto;">
                </div>

            </div>
        </div>
    </div>

    <!-- STYLES & SCRIPT FOR HORIZONTAL SCROLL & LIGHTBOX -->
    <style>
        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hidden {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Horizontal Scroll Buttons
            const track = document.getElementById('galleryScrollTrack');
            const prevBtn = document.getElementById('galleryPrevBtn');
            const nextBtn = document.getElementById('galleryNextBtn');

            if (track && prevBtn && nextBtn) {
                const scrollAmount = 220; // Width of item + gap

                prevBtn.addEventListener('click', () => {
                    track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });

                nextBtn.addEventListener('click', () => {
                    track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });
            }

            // Lightbox Modal Handling
            const lightboxModal = document.getElementById('lightboxModal');
            if (lightboxModal) {
                lightboxModal.addEventListener('show.bs.modal', function (event) {
                    const triggerEl = event.relatedTarget;
                    const imgSrc = triggerEl.getAttribute('data-bs-img');
                    const captionText = triggerEl.getAttribute('data-bs-caption');

                    const modalImg = lightboxModal.querySelector('#lightboxImage');
                    const modalCaption = lightboxModal.querySelector('#lightboxCaption');

                    modalImg.src = imgSrc;
                    if (captionText) {
                        modalCaption.textContent = captionText;
                    }
                });
            }
        });
    </script>


<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>