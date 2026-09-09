<?php
$page_slug = "about-us";
$page_title = "About Us | Smash Apparel";
$page_description = "";
$page_keywords = "";
ob_start(); ?>
<!-- ABOUT US: WE SERVE FIRST FOLD SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row g-2">
        <div class="col-12">
            <!-- Full width, calculated height (100vh - 175px) -->
            <div class="bg-black border border-dark rounded-4 p-4 p-md-5 text-start position-relative overflow-hidden d-flex flex-column justify-content-center" style="min-height: calc(100vh - 110px); height: calc(100vh - 110px);">

                <!-- Main Content Left Aligned -->
                <div class="position-relative z-2 ps-md-4 w-100">
                    <h1 class="fw-black text-uppercase tracking-tight text-white mb-0 lh-1 hero-massive-title">
                        <span id="gsap-we" class="d-block text-white" style="opacity: 0;">WE</span>
                        <span id="gsap-serve" class="d-block text-white" style="opacity: 0;">SERVE</span>

                        <!-- Dynamic Font Container -->
                        <span class="d-block position-relative" style="line-height: 0.75;">
                            <span id="we-serve-word" class="d-inline-block text-brand" style="opacity: 0;"></span>
                            <span id="asterisk-star" class="d-inline-block text-brand ms-1" style="opacity: 0; transform-origin: center;">*</span>
                        </span>
                    </h1>

                    <!-- Footnote reveal message -->
                    <div id="athlete-footnote" class="mt-3 pt-3 max-w-4xl" style="opacity: 0; transform: translateY(15px);">
                        <p class="text-secondary display-6 fw-semibold mb-0">
                            <span class="text-brand">*</span> If you have a body, you are an athlete.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<style>
    /* Fluid Responsive Typography Scaling up to 15rem+ */
    .hero-massive-title {
        font-size: clamp(4rem, 15vw, 16rem);
        line-height: 0.75 !important;
    }

    @media (min-width: 1600px) {
        .hero-massive-title {
            font-size: 15rem;
            line-height: 0.75 !important;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const words = ["MEN", "WOMEN", "KIDS", "YOUTH", "PROS", "REBELS", "ATHLETES"];
        const wordTarget = document.getElementById("we-serve-word");
        const asteriskEl = document.getElementById("asterisk-star");
        let currentIndex = 0;

        // Master Sequence
        const mainTl = gsap.timeline();

        // 0. Starts completely blank for 0.4s
        mainTl.to({}, { duration: 0.4 })

            // 1. "WE" smooth blink-in
            .to("#gsap-we", {
                opacity: 1,
                duration: 0.3,
                ease: "power2.inOut"
            })
            .to({}, { duration: 0.2 })

            // 2. "SERVE" smooth blink-in
            .to("#gsap-serve", {
                opacity: 1,
                duration: 0.3,
                ease: "power2.inOut"
            })
            .to({}, { duration: 0.2 })

            // 3. Start word array cycling with smooth eye-blink transitions
            .add(playWordBlinkCycle);

        function playWordBlinkCycle() {
            wordTarget.textContent = words[currentIndex];

            function nextWordBlink() {
                gsap.to(wordTarget, {
                    opacity: 1,
                    duration: 0.1,
                    ease: "power2.inOut",
                    onComplete: () => {
                        if (currentIndex === words.length - 1) {
                            finishSequence();
                        } else {
                            gsap.to(wordTarget, {
                                opacity: 0,
                                duration: 0.2,
                                delay: 0.3,
                                ease: "power2.inOut",
                                onComplete: () => {
                                    currentIndex++;
                                    wordTarget.textContent = words[currentIndex];
                                    nextWordBlink();
                                }
                            });
                        }
                    }
                });
            }

            nextWordBlink();
        }

        // 4. Smooth 90-degree twist on asterisk & quote reveal
        function finishSequence() {
            gsap.to(asteriskEl, {
                opacity: 1,
                rotation: 90,
                duration: 0.8,
                ease: "back.out(1.7)",
                delay: 0.2
            });

            gsap.to("#athlete-footnote", {
                opacity: 1,
                y: 0,
                duration: 0.6,
                delay: 0.5,
                ease: "power2.out"
            });
        }
    });
</script>
<!-- ABOUT US: CORE BRAND STORY & MISSION SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row g-2">

        <!-- Left Box: The Brand Narrative -->
        <div class="col-12 col-lg-7">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-center">
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-shield-check"></i> Built On Court
                </span>
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-3">
                    Bridging Elite Power & <span class="editorial-accent-text">Everyday Wear.</span>
                </h2>
                <p class="text-secondary fs-6 mb-3">
                    Smash Apparel was born out of a relentless ambition to redefine courtwear in Australia. Standard sportswear often forces a choice between high-grade technical utility and clean, modern aesthetics—we refuse to compromise on either.
                </p>
                <p class="text-secondary fs-6 mb-0">
                    From intense baseline rallies to off-court transition, our gear is engineered alongside pro athletes to withstand peak physical output while delivering effortless, street-ready style.
                </p>
            </div>
        </div>

        <!-- Right Box: Mission & Core Pillars -->
        <div class="col-12 col-lg-5">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between gap-4">
                <div>
                    <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-compass"></i> Our Mission
                    </span>
                    <h3 class="fs-4 fw-bold text-uppercase text-body mb-2">
                        To Equip The Next Generation
                    </h3>
                    <p class="text-secondary fs-7 mb-0">
                        To empower players at every level with lightweight, court-proven apparel that elevates performance, fosters community, and champions Australian racquet sports globally.
                    </p>
                </div>

                <!-- Fast Stat Badges -->
                <div class="row g-2 border-top border-body-subtle pt-3">
                    <div class="col-6">
                        <div class="p-2">
                            <span class="d-block fs-3 fw-black text-brand lh-1">100%</span>
                            <span class="text-secondary fs-8 text-uppercase fw-semibold">Court-Tested Fabrics</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-2">
                            <span class="d-block fs-3 fw-black text-brand lh-1">AUS 🇦🇺</span>
                            <span class="text-secondary fs-8 text-uppercase fw-semibold">Designed & Backed</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- ABOUT US: PERFORMANCE & FABRIC INNOVATION GRID SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
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
<!-- ABOUT US: SUSTAINABILITY & ETHICAL MANUFACTURING SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row g-2">

        <!-- Left Feature Box: Eco-Vision Statement -->
        <div class="col-12 col-lg-5">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                        <i class="bi bi-recycle"></i> Conscious Creation
                    </span>
                    <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-3">
                        Performance Without <br>
                        <span class="editorial-accent-text">Compromise.</span>
                    </h2>
                    <p class="text-secondary fs-6 mb-0">
                        We believe high-performance gear shouldn't leave a heavy footprint. From yarn selection to plastic-free packaging, we actively innovate to preserve the courts and environments we play on.
                    </p>
                </div>

                <!-- Environmental Commitment Highlights -->
                <div class="d-flex flex-column gap-2 mt-4 pt-4 border-top border-body-subtle">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-black border border-body-subtle rounded-circle p-2 text-brand d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-box-seam fs-6"></i>
                        </div>
                        <div>
                            <span class="d-block text-body fw-bold fs-7 text-uppercase">100% Recyclable Mailers</span>
                            <span class="text-secondary fs-8">Compostable & biodegradable packaging materials.</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-black border border-body-subtle rounded-circle p-2 text-brand d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-water fs-6"></i>
                        </div>
                        <div>
                            <span class="d-block text-body fw-bold fs-7 text-uppercase">Low-Impact Water Dyes</span>
                            <span class="text-secondary fs-8">Closed-loop dyeing processes that conserve water.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Grid: 3 Sustainability Pillars -->
        <div class="col-12 col-lg-7">
            <div class="row g-2 h-100">

                <!-- Pillar 1: Recycled Yarn -->
                <div class="col-12">
                    <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 h-100 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-start justify-content-between mb-2">
                            <div>
                                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-1 d-block">Materials</span>
                                <h3 class="fs-5 fw-bold text-uppercase text-body mb-1">Recycled Polymer Blends</h3>
                            </div>
                            <span class="badge bg-black border border-body-subtle text-brand fw-bold fs-8">70%+ Recycled</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0">
                            Our primary performance tops and bottoms utilize post-consumer recycled polyester and regenerated nylon—repurposing ocean-bound plastics without sacrificing tensile strength or softness.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2: Ethical Production -->
                <div class="col-12 col-md-6">
                    <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-1 d-block">Workforce</span>
                            <h3 class="fs-5 fw-bold text-uppercase text-body mb-2">Ethical Manufacturing</h3>
                            <p class="text-secondary fs-7 mb-0">
                                We partner exclusively with SEDEX and WRAP-certified manufacturing facilities ensuring fair living wages, safe working environments, and zero forced labor.
                            </p>
                        </div>
                        <div class="mt-3 pt-3 border-top border-body-subtle">
                            <span class="text-secondary fs-8"><i class="bi bi-patch-check text-brand me-1"></i> WRAP Certified Partners</span>
                        </div>
                    </div>
                </div>

                <!-- Pillar 3: Circular Lifespan -->
                <div class="col-12 col-md-6">
                    <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-1 d-block">Durability</span>
                            <h3 class="fs-5 fw-bold text-uppercase text-body mb-2">Built To Endure</h3>
                            <p class="text-secondary fs-7 mb-0">
                                Fast fashion produces fast waste. We design high-tensile gear engineered to survive hundreds of wash-and-wear cycles, keeping clothes on the court and out of landfills.
                            </p>
                        </div>
                        <div class="mt-3 pt-3 border-top border-body-subtle">
                            <span class="text-secondary fs-8"><i class="bi bi-clock-history text-brand me-1"></i> Anti-Pilling & Retention</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- ABOUT US: ATHLETE & AMBASSADOR ROSTER SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row g-2">

        <!-- Header Banner Box -->
        <div class="col-12">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 text-center position-relative overflow-hidden">
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-trophy"></i> Team Smash
                </span>
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-2">
                    Tested By Pros. <br/><span class="editorial-accent-text">Driven By Passion.</span>
                </h2>
                <p class="text-secondary fs-6 mb-0 max-w-xl mx-auto">
                    From national tournaments to local club leagues, meet the squad testing our gear to the absolute limit.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-6 g-2">

        <!-- PLAYER 1: ADRIAN ARCON -->
        <div class="col">
            <article class="bg-body-tertiary border border-body-subtle rounded-4 h-100 d-flex flex-column justify-content-between overflow-hidden hover-card transition-all shadow-sm hover-shadow-lg">
                <div>
                    <!-- Player Image / Banner Area -->
                    <div class="position-relative overflow-hidden card-media-wrapper rounded-top-4" style="min-height:450px">
                        <img src="/smashapparel/assets/images/mtt-adrian.png"
                             alt="Adrian Arcon"
                             class="w-100 h-100 object-fit-cover  hover-card-img transition-transform duration-300"
                             loading="lazy">
                        <div class="position-absolute inset-0 hover-card-overlay bg-dark opacity-0 hover-opacity-25 transition-opacity"></div>
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand shadow-sm">ATP / ITF Circuit</span>
                    </div>

                    <!-- Player Meta & Bio -->
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="tag-dot"></span>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider">Tennis Pro • 6'6" Frame</span>
                        </div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-2 hover-text-brand transition-colors">Adrian Arcon</h2>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand-outline fs-8">ATP High: #1259</span>
                            <span class="text-muted fs-8">Age 24</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0 line-clamp-3">
                            A powerhouse on the court with a massive 6'6" frame, Adrian Arcon is an emerging Australian star climbing the professional ATP and ITF ranks with relentless determination and a formidable all-court game.
                        </p>
                    </div>
                </div>

                <!-- Footer Callout Link -->
                <div class="p-4 pt-0">
                    <hr class="border-body-subtle my-3">
                    <a href="/smashapparel/team/adrian-arcon" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                        View Full Profile <i class="bi bi-arrow-right transition-transform"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- PLAYER 2: STEFAN DJORDJIC -->
        <div class="col">
            <article class="bg-body-tertiary border border-body-subtle rounded-4 h-100 d-flex flex-column justify-content-between overflow-hidden hover-card transition-all shadow-sm hover-shadow-lg">
                <div>
                    <!-- Player Image / Banner Area -->
                    <div class="position-relative overflow-hidden card-media-wrapper rounded-top-4" style="min-height:450px">
                        <img src="/smashapparel/assets/images/mtt-stephan.jpg"
                             alt="Stefan Djordjic"
                             class="w-100 h-100 object-fit-cover  hover-card-img transition-transform duration-300"
                             loading="lazy">
                        <div class="position-absolute inset-0 hover-card-overlay bg-dark opacity-0 hover-opacity-25 transition-opacity"></div>
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand shadow-sm">Pro Pickleball</span>
                    </div>

                    <!-- Player Meta & Bio -->
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="tag-dot"></span>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider">Pickleball • Melbourne, VIC</span>
                        </div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-2 hover-text-brand transition-colors">Stefan Djordjic</h2>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand-outline fs-8">DUPR: Mid-4s</span>
                            <span class="text-muted fs-8">PPA Champ</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0 line-clamp-3">
                            Melbourne's own Stefan Djordjic is taking Australia's pickleball scene by storm, combining sharp agility with aggressive play to deliver championship victories on the pro circuit stage.
                        </p>
                    </div>
                </div>

                <!-- Footer Callout Link -->
                <div class="p-4 pt-0">
                    <hr class="border-body-subtle my-3">
                    <a href="/smashapparel/team/stefan-djordjic" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                        View Full Profile <i class="bi bi-arrow-right transition-transform"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- PLAYER 3: JEREMY BEALE -->
        <div class="col">
            <article class="bg-body-tertiary border border-body-subtle rounded-4 h-100 d-flex flex-column justify-content-between overflow-hidden hover-card transition-all shadow-sm hover-shadow-lg">
                <div>
                    <!-- Player Image / Banner Area -->
                    <div class="position-relative overflow-hidden card-media-wrapper rounded-top-4" style="min-height:450px">
                        <img src="/smashapparel/assets/images/jeremy-beale.webp"
                             alt="Jeremy Beale"
                             class="w-100 h-100 object-fit-cover  hover-card-img transition-transform duration-300"
                             loading="lazy">
                        <div class="position-absolute inset-0 hover-card-overlay bg-dark opacity-0 hover-opacity-25 transition-opacity"></div>
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand shadow-sm">ATP Tour Veteran</span>
                    </div>

                    <!-- Player Meta & Bio -->
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="tag-dot"></span>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider">Lefty • 6'4" Frame • Australia</span>
                        </div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-2 hover-text-brand transition-colors">Jeremy Beale</h2>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand-outline fs-8">ATP Singles: #459</span>
                            <span class="badge badge-brand-outline fs-8">Doubles: #224</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0 line-clamp-3">
                            Bringing lethal left-handed power and elite international experience, veteran star Jeremy Beale boasts multiple ITF titles and exceptional high-level tour success in both singles and doubles.
                        </p>
                    </div>
                </div>

                <!-- Footer Callout Link -->
                <div class="p-4 pt-0">
                    <hr class="border-body-subtle my-3">
                    <a href="/smashapparel/team/jeremy-beale" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                        View Full Profile <i class="bi bi-arrow-right transition-transform"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- PLAYER 4: OLIVER HANCIN -->
        <div class="col">
            <article class="bg-body-tertiary border border-body-subtle rounded-4 h-100 d-flex flex-column justify-content-between overflow-hidden hover-card transition-all shadow-sm hover-shadow-lg">
                <div>
                    <!-- Player Image / Banner Area -->
                    <div class="position-relative overflow-hidden card-media-wrapper rounded-top-4" style="min-height:450px">
                        <img src="/smashapparel/assets/images/player-ollie-1.webp"
                             alt="Oliver Hancin"
                             class="w-100 h-100 object-fit-cover hover-card-img transition-transform duration-300"
                             loading="lazy">
                        <div class="position-absolute inset-0 hover-card-overlay bg-dark opacity-0 hover-opacity-25 transition-opacity"></div>
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand shadow-sm">ITF Junior Star</span>
                    </div>

                    <!-- Player Meta & Bio -->
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="tag-dot"></span>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider">Junior Circuit • Australia</span>
                        </div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-2 hover-text-brand transition-colors">Oliver Hancin</h2>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand-outline fs-8">ITF High: #634</span>
                            <span class="text-muted fs-8">2x ITF Title Winner</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0 line-clamp-3">
                            One of Australia's standout junior talents, Oliver Hancin is rapidly surging through international rankings following back-to-back ITF J30 singles titles and impressive big-match composure.
                        </p>
                    </div>
                </div>

                <!-- Footer Callout Link -->
                <div class="p-4 pt-0">
                    <hr class="border-body-subtle my-3">
                    <a href="/smashapparel/player-ollie.php" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                        View Full Profile <i class="bi bi-arrow-right transition-transform"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- PLAYER 5: MARK HASKETT -->
        <div class="col">
            <article class="bg-body-tertiary border border-body-subtle rounded-4 h-100 d-flex flex-column justify-content-between overflow-hidden hover-card transition-all shadow-sm hover-shadow-lg">
                <div>
                    <!-- Player Image / Banner Area -->
                    <div class="position-relative overflow-hidden card-media-wrapper rounded-top-4" style="min-height:450px">
                        <img src="/smashapparel/assets/images/player-mark.webp"
                             alt="Mark Haskett"
                             class="w-100 h-100 object-fit-cover  hover-card-img transition-transform duration-300"
                             loading="lazy">
                        <div class="position-absolute inset-0 hover-card-overlay bg-dark opacity-0 hover-opacity-25 transition-opacity"></div>
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand shadow-sm">Blind Tennis</span>
                    </div>

                    <!-- Player Meta & Bio -->
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="tag-dot"></span>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider">B2 Singles • South Australia</span>
                        </div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-2 hover-text-brand transition-colors">Mark Haskett</h2>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand-outline fs-8">AUS #1 | Global #2</span>
                            <span class="text-muted fs-8">B2 Category</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0 line-clamp-3">
                            Mark Haskett has become one of Australia’s most inspiring sporting figures, rising to the top of the blind tennis world with determination, resilience, and elite competitive spirit. Ranked No. 1 in Australia and No. 2 globally in the B2 singles category, Haskett has transformed a late introduction to tennis into a remarkable international career.
                        </p>
                    </div>
                </div>

                <!-- Footer Callout Link -->
                <div class="p-4 pt-0">
                    <hr class="border-body-subtle my-3">
                    <a href="/smashapparel/team/mark-haskett" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                        View Full Profile <i class="bi bi-arrow-right transition-transform"></i>
                    </a>
                </div>
            </article>
        </div>

        <!-- PLAYER 6: VANESSA FITZGERALD -->
        <div class="col">
            <article class="bg-body-tertiary border border-body-subtle rounded-4 h-100 d-flex flex-column justify-content-between overflow-hidden hover-card transition-all shadow-sm hover-shadow-lg">
                <div>
                    <!-- Player Image / Banner Area -->
                    <div class="position-relative overflow-hidden card-media-wrapper rounded-top-4" style="min-height:450px">
                        <img src="/smashapparel/assets/images/player-vanessa.webp"
                             alt="Vanessa Fitzgerald"
                             class="w-100 h-100 object-fit-cover  hover-card-img transition-transform duration-300"
                             loading="lazy">
                        <div class="position-absolute inset-0 hover-card-overlay bg-dark opacity-0 hover-opacity-25 transition-opacity"></div>
                        <span class="position-absolute top-0 start-0 m-3 z-3 badge badge-brand shadow-sm">Junior Prodigy</span>
                    </div>

                    <!-- Player Meta & Bio -->
                    <div class="p-4">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="tag-dot"></span>
                            <span class="text-uppercase text-secondary fs-8 fw-semibold tracking-wider">Junior Circuit • Cairns, QLD</span>
                        </div>
                        <h2 class="fs-3 fw-bold text-uppercase text-body mb-2 hover-text-brand transition-colors">Vanessa Fitzgerald</h2>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge badge-brand-outline fs-8">AUS U-10 #1</span>
                            <span class="text-muted fs-8">Age 11</span>
                        </div>
                        <p class="text-secondary fs-7 mb-0 line-clamp-3">
                            Vanessa Fitzgerald is quickly becoming one of the brightest young talents in Australian tennis, already turning heads nationwide with her dominance on the junior circuit. The Cairns‑based prodigy held the No. 1 ranking in Australia for under‑10s, remaining undefeated for more than three years in her age group.
                        </p>
                    </div>
                </div>

                <!-- Footer Callout Link -->
                <div class="p-4 pt-0">
                    <hr class="border-body-subtle my-3">
                    <a href="/smashapparel/team/vanessa-fitzgerald" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                        View Full Profile <i class="bi bi-arrow-right transition-transform"></i>
                    </a>
                </div>
            </article>
        </div>

    </div>
</div>
<!-- ABOUT US: CORE VALUES / THE SMASH STANDARD SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row g-2">

        <!-- Section Header Banner -->
        <div class="col-12">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 text-center position-relative overflow-hidden">
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-shield-lock"></i> Our Code
                </span>
                <h2 class="display-5 fw-black text-uppercase tracking-tight text-body mb-2">
                    The Smash <br><span class="editorial-accent-text">Standard.</span>
                </h2>
                <p class="text-secondary fs-6 mb-0 max-w-xl mx-auto">
                    The non-negotiable pillars that govern every stitch we sow, design decision we make, and tournament we back.
                </p>
            </div>
        </div>

        <!-- Pillar 1: Uncompromising Fit -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center justify-content-center bg-black border border-body-subtle rounded-3 p-3 mb-3 text-brand">
                        <i class="bi bi-aspect-ratio fs-4"></i>
                    </div>
                    <span class="d-block text-uppercase tracking-widest fw-bold text-brand fs-8 mb-1">Pillar 01</span>
                    <h3 class="fs-5 fw-bold text-uppercase text-body mb-2">Uncompromising Fit</h3>
                    <p class="text-secondary fs-7 mb-0">
                        Tailored specifically for explosive court movements. Tailoring that stays locked in place during deep baseline lunges and high-reach overheads with zero riding up.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-top border-body-subtle">
                    <span class="text-secondary fs-8"><i class="bi bi-check2-square text-brand me-1"></i> Ergonomic Tailoring</span>
                </div>
            </div>
        </div>

        <!-- Pillar 2: Court-Tested Durability -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <!-- Added explicit icon sizing, line-height reset, and direct inline color fallback -->
                    <div class="d-inline-flex align-items-center justify-content-center bg-black border border-body-subtle rounded-3 p-3 mb-3 text-brand" style="width: 52px; height: 52px;">
                        <i class="bi bi-shield fs-4 text-brand d-inline-block lh-1" style="color: var(--bs-primary, #ccff00);"></i>
                    </div>
                    <span class="d-block text-uppercase tracking-widest fw-bold text-brand fs-8 mb-1">Pillar 02</span>
                    <h3 class="fs-5 fw-bold text-uppercase text-body mb-2">Court-Tested Durability</h3>
                    <p class="text-secondary fs-7 mb-0">
                        Tested by pro circuit athletes against high-friction court wear, sweat accumulation, and continuous washing—built to maintain shape and feel match after match.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-top border-body-subtle">
                    <span class="text-secondary fs-8"><i class="bi bi-check2-square text-brand me-1"></i> High-Tensile Construction</span>
                </div>
            </div>
        </div>

        <!-- Pillar 3: Community First -->
        <div class="col-12 col-lg-4">
            <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-inline-flex align-items-center justify-content-center bg-black border border-body-subtle rounded-3 p-3 mb-3 text-brand">
                        <i class="bi bi-heart-pulse fs-4"></i>
                    </div>
                    <span class="d-block text-uppercase tracking-widest fw-bold text-brand fs-8 mb-1">Pillar 03</span>
                    <h3 class="fs-5 fw-bold text-uppercase text-body mb-2">Community First</h3>
                    <p class="text-secondary fs-7 mb-0">
                        Smash Apparel thrive on passion and fellowship. We re-invest directly into junior development, grassroots tournaments, and supporting Australian athletes globally.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-top border-body-subtle">
                    <span class="text-secondary fs-8"><i class="bi bi-check2-square text-brand me-1"></i> Grassroots Reinvestment</span>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ABOUT US: CALL TO ACTION (CTA) BANNER SECTION -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row g-2">
        <div class="col-12">
            <section class="w-100 rounded-4 bg-brand py-5 px-4 px-md-5 position-relative overflow-hidden">
                <div class="row align-items-center justify-content-between gy-4">

                    <!-- LEFT COLUMN: LARGE EDITORIAL STATEMENT -->
                    <div class="col-12 col-lg-7 col-xl-8">
                        <span class="text-uppercase tracking-widest fw-bold text-black fs-8 mb-2 d-inline-flex align-items-center gap-2 opacity-75">
                            <i class="bi bi-lightning-charge-fill"></i> Elevate Your Game
                        </span>
                        <h2 class="display-4 fw-black text-black text-uppercase tracking-tight lh-1 mb-0">
                            Ready To Make Your Move?
                        </h2>
                    </div>

                    <!-- RIGHT COLUMN: ACTIONS & COMMUNITY LINK -->
                    <div class="col-12 col-lg-5 col-xl-4 text-start text-lg-end d-flex flex-column align-items-start align-items-lg-end">
                        <!-- PRIMARY BLACK PILL BUTTON -->
                        <a href="/shop" class="btn btn-dark bg-black text-white rounded-pill px-4 py-3 fw-bold text-uppercase fs-6 d-inline-flex align-items-center gap-2 shadow-sm border-0 mb-3 hover-scale">
                            <span>Explore The Collection</span>
                            <i class="bi bi-arrow-right fs-6"></i>
                        </a>

                        <!-- SECONDARY LINK / TAGLINE -->
                        <a href="#newsletter" class="fs-6 text-black fw-bold text-uppercase tracking-wider mb-0 text-decoration-underline d-inline-flex align-items-center gap-2 opacity-90 hover-opacity-100">
                            <span>Join The Squad</span>
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>
