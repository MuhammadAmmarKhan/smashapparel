<script src="<?php echo asset('js/jquery-3.6.0.min.js') ?>"></script>
<script src="<?php echo asset('js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?php echo asset('js/gsap.min.js') ?>"></script>
<script src="<?php echo asset('js/TextPlugin.min.js') ?>"></script>
<script src="<?php echo asset('js/ScrollTrigger.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script type="text/javascript">
    // 1. Instant Theme Init (Prevents Flash of Unstyled Content / FOUT)
    (function () {
        const storedTheme = localStorage.getItem('theme');
        const getPreferredTheme = () => {
            if (storedTheme) return storedTheme;
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };
        document.documentElement.setAttribute('data-bs-theme', getPreferredTheme());
    })();

    document.addEventListener('DOMContentLoaded', () => {

        // Register GSAP ScrollTrigger
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.registerPlugin(ScrollTrigger);
        }

        // -----------------------------------------------------------------
        // 2. Dark / Light Mode Toggle & Dynamic Logo Asset Switcher
        // -----------------------------------------------------------------
        const themeToggleBtn = document.getElementById('bd-theme-toggle');
        const logoLightSrc = "<?= asset('images/logo.png') ?>";
        const logoDarkSrc = "<?= asset('images/logo-white.png') ?>";

        const updateThemeUI = (theme) => {
            // Update Icon
            if (themeToggleBtn) {
                const icon = themeToggleBtn.querySelector('i');
                if (icon) {
                    icon.className = theme === 'dark' ? 'bi bi-moon-stars fs-6 d-block' : 'bi bi-sun fs-6 d-block';
                }
            }

            // Update Logos (Desktop & Mobile)
            const brandLogos = document.querySelectorAll('.navbar-brand img');
            brandLogos.forEach((img) => {
                img.src = theme === 'dark' ? logoDarkSrc : logoLightSrc;
            });
        };

        // Set initial icon and logo matching current HTML theme attribute
        updateThemeUI(document.documentElement.getAttribute('data-bs-theme'));

        const applyTheme = (newTheme) => {
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeUI(newTheme);
        };

        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', () => {
                const currentTheme = document.documentElement.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

                // Check if View Transition API is supported by the browser
                if (document.startViewTransition) {
                    document.startViewTransition(() => {
                        applyTheme(newTheme);
                    });
                } else {
                    applyTheme(newTheme);
                }
            });
        }


        // Listen for system theme changes if no manual preference is saved
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                const newTheme = e.matches ? 'dark' : 'light';
                if (document.startViewTransition) {
                    document.startViewTransition(() => {
                        applyTheme(newTheme);
                    });
                } else {
                    applyTheme(newTheme);
                }
            }
        });
        const mobileThemeToggleBtn = document.getElementById('bd-theme-toggle-mobile');
        if (mobileThemeToggleBtn) {
            mobileThemeToggleBtn.addEventListener('click', () => {
                const currentTheme = document.documentElement.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                applyTheme(newTheme);
            });
        }

        // -----------------------------------------------------------------
        // 3. GSAP Entrance & Scroll-Triggered Reveal Animations
        // -----------------------------------------------------------------
        requestAnimationFrame(() => {
            const mm = gsap.matchMedia();

            // ==========================================================================
            // 1. MASTER ENTRANCE TIMELINE
            // ==========================================================================
            const masterEntrance = gsap.timeline({ defaults: { ease: 'power3.out' } });

            masterEntrance
                .from('.top-announcement-bar', {
                    y: -20,
                    opacity: 0,
                    duration: 0.6,
                    clearProps: 'all'
                })
                .from('.site-header', {
                    y: -30,
                    opacity: 0,
                    duration: 0.6,
                    clearProps: 'all'
                }, '-=0.3')
                .from('.navbar-brand', {
                    y: -8,
                    opacity: 0,
                    duration: 0.5,
                    clearProps: 'all'
                }, '-=0.3');

            // Desktop Entrance Adjustments (>= 992px)
            mm.add("(min-width: 992px)", () => {
                masterEntrance
                    .from('.top-announcement-bar .d-none.d-md-flex:first-child a', {
                        x: -12,
                        opacity: 0,
                        duration: 0.4,
                        stagger: 0.08,
                        clearProps: 'all'
                    }, '-=0.6')
                    .from('.top-announcement-bar .d-none.d-md-flex:last-child a', {
                        x: 12,
                        opacity: 0,
                        duration: 0.4,
                        stagger: 0.08,
                        clearProps: 'all'
                    }, '-=0.5')
                    .from('.navbar-nav .nav-item', {
                        y: 10,
                        opacity: 0,
                        duration: 0.45,
                        stagger: 0.05,
                        clearProps: 'all'
                    }, '-=0.4');
            });

            // ==========================================================================
            // 2. MOBILE BOOTSTRAP COLLAPSE NAV ANIMATION
            // ==========================================================================
            const mainNavCollapse = document.getElementById('mainNavCollapse');

            if (mainNavCollapse) {
                mainNavCollapse.addEventListener('show.bs.collapse', () => {
                    const mobileItems = mainNavCollapse.querySelectorAll('.nav-item, .d-lg-none > *');
                    gsap.set(mobileItems, { y: 15, opacity: 0 });
                });

                mainNavCollapse.addEventListener('shown.bs.collapse', () => {
                    const mobileItems = mainNavCollapse.querySelectorAll('.nav-item, .d-lg-none > *');

                    gsap.to(mobileItems, {
                        y: 0,
                        opacity: 1,
                        duration: 0.35,
                        stagger: 0.04,
                        ease: 'power2.out',
                        clearProps: 'transform,opacity'
                    });
                });

                mainNavCollapse.addEventListener('hidden.bs.collapse', () => {
                    const mobileItems = mainNavCollapse.querySelectorAll('.nav-item, .d-lg-none > *');
                    gsap.set(mobileItems, { clearProps: 'all' });
                });
            }

            // ==========================================================================
            // 3. ULTRA-PREMIUM STAGGERED CART DRAWER ANIMATION
            // ==========================================================================
            const cartDrawer = document.getElementById('cartDrawer');

            if (cartDrawer) {
                let cartTimeline;

                cartDrawer.addEventListener('show.bs.offcanvas', () => {
                    // Kill any active timeline to eliminate mid-animation glitches
                    if (cartTimeline) cartTimeline.kill();

                    const isPopulated = !document.querySelector('.js-cart-populated').classList.contains('d-none');

                    cartTimeline = gsap.timeline({ defaults: { ease: 'power4.out' } });

                    // 1. Inner Drawer Frame Scale & Fade
                    cartTimeline.fromTo('#cartDrawer .custom-drawer-content',
                        { scale: 0.94, opacity: 0 },
                        { scale: 1, opacity: 1, duration: 0.5, ease: 'power3.out' }
                    )

                        // 2. Title Slide Down & Close Button Pop
                        .fromTo('#cartDrawer .js-cart-title',
                            { y: -18, opacity: 0 },
                            { y: 0, opacity: 1, duration: 0.4 },
                            '-=0.3'
                        )
                        .fromTo('#cartDrawer .js-cart-close',
                            { scale: 0.5, opacity: 0, rotate: -90 },
                            { scale: 1, opacity: 1, rotate: 0, duration: 0.45, ease: 'back.out(1.7)' },
                            '-=0.35'
                        )

                        // 3. Progress Separator (Fill from left to right - Guaranteed Every Open)
                        .fromTo('#cartDrawer .cart-progress-bar',
                            { scaleX: 0, opacity: 0 },
                            { scaleX: 1, opacity: 1, duration: 0.5, ease: 'expo.out' },
                            '-=0.25'
                        );

                    // 4. POPULATED CART CHOREOGRAPHY
                    if (isPopulated) {
                        // Main Product Cards (Sliding smoothly from the right)
                        cartTimeline.fromTo('#cartDrawer .js-cart-card',
                            { x: 35, opacity: 0 },
                            { x: 0, opacity: 1, duration: 0.5, stagger: 0.08 },
                            '-=0.2'
                        )
                            // Product Image Scale Pop
                            .fromTo('#cartDrawer .js-item-img',
                                { scale: 0.8, opacity: 0 },
                                { scale: 1, opacity: 1, duration: 0.35, stagger: 0.08, ease: 'back.out(1.4)' },
                                '-=0.45'
                            )
                            // Product Text Details Fade & Rise
                            .fromTo('#cartDrawer .js-item-details',
                                { y: 10, opacity: 0 },
                                { y: 0, opacity: 1, duration: 0.35, stagger: 0.08 },
                                '-=0.4'
                            )
                            // Quantity Controls Sidebar Slide & Scale
                            .fromTo('#cartDrawer .js-qty-container',
                                { x: 20, scale: 0.9, opacity: 0 },
                                { x: 0, scale: 1, opacity: 1, duration: 0.4, stagger: 0.08, ease: 'back.out(1.2)' },
                                '-=0.35'
                            )
                            // Subtotal Text Rise
                            .fromTo('#cartDrawer .js-footer-subtotal',
                                { y: 15, opacity: 0 },
                                { y: 0, opacity: 1, duration: 0.35 },
                                '-=0.2'
                            )
                            // Proceed to Checkout Button Expand
                            .fromTo('#cartDrawer .js-checkout-btn',
                                { y: 20, scale: 0.96, opacity: 0 },
                                { y: 0, scale: 1, opacity: 1, duration: 0.45, ease: 'power3.out', clearProps: 'transform,opacity' },
                                '-=0.25'
                            );
                    }
                    // 5. EMPTY CART CHOREOGRAPHY
                    else {
                        cartTimeline.fromTo('#cartDrawer .js-empty-icon',
                            { scale: 0.5, opacity: 0 },
                            { scale: 1, opacity: 1, duration: 0.45, ease: 'back.out(1.7)' },
                            '-=0.2'
                        )
                            .fromTo('#cartDrawer .js-empty-title, #cartDrawer .js-empty-text',
                                { y: 15, opacity: 0 },
                                { y: 0, opacity: 1, duration: 0.35, stagger: 0.08 },
                                '-=0.3'
                            )
                            .fromTo('#cartDrawer .js-empty-btn',
                                { y: 20, opacity: 0 },
                                { y: 0, opacity: 1, duration: 0.4, ease: 'back.out(1.2)', clearProps: 'transform,opacity' },
                                '-=0.2'
                            );
                    }
                });

                // Clear all GSAP inline styles on drawer hide to guarantee clean state
                cartDrawer.addEventListener('hidden.bs.offcanvas', () => {
                    gsap.set([
                        '#cartDrawer .custom-drawer-content',
                        '#cartDrawer .js-cart-title',
                        '#cartDrawer .js-cart-close',
                        '#cartDrawer .cart-progress-bar',
                        '#cartDrawer .js-cart-card',
                        '#cartDrawer .js-item-img',
                        '#cartDrawer .js-item-details',
                        '#cartDrawer .js-qty-container',
                        '#cartDrawer .js-footer-subtotal',
                        '#cartDrawer .js-checkout-btn',
                        '#cartDrawer .js-empty-icon',
                        '#cartDrawer .js-empty-title',
                        '#cartDrawer .js-empty-text',
                        '#cartDrawer .js-empty-btn'
                    ], { clearProps: 'all' });
                });
            }
        });


        // -----------------------------------------------------------------
        // 4. Kinetic Character-Stagger GSAP Ticker (Anamorphic 3D Morph)
        // -----------------------------------------------------------------
        const tickerItems = document.querySelectorAll('.gsap-ticker-list .ticker-item');

        if (tickerItems.length > 1) {
            tickerItems.forEach((item) => {
                const text = item.textContent.trim();
                item.innerHTML = text.split('').map(char => {
                    const isSpace = char === ' ';
                    return `<span class="ticker-char d-inline-block" style="will-change: transform, opacity, filter, letter-spacing; transform-origin: 50% 50%;">${isSpace ? '&nbsp;' : char}</span>`;
                }).join('');
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
                        gsap.delayedCall(2.4, transitionNext);
                    }
                });

                // STEP 1: OUTRO - Kinetic Deconstruction
                tl.to(currentChars, {
                    opacity: 0,
                    filter: 'blur(8px) brightness(1.8)',
                    rotationX: -90,
                    scaleX: 1.3,
                    duration: 0.4,
                    stagger: {
                        each: 0.012,
                        from: 'start'
                    },
                    ease: 'power3.in'
                })
                    .set(currentSlide, { visibility: 'hidden', opacity: 0 })

                    // STEP 2: INTRO - Anamorphic Reconstruction
                    .set(nextSlide, { visibility: 'visible', opacity: 1 })
                    .set(nextChars, {
                        opacity: 0,
                        filter: 'blur(8px) brightness(1.8)',
                        rotationX: 90,
                        scaleX: 1.3
                    })
                    .to(nextChars, {
                        opacity: 1,
                        filter: 'blur(0px) brightness(1)',
                        rotationX: 0,
                        scaleX: 1,
                        duration: 0.5,
                        stagger: {
                            each: 0.012,
                            from: 'start'
                        },
                        ease: 'expo.out'
                    });
            }

            gsap.delayedCall(2.4, transitionNext);
        }

        // -----------------------------------------------------------------
        // 5. Smart Sticky Header (Hide on Scroll Down / Reveal on Scroll Up)
        // -----------------------------------------------------------------


        // -----------------------------------------------------------------
        // 6. Interactive Cart Drawer & Calculation Engine
        // -----------------------------------------------------------------
        const itemPrice = 65.00;
        const freeShippingThreshold = 120.00;

        // Trigger item reveals when Cart Drawer opens
        const cartDrawer = document.getElementById('cartDrawer');
        if (cartDrawer) {
            cartDrawer.addEventListener('shown.bs.offcanvas', () => {
                gsap.from('.cart-drawer-items .card, .cart-drawer-items .flex-shrink-0', {
                    y: 15,
                    opacity: 0,
                    duration: 0.4,
                    stagger: 0.08,
                    ease: 'power2.out'
                });
            });
        }

        // Quantity Plus Event
        document.addEventListener('click', (e) => {
            const plusBtn = e.target.closest('.js-qty-plus');
            if (plusBtn) {
                const container = plusBtn.closest('.d-flex');
                const countEl = container ? container.querySelector('.js-qty-count') : null;
                if (countEl) {
                    let current = parseInt(countEl.textContent, 10) || 1;
                    countEl.textContent = current + 1;
                    updateCartTotals();
                }
            }
        });

        // Quantity Minus Event
        document.addEventListener('click', (e) => {
            const minusBtn = e.target.closest('.js-qty-minus');
            if (minusBtn) {
                const container = minusBtn.closest('.d-flex');
                const countEl = container ? container.querySelector('.js-qty-count') : null;
                if (countEl) {
                    let current = parseInt(countEl.textContent, 10) || 1;
                    if (current > 1) {
                        countEl.textContent = current - 1;
                        updateCartTotals();
                    } else {
                        const cartRow = minusBtn.closest('.cart-drawer-items > .d-flex');
                        if (cartRow) {
                            gsap.to(cartRow, {
                                scale: 0.9,
                                opacity: 0,
                                duration: 0.25,
                                onComplete: () => {
                                    cartRow.remove();
                                    updateCartTotals();
                                }
                            });
                        }
                    }
                }
            }
        });

        function updateCartTotals() {
            let totalQty = 0;
            const countEls = document.querySelectorAll('.js-qty-count');

            countEls.forEach(el => {
                totalQty += parseInt(el.textContent, 10) || 0;
            });

            // Update badge counters
            document.querySelectorAll('.js-cart-count').forEach(badge => {
                badge.textContent = totalQty;
            });

            // Calculate and update subtotal
            const subtotal = totalQty * itemPrice;
            const subtotalEl = document.querySelector('.js-cart-subtotal');
            if (subtotalEl) {
                subtotalEl.textContent = subtotal.toFixed(2);
            }

            // Progress bar updates
            const progressBar = document.querySelector('.js-shipping-progress');
            const goalText = document.querySelector('.js-shipping-goal-text');

            if (progressBar && goalText) {
                const percentage = Math.min((subtotal / freeShippingThreshold) * 100, 100);
                progressBar.style.width = `${percentage}%`;
                progressBar.setAttribute('aria-valuenow', percentage);

                if (subtotal >= freeShippingThreshold) {
                    goalText.innerHTML = `<span class="fw-black text-success">🎉 You've Unlocked FREE Express Shipping!</span>`;
                } else {
                    const remaining = (freeShippingThreshold - subtotal).toFixed(2);
                    goalText.innerHTML = `Spend <span class="fw-black text-success">$${remaining}</span> more for Free Express Shipping!`;
                }
            }

            // Handle empty cart state switching
            if (totalQty === 0) {
                document.querySelectorAll('.js-cart-populated').forEach(el => el.classList.add('d-none'));
                const cartFooter = document.querySelector('.js-cart-footer');
                if (cartFooter) cartFooter.classList.add('d-none');

                const emptyState = document.querySelector('.js-cart-empty');
                if (emptyState) {
                    emptyState.classList.remove('d-none');
                    emptyState.classList.add('d-flex');
                    gsap.from(emptyState, { opacity: 0, scale: 0.95, duration: 0.3 });
                }
            }
        }
    });
    document.addEventListener('DOMContentLoaded', () => {

        const heroBanner = document.querySelector('.js-hero-banner');
        if (!heroBanner) return;

        const slides = document.querySelectorAll('.hero-slide');
        const textGroups = document.querySelectorAll('.hero-text-group');
        const currentSlideNum = document.querySelector('.js-current-slide');
        const prevBtn = document.querySelector('.js-prev-slide');
        const nextBtn = document.querySelector('.js-next-slide');
        const shopBtn = document.querySelector('.js-shop-btn');

        const totalSlides = slides.length;
        if (totalSlides === 0) return;

        let currentIndex = 0;
        let isAnimating = false;
        let autoPlayTimer;

        // Force hardware acceleration layer to preserve border-radius during mousemove & animations
        gsap.set(heroBanner, { force3D: true });

        // ==========================================================================
        // 1. DYNAMIC MOVING VIGNETTE (Cursor Tracker)
        // ==========================================================================
        heroBanner.addEventListener('mousemove', (e) => {
            const rect = heroBanner.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            heroBanner.style.setProperty('--mouse-x', `${x}%`);
            heroBanner.style.setProperty('--mouse-y', `${y}%`);
        });

        // ==========================================================================
        // 2. INITIAL PAGE LOAD REVEAL ANIMATION
        // ==========================================================================
        const initHeroReveal = () => {
            const activeSlide = slides[0];
            const activeImg = activeSlide ? activeSlide.querySelector('img') : null;
            const activeText = textGroups[0];

            // Ensure all non-active slides/texts start hidden without layout shifts
            slides.forEach((slide, idx) => {
                gsap.set(slide, {
                    position: 'absolute',
                    top: 0,
                    left: 0,
                    width: '100%',
                    height: '100%',
                    opacity: idx === 0 ? 1 : 0,
                    zIndex: idx === 0 ? 2 : 1
                });
            });

            textGroups.forEach((group, idx) => {
                if (idx === 0) {
                    group.classList.remove('d-none');
                    group.classList.add('active');
                } else {
                    group.classList.add('d-none');
                    group.classList.remove('active');
                }
            });

            const initTl = gsap.timeline({
                onComplete: () => {
                    startAutoPlay();
                }
            });

            // Set initial states
            gsap.set(heroBanner, { opacity: 0, scale: 0.98 });
            if (activeImg) gsap.set(activeImg, { scale: 1.2 });
            if (activeText) gsap.set(activeText.children, { y: 40, opacity: 0 });
            if (shopBtn) gsap.set(shopBtn, { y: 20, opacity: 0 });

            // Entrance Sequence
            initTl.to(heroBanner, {
                opacity: 1,
                scale: 1,
                duration: 1,
                ease: 'power3.out'
            })
                .to(activeImg, {
                    scale: 1,
                    duration: 1.4,
                    ease: 'power2.out'
                }, '-=0.8')
                .to(activeText.children, {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: 'power3.out'
                }, '-=1.0')
                .to(shopBtn, {
                    y: 0,
                    opacity: 1,
                    duration: 0.6,
                    ease: 'back.out(1.7)'
                }, '-=0.6');
        };

        // ==========================================================================
        // 3. GSAP CROSS-FADE & SLIDE ENGINE
        // ==========================================================================
        const goToSlide = (targetIndex) => {
            const newIndex = ((targetIndex % totalSlides) + totalSlides) % totalSlides;

            if (isAnimating || newIndex === currentIndex) return;
            isAnimating = true;

            // Stop timer immediately to make arrow navigation ultra-responsive
            stopAutoPlay();

            const currentSlide = slides[currentIndex];
            const nextSlide = slides[newIndex];
            const currentImg = currentSlide ? currentSlide.querySelector('img') : null;
            const nextImg = nextSlide ? nextSlide.querySelector('img') : null;

            const currentText = textGroups[currentIndex];
            const nextText = textGroups[newIndex];

            const tl = gsap.timeline({
                onComplete: () => {
                    if (currentSlide) currentSlide.classList.remove('active');

                    currentIndex = newIndex;
                    isAnimating = false;
                    startAutoPlay();
                }
            });

            // Update Counter Display
            if (currentSlideNum) {
                currentSlideNum.textContent = String(newIndex + 1).padStart(2, '0');
            }

            // --- BACKGROUND IMAGE SLIDE TRANSITION ---
            if (nextSlide) {
                gsap.set(nextSlide, { opacity: 0, visibility: 'visible', zIndex: 2 });
            }
            if (currentSlide) {
                gsap.set(currentSlide, { zIndex: 1 });
            }
            if (nextImg) {
                gsap.set(nextImg, { scale: 1.18 });
            }

            if (currentImg) {
                tl.to(currentImg, {
                    scale: 1.05,
                    duration: 1.2,
                    ease: 'power2.inOut'
                }, 0);
            }

            if (nextSlide) {
                tl.to(nextSlide, {
                    opacity: 1,
                    duration: 1,
                    ease: 'power2.inOut'
                }, 0);
            }

            if (nextImg) {
                tl.to(nextImg, {
                    scale: 1,
                    duration: 1.4,
                    ease: 'power3.out'
                }, 0);
            }

            // --- TEXT CONTENT OUT / IN ANIMATION (SYNCHRONIZED SWAP) ---
            if (currentText) {
                tl.to(currentText.children, {
                    y: -25,
                    opacity: 0,
                    duration: 0.3,
                    stagger: 0.03,
                    ease: 'power2.in'
                }, 0);
            }

            // Seamless swap precisely at 0.3s eliminates the vertical layout jerk
            tl.add(() => {
                if (currentText) {
                    currentText.classList.add('d-none');
                    currentText.classList.remove('active');
                }
                if (nextText) {
                    nextText.classList.remove('d-none');
                    nextText.classList.add('active');
                }
            }, 0.3);

            if (nextText) {
                tl.fromTo(nextText.children,
                    { y: 35, opacity: 0 },
                    { y: 0, opacity: 1, duration: 0.5, stagger: 0.06, ease: 'power3.out' },
                    0.32
                );
            }
        };

        // Controls Handlers
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                goToSlide(currentIndex + 1);
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                goToSlide(currentIndex - 1);
            });
        }

        // Auto Play Timer (6 Seconds)
        const startAutoPlay = () => {
            stopAutoPlay();
            autoPlayTimer = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 6000);
        };

        const stopAutoPlay = () => {
            if (autoPlayTimer) clearInterval(autoPlayTimer);
        };

        // Run Initial Entrance
        initHeroReveal();
    });
    document.addEventListener('DOMContentLoaded', () => {

        // ==========================================================================
        // 1. HORIZONTAL PRODUCT TRACK SCROLLING (Buttons)
        // ==========================================================================
        const track = document.querySelector('.js-product-track');
        const scrollLeftBtn = document.querySelector('.js-prod-scroll-left');
        const scrollRightBtn = document.querySelector('.js-prod-scroll-right');

        if (track && scrollLeftBtn && scrollRightBtn) {
            const scrollAmount = 280; // Card width + gap

            scrollRightBtn.addEventListener('click', () => {
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });

            scrollLeftBtn.addEventListener('click', () => {
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
        }

        // ==========================================================================
        // 2. INDIVIDUAL PRODUCT CARD IMAGE SLIDER
        // ==========================================================================
        const productCards = document.querySelectorAll('.product-card');

        productCards.forEach(card => {
            const slidesTrack = card.querySelector('.js-card-slides');
            const prevBtn = card.querySelector('.js-card-prev');
            const nextBtn = card.querySelector('.js-card-next');

            if (!slidesTrack || !prevBtn || !nextBtn) return;

            const totalImages = slidesTrack.querySelectorAll('img').length;
            let imageIndex = 0;

            const updateCardSlide = () => {
                slidesTrack.style.transform = `translateX(-${imageIndex * 100}%)`;
            };

            nextBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                e.preventDefault();
                imageIndex = (imageIndex + 1) % totalImages;
                updateCardSlide();
            });

            prevBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                e.preventDefault();
                imageIndex = (imageIndex - 1 + totalImages) % totalImages;
                updateCardSlide();
            });
        });
    });
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.hero-feature-slide');
        const section = document.getElementById('heroParallaxSection');
        const stage = document.getElementById('heroFeatureStage');
        let currentIndex = 0;
        const displayDuration = 4500;

        // Slide Rotator
        setInterval(() => {
            slides[currentIndex].classList.remove('is-active');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.add('is-active');
        }, displayDuration);

        // Mouse Tilt Parallax Effect
        const maxRotation = 7; // Degrees of rotation

        section.addEventListener('mousemove', (e) => {
            const rect = section.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Calculate percentage from center (-1 to 1)
            const xPct = (x / rect.width - 0.5) * 2;
            const yPct = (y / rect.height - 0.5) * 2;

            // Apply 3D Rotation to the Main Stage
            const rotateX = -yPct * maxRotation;
            const rotateY = xPct * maxRotation;
            stage.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;

            // Subtle opposing shift on tag depth
            const activeSlide = slides[currentIndex];
            const tags = activeSlide.querySelectorAll('.parallax-tag');
            tags.forEach(tag => {
                const depth = parseFloat(tag.getAttribute('data-depth')) || 15;
                const moveX = xPct * depth;
                const moveY = yPct * depth;
                tag.style.transform = `translate3d(${moveX}px, ${moveY}px, 0px)`;
            });
        });

        // Reset stage position on mouse leave
        section.addEventListener('mouseleave', () => {
            stage.style.transform = `rotateX(0deg) rotateY(0deg)`;
            const tags = document.querySelectorAll('.parallax-tag');
            tags.forEach(tag => {
                tag.style.transform = `translate3d(0px, 0px, 0px)`;
            });
        });
    });
</script>