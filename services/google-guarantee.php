<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- ===== HERO SECTION ===== -->
        <section class="crm-hero">
            <div class="crm-hero__overlay"></div>
            <img src="assets/services/imgs/google-guarantee-hero.png"
                alt="Google Guarantee Services" class="crm-hero__bg">
            <div class="crm-hero__content">
                <span class="crm-hero__badge">Google Guarantee</span>
                <h1 class="crm-hero__title">Build Trust, Boost Visibility<br>&amp; Win More Local Customers</h1>
                <p class="crm-hero__subtitle">Unlock the power of Google's most trusted credibility badge to stand out
                    in local search and attract higher-quality leads.</p>
                <a href="contact" class="crm-hero__btn">
                    <span>Get Started</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- ===== INTRO TEXT ===== -->
        <section class="crm-intro section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="crm-section-title wow fadeInUp" data-wow-delay=".2s">What is Google Guarantee?</h2>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".3s">At CreateAweb, we help businesses
                            unlock the full potential of Google Guarantee — one of the most trusted trust-building
                            features available through Google's advertising ecosystem. Google Guarantee isn't just a
                            badge. It's a credibility accelerator that helps your business stand out in local search
                            results, build customer confidence instantly, and attract higher-quality leads — turning
                            casual searchers into paying customers.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== HOW IT WORKS - STEPS ===== -->
        <section class="crm-services-grid">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-5" data-wow-delay=".2s">How Google Guarantee
                    Works</h2>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <h3 class="crm-card__title">Sign Up for Local Services Ads</h3>
                            <p class="crm-card__text">Register for Local Services Ads — the platform that powers
                                guaranteed listings and lead generation directly through Google search.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-clipboard-check"></i>
                            </div>
                            <h3 class="crm-card__title">Verification &amp; Screening</h3>
                            <p class="crm-card__text">Google conducts thorough checks — business licence, insurance
                                verification, and background checks. Passing earns you the badge.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-badge-check fa-certificate"></i>
                            </div>
                            <h3 class="crm-card__title">Badge Displayed &amp; Ads Activated</h3>
                            <p class="crm-card__text">Your business appears with the Google Guarantee badge in relevant
                                local searches for customers looking for services like yours.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-chart-simple"></i>
                            </div>
                            <h3 class="crm-card__title">Lead Generation &amp; Tracking</h3>
                            <p class="crm-card__text">Customers call or message you directly. You only pay for genuine
                                leads — not clicks — making this a cost-efficient model.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY IT MATTERS ===== -->
        <section class="crm-detail crm-detail--alt section-padding">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-5" data-wow-delay=".2s">Why Google Guarantee
                    Matters for Your Business</h2>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-handshake"></i></div>
                            <h4>Stronger Consumer Trust</h4>
                            <p>When customers see the Google Guarantee badge, they instantly recognise your business as
                                verified, credible, and reliable. This trust signal significantly increases the
                                likelihood that a searcher will choose you over competitors.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                            <h4>Higher Local Search Visibility</h4>
                            <p>Guaranteed businesses are placed above standard search listings and PPC ads, putting your
                                name front and centre when local customers search for services you offer.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-coins"></i></div>
                            <h4>Pay-Per-Lead Efficiency</h4>
                            <p>Unlike traditional PPC where you pay per click, Google Guarantee uses a pay-per-lead
                                model — you only invest in contacts that are actual inquiries, not random clicks.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-trophy"></i></div>
                            <h4>Competitive Advantage</h4>
                            <p>Many local businesses still haven't adopted this strategy. Earning the badge early gives
                                you a distinct lead over competitors without the verification seal.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-shield"></i></div>
                            <h4>Financial Protection for Customers</h4>
                            <p>The guarantee means customers feel protected — knowing Google may reimburse them if a
                                service is unsatisfactory. This comfort dramatically improves conversion rates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA STRIP ===== -->
        <section class="crm-cta">
            <div class="container">
                <div class="crm-cta__inner">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <h3 class="crm-cta__title">Ready to earn the Google Guarantee badge?</h3>
                            <p class="crm-cta__text">Get expert help setting up and managing your Google Local Services
                                Ads — and start generating quality leads today.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center mt-4 mt-lg-0">
                            <a href="contact" class="crm-cta__btn">Get Your Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== BENEFITS SECTION ===== -->
        <section class="crm-detail section-padding">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-5" data-wow-delay=".2s">Benefits of the Google
                    Guarantee Badge</h2>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card" style="text-align: left;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-circle-check"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Instant Trust Boost</h3>
                                    <p class="crm-card__text">A verified badge from Google signals that your business
                                        has passed rigorous checks and is dependable. Customers feel confident choosing
                                        you from the moment they see your listing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card" style="text-align: left;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-arrow-trend-up"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Premium Search Placement</h3>
                                    <p class="crm-card__text">Appear above the competition on Google search pages and
                                        Google Maps. Your listing gets priority placement, making it the first thing
                                        potential customers see.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card" style="text-align: left;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-user-check"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Better Lead Quality</h3>
                                    <p class="crm-card__text">Customers who see the badge are more likely to trust and
                                        contact your business, improving conversion rates and reducing wasted time on
                                        unqualified inquiries.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card" style="text-align: left;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-piggy-bank"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Cost-Effective Marketing</h3>
                                    <p class="crm-card__text">Only pay for leads — not irrelevant ad clicks — making
                                        this an efficient investment for local lead generation with a measurable return
                                        on your marketing spend.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card" style="text-align: left;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Stronger Local Brand Reputation</h3>
                                    <p class="crm-card__text">Adding the badge reinforces local trust, supports other
                                        marketing efforts like SEO and social, and strengthens the overall perception of
                                        your brand in the community.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY CHOOSE US ===== -->
        <section class="crm-why section-padding">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp" data-wow-delay=".2s">Why Choose CreateAweb?</h2>
                <p class="crm-section-desc text-center wow fadeInUp" data-wow-delay=".3s">We handle everything — from
                    setup and verification to ongoing optimisation — so you can focus on running your business.</p>
                <div class="row g-4 mt-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-gears"></i></div>
                            <h4>Full Setup &amp; Management</h4>
                            <p>We handle the entire process from registration to verification and ad launch.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-bullseye"></i></div>
                            <h4>Lead Optimisation</h4>
                            <p>We monitor and optimise your campaigns to maximise quality leads and minimise waste.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-chart-pie"></i></div>
                            <h4>Transparent Reporting</h4>
                            <p>Clear, regular reports showing lead volume, cost-per-lead, and conversion performance.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-headset"></i></div>
                            <h4>Dedicated Support</h4>
                            <p>Ongoing UK-based support to ensure your Google Guarantee campaigns deliver results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CONTACT SECTION ===== -->
        <!-- <div class="contact-form-area">
            <div class="contact-form-wrapper pt-150 pb-150">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-xl-4 col-lg-4">
                            <div class="address-meta">
                                <div class="address-meta-items">
                                    <div class="address-title">USA</div>
                                    <span>New York,<br> 287 Park Avenue South</span>
                                </div>
                                <div class="address-meta-items">
                                    <div class="address-title">Poland</div>
                                    <span>Katowice,<br>Armii Krajowej St., 322</span>
                                </div>
                                <div class="address-meta-items">
                                    <div class="address-title">Ukraine</div>
                                    <span>Kyiv,<br>Goncharnaya St., 9a</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="form-title">Get a design consultation free quote</div>
                            <div class="contact-form">
                                <div class="container">
                                    <form action="#" method="post">
                                        <div class="row gy-3">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="name">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="email address">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="project"
                                                    placeholder="about project">
                                            </div>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="subject">
                                                    <option value="" disabled selected>where did you hear about us?
                                                    </option>
                                                    <option value="web">Web Development</option>
                                                    <option value="design">Web Design</option>
                                                    <option value="consult">Consultation</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <textarea class="form-control" name="message" rows="5"
                                                    placeholder="write about project . . ." required></textarea>
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="move-btn">
                                                    <div class="gt-hover-btn-wrapper mt-0">
                                                        <button type="submit"
                                                            class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                            <span class="gt-btn-circle-text-2">send message</span>
                                                            <i class="gt-btn-circle-dot"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <?php include __DIR__ . '/../include/footer.html'; ?>