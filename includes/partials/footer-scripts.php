<script src="<?php echo asset('js/jquery-3.6.0.min.js') ?>" defer></script>
<script src="<?php echo asset('js/bootstrap.bundle.min.js') ?>" defer></script>
<script src="<?php echo asset('js/gsap.min.js') ?>" defer></script>
<script src="<?php echo asset('js/TextPlugin.min.js') ?>" defer></script>
<script src="<?php echo asset('js/ScrollTrigger.min.js') ?>" defer></script>
<script type="text/javascript">
    (function () {
        const storedTheme = localStorage.getItem('theme');
        const getPreferredTheme = () => {
            if (storedTheme) return storedTheme;
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };
        document.documentElement.setAttribute('data-bs-theme', getPreferredTheme());
    })();
    function initThemeSwitcher() {
        const themeToggleBtn = document.getElementById('bd-theme-toggle');
        const mobileThemeToggleBtn = document.getElementById('bd-theme-toggle-mobile');

        const logoLightSrc = "<?= asset('images/logo-white.webp') ?>";
        const logoDarkSrc = "<?= asset('images/logo-white.webp') ?>";

        const updateThemeUI = (theme) => {
            [themeToggleBtn, mobileThemeToggleBtn].forEach((btn) => {
                if (!btn) return;
                const icon = btn.querySelector('i');
                if (icon) {
                    icon.className = theme === 'dark'
                        ? 'bi bi-moon-stars fs-6 d-block'
                        : 'bi bi-sun fs-6 d-block';
                }
            });

            const brandLogos = document.querySelectorAll('.navbar-brand img');
            brandLogos.forEach((img) => {
                img.src = theme === 'dark' ? logoDarkSrc : logoLightSrc;
            });
        };

        const applyTheme = (newTheme) => {
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            updateThemeUI(newTheme);
        };

        const toggleTheme = () => {
            const currentTheme = document.documentElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            if (document.startViewTransition) {
                document.startViewTransition(() => applyTheme(newTheme));
            } else {
                applyTheme(newTheme);
            }
        };

        updateThemeUI(document.documentElement.getAttribute('data-bs-theme') || 'dark');

        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', toggleTheme);
        }

        if (mobileThemeToggleBtn) {
            mobileThemeToggleBtn.addEventListener('click', toggleTheme);
        }

        const colorSchemeQuery = window.matchMedia('(prefers-color-scheme: dark)');
        colorSchemeQuery.addEventListener('change', (e) => {
            if (!localStorage.getItem('theme')) {
                const newTheme = e.matches ? 'dark' : 'light';
                if (document.startViewTransition) {
                    document.startViewTransition(() => applyTheme(newTheme));
                } else {
                    applyTheme(newTheme);
                }
            }
        });
    }
    function initHeroSlider() {
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
        let autoPlayTimer = null;

        gsap.set(heroBanner, {force3D: true});

        // heroBanner.addEventListener('mousemove', (e) => {
        //     const rect = heroBanner.getBoundingClientRect();
        //     const x = ((e.clientX - rect.left) / rect.width) * 100;
        //     const y = ((e.clientY - rect.top) / rect.height) * 100;
        //
        //     heroBanner.style.setProperty('--mouse-x', `${x}%`);
        //     heroBanner.style.setProperty('--mouse-y', `${y}%`);
        // });

        const initHeroReveal = () => {
            slides.forEach((slide, idx) => {
                if (idx === 0) {
                    slide.classList.add('active');
                    gsap.set(slide, {opacity: 1, visibility: 'visible', zIndex: 2});
                } else {
                    slide.classList.remove('active');
                    gsap.set(slide, {opacity: 0, visibility: 'hidden', zIndex: 1});
                }
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

            const activeSlide = slides[0];
            const activeImg = activeSlide ? activeSlide.querySelector('img') : null;
            const activeText = textGroups[0];

            const initTl = gsap.timeline({
                onComplete: () => {
                    startAutoPlay();
                }
            });

            gsap.set(heroBanner, {opacity: 0, scale: 0.98});
            if (activeImg) gsap.set(activeImg, {scale: 1.2});
            if (activeText) gsap.set(activeText.children, {y: 40, opacity: 0});
            if (shopBtn) gsap.set(shopBtn, {y: 20, opacity: 0});

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
                }, '-=0.8');

            if (activeText && activeText.children.length) {
                initTl.to(activeText.children, {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: 'power3.out'
                }, '-=1.0');
            }

            if (shopBtn) {
                initTl.to(shopBtn, {
                    y: 0,
                    opacity: 1,
                    duration: 0.6,
                    ease: 'back.out(1.7)'
                }, '-=0.6');
            }
        };

        const goToSlide = (targetIndex) => {
            const newIndex = ((targetIndex % totalSlides) + totalSlides) % totalSlides;

            if (isAnimating || newIndex === currentIndex) return;
            isAnimating = true;

            stopAutoPlay();

            const currentSlide = slides[currentIndex];
            const nextSlide = slides[newIndex];
            const currentImg = currentSlide ? currentSlide.querySelector('img') : null;
            const nextImg = nextSlide ? nextSlide.querySelector('img') : null;

            const currentText = textGroups[currentIndex];
            const nextText = textGroups[newIndex];

            gsap.set(nextSlide, {visibility: 'visible', opacity: 0, zIndex: 2});
            if (currentSlide) gsap.set(currentSlide, {zIndex: 1});
            if (nextImg) gsap.set(nextImg, {scale: 1.18});

            const tl = gsap.timeline({
                onComplete: () => {
                    slides.forEach((slide, idx) => {
                        if (idx === newIndex) {
                            slide.classList.add('active');
                            gsap.set(slide, {opacity: 1, visibility: 'visible', zIndex: 2});
                        } else {
                            slide.classList.remove('active');
                            gsap.set(slide, {opacity: 0, visibility: 'hidden', zIndex: 1});
                        }
                    });

                    currentIndex = newIndex;
                    isAnimating = false;
                    startAutoPlay();
                }
            });

            if (currentSlideNum) {
                currentSlideNum.textContent = String(newIndex + 1).padStart(2, '0');
            }

            if (currentImg) {
                tl.to(currentImg, {
                    scale: 1.05,
                    duration: 1.2,
                    ease: 'power2.inOut'
                }, 0);
            }

            tl.to(nextSlide, {
                opacity: 1,
                duration: 1,
                ease: 'power2.inOut'
            }, 0);

            if (nextImg) {
                tl.to(nextImg, {
                    scale: 1,
                    duration: 1.4,
                    ease: 'power3.out'
                }, 0);
            }

            if (currentText && currentText.children.length) {
                tl.to(currentText.children, {
                    y: -25,
                    opacity: 0,
                    duration: 0.3,
                    stagger: 0.03,
                    ease: 'power2.in'
                }, 0);
            }

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

            if (nextText && nextText.children.length) {
                tl.fromTo(nextText.children,
                    {y: 35, opacity: 0},
                    {y: 0, opacity: 1, duration: 0.5, stagger: 0.06, ease: 'power3.out'},
                    0.32
                );
            }
        };

        const startAutoPlay = () => {
            stopAutoPlay();
            autoPlayTimer = setInterval(() => {
                goToSlide(currentIndex + 1);
            }, 6000);
        };

        const stopAutoPlay = () => {
            if (autoPlayTimer) clearInterval(autoPlayTimer);
        };

        if (nextBtn) {
            nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
        }

        initHeroReveal();
    }
    function initSiteAnimations() {
        const masterEntrance = gsap.timeline({defaults: {ease: 'power3.out'}});

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
                clearProps: 'transform,opacity'
            }, '-=0.3')
            .from('.navbar-brand', {
                y: -8,
                opacity: 0,
                duration: 0.5,
                clearProps: 'all'
            }, '-=0.3');

        const mm = gsap.matchMedia();
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

        const siteHeader = document.querySelector('.site-header');
        if (siteHeader) {
            gsap.set(siteHeader, {
                position: 'fixed',
                top: 0,
                left: 0,
                width: '100%',
                zIndex: 1030
            });

            ScrollTrigger.create({
                trigger: document.body,
                start: 'top top',
                end: '100vh top',
                onLeave: () => {
                    siteHeader.classList.add('is-sticky-active');
                },
                onEnterBack: () => {
                    siteHeader.classList.remove('is-sticky-active');
                    gsap.to(siteHeader, {yPercent: 0, duration: 0.3, ease: 'power2.out'});
                }
            });

            ScrollTrigger.create({
                start: '100vh top',
                onUpdate: (self) => {
                    if (self.direction === 1) {
                        gsap.to(siteHeader, {
                            yPercent: -100,
                            duration: 0.4,
                            ease: 'power3.inOut'
                        });
                    } else if (self.direction === -1) {
                        gsap.to(siteHeader, {
                            yPercent: 0,
                            duration: 0.4,
                            ease: 'power3.out'
                        });
                    }
                }
            });
        }

        const mainNavCollapse = document.getElementById('mainNavCollapse');
        if (mainNavCollapse) {
            mainNavCollapse.addEventListener('show.bs.collapse', () => {
                const mobileItems = mainNavCollapse.querySelectorAll('.nav-item, .d-lg-none > *');
                if (mobileItems.length) gsap.set(mobileItems, {y: 15, opacity: 0});
            });

            mainNavCollapse.addEventListener('shown.bs.collapse', () => {
                const mobileItems = mainNavCollapse.querySelectorAll('.nav-item, .d-lg-none > *');
                if (mobileItems.length) {
                    gsap.to(mobileItems, {
                        y: 0,
                        opacity: 1,
                        duration: 0.35,
                        stagger: 0.04,
                        ease: 'power2.out',
                        clearProps: 'transform,opacity'
                    });
                }
            });

            mainNavCollapse.addEventListener('hidden.bs.collapse', () => {
                const mobileItems = mainNavCollapse.querySelectorAll('.nav-item, .d-lg-none > *');
                if (mobileItems.length) gsap.set(mobileItems, {clearProps: 'all'});
            });
        }

        const cartDrawer = document.getElementById('cartDrawer');
        if (cartDrawer) {
            let cartTimeline = null;

            cartDrawer.addEventListener('show.bs.offcanvas', () => {
                if (cartTimeline) cartTimeline.kill();

                const cartEl = document.querySelector('.js-cart-populated');
                const isPopulated = cartEl ? !cartEl.classList.contains('d-none') : false;

                cartTimeline = gsap.timeline({defaults: {ease: 'power4.out'}});

                cartTimeline.fromTo('#cartDrawer .custom-drawer-content',
                    {scale: 0.94, opacity: 0},
                    {scale: 1, opacity: 1, duration: 0.5, ease: 'power3.out'}
                )
                    .fromTo('#cartDrawer .js-cart-title',
                        {y: -18, opacity: 0},
                        {y: 0, opacity: 1, duration: 0.4},
                        '-=0.3'
                    )
                    .fromTo('#cartDrawer .js-cart-close',
                        {scale: 0.5, opacity: 0, rotate: -90},
                        {scale: 1, opacity: 1, rotate: 0, duration: 0.45, ease: 'back.out(1.7)'},
                        '-=0.35'
                    )
                    .fromTo('#cartDrawer .cart-progress-bar',
                        {scaleX: 0, opacity: 0},
                        {scaleX: 1, opacity: 1, duration: 0.5, ease: 'expo.out'},
                        '-=0.25'
                    );

                if (isPopulated) {
                    cartTimeline.fromTo('#cartDrawer .js-cart-card',
                        {x: 35, opacity: 0},
                        {x: 0, opacity: 1, duration: 0.5, stagger: 0.08},
                        '-=0.2'
                    )
                        .fromTo('#cartDrawer .js-item-img',
                            {scale: 0.8, opacity: 0},
                            {scale: 1, opacity: 1, duration: 0.35, stagger: 0.08, ease: 'back.out(1.4)'},
                            '-=0.45'
                        )
                        .fromTo('#cartDrawer .js-item-details',
                            {y: 10, opacity: 0},
                            {y: 0, opacity: 1, duration: 0.35, stagger: 0.08},
                            '-=0.4'
                        )
                        .fromTo('#cartDrawer .js-qty-container',
                            {x: 20, scale: 0.9, opacity: 0},
                            {x: 0, scale: 1, opacity: 1, duration: 0.4, stagger: 0.08, ease: 'back.out(1.2)'},
                            '-=0.35'
                        )
                        .fromTo('#cartDrawer .js-footer-subtotal',
                            {y: 15, opacity: 0},
                            {y: 0, opacity: 1, duration: 0.35},
                            '-=0.2'
                        )
                        .fromTo('#cartDrawer .js-checkout-btn',
                            {y: 20, scale: 0.96, opacity: 0},
                            {
                                y: 0,
                                scale: 1,
                                opacity: 1,
                                duration: 0.45,
                                ease: 'power3.out',
                                clearProps: 'transform,opacity'
                            },
                            '-=0.25'
                        );
                } else {
                    cartTimeline.fromTo('#cartDrawer .js-empty-icon',
                        {scale: 0.5, opacity: 0},
                        {scale: 1, opacity: 1, duration: 0.45, ease: 'back.out(1.7)'},
                        '-=0.2'
                    )
                        .fromTo('#cartDrawer .js-empty-title, #cartDrawer .js-empty-text',
                            {y: 15, opacity: 0},
                            {y: 0, opacity: 1, duration: 0.35, stagger: 0.08},
                            '-=0.3'
                        )
                        .fromTo('#cartDrawer .js-empty-btn',
                            {y: 20, opacity: 0},
                            {
                                y: 0,
                                opacity: 1,
                                duration: 0.4,
                                ease: 'back.out(1.2)',
                                clearProps: 'transform,opacity'
                            },
                            '-=0.2'
                        );
                }
            });

            cartDrawer.addEventListener('hidden.bs.offcanvas', () => {
                if (cartTimeline) cartTimeline.kill();
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
                ], {clearProps: 'all'});
            });
        }
    }
    function initScrollReveals() {
        const sections = gsap.utils.toArray('section, footer').filter(elem => !elem.classList.contains('js-hero-banner'));

        sections.forEach((elem) => {
            gsap.fromTo(elem,
                { y: 35, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    clearProps: 'transform',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        ScrollTrigger.batch('.row > [class*="col-"]', {
            interval: 0.1,
            batchMax: 4,
            start: 'top 85%',
            onEnter: (batch) => gsap.fromTo(batch,
                { y: 30, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.65,
                    stagger: 0.1,
                    ease: 'power2.out',
                    clearProps: 'transform,opacity'
                }
            )
        });

        gsap.utils.toArray('h1, h2, h3, h4').forEach((heading) => {
            if (heading.closest('header, nav, #cartDrawer, .js-hero-banner')) return;

            gsap.fromTo(heading,
                { y: 20, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.7,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: heading,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        gsap.utils.toArray('img').forEach((img) => {
            if (img.closest('header, nav, #cartDrawer, .hero-slide')) return;

            gsap.fromTo(img,
                { scale: 1.05, opacity: 0, filter: 'blur(3px)' },
                {
                    scale: 1,
                    opacity: 1,
                    filter: 'blur(0px)',
                    duration: 0.8,
                    ease: 'power2.out',
                    clearProps: 'all',
                    scrollTrigger: {
                        trigger: img,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        ScrollTrigger.refresh();
    }
    function initKineticTicker() {
        const tickerItems = document.querySelectorAll('.gsap-ticker-list .ticker-item');
        if (tickerItems.length <= 1) return;

        tickerItems.forEach((item) => {
            const text = item.textContent.trim();
            item.innerHTML = text.split('').map(char => {
                const isSpace = char === ' ';
                return `<span class="ticker-char d-inline-block" style="will-change: transform, opacity, filter; transform-origin: 50% 50%;">${isSpace ? '&nbsp;' : char}</span>`;
            }).join('');
        });

        gsap.set(tickerItems, { opacity: 0, visibility: 'hidden', position: 'absolute', top: 0, left: 0 });
        gsap.set(tickerItems[0], { opacity: 1, visibility: 'visible', position: 'relative' });

        let currentIndex = 0;
        let nextCall = null;

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
                    nextCall = gsap.delayedCall(2.4, transitionNext);
                }
            });

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

        nextCall = gsap.delayedCall(2.4, transitionNext);
    }
    function initCartAndProductInteractions() {
        const track = document.querySelector('.js-product-track');
        const scrollLeftBtn = document.querySelector('.js-prod-scroll-left');
        const scrollRightBtn = document.querySelector('.js-prod-scroll-right');

        if (track && scrollLeftBtn && scrollRightBtn) {
            const scrollAmount = 280;

            scrollRightBtn.addEventListener('click', (e) => {
                e.preventDefault();
                track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });

            scrollLeftBtn.addEventListener('click', (e) => {
                e.preventDefault();
                track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });
        }

        const productCards = document.querySelectorAll('.product-card');

        productCards.forEach((card) => {
            const slidesTrack = card.querySelector('.js-card-slides');
            const prevBtn = card.querySelector('.js-card-prev');
            const nextBtn = card.querySelector('.js-card-next');

            if (!slidesTrack || !prevBtn || !nextBtn) return;

            const images = slidesTrack.querySelectorAll('img');
            if (!images.length) return;

            let imageIndex = 0;

            const updateCardSlide = () => {
                slidesTrack.style.transform = `translateX(-${imageIndex * 100}%)`;
            };

            nextBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                e.preventDefault();
                imageIndex = (imageIndex + 1) % images.length;
                updateCardSlide();
            });

            prevBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                e.preventDefault();
                imageIndex = (imageIndex - 1 + images.length) % images.length;
                updateCardSlide();
            });
        });
    }
    function initGlobalDelegatedEvents() {
        document.addEventListener('click', (e) => {
            const arrivalNextBtn = e.target.closest('.js-arrival-next');
            const arrivalPrevBtn = e.target.closest('.js-arrival-prev');

            if (arrivalNextBtn || arrivalPrevBtn) {
                e.preventDefault();
                const btn = arrivalNextBtn || arrivalPrevBtn;

                const container = btn.closest('section') ||
                    btn.closest('.container-fluid') ||
                    btn.closest('.container') ||
                    btn.parentElement.parentElement;

                const track = container ? container.querySelector('.js-arrival-track') : null;

                if (track) {
                    const firstCard = track.querySelector('.product-card');
                    const cardWidth = firstCard ? firstCard.getBoundingClientRect().width : 320;
                    const gap = parseFloat(window.getComputedStyle(track).gap) || 16;
                    const scrollDistance = (cardWidth + gap) * 2;

                    if (arrivalNextBtn) {
                        track.scrollBy({ left: scrollDistance, behavior: 'smooth' });
                    } else if (arrivalPrevBtn) {
                        track.scrollBy({ left: -scrollDistance, behavior: 'smooth' });
                    }
                }
                return;
            }

            const cardNextImgBtn = e.target.closest('.js-card-next');
            const cardPrevImgBtn = e.target.closest('.js-card-prev');

            if (cardNextImgBtn || cardPrevImgBtn) {
                e.preventDefault();
                e.stopPropagation();

                const btn = cardNextImgBtn || cardPrevImgBtn;
                const wrapper = btn.closest('.js-card-media-wrapper');
                const slidesTrack = wrapper ? wrapper.querySelector('.js-card-slides') : null;

                if (!slidesTrack) return;

                const totalSlides = slidesTrack.querySelectorAll('img').length;
                if (totalSlides <= 1) return;

                let currentIndex = parseInt(slidesTrack.dataset.currentSlide || '0', 10);

                if (cardNextImgBtn) {
                    currentIndex = (currentIndex + 1) % totalSlides;
                } else if (cardPrevImgBtn) {
                    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                }

                slidesTrack.dataset.currentSlide = currentIndex;
                slidesTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
            }
        });
    }
    function initEditorialAccents() {
        const targets = document.querySelectorAll('.editorial-accent-text');
        if (!targets.length) return;

        targets.forEach((el) => {
            const rawText = el.textContent.trim();
            el.innerHTML = rawText.split('').map(char => {
                if (char === ' ') return '&nbsp;';
                return `<span class="char d-inline-block" data-char="${char}">${char}</span>`;
            }).join('');

            const chars = el.querySelectorAll('.char');
            if (!chars.length) return;

            gsap.set(chars, {
                transformPerspective: 400,
                transformOrigin: "50% 50%",
                willChange: "transform, opacity"
            });

            const masterTl = gsap.timeline({
                repeat: -1,
                repeatDelay: 1.2
            });

            masterTl
                .to(chars, {
                    color: '#ffffff',
                    textShadow: '0 0 12px rgba(255, 255, 255, 0.8)',
                    duration: 0.35,
                    stagger: {
                        each: 0.06,
                        from: 'start'
                    },
                    ease: 'power2.inOut'
                })
                .to(chars, {
                    color: 'rgb(213, 213, 213)',
                    textShadow: '0 0 0px rgba(0,0,0,0)',
                    duration: 0.8,
                    stagger: {
                        each: 0.03,
                        from: 'start'
                    },
                    ease: 'power2.out'
                }, '-=0.2');
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        if (typeof gsap !== 'undefined') {
            if (typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);
            }
        } else {
            console.warn('GSAP core is missing. Visual animation modules skipped.');
        }

        const runModule = (moduleName, moduleFn) => {
            try {
                if (typeof moduleFn === 'function') {
                    moduleFn();
                }
            } catch (error) {
                console.warn(`[Module Error] ${moduleName} failed to initialize:`, error);
            }
        };

        runModule('Theme Switcher', initThemeSwitcher);
        runModule('Global Delegated Events', initGlobalDelegatedEvents);
        runModule('Hero Slider', initHeroSlider);
        runModule('Kinetic Ticker', initKineticTicker);
        runModule('Cart & Product Interactions', initCartAndProductInteractions);
        runModule('Editorial Accents', initEditorialAccents);

        requestAnimationFrame(() => {
            runModule('Site Entrance & Sticky Nav', initSiteAnimations);
            runModule('Scroll Reveals', initScrollReveals);
        });
    });


</script>
