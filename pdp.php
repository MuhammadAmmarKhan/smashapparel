<?php
$page_slug = "home";
$page_title = "Smash Apparel";
$page_description = "Smash Apparel";
$page_keywords = "Smash Apparel";
ob_start(); ?>
<!-- LEFT GALLERY SECTION ONLY -->
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-6">
            <div class="row g-3 align-items-center align-items-md-start sticky-top" style="top: 1rem; z-index: 1;">

                <!-- 1. SMALL IMAGES SECTION (Single rounded-3 container, no outer box on main image) -->
                <div class="col-12 col-md-auto order-2 order-md-1 sticky-top" style="top: 1rem; z-index: 1;">
                    <div class="d-flex flex-row flex-md-column align-items-center justify-content-center gap-2 bg-body-tertiary py-3 rounded-4 ">

                        <!-- Traverse PREV / UP Button -->
                        <button type="button"
                                class="btn btn-dark bg-black border-0 rounded-circle p-0 flex-shrink-0 js-thumb-prev"
                                style="width: 32px; height: 32px;" aria-label="Previous thumbnails">
                            <i class="bi bi-chevron-left d-md-none"></i>
                            <i class="bi bi-chevron-up d-none d-md-block"></i>
                        </button>

                        <!-- Scrollable Track (Rounded-3 parent container holding raw 130x130 images) -->
                        <div class="d-flex flex-row flex-md-column gap-2 overflow-hidden p-2 js-thumb-scroll-container"
                             style="max-height: calc(100vh - 310px); max-width: 100%; scroll-behavior: smooth;">

                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 active js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                    data-index="0">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                     alt="Thumbnail 1"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                                    data-index="1">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                                     alt="Thumbnail 2"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                    data-index="2">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                     alt="Thumbnail 3"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                                    data-index="3">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                                     alt="Thumbnail 4"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                    data-index="4">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                     alt="Thumbnail 5"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                                    data-index="5">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                                     alt="Thumbnail 6"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                            <!-- Extra 7th image triggers thumbnail scrolling -->
                            <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                                    style="width: 130px; height: 130px;"
                                    data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                    data-index="6">
                                <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                                     alt="Thumbnail 7"
                                     class="img-fluid"
                                     style="object-fit: cover; object-position: top;">
                            </button>

                        </div>

                        <!-- Traverse NEXT / DOWN Button -->
                        <button type="button"
                                class="btn btn-dark bg-black border-0 rounded-circle p-0 flex-shrink-0 js-thumb-next"
                                style="width: 32px; height: 32px;" aria-label="Next thumbnails">
                            <i class="bi bi-chevron-right d-md-none"></i>
                            <i class="bi bi-chevron-down d-none d-md-block"></i>
                        </button>

                    </div>
                </div>

                <!-- 2. DIRECT LARGE IMAGE (NO OUTER BOX ENCLOSURE) -->
                <div class="col-12 col-md order-1 order-md-2 position-relative sticky-top">
                    <img src="/smashapparel/assets/images/2026 Ladies SA Performance Top Qtr Sleeve - Purple 1.webp"
                         alt="Product Main View"
                         id="js-main-product-img"
                         class="w-100 h-auto object-fit-contain cursor-pointer d-block rounded-4"
                         style="max-height: 540px;"
                         data-bs-toggle="modal"
                         data-bs-target="#productGalleryModal">

                    <!-- Cycle PREV Arrow -->
                    <button type="button"
                            class="btn btn-dark bg-black border-0 rounded-circle position-absolute top-50 start-0 translate-middle-y ms-3 p-0 d-flex align-items-center justify-content-center js-main-prev"
                            style="width: 38px; height: 38px; z-index: 5;" aria-label="Previous Image">
                        <i class="bi bi-chevron-left text-white fs-6"></i>
                    </button>

                    <!-- Cycle NEXT Arrow -->
                    <button type="button"
                            class="btn btn-dark bg-black border-0 rounded-circle position-absolute top-50 end-0 translate-middle-y me-3 p-0 d-flex align-items-center justify-content-center js-main-next"
                            style="width: 38px; height: 38px; z-index: 5;" aria-label="Next Image">
                        <i class="bi bi-chevron-right text-white fs-6"></i>
                    </button>

                    <!-- Expand Badge Overlay -->
                    <span class="position-absolute bottom-0 end-0 m-3 badge bg-brand text-body bg-opacity-75 fw-medium px-3 py-2 rounded-pill fs-8 pointer-events-none d-flex align-items-center gap-2 border border-body-subtle shadow-sm"
                          style="z-index: 5;">
                <i class="bi bi-arrows-angle-expand"></i> Expand
            </span>
                </div>

            </div>
        </div>
        <!-- RIGHT SIDE PRODUCT DETAILS SECTION -->
        <div class="col-12 col-lg-6 col-xl-6 ps-lg-0 mt-4 mt-lg-0">

            <div class="sticky-top" style="top: 1rem; z-index: 1;">
                <div class="bg-body-tertiary rounded-4 px-4 py-3 pb-5 border border-body-subtle">

                    <!-- Category & Title -->
                    <div class="mb-2">
                        <span class="badge badge-brand mb-2">In Stock</span>
                        <h1 class="fs-2 text-uppercase fw-bold text-body mt-1 mb-2">2026 Ladies SA Performance Singlet</h1>
                    </div>

                    <!-- Price & Ratings -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="d-flex align-items-baseline gap-2">
                            <span class="display-6 editorial-accent-text text-brand">$99.95</span>
                            <span class="text-muted text-decoration-line-through fs-6">$130.00</span>
                            <span class="badge badge-brand-outline px-2 py-1 fs-8">Save 25%</span>
                        </div>
                        <div class="vr my-1"></div>
                        <div class="d-flex align-items-center gap-1">
                            <div class="text-brand fs-7">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <span class="fw-semibold fs-7 text-body ms-1">4.8</span>
                            <a href="#reviews" class="text-muted fs-7 hover-theme text-decoration-none ms-1">(128 reviews)</a>
                        </div>
                    </div>

                    <!-- Short Description -->
                    <p class="text-secondary fs-6 mb-4">
                        Engineered with ultra-lightweight moisture-wicking fabric designed to keep you cool and dry
                        during intense training sessions. Features athletic ergonomics and zero-chafe flatlock seams.
                    </p>

                    <!-- Store Availability Box -->
                    <div class="bg-body rounded-3 p-3 border border-body-subtle mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-geo-alt-fill text-brand fs-5"></i>
                                <span class="fw-bold text-body fs-7 text-uppercase tracking-wider">Store Availability</span>
                            </div>
                            <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle fw-semibold fs-8">Low Stock (2 left)</span>
                        </div>
                        <div class="ps-4">
                            <div class="fw-bold text-body fs-6">RW - Epping Shop</div>
                            <div class="text-muted fs-7 mb-2">Shop 4/59 Willandra Drive, Epping VIC 3076, Australia</div>
                            <div class="d-flex align-items-center gap-2 text-muted fs-8">
                                <i class="bi bi-clock-history text-brand"></i>
                                <span>Usually ships within 2 - 4 business days</span>
                            </div>
                        </div>
                    </div>

                    <hr class="border-body-subtle my-4">

                    <!-- Color Selection -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold text-body mb-2">
                            Color: <span class="fw-normal text-muted" id="selectedColor">Purple</span>
                        </label>
                        <div class="d-flex align-items-center gap-2">
                            <input type="radio" class="btn-check" name="colorOptions" id="colorPurple" checked autocomplete="off">
                            <label class="btn p-1 rounded-circle border-2 border-brand-subtle d-flex align-items-center justify-content-center"
                                   for="colorPurple" style="width: 36px; height: 36px;">
                                <span class="rounded-circle w-100 h-100" style="background-color: #6f42c1;"></span>
                            </label>

                            <input type="radio" class="btn-check" name="colorOptions" id="colorBlack" autocomplete="off">
                            <label class="btn p-1 rounded-circle border-2 border-body-subtle d-flex align-items-center justify-content-center"
                                   for="colorBlack" style="width: 36px; height: 36px;">
                                <span class="rounded-circle w-100 h-100" style="background-color: #212529;"></span>
                            </label>

                            <input type="radio" class="btn-check" name="colorOptions" id="colorTeal" autocomplete="off">
                            <label class="btn p-1 rounded-circle border-2 border-body-subtle d-flex align-items-center justify-content-center"
                                   for="colorTeal" style="width: 36px; height: 36px;">
                                <span class="rounded-circle w-100 h-100" style="background-color: #20c997;"></span>
                            </label>
                        </div>
                    </div>

                    <!-- Installment Payment Options -->
                    <div class="bg-body rounded-3 p-3 border border-body-subtle mb-4 fs-7 text-secondary">
                        <div class="d-flex align-items-center flex-wrap gap-1 mb-2">
                            <span>or 4 interest-free payments of <strong>$24.99</strong> with</span>
                            <a href="#" class="d-inline-flex align-items-center hover-opacity text-decoration-none" data-bs-toggle="modal" data-bs-target="#afterpayModal">
                                <svg width="75" height="15" viewBox="0 0 102 21" fill="none" xmlns="http://www.w3.org/2000/svg" class="ms-1">
                                    <rect width="102" height="21" rx="10.5" fill="#B2FCE4"/>
                                    <path d="M83.18 6.05L80.37 14.88H77.92L75.12 6.05H77.47L79.14 12.02L80.82 6.05H83.18ZM71.22 11.23C71.22 13.25 69.83 14.88 67.75 14.88C65.68 14.88 64.28 13.25 64.28 11.23C64.28 9.22 65.68 7.58 67.75 7.58C69.83 7.58 71.22 9.22 71.22 11.23ZM62.08 11.23C62.08 6.13 67.75 6.13 67.75 6.13C67.75 6.13 73.42 6.13 73.42 11.23C73.42 16.33 67.75 16.33 67.75 16.33C67.75 16.33 62.08 16.33 62.08 11.23ZM56.33 14.88H54.13V6.05H56.33V14.88ZM28.82 14.88H26.62V6.05H28.82V14.88ZM48.65 8.92V6.05H51.48V8.92H48.65ZM48.65 14.88V9.97H51.48V14.88H48.65ZM44.25 11.23C44.25 12.63 43.32 13.58 41.98 13.58C40.65 13.58 39.72 12.63 39.72 11.23C39.72 9.83 40.65 8.88 41.98 8.88C43.32 8.88 44.25 9.83 44.25 11.23ZM37.52 11.23C37.52 14.62 39.52 15.38 41.98 15.38C44.45 15.38 46.45 14.62 46.45 11.23C46.45 7.85 44.45 7.08 41.98 7.08C39.52 7.08 37.52 7.85 37.52 11.23ZM32.32 7.58V6.05H34.52V14.88H32.32V13.35C31.65 14.38 30.38 15.02 29.12 15.02C26.12 15.02 24.12 12.85 24.12 9.98C24.12 7.12 26.12 4.95 29.12 4.95C30.38 4.95 31.65 5.58 32.32 6.62M32.32 9.98C32.32 8.58 31.18 7.32 29.62 7.32C28.05 7.32 26.92 8.58 26.92 9.98C26.92 11.38 28.05 12.65 29.62 12.65C31.18 12.65 32.32 11.38 32.32 9.98Z" fill="#000000"/>
                                </svg>
                            </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                            <span>or 6 weekly interest-free payments from <strong>$16.66</strong></span>
                            <a href="#" class="text-body text-decoration-underline hover-theme fs-8" data-bs-toggle="modal" data-bs-target="#paymentInfoModal">
                                what's this?
                            </a>
                        </div>
                    </div>

                    <!-- Size Selection -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <label class="form-label fw-semibold text-body mb-0">Select Size</label>
                            <a href="#sizeGuideModal"
                               class="hover-theme text-muted fs-7 text-decoration-none"
                               data-bs-toggle="offcanvas"
                               data-bs-target="#sizeGuideModal"
                               aria-controls="sizeGuideModal">
                                <i class="bi bi-ruler me-1 text-brand"></i>Size Guide
                            </a>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <input type="radio" class="btn-check" name="sizeOptions" id="size6" autocomplete="off">
                            <label class="btn btn-outline-brand px-3 py-2 border-body-subtle text-body" for="size6">6</label>

                            <input type="radio" class="btn-check" name="sizeOptions" id="size8" autocomplete="off" checked>
                            <label class="btn btn-outline-brand px-3 py-2 border-brand text-brand" for="size8">8</label>

                            <input type="radio" class="btn-check" name="sizeOptions" id="size10" autocomplete="off">
                            <label class="btn btn-outline-brand px-3 py-2 border-body-subtle text-body" for="size10">10</label>

                            <input type="radio" class="btn-check" name="sizeOptions" id="size12" autocomplete="off">
                            <label class="btn btn-outline-brand px-3 py-2 border-body-subtle text-body" for="size12">12</label>

                            <input type="radio" class="btn-check" name="sizeOptions" id="size14" autocomplete="off">
                            <label class="btn btn-outline-brand px-3 py-2 border-body-subtle text-body" for="size14">14</label>

                            <input type="radio" class="btn-check" name="sizeOptions" id="size16" autocomplete="off" disabled>
                            <label class="btn btn-outline-brand px-3 py-2 border-body-subtle text-body opacity-50" for="size16">16</label>
                        </div>
                    </div>

                    <!-- Quantity & Add to Cart -->
                    <div class="row g-2 mb-3">
                        <div class="col-4 col-sm-3">
                            <div class="input-group border border-body-subtle rounded-3 overflow-hidden">
                                <button class="btn btn-link text-body p-0 border-0 px-2 text-brand-hover" type="button" id="btnQtyDecrease">
                                    <i class="bi bi-dash"></i>
                                </button>
                                <input type="text" class="form-control text-center border-0 px-0 fw-semibold bg-transparent" value="1" id="inputQuantity" readonly>
                                <button class="btn btn-link text-body p-0 border-0 px-2 text-brand-hover" type="button" id="btnQtyIncrease">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-8 col-sm-9">
                            <button type="button" class="btn btn-brand w-100 py-2 d-flex align-items-center justify-content-center gap-2 rounded-pill">
                                <i class="bi bi-bag-plus fs-5"></i> Add to Cart <span class="btn-indicator-line"></span>
                            </button>
                        </div>
                    </div>

                    <!-- Buy with Shop Express Checkout -->
                    <div class="mb-3">
                        <button type="button" class="btn btn-primary bg-indigo border-0 w-100 py-2 d-flex align-items-center justify-content-center gap-2 rounded-pill" style="background-color: #5a31f4;">
                            <span class="fw-bold text-white">Buy with</span>
                            <span class="badge bg-white text-dark rounded-2 px-2 py-1 font-monospace fw-bold fs-7">shop</span>
                        </button>
                    </div>

                    <!-- More Payment Options & Store Pickup Info -->
                    <div class="text-center mb-4">
                        <a href="#" class="text-muted fs-7 text-decoration-underline hover-theme d-inline-block mb-3">
                            More payment options
                        </a>

                        <div class="bg-body rounded-3 p-3 border border-body-subtle text-start">
                            <div class="d-flex align-items-start gap-2 mb-1">
                                <i class="bi bi-check-circle-fill text-success fs-6 mt-1"></i>
                                <div>
                                    <span class="fw-semibold text-body fs-7 d-block">Pickup available at Racquet World Epping Shop</span>
                                    <span class="text-muted fs-8 d-block">Usually ready in 2-4 days</span>
                                    <a href="#" class="text-body fs-8 text-decoration-underline hover-theme mt-1 d-inline-block" data-bs-toggle="modal" data-bs-target="#storeInfoModal">
                                        View store information
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Secondary Action Buttons -->
                    <div class="d-flex gap-2 mb-4">
                        <button class="btn btn-outline-brand w-50 py-2 rounded-3 border-body-subtle text-body fs-7 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-heart text-brand"></i> Add to Wishlist
                        </button>
                        <button class="btn btn-outline-brand w-50 py-2 rounded-3 border-body-subtle text-body fs-7 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-share text-brand"></i> Share
                        </button>
                    </div>

                    <!-- Feature Perks List -->
                    <div class="bg-body rounded-4 p-3 border border-body-subtle">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <i class="bi bi-truck fs-5 text-brand"></i>
                            <span class="fs-7 text-body">Free standard shipping on orders over <strong>$75</strong></span>
                        </div>
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <i class="bi bi-arrow-counterclockwise fs-5 text-brand"></i>
                            <span class="fs-7 text-body">Hassle-free <strong>30-day</strong> returns & exchanges</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <i class="bi bi-shield-check fs-5 text-brand"></i>
                            <span class="fs-7 text-body">Guaranteed 100% authentic Smash Apparel</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="bg-body-tertiary rounded-4 p-4 p-md-5 border border-body-subtle">
        <div class="row justify-content-center">
            <div class="col-12">

                <!-- Section Title -->
                <h2 class="fs-3 fw-bold text-body mb-4">Elevate Your Game with Smash Apparel Ladies Performance Shirt!</h2>

                <!-- Intro Paragraphs -->
                <p class="text-secondary fs-6 mb-3">
                    Get ready to serve up style and comfort with the Smash Apparel Ladies Performance Shirt! Made from a fabulous blend of 88% polyester and 12% polyurethane, this shirt is designed for the fierce female athlete who loves to look great while playing hard.
                </p>

                <p class="text-secondary fs-6 mb-3">
                    Our UV-reducing materials intercept those pesky rays, keeping you cool and protected as you dominate the court. The innovative stretch fabric is not only flexible and forgiving but also fashionable, allowing you to move freely and confidently with every swing.
                </p>

                <p class="text-secondary fs-6 mb-3">
                    Say goodbye to static cling! Thanks to the carbon-impregnated conductive fibers, you'll stay grounded and focused on your game. Plus, our sweat-absorbent and quick-drying fabric ensures you remain dry and comfortable, no matter how intense the match gets.
                </p>

                <p class="text-secondary fs-6 mb-4">
                    And let's talk about our Ultra Cool Technology! This amazing feature absorbs heat and perspiration, lowering your body temperature by up to 3°C, so you can stay cool as a cucumber, even in the heat of battle.
                </p>

                <!-- Choice List -->
                <div class="mb-4">
                    <p class="text-body fw-medium mb-2">When you choose Smash Apparel, you're embracing an amazing blend of:</p>
                    <ul class="list-unstyled ps-3 mb-0">
                        <li class="d-flex align-items-center gap-2 mb-2 text-secondary fs-6">
                            <i class="bi bi-check-circle-fill text-brand fs-7"></i>
                            <span><strong>Style</strong></span>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-2 text-secondary fs-6">
                            <i class="bi bi-check-circle-fill text-brand fs-7"></i>
                            <span><strong>Performance</strong></span>
                        </li>
                        <li class="d-flex align-items-center gap-2 mb-0 text-secondary fs-6">
                            <i class="bi bi-check-circle-fill text-brand fs-7"></i>
                            <span><strong>Sustainability</strong></span>
                        </li>
                    </ul>
                </div>

                <p class="text-secondary fs-6 mb-4">
                    Elevate your tennis wardrobe with the Smash Apparel Ladies Performance Shirt - where playful style meets unbeatable performance! Get ready to ace your game in style!
                </p>

                <!-- Tagline Callout -->
                <div class="text-center my-4 py-2">
                    <p class="fs-5 fw-bold text-body mb-0">
                        Smash Apparel - <span class="text-brand">Passion for Performance!</span>
                    </p>
                </div>

                <hr class="border-body-subtle my-4">

                <!-- Detailed Specifications & Highlights -->
                <div class="row g-4 mt-1">
                    <div class="col-12">
                        <p class="text-body mb-2"><strong>Materials:</strong></p>
                        <ul class="list-unstyled ps-3 mb-0">
                            <li class="d-flex align-items-center gap-2 text-secondary fs-6">
                                <i class="bi bi-dot text-brand fs-4"></i>
                                <span>88% Polyester, 12% Polyurethane</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-12">
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="text-secondary fs-6">
                                <strong class="text-body">Stretchy and Free</strong> - Our revolutionary stretch fabric allows for unrestricted movement, enhancing your play and making every leap, sprint, and twist feel effortless.
                            </li>
                            <li class="text-secondary fs-6">
                                <strong class="text-body">No More Static</strong> - Thanks to the carbon-infused conductive fibres woven into the fabric, you can say goodbye to pesky static electricity. Stay focused and fabulous!
                            </li>
                            <li class="text-secondary fs-6">
                                <strong class="text-body">Ultra Dry Technology</strong> - Experience the magic of advanced materials that pull moisture away from your skin, keeping you comfortably dry no matter what challenges come your way.
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-2 px-md-3 py-2">
    <section class="w-100 rounded-4 bg-body-tertiary border border-body-subtle p-4 p-md-5">
        <div class="d-flex flex-column flex-md-row align-items-start align-items-md-end justify-content-between gap-3 mb-3 pb-3 border-bottom border-body-subtle">
            <div>
    <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-1">
        <i class="bi bi-heart"></i> Curated For You
    </span>
                <h3 class="display-4 fw-black text-uppercase tracking-tight lh-09 mb-0 text-body">
                    You May <br>
                    <span class="editorial-accent-text">Like.</span>
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
<!-- JAVASCRIPT FOR THUMBNAIL & MAIN IMAGE CYCLING -->
<!-- Size Guide Modal Trigger Button (Reference) -->
<!-- <button type="button" class="btn btn-outline-brand" data-bs-toggle="modal" data-bs-target="#sizeGuideModal">Size Guide</button> -->

<!-- Size Chart Modal -->
<!-- Size Guide Offcanvas Drawer -->
<div class="offcanvas offcanvas-end bg-transparent border-0 p-0 px-md-4 js-size-drawer-container" tabindex="-1"
     id="sizeGuideModal" style="width: 700px; max-width: 100vw;">
    <div class="bg-body-tertiary border-md rounded-0 rounded-md-4 rounded-4 d-flex flex-column overflow-hidden custom-drawer-content h-100 h-md-auto"
         style="margin: 0;">

        <!-- Header -->
        <div class="offcanvas-header d-flex flex-column align-items-stretch p-3 p-md-4 pb-2 border-0">
            <div class="d-flex justify-content-between align-items-center w-100 mb-1">
                <div>
                    <span class="badge badge-brand mb-1">Fit & Sizing</span>
                    <h2 class="fw-bolder m-0 text-body tracking-tight fs-3 fs-md-2 text-uppercase">
                        Size Guide
                    </h2>
                </div>
                <button type="button"
                        class="btn bg-black text-white rounded-4 p-2 d-flex align-items-center justify-content-center border-0 btn-close-custom"
                        data-bs-dismiss="offcanvas" aria-label="Close" style="width: 38px; height: 38px;">
                    <i class="bi bi-x-lg fs-6"></i>
                </button>
            </div>
            <!-- Separator Bar Target -->
            <div class="w-100 bg-secondary-subtle my-2 my-md-3 rounded-pill cart-progress-bar"
                 style="height: 6px;"></div>
        </div>

        <!-- Body -->
        <div class="offcanvas-body px-3 px-md-4 py-0 d-flex flex-column justify-content-between rounded-4 overflow-x-hidden overflow-y-auto">

            <div class="d-flex flex-column gap-3 py-2">
                <!-- Unit Switcher Tabs -->
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <p class="text-secondary small mb-0 fs-7">Select measurement system:</p>
                    <ul class="nav nav-pills bg-body border border-body-subtle p-1 rounded-pill" id="sizeUnitTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill px-3 py-1 fs-8 fw-bold text-uppercase" id="cm-tab" data-bs-toggle="pill" data-bs-target="#pills-cm" type="button" role="tab" aria-selected="true">CM</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill px-3 py-1 fs-8 fw-bold text-uppercase" id="inches-tab" data-bs-toggle="pill" data-bs-target="#pills-inches" type="button" role="tab" aria-selected="false">INCHES</button>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" id="sizeUnitTabContent">

                    <!-- CM Table Panel -->
                    <div class="tab-pane fade show active" id="pills-cm" role="tabpanel" aria-labelledby="cm-tab">
                        <div class="card bg-body border rounded-4 p-2 p-md-3">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0 text-center fs-7">
                                    <thead class="text-uppercase fs-8 tracking-wider border-bottom border-body-subtle">
                                    <tr>
                                        <th class="py-3 px-3 text-start text-body">AU/UK Size</th>
                                        <th class="py-3 px-2 text-body">Bust (cm)</th>
                                        <th class="py-3 px-2 text-body">Waist (cm)</th>
                                        <th class="py-3 px-2 text-body">Hips (cm)</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">6 (XS)</td>
                                        <td>78 - 82</td>
                                        <td>60 - 64</td>
                                        <td>86 - 90</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">8 (S)</td>
                                        <td>83 - 87</td>
                                        <td>65 - 69</td>
                                        <td>91 - 95</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">10 (M)</td>
                                        <td>88 - 92</td>
                                        <td>70 - 74</td>
                                        <td>96 - 100</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">12 (L)</td>
                                        <td>93 - 97</td>
                                        <td>75 - 79</td>
                                        <td>101 - 105</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">14 (XL)</td>
                                        <td>98 - 102</td>
                                        <td>80 - 84</td>
                                        <td>106 - 110</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">16 (2XL)</td>
                                        <td>103 - 108</td>
                                        <td>85 - 90</td>
                                        <td>111 - 116</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Inches Table Panel -->
                    <div class="tab-pane fade" id="pills-inches" role="tabpanel" aria-labelledby="inches-tab">
                        <div class="card bg-body border rounded-4 p-2 p-md-3">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0 text-center fs-7">
                                    <thead class="text-uppercase fs-8 tracking-wider border-bottom border-body-subtle">
                                    <tr>
                                        <th class="py-3 px-3 text-start text-body">AU/UK Size</th>
                                        <th class="py-3 px-2 text-body">Bust (in)</th>
                                        <th class="py-3 px-2 text-body">Waist (in)</th>
                                        <th class="py-3 px-2 text-body">Hips (in)</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text-secondary">
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">6 (XS)</td>
                                        <td>30.7 - 32.2</td>
                                        <td>23.6 - 25.2</td>
                                        <td>33.8 - 35.4</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">8 (S)</td>
                                        <td>32.6 - 34.2</td>
                                        <td>25.6 - 27.1</td>
                                        <td>35.8 - 37.4</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">10 (M)</td>
                                        <td>34.6 - 36.2</td>
                                        <td>27.5 - 29.1</td>
                                        <td>37.8 - 39.3</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">12 (L)</td>
                                        <td>36.6 - 38.1</td>
                                        <td>29.5 - 31.1</td>
                                        <td>39.7 - 41.3</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">14 (XL)</td>
                                        <td>38.5 - 40.1</td>
                                        <td>31.5 - 33.0</td>
                                        <td>41.7 - 43.3</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold text-start px-3 text-body">16 (2XL)</td>
                                        <td>40.5 - 42.5</td>
                                        <td>33.4 - 35.4</td>
                                        <td>43.7 - 45.6</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- How to Measure Box -->
                <div class="card bg-body border rounded-4 p-3">
                    <div class="d-flex align-items-start gap-3">
                        <div class="bg-black text-white rounded-circle p-2 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 38px; height: 38px;">
                            <i class="bi bi-ruler fs-6 text-brand"></i>
                        </div>
                        <div>
                            <h6 class="fw-bolder text-body mb-1 fs-7 text-uppercase tracking-wider">How to measure</h6>
                            <p class="text-secondary fs-8 mb-0">
                                <strong>Bust:</strong> Measure around the fullest part of your chest.<br>
                                <strong>Waist:</strong> Measure around your natural waistline, keeping tape comfortable.<br>
                                <strong>Hips:</strong> Measure around the fullest part of your hips.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <div class="offcanvas-footer p-3 p-md-4 border-top border-0 bg-body mt-auto">
            <button type="button"
                    class="btn btn-brand w-100 rounded-pill py-3 fs-6 fw-bolder tracking-wider d-flex align-items-center justify-content-center gap-2"
                    data-bs-dismiss="offcanvas">
                <span>Got It</span>
                <i class="bi bi-check-lg fs-6"></i>
            </button>
        </div>

    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mainImg = document.getElementById('js-main-product-img');
        const thumbContainer = document.querySelector('.js-thumb-scroll-container');
        const thumbBtns = document.querySelectorAll('.js-thumb-btn');
        const thumbPrev = document.querySelector('.js-thumb-prev');
        const thumbNext = document.querySelector('.js-thumb-next');
        const mainPrev = document.querySelector('.js-main-prev');
        const mainNext = document.querySelector('.js-main-next');

        let currentIndex = 0;
        const totalImages = thumbBtns.length;

        function updateActiveImage(index) {
            currentIndex = (index + totalImages) % totalImages;
            const activeBtn = thumbBtns[currentIndex];
            const newSrc = activeBtn.getAttribute('data-img-src');

            if (mainImg) mainImg.src = newSrc;

            thumbBtns.forEach(btn => btn.classList.remove('active', 'opacity-100'));
            activeBtn.classList.add('active');

            activeBtn.scrollIntoView({behavior: 'smooth', block: 'nearest', inline: 'nearest'});
        }

        thumbBtns.forEach((btn, idx) => {
            btn.addEventListener('click', () => updateActiveImage(idx));
        });

        if (mainPrev) mainPrev.addEventListener('click', () => updateActiveImage(currentIndex - 1));
        if (mainNext) mainNext.addEventListener('click', () => updateActiveImage(currentIndex + 1));

        if (thumbNext) {
            thumbNext.addEventListener('click', () => {
                const isDesktop = window.innerWidth >= 768;
                thumbContainer.scrollBy({
                    top: isDesktop ? 138 : 0,
                    left: isDesktop ? 0 : 138,
                    behavior: 'smooth'
                });
            });
        }

        if (thumbPrev) {
            thumbPrev.addEventListener('click', () => {
                const isDesktop = window.innerWidth >= 768;
                thumbContainer.scrollBy({
                    top: isDesktop ? -138 : 0,
                    left: isDesktop ? 0 : -138,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>
<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>
