<?php
$page_slug = "home";
$page_title = "Smash Apparel";
$page_description = "Smash Apparel";
$page_keywords = "Smash Apparel";
ob_start(); ?>
<!-- LEFT GALLERY SECTION ONLY -->
<div class="col-12 col-lg-6 col-xl-5">
    <div class="row g-3 align-items-center align-items-md-start">

        <!-- 1. SMALL IMAGES SECTION (Single rounded-3 container, no outer box on main image) -->
        <div class="col-12 col-md-auto order-2 order-md-1">
            <div class="d-flex flex-row flex-md-column align-items-center justify-content-center gap-2">

                <!-- Traverse PREV / UP Button -->
                <button type="button" class="btn btn-sm btn-outline-secondary rounded-circle p-0 flex-shrink-0 js-thumb-prev" style="width: 32px; height: 32px;" aria-label="Previous thumbnails">
                    <i class="bi bi-chevron-left d-md-none"></i>
                    <i class="bi bi-chevron-up d-none d-md-block"></i>
                </button>

                <!-- Scrollable Track (Rounded-3 parent container holding raw 130x130 images) -->
                <div class="d-flex flex-row flex-md-column gap-2 overflow-hidden bg-body-tertiary rounded-3 p-2 border border-body-subtle js-thumb-scroll-container"
                     style="max-height: 540px; max-width: 100%; scroll-behavior: smooth;">

                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 active js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" data-index="0">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                             alt="Thumbnail 1"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp" data-index="1">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                             alt="Thumbnail 2"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" data-index="2">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                             alt="Thumbnail 3"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp" data-index="3">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                             alt="Thumbnail 4"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" data-index="4">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                             alt="Thumbnail 5"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp" data-index="5">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 2.webp"
                             alt="Thumbnail 6"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                    <!-- Extra 7th image triggers thumbnail scrolling -->
                    <button class="btn p-0 border-0 overflow-hidden flex-shrink-0 js-thumb-btn"
                            style="width: 130px; height: 130px;"
                            data-img-src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp" data-index="6">
                        <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                             alt="Thumbnail 7"
                             class="img-fluid"
                             style="object-fit: cover; object-position: top;">
                    </button>

                </div>

                <!-- Traverse NEXT / DOWN Button -->
                <button type="button" class="btn btn-sm btn-outline-secondary rounded-circle p-0 flex-shrink-0 js-thumb-next" style="width: 32px; height: 32px;" aria-label="Next thumbnails">
                    <i class="bi bi-chevron-right d-md-none"></i>
                    <i class="bi bi-chevron-down d-none d-md-block"></i>
                </button>

            </div>
        </div>

        <!-- 2. DIRECT LARGE IMAGE (NO OUTER BOX ENCLOSURE) -->
        <div class="col-12 col-md order-1 order-md-2 position-relative">
            <img src="/smashapparel/assets/images/2026 Ladies SA Performance Singlet - Purple 1.webp"
                 alt="Product Main View"
                 id="js-main-product-img"
                 class="w-100 h-auto object-fit-contain cursor-pointer d-block"
                 style="max-height: 540px;"
                 data-bs-toggle="modal"
                 data-bs-target="#productGalleryModal">

            <!-- Cycle PREV Arrow -->
            <button type="button" class="btn btn-dark bg-opacity-75 border-0 rounded-circle position-absolute top-50 start-0 translate-middle-y ms-3 p-0 d-flex align-items-center justify-content-center js-main-prev" style="width: 38px; height: 38px; z-index: 5;" aria-label="Previous Image">
                <i class="bi bi-chevron-left text-white fs-6"></i>
            </button>

            <!-- Cycle NEXT Arrow -->
            <button type="button" class="btn btn-dark bg-opacity-75 border-0 rounded-circle position-absolute top-50 end-0 translate-middle-y me-3 p-0 d-flex align-items-center justify-content-center js-main-next" style="width: 38px; height: 38px; z-index: 5;" aria-label="Next Image">
                <i class="bi bi-chevron-right text-white fs-6"></i>
            </button>

            <!-- Expand Badge Overlay -->
            <span class="position-absolute bottom-0 end-0 m-3 badge bg-body-emphasis text-body bg-opacity-75 fw-medium px-3 py-2 rounded-pill fs-8 pointer-events-none d-flex align-items-center gap-2 border border-body-subtle shadow-sm" style="z-index: 5;">
                <i class="bi bi-arrows-angle-expand"></i> Expand
            </span>
        </div>

    </div>
</div>

<!-- JAVASCRIPT FOR THUMBNAIL & MAIN IMAGE CYCLING -->
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

            activeBtn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'nearest' });
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
