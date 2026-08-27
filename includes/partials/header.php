<div class="container-fluid px-2 px-md-3 pt-2">
    <div class="top-announcement-bar bg-black text-white py-0 px-3 rounded-4 border border-dark  mb-2 overflow-hidden">
        <div class="d-flex align-items-center justify-content-between w-100">

            <!-- Social Links (Desktop Only) -->
            <div class="d-none d-md-flex align-items-center gap-3">
                <a href="https://instagram.com" target="_blank" class="text-white text-opacity-75" aria-label="Instagram">
                    <i class="bi bi-instagram d-block" style="font-size: 0.85rem;"></i>
                </a>
                <a href="https://facebook.com" target="_blank" class="text-white text-opacity-75" aria-label="Facebook">
                    <i class="bi bi-facebook d-block" style="font-size: 0.85rem;"></i>
                </a>
            </div>

            <!-- Ticker Wrapper (Fluid & Responsive Height) -->
            <div class="announcement-ticker-wrapper overflow-hidden mx-auto position-relative d-flex align-items-center justify-content-center flex-grow-1" style="min-height: 24px; max-width: 600px;">
                <ul class="list-unstyled mb-0 text-center fw-bold text-uppercase position-relative w-100 h-100 gsap-ticker-list" style="font-size: clamp(0.55rem, 2.5vw, 0.6875rem); letter-spacing: 0.05em; line-height: 1.2;">
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100 d-flex align-items-center justify-content-center px-1">
                        FREE EXPRESS SHIPPING ACROSS AUSTRALIA OVER $120 AUD
                    </li>
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100 d-flex align-items-center justify-content-center px-1">
                        NEW SEASON ACTIVEWEAR DROP IS NOW LIVE
                    </li>
                    <li class="ticker-item position-absolute top-50 start-50 translate-middle w-100 d-flex align-items-center justify-content-center px-1">
                        AFTERPAY &amp; KLARNA AVAILABLE AT CHECKOUT
                    </li>
                </ul>
            </div>

            <!-- Login / Account Link (Desktop Only) -->
            <div class="d-none d-md-flex align-items-center gap-2">
                <a href="/account" class="text-white text-decoration-none d-flex align-items-center gap-1">
                    <small><small>Login</small></small>
                </a>
            </div>

        </div>
    </div>
</div>
<header class="site-header sticky-top position-relative" id="mainHeader" >
    <div class="container-fluid px-2 px-md-3">
        <!-- Main Navbar Shell -->
        <nav class="navbar navbar-expand-lg py-0 px-3 border border-dark rounded-4 theme-glass-nav custom-header-grid bg-black"
             id="mainNavbar"
             aria-label="Primary Navigation">

            <!-- 1. LEFT ZONE: Hamburger (Mobile Only) -->
            <div class="grid-zone-left d-flex align-items-center">
                <button class="navbar-toggler border-0 p-2 shadow-none text-body d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#mainNavCollapse"
                        aria-controls="mainNavCollapse"
                        aria-expanded="false"
                        aria-label="Toggle navigation menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- 2. CENTER ZONE: Centered Brand Logo -->
            <div class="grid-zone-center text-center">
                <a class="navbar-brand m-0 d-inline-block align-middle" href="/" aria-label="Smash Apparel Home">
                    <img src="<?=asset('images/logo.webp')?>" alt="Smash Apparel Logo" width="80" height="28" class="img-fluid object-fit-contain d-md-none" loading="eager" fetchpriority="high">
                    <img src="<?=asset('images/logo.webp')?>" alt="Smash Apparel Logo" width="100" height="32" class="img-fluid object-fit-contain d-none d-md-inline-block" loading="eager" fetchpriority="high">
                </a>
            </div>

            <!-- 3. RIGHT ZONE: Actions -->
            <div class="grid-zone-right d-flex align-items-center justify-content-end gap-1">
                <!-- Theme Toggle (Desktop Only) -->
                <button class="btn btn-link p-2 text-white rounded-2 min-tap-target d-none d-lg-inline-flex" id="bd-theme-toggle" type="button" aria-label="Toggle light and dark color theme">
                    <i class="bi bi-sun fs-6 d-block" aria-hidden="true"></i>
                </button>

                <!-- Search Button (Updated: Opens Offcanvas #searchDrawer) -->
                <button class="btn btn-link p-2 text-white rounded-2 min-tap-target" type="button" data-bs-toggle="offcanvas" data-bs-target="#searchDrawer" aria-controls="searchDrawer" aria-label="Search items">
                    <i class="bi bi-search fs-6 d-block" aria-hidden="true"></i>
                </button>



                <!-- Cart Button (Updated: Opens Offcanvas #cartDrawer) -->
                <button class="btn btn-link p-2 text-white position-relative rounded-2 d-inline-flex align-items-center justify-content-center min-tap-target" type="button" data-bs-toggle="offcanvas" data-bs-target="#cartDrawer" aria-controls="cartDrawer" aria-label="Shopping Cart with 1 item">
                    <i class="bi bi-bag fs-5 d-block" aria-hidden="true"></i>
                    <span class="position-absolute badge rounded-pill bg-danger text-white js-cart-count" style="top: 2px; right: 0px; font-size: 0.6rem; padding: 0.25em 0.4em;">
                        1
                    </span>
                </button>
            </div>

            <!-- 4. SINGLE NAVIGATION CONTAINER (Shared between Mobile & Desktop) -->
            <div class="collapse navbar-collapse grid-zone-collapse" id="mainNavCollapse">
                <div class="pt-3 pt-lg-0 w-100 d-lg-flex align-items-center justify-content-between">

                    <ul class="navbar-nav mb-0 gap-lg-1 fw-bold text-uppercase small text-start flex-column flex-lg-row">
                        <li class="nav-item">
                            <a class="nav-link text-white px-2 py-1 rounded-2 hover-theme" href="/collections/new-arrivals">New Arrivals</a>
                        </li>

                        <!-- Mega Menu Item -->
                        <li class="nav-item dropdown position-static">
                            <a class="nav-link text-white px-2 py-1 rounded-2 d-inline-flex align-items-center gap-1 custom-dropdown-toggle"
                               href="/collections/mens"
                               id="megaMenuMens"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <span class="hover-theme"><span>Men</span></span>
                                <i class="bi bi-chevron-down custom-caret ms-1" aria-hidden="true"></i>
                            </a>

                            <div class="dropdown-menu rounded-4 border-0 p-0 mt-2 mt-lg-2 start-0 end-0 w-100 mega-menu-panel" aria-labelledby="megaMenuMens">
                                <div class="p-3 p-lg-4 theme-glass-panel">
                                    <div class="row g-3 g-lg-4 text-start bg-body">
                                        <div class="col-12 col-lg-3">
                                            <span class="d-block text-xs text-uppercase fw-bold text-danger tracking-wider mb-2 mb-lg-3">Shop By Category</span>
                                            <ul class="list-unstyled d-flex flex-column gap-2 small mb-0">
                                                <li><a href="/collections/oversized-tees" class="text-body-secondary text-decoration-none hover-theme">Oversized Gym Tees</a></li>
                                                <li><a href="/collections/performance-tanks" class="text-body-secondary text-decoration-none hover-theme">Performance Tanks</a></li>
                                                <li><a href="/collections/hoodies" class="text-body-secondary text-decoration-none hover-theme">Heavyweight Hoodies</a></li>
                                                <li><a href="/collections/shorts" class="text-body-secondary text-decoration-none hover-theme">Pro-Performance Shorts</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-12 col-lg-3">
                                            <span class="d-block text-xs text-uppercase fw-bold text-body-secondary tracking-wider mb-2 mb-lg-3">Performance Tech</span>
                                            <ul class="list-unstyled d-flex flex-column gap-2 small mb-0">
                                                <li><a href="/collections/compression" class="text-body-secondary text-decoration-none hover-theme">Seamless Compression</a></li>
                                                <li><a href="/collections/recovery" class="text-body-secondary text-decoration-none hover-theme">Thermal Recovery Sweats</a></li>
                                                <li><a href="/collections/outerwear" class="text-body-secondary text-decoration-none hover-theme">Waterproof Outerwear</a></li>
                                                <li><a href="/collections/base-layers" class="text-body-secondary text-decoration-none hover-theme">Base Layers</a></li>
                                            </ul>
                                        </div>

                                        <div class="col-12 col-lg-3 d-none d-lg-block">
                                            <a href="/collections/mens-new" class="text-decoration-none d-block h-100">
                                                <div class="card border-0 text-white overflow-hidden rounded-3 h-100 p-3 d-flex flex-column justify-content-between position-relative" style="min-height: 180px;">
                                                    <img src="/assets/images/slide_2.png" alt="Pro-Series Activewear Drop" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0" loading="lazy">
                                                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 z-1"></div>

                                                    <span class="badge w-auto align-self-start rounded-1 small bg-danger text-white position-relative z-2">JUST DROPPED</span>
                                                    <div class="position-relative z-2">
                                                        <h6 class="fw-bolder text-uppercase mb-1 text-white">Pro-Series Activewear</h6>
                                                        <span class="small text-white-50 d-inline-flex align-items-center gap-1">Explore Drop <i class="bi bi-arrow-right"></i></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12 col-lg-3 d-none d-lg-block">
                                            <a href="/collections/mens-trending" class="text-decoration-none d-block h-100">
                                                <div class="card border-0 text-white overflow-hidden rounded-3 h-100 p-3 d-flex flex-column justify-content-between position-relative" style="min-height: 180px;">
                                                    <img src="/assets/images/pr37-2.png" alt="Core Essentials Trending" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-0" loading="lazy">
                                                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 z-1"></div>

                                                    <span class="badge bg-body-tertiary text-body w-auto align-self-start rounded-1 small border position-relative z-2">BESTSELLERS</span>
                                                    <div class="position-relative z-2">
                                                        <h6 class="fw-bolder text-uppercase mb-1 text-white">Core Essentials</h6>
                                                        <span class="small text-white-50 d-inline-flex align-items-center gap-1">Shop Trending <i class="bi bi-arrow-right"></i></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white px-2 py-1 rounded-2 hover-theme" href="/collections/womens">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white px-2 py-1 rounded-2 hover-theme" href="/collections/accessories">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger px-2 py-1 rounded-2 hover-theme" href="/collections/sale">Sale</a>
                        </li>
                    </ul>

                    <!-- Mobile-Only Controls at the bottom of the open collapse menu -->
                    <div class="d-lg-none mt-4 pt-3 border-top w-100 d-flex flex-column gap-2 text-start">
                        <div class="d-flex align-items-center justify-content-between p-2 rounded-3 theme-card-bg">
                            <span class="fw-bold small text-uppercase">Appearance</span>
                            <button class="btn btn-link p-1 text-body rounded-2" id="bd-theme-toggle-mobile" type="button" aria-label="Toggle theme">
                                <i class="bi bi-sun fs-6 d-block"></i>
                            </button>
                        </div>

                        <a href="/account" class="btn btn-dark w-100 rounded-pill fw-bold text-uppercase py-2 mb-2">
                            Account (Alex)
                        </a>
                    </div>

                </div>
            </div>

        </nav>
    </div>
</header>
<div class="offcanvas offcanvas-top bg-transparent border-0 p-2 p-md-3" tabindex="-1" id="searchDrawer" style="height: auto;">
    <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 container-fluid mx-auto shadow-lg" style="max-width: 650px;">
        <!-- DRAWER HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-uppercase tracking-widest fw-bold text-body-secondary fs-8">
                <i class="bi bi-search text-brand me-1"></i> Search Store
            </span>
            <button type="button" class="btn-close text-reset shadow-none opacity-75" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- SEARCH FORM (MATCHING FOOTER INPUT FIELD STYLE) -->
        <form class="position-relative">
            <div class="input-group">
                <input type="search"
                       class="form-control bg-body text-body border-body-subtle rounded-3 shadow-none px-3 py-2.5 fs-7 font-monospace"
                       placeholder="SEARCH PRODUCTS, DROPS, FITS..."
                       aria-label="Search Input">
                <button class="btn btn-brand rounded-3 px-3 d-flex align-items-center justify-content-center" type="submit">
                    <i class="bi bi-arrow-right fs-6"></i>
                </button>
            </div>
        </form>

        <!-- QUICK LINKS / TRENDING SEARCH TAGS -->
        <div class="d-flex align-items-center gap-2 mt-3 pt-3 border-top border-body-subtle overflow-x-auto no-scrollbar">
            <span class="text-uppercase text-body-secondary fs-8 font-monospace flex-shrink-0">Popular:</span>
            <a href="/search?q=hoodie" class="badge bg-body text-body border border-body-subtle text-decoration-none rounded-pill font-monospace fw-normal fs-8">HOODIES</a>
            <a href="/search?q=cargo" class="badge bg-body text-body border border-body-subtle text-decoration-none rounded-pill font-monospace fw-normal fs-8">CARGOS</a>
            <a href="/search?q=oversized" class="badge bg-body text-body border border-body-subtle text-decoration-none rounded-pill font-monospace fw-normal fs-8">OVERSIZED</a>
            <a href="/search?q=fleece" class="badge bg-body text-body border border-body-subtle text-decoration-none rounded-pill font-monospace fw-normal fs-8">FLEECE</a>
        </div>
    </div>
</div>
<div class="offcanvas offcanvas-end bg-transparent border-0 p-0 p-md-3 js-cart-drawer-container" tabindex="-1" id="cartDrawer" style="width: 700px; max-width: 100vw;">
    <div class="bg-body-tertiary border-md rounded-0 rounded-md-4 rounded-4 d-flex flex-column overflow-hidden custom-drawer-content h-100 h-md-auto" style="margin: 0;">

        <!-- Header -->
        <div class="offcanvas-header d-flex flex-column align-items-stretch p-3 p-md-4 pb-2 border-0">
            <div class="d-flex justify-content-between align-items-center w-100 mb-1">
                <h2 class="fw-bolder m-0 text-body tracking-tight fs-3 fs-md-2 js-cart-title">
                    Cart (<span class="js-cart-count">1</span>)
                </h2>
                <!-- Fixed custom class for smooth CSS hover + GSAP rotation -->
                <button type="button" class="btn bg-dark text-white rounded-4 p-2 d-flex align-items-center justify-content-center border-0 btn-close-custom js-cart-close" data-bs-dismiss="offcanvas" aria-label="Close" style="width: 38px; height: 38px;">
                    <i class="bi bi-x-lg fs-6"></i>
                </button>
            </div>
            <!-- Separator Bar Target -->
            <div class="w-100 bg-secondary-subtle my-2 my-md-3 rounded-pill cart-progress-bar" style="height: 6px;"></div>
        </div>

        <!-- Body -->
        <div class="offcanvas-body px-3 px-md-4 py-0 d-flex flex-column justify-content-between rounded-4 overflow-x-hidden overflow-y-auto">
            <!-- Populated Cart State -->
            <div class="cart-drawer-items d-flex flex-column gap-3 py-2 js-cart-populated">
                <div class="cart-item-row d-flex align-items-stretch gap-2 gap-md-3">

                    <div class="card bg-body border rounded-4 p-2 p-md-3 flex-grow-1 min-w-0 js-cart-card">
                        <div class="d-flex align-items-center gap-3 gap-md-4 h-100">
                            <!-- Image Container -->
                            <div class="flex-shrink-0 bg-body-secondary border rounded-3 overflow-hidden d-flex align-items-center justify-content-center js-item-img" style="width: 85px; height: 85px;">
                                <img src="<?=asset('/images/product-1.webp')?>" alt="Pro-Series Oversized Tee" width="85" height="85" class="img-fluid object-fit-contain p-1" loading="lazy">
                            </div>

                            <!-- Details -->
                            <div class="flex-grow-1 min-w-0 js-item-details">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="badge bg-danger text-uppercase fw-bold" style="font-size: 0.65rem;">Save 20%</span>
                                    <span class="text-uppercase text-secondary fw-bold d-none d-sm-inline-block" style="font-size: 0.65rem;">In Stock</span>
                                </div>
                                <h5 class="fw-bolder text-uppercase mb-1 text-body text-truncate fs-6 fs-md-5">Pro-Series Oversized Tee</h5>
                                <p class="text-secondary mb-2 mb-md-3 small">Color: Black / Size: Large</p>
                                <div class="d-flex align-items-baseline gap-2 js-item-price">
                                    <span class="fw-bolder fs-4 fs-md-3 text-body">$<span class="js-item-price-base" data-price="65.00">65.00</span></span>
                                    <span class="text-decoration-line-through text-muted small fs-md-6">$81.25</span>
                                    <span class="fw-bold text-muted small d-none d-sm-inline-block">AUD</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity Controls Sidebar -->
                    <div class="flex-shrink-0 bg-dark text-white rounded-4 d-flex flex-column align-items-center justify-content-between p-2 p-md-3 qty-pill-container js-qty-container" style="width: 48px;">
                        <button class="btn btn-link text-white p-0 border-0 fw-bold lh-1 text-decoration-none js-qty-plus" type="button" aria-label="Increase Quantity">
                            <i class="bi bi-plus-lg fs-6"></i>
                        </button>
                        <span class="fw-bolder fs-6 fs-md-5 text-white js-qty-count">1</span>
                        <button class="btn btn-link text-white p-0 border-0 fw-bold lh-1 text-decoration-none js-qty-minus" type="button" aria-label="Decrease Quantity">
                            <i class="bi bi-dash-lg fs-6"></i>
                        </button>
                    </div>

                </div>
            </div>

            <!-- Empty Cart State -->
            <div class="cart-drawer-empty d-none flex-column align-items-center justify-content-center text-center py-5 my-auto js-cart-empty">
                <div class="bg-body-secondary rounded-circle p-4 mb-3 js-empty-icon">
                    <i class="bi bi-bag fs-1 text-body"></i>
                </div>
                <h4 class="fw-bolder text-uppercase mb-2 text-body js-empty-title">Your Cart is Empty</h4>
                <p class="text-secondary mb-4 px-3 fs-6 js-empty-text">Explore our latest drops to fill it up.</p>
                <a href="/collections/all" class="btn btn-dark rounded-pill px-5 py-3 fw-bold text-uppercase fs-6 js-empty-btn">Continue Shopping</a>
            </div>
        </div>

        <!-- Footer -->
        <div class="offcanvas-footer p-3 p-md-4 border-top border-0 js-cart-footer bg-body mt-auto">
            <div class="d-flex justify-content-between align-items-baseline mb-2 mb-md-3 js-footer-subtotal">
                <span class="text-uppercase fw-bolder fs-6 fs-md-5 text-body">Subtotal</span>
                <div class="text-end">
                    <span class="fw-bolder fs-3 fs-md-2 text-body">$<span class="js-cart-subtotal">65.00</span></span>
                    <span class="fw-bold fs-6 text-muted ms-1">AUD</span>
                </div>
            </div>
            <a href="/checkout" class="btn btn-brand w-100 rounded-pill py-3 fs-6 fw-bolder tracking-wider d-flex align-items-center justify-content-center gap-2 btn-checkout js-checkout-btn">
                <span>Proceed to Checkout</span>
                <i class="bi bi-arrow-right fs-6"></i>
            </a>
        </div>

    </div>
</div>