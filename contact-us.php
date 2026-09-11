<?php
$page_slug = "contact-us";
$page_title = "Contact Us | Smash Apparel";
$page_description = "Get in touch with Smash Apparel. Reach out for general enquiries, product details, custom teamwear, or visit our retail locations.";
$page_keywords = "contact smash apparel, smash apparel store, courtwear support, custom athletic wear australia";
ob_start(); ?>
    <!-- CONTACT US: HERO FOLD SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <div class="js-hero-banner position-relative overflow-hidden rounded-4 bg-black border border-dark p-4 p-md-5 text-center min-h-350 d-flex flex-column justify-content-center align-items-center">
            <!-- Background Overlay -->
            <div class="position-absolute inset-0 bg-overlay-editorial z-1"></div>
            <div class="position-absolute inset-0 dynamic-vignette z-1"></div>

            <!-- Content -->
            <div class="position-relative z-2 max-w-2xl mx-auto">
            <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                <span class="live-status-dot"></span> Smash Apparel Support
            </span>
                <h1 class="display-3 fw-black text-uppercase tracking-tight text-white mb-3 lh-09">
                    GET IN <br>
                    <span class="editorial-accent-text">TOUCH.</span>
                </h1>
                <p class="text-secondary fs-6 mb-0 max-w-xl mx-auto">
                    Have a question about our courtwear, custom team orders, or product restocks? Connect directly with our Melbourne support team or visit one of our retail pro shops.
                </p>
            </div>
        </div>
    </div>

    <!-- CONTACT US: FORM & DIRECT COMMUNICATION GRID SECTION -->
    <div class="container-fluid px-2 px-md-3 pt-2">
        <div class="row g-2">

            <!-- Left Box: Modern Form Container -->
            <div class="col-12 col-lg-7">
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-center">
                <span class="text-uppercase tracking-widest fw-bold text-brand fs-8 mb-2 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-chat-left-dots"></i> Direct Enquiry
                </span>
                    <h2 class="display-5 fw-black text-uppercase tracking-tight fst-italic text-body mb-3">
                        Send Us A Message.
                    </h2>
                    <p class="text-secondary fs-6 mb-4">
                        Have a question about sizing, custom team orders, or product restocks? Complete all fields below to connect directly with our Melbourne support team.
                    </p>

                    <form action="#" method="POST" id="js-contact-form">
                        <div class="row g-2">
                            <div class="col-12 col-md-6">
                                <label for="contactName" class="form-label text-uppercase fw-bold fs-8 text-secondary">Full Name *</label>
                                <input type="text" class="form-control bg-body border-body-subtle rounded-3 py-2-5 px-3 fs-7" id="contactName" name="name" placeholder="John Doe" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="contactEmail" class="form-label text-uppercase fw-bold fs-8 text-secondary">Email Address *</label>
                                <input type="email" class="form-control bg-body border-body-subtle rounded-3 py-2-5 px-3 fs-7" id="contactEmail" name="email" placeholder="name@example.com" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="contactPhone" class="form-label text-uppercase fw-bold fs-8 text-secondary">Phone Number *</label>
                                <input type="tel" class="form-control bg-body border-body-subtle rounded-3 py-2-5 px-3 fs-7" id="contactPhone" name="phone" placeholder="0400 000 000" required>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="enquiryType" class="form-label text-uppercase fw-bold fs-8 text-secondary">Enquiry Type *</label>
                                <select class="form-select bg-body border-body-subtle rounded-3 py-2-5 px-3 fs-7" id="enquiryType" name="enquiry_type" required>
                                    <option value="" selected disabled>Select an option</option>
                                    <option value="General">General Enquiry</option>
                                    <option value="Product">Product Information</option>
                                    <option value="Custom Apparel">Custom Apparel &amp; Teamwear</option>
                                    <option value="Partnership">Partnership &amp; Wholesale</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="contactMessage" class="form-label text-uppercase fw-bold fs-8 text-secondary">Message *</label>
                                <textarea class="form-control bg-body border-body-subtle rounded-3 py-2-5 px-3 fs-7" id="contactMessage" name="message" rows="4" placeholder="How can we help you?" required></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-brand w-100 rounded-pill py-2 d-flex align-items-center justify-content-center gap-2 text-decoration-none hover-lift">
                                    Send Message <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div class="bg-body-tertiary border border-body-subtle rounded-4 p-4 p-md-5 h-100 d-flex flex-column justify-content-between position-relative overflow-hidden">

                    <!-- Section Header -->
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                <span class="badge bg-brand text-black fw-bold text-uppercase rounded-pill px-3 py-1 fs-8">
                    Direct Line
                </span>
                            <span class="text-secondary fw-semibold fs-8 tracking-wider text-uppercase">Melbourne HQ</span>
                        </div>
                        <h2 class="display-5 fst-italic fw-black text-uppercase tracking-tight text-body mb-3">
                            Drop A Line.
                        </h2>
                        <p class="text-secondary fs-7 mb-0">
                            Skip the wait. Connect straight to our Melbourne flagship floor, customer support, or operations desk.
                        </p>
                    </div>

                    <!-- High-Impact Channel Stack -->
                    <div class="d-flex flex-column gap-3 my-4">

                        <!-- Channel: Email -->
                        <a href="mailto:info@smashapparel.com.au" class="text-decoration-none p-3 rounded-3 bg-body border border-body-subtle d-flex align-items-center justify-content-between hover-scale transition-all">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-black text-brand rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 42px; height: 42px;">
                                    <i class="bi bi-envelope-fill fs-6"></i>
                                </div>
                                <div class="overflow-hidden">
                                    <span class="d-block text-secondary fs-8 text-uppercase fw-bold">Support &amp; Inquiries</span>
                                    <span class="text-body fw-bold fs-7 text-truncate d-block">info@smashapparel.com.au</span>
                                </div>
                            </div>
                            <i class="bi bi-arrow-up-right text-brand fs-6"></i>
                        </a>

                        <!-- Channel: Phones Stacked Split -->
                        <div class="p-3 rounded-3 bg-body border border-body-subtle">
                            <div class="row g-2 align-items-center">
                                <div class="col-6 border-end border-body-subtle pe-3">
                                    <span class="d-block text-secondary fs-8 text-uppercase fw-bold">Shop Line</span>
                                    <a href="tel:0394246559" class="text-body fw-bold fs-7 text-decoration-none">(03) 9424 6559</a>
                                </div>
                                <div class="col-6 ps-3">
                                    <span class="d-block text-secondary fs-8 text-uppercase fw-bold">Mobile Support</span>
                                    <a href="tel:0428237785" class="text-body fw-bold fs-7 text-decoration-none">0428 237 785</a>
                                </div>
                            </div>
                        </div>

                        <!-- Flagship Store Showcase Card -->
                        <div class="p-4 rounded-4 bg-brand text-black position-relative overflow-hidden">
                            <div class="d-flex align-items-start justify-content-between mb-2">
                                <div>
                                    <span class="fs-8 fw-bold text-uppercase d-block text-black-50">Flagship Store</span>
                                    <h3 class="fw-black text-uppercase fs-5 mb-0 text-black">Smash Apparel HQ</h3>
                                </div>
                                <div class="bg-black text-brand p-2 rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                    <i class="bi bi-geo-alt-fill fs-6"></i>
                                </div>
                            </div>

                            <p class="fs-7 fw-semibold mb-3 text-black">
                                Unit 4/59 Willandra Drive, Epping VIC 3076
                            </p>

                            <!-- Schedule Row -->
                            <div class="d-flex align-items-center justify-content-between pt-2 border-top border-black border-opacity-15 fs-8 fw-bold text-uppercase mb-3">
                                <span>Mon–Fri: 10:30am–5:30pm</span>
                                <span>Sat: 8:30am–2:30pm</span>
                                <span class="text-black-50">Sun: Closed</span>
                            </div>

                            <a href="https://maps.google.com?daddr=Shop%204%2059%20Willandra%20St,%20Epping%20VIC%203076" target="_blank" rel="noopener noreferrer" class="btn btn-dark bg-black text-white w-100 rounded-pill py-2-5 fs-7 fw-bold text-uppercase d-flex align-items-center justify-content-center gap-2 border-0 hover-scale">
                                <span>Get Directions</span>
                                <i class="bi bi-arrow-right fs-6 text-brand"></i>
                            </a>
                        </div>

                    </div>

                    <!-- Footer Metric Bar -->
                    <div class="d-flex align-items-center justify-content-between pt-3 border-top border-body-subtle">
                        <div class="d-flex align-items-center gap-2">
                            <span class="p-1 bg-brand rounded-circle d-inline-block"></span>
                            <span class="fs-8 text-secondary fw-bold text-uppercase">Response Time: &lt; 24 Hrs</span>
                        </div>
                        <span class="fs-8 text-secondary fw-bold text-uppercase">Melbourne, AU 🇦🇺</span>
                    </div>

                </div>
            </div>

        </div>
    </div>


<?php $content = ob_get_clean();
include "includes/partials/app.php";
?>