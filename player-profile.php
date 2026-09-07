<?php
$page_slug = "player-profile";
$player_name = "Adrian Arcon";
$page_title = "{$player_name} | Smash Apparel Athlete";
$page_description = "Discover the career stats, bio, and tournament achievements of elite Australian tennis player Adrian Arcon, sponsored by Smash Apparel.";
$page_keywords = "Adrian Arcon, Australian Tennis, ATP Player, ITF Circuit, Smash Apparel Athlete, Pro Tennis Bio";
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
                        <img src="/smashapparel/assets/images/mtt-adrian.jpg"
                             alt="<?php echo $player_name; ?>"
                             class="w-100 h-100 object-fit-cover object-fit-top"
                             style="max-height: 480px;">
                        <span class="position-absolute top-0 start-0 m-3 badge badge-brand shadow-sm">
                        ATP / ITF Circuit
                    </span>
                    </div>
                </div>

                <!-- Player Quick Info & Intro -->
                <div class="col-12 col-md-7 col-lg-7">

    <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
        <span class="live-status-dot"></span> Smash Apparel Ambassador
    </span>
                    <h1 class="display-3 fw-black text-uppercase tracking-tight text-white mb-2 lh-09">
                        Adrian <br>
                        <span class="editorial-accent-text">Arcon</span>
                    </h1>
                    <p class="text-secondary fs-6 mb-4 max-w-xl">
                        An imposing force on court with a 6'6" frame, driving relentless power from the baseline and representing Australia on the global pro tennis circuit.
                    </p>

                    <!-- Key Stat Badges Grid -->
                    <div class="row g-2 max-w-xl mb-4">
                        <div class="col-6 col-sm-3">
                            <div class="bg-body-tertiary border border-body-subtle rounded-3 p-3 text-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-semibold">ATP High</span>
                                <span class="fs-4 fw-bold text-body">#1259</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="bg-body-tertiary border border-body-subtle rounded-3 p-3 text-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-semibold">Height</span>
                                <span class="fs-4 fw-bold text-body">6'6"</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="bg-body-tertiary border border-body-subtle rounded-3 p-3 text-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-semibold">Age</span>
                                <span class="fs-4 fw-bold text-body">24</span>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="bg-body-tertiary border border-body-subtle rounded-3 p-3 text-center">
                                <span class="d-block text-secondary fs-8 text-uppercase fw-semibold">Nationality</span>
                                <span class="fs-4 fw-bold text-body">AUS 🇦🇺</span>
                            </div>
                        </div>
                    </div>

                    <!-- External Stats Link Button -->
                    <div class="pt-1">
                        <a href="https://www.tennisexplorer.com/player/arcon/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-outline-secondary rounded-pill px-4 py-2 text-uppercase fw-semibold fs-7 d-inline-flex align-items-center gap-2 hover-text-brand transition-colors">
                            View Official Stats <i class="bi bi-box-arrow-up-right fs-8"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- DETAILED CONTENT SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <div class="row g-2">
            <!-- Main Full Bio -->
            <div class="col-12 col-lg-8">
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100">
                    <h2 class="fs-3 fw-bold text-uppercase text-body mb-3">Athlete Overview</h2>
                    <p class="text-secondary fs-6 lh-lg mb-4">
                        Adrian Arcon is an emerging Australian talent steadily climbing the professional ranks with a powerful 6'6" frame and a growing résumé on the ITF and ATP circuits. At just 24 years old, he has already reached a career-high ATP ranking of No. 1259 and continues to compete across international hard-court and grass events.
                    </p>
                    <p class="text-secondary fs-6 lh-lg mb-4">
                        Known for his determination, heavy serve, and steady improvement, Adrian has earned victories across multiple ITF tournaments, showcasing a developing all-court game and the resilience needed to break through at higher professional levels. As he continues to gain experience and refine his technical execution under high pressure, Adrian remains one of the most promising physical competitors to watch in Australia’s next wave of pro talent.
                    </p>

                    <hr class="border-body-subtle my-4">

                    <!-- Highlights & Specs -->
                    <h3 class="fs-4 fw-bold text-uppercase text-body mb-3">Playstyle & Attributes</h3>
                    <div class="row g-2">
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="badge badge-brand rounded-circle p-2 mt-1">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                </div>
                                <div>
                                    <h4 class="fs-6 fw-bold mb-1 text-body">Dominant Serve</h4>
                                    <p class="text-secondary fs-7 mb-0">Leverages his height advantage to extract steep angles and high first-serve win percentages.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="badge badge-brand rounded-circle p-2 mt-1">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h4 class="fs-6 fw-bold mb-1 text-body">All-Court Game</h4>
                                    <p class="text-secondary fs-7 mb-0">Combines baseline aggressive groundstrokes with quick court coverage for transition play.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar / Gear & Info -->
            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column gap-2 h-100">

                    <!-- Player Kit Callout -->
                    <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4">
                        <span class="text-uppercase tracking-wider text-brand fw-bold fs-8 d-block mb-1">Official Selection</span>
                        <h3 class="fs-4 fw-bold text-uppercase text-body mb-3">Adrian's Smash Kit</h3>

                        <div class="d-flex align-items-center gap-3 mb-3 p-2 bg-body rounded-3 border border-body-subtle">
                            <div class="badge badge-brand p-2"><i class="bi bi-bag-check fs-5"></i></div>
                            <div>
                                <h4 class="fs-7 fw-bold text-body mb-0">Pro Performance Singlet</h4>
                                <span class="text-secondary fs-8">Breathable, Ultra-Light Fit</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 mb-4 p-2 bg-body rounded-3 border border-body-subtle">
                            <div class="badge badge-brand p-2"><i class="bi bi-bag-check fs-5"></i></div>
                            <div>
                                <h4 class="fs-7 fw-bold text-body mb-0">Elite Court Shorts 7"</h4>
                                <span class="text-secondary fs-8">4-Way Stretch Flex</span>
                            </div>
                        </div>

                        <a href="/smashapparel/shop" class="btn btn-brand w-100 rounded-pill py-2 text-uppercase fw-bold fs-7">
                            Shop Adrian's Gear <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <!-- Next Matches / Status -->
                    <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 flex-grow-1">
                        <h3 class="fs-5 fw-bold text-uppercase text-body mb-3">Circuit Status</h3>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2 text-secondary fs-7">
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Primary Circuit</span>
                                <strong class="text-body">ITF Men's World Tour</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-body-subtle">
                                <span>Preferred Surface</span>
                                <strong class="text-body">Hard / Grass</strong>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Endorsement</span>
                                <strong class="text-brand">Smash Apparel Elite</strong>
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
                            "When you're 6'6" and competing under intense heat, fit and mobility are everything. Smash Apparel gives me the lightweight breathability and flex I need to serve at my highest level."
                        </blockquote>
                    </div>

                    <div class="d-flex align-items-center gap-3 pt-3 border-top border-body-subtle">
                        <img src="/smashapparel/assets/images/mtt-adrian.jpg"
                             alt="Adrian Arcon"
                             class="rounded-circle object-fit-cover border border-brand"
                             width="48"
                             height="48">
                        <div>
                            <h4 class="fs-6 fw-bold text-body mb-0">Adrian Arcon</h4>
                            <span class="text-secondary fs-8">ATP / ITF Tour Competitor</span>
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
                                <a href="/smashapparel/assets/images/player-adrian-1.jpg"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-adrian-1.jpg"
                                   data-bs-caption="Adrian Arcon — Tournament Matchplay"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-adrian-1.jpg"
                                         alt="Adrian Arcon Matchplay"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 2 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-adrian-2.jpg"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-adrian-2.jpg"
                                   data-bs-caption="Adrian Arcon — Serve Delivery"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-adrian-2.jpg"
                                         alt="Adrian Arcon Serve"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 3 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-adrian-3.jpg"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-adrian-3.jpg"
                                   data-bs-caption="Adrian Arcon — Court Warmup & Training"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-adrian-3.jpg"
                                         alt="Adrian Arcon Training"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 4 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-adrian-4.jpg"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-adrian-4.jpg"
                                   data-bs-caption="Adrian Arcon — Baseline Forehand Drive"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-adrian-4.jpg"
                                         alt="Adrian Arcon Forehand"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 5 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-adrian-5.jpg"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-adrian-5.jpg"
                                   data-bs-caption="Adrian Arcon — Post-Match Press & Gear Check"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-adrian-5.jpg"
                                         alt="Adrian Arcon Gear Check"
                                         class="w-100 h-100 object-fit-cover transition-transform duration-300 hover-card-img"
                                         loading="lazy">
                                    <div class="position-absolute inset-0 bg-dark opacity-0 hover-opacity-40 transition-opacity d-flex align-items-center justify-content-center">
                                        <i class="bi bi-zoom-in text-white fs-4"></i>
                                    </div>
                                </a>
                            </div>

                            <!-- Gallery Item 6 -->
                            <div class="flex-shrink-0" style="width: 180px;">
                                <a href="/smashapparel/assets/images/player-adrian-6.jpg"
                                   data-bs-toggle="modal"
                                   data-bs-target="#lightboxModal"
                                   data-bs-img="/smashapparel/assets/images/player-adrian-6.jpg"
                                   data-bs-caption="Adrian Arcon — ITF Circuit Finals"
                                   class="d-block position-relative overflow-hidden rounded-3 ratio ratio-1x1 group hover-card">
                                    <img src="/smashapparel/assets/images/player-adrian-6.jpg"
                                         alt="Adrian Arcon Circuit Finals"
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

    <!-- LIGHTBOX MODAL COMPONENT -->
    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-black border border-body-subtle rounded-4 overflow-hidden">
                <div class="modal-header border-bottom border-body-subtle py-2 px-3">
                    <span class="modal-title fs-8 text-uppercase tracking-wider text-secondary" id="lightboxCaption">Media Preview</span>
                    <button type="button" class="btn-close btn-close-white fs-8" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 text-center bg-black d-flex align-items-center justify-content-center min-h-300">
                    <img src="" id="lightboxImage" class="img-fluid w-100 object-fit-contain" style="max-height: 80vh;" alt="Enlarged View">
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