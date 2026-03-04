<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- ===== HERO SECTION ===== -->
        <section class="crm-hero">
            <div class="crm-hero__overlay"></div>
            <img src="assets/services/imgs/website-hosting-hero.png"
                alt="Website Hosting Services" class="crm-hero__bg">
            <div class="crm-hero__content">
                <span class="crm-hero__badge">Web Hosting</span>
                <h1 class="crm-hero__title">Website Hosting</h1>
                <p class="crm-hero__subtitle">High-performance hosting designed to keep your business online, secure,
                    and running at peak speed.</p>
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
                        <h2 class="crm-section-title wow fadeInUp" data-wow-delay=".2s">Hosting That Powers Your Growth
                        </h2>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".3s">At CreateAweb, we provide
                            high-performance website hosting designed to keep your business online, secure, and running
                            at peak speed. Your website is often the first impression customers have of your business.
                            Slow loading times, downtime, or security issues can cost you leads, sales, and credibility.
                            That's why our hosting solutions are built for speed, stability, and peace of mind.</p>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".4s" style="margin-top: 16px;">Whether
                            you're running a brochure site, eCommerce store, or high-traffic marketing funnel, we
                            deliver hosting infrastructure that supports growth — not limits it.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY HOSTING MATTERS ===== -->
        <section class="crm-detail crm-detail--alt section-padding">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-3" data-wow-delay=".2s">Why Hosting Matters
                    More Than Ever</h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">Modern customers expect
                    websites to load in under 3 seconds. Search engines prioritise fast, secure websites. And cyber
                    threats are more sophisticated than ever.</p>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row g-4">
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="crm-card" style="text-align: left; background: #fff;">
                                    <h3 class="crm-card__title" style="margin-bottom: 20px; font-size: 22px;">Poor
                                        hosting can lead to:</h3>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-xmark" style="color: #e74c3c;"></i> Slow page speed
                                        </li>
                                        <li><i class="fa-solid fa-xmark" style="color: #e74c3c;"></i> Website crashes
                                            during peak traffic</li>
                                        <li><i class="fa-solid fa-xmark" style="color: #e74c3c;"></i> Security
                                            vulnerabilities</li>
                                        <li><i class="fa-solid fa-xmark" style="color: #e74c3c;"></i> Lost enquiries
                                            and sales</li>
                                        <li><i class="fa-solid fa-xmark" style="color: #e74c3c;"></i> Lower Google
                                            rankings</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="crm-card" style="text-align: left; background: #fff;">
                                    <h3 class="crm-card__title" style="margin-bottom: 20px; font-size: 22px;">With
                                        CreateAweb hosting:</h3>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> Lightning-fast page loads</li>
                                        <li><i class="fa-solid fa-check"></i> 99.9% uptime guarantee</li>
                                        <li><i class="fa-solid fa-check"></i> Enterprise-grade security</li>
                                        <li><i class="fa-solid fa-check"></i> Zero missed opportunities</li>
                                        <li><i class="fa-solid fa-check"></i> Better SEO performance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHAT'S INCLUDED – CARD GRID ===== -->
        <section class="crm-services-grid" style="padding-top: 100px;">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-5" data-wow-delay=".2s">Fully Managed Hosting
                </h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">We handle the technical
                    side so you don't have to. You focus on growing your business — we take care of the rest.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-arrows-rotate"></i>
                            </div>
                            <h3 class="crm-card__title">Software Updates</h3>
                            <p class="crm-card__text">We keep your server software, CMS, and security patches
                                up-to-date so your site stays protected and running smoothly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-plug"></i>
                            </div>
                            <h3 class="crm-card__title">Plugin &amp; Theme Updates</h3>
                            <p class="crm-card__text">All plugins and themes are regularly updated and checked for
                                compatibility, ensuring nothing breaks unexpectedly.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <h3 class="crm-card__title">Ongoing Maintenance</h3>
                            <p class="crm-card__text">Regular health checks and proactive maintenance to prevent issues
                                before they impact your site or users.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-desktop"></i>
                            </div>
                            <h3 class="crm-card__title">Server Monitoring</h3>
                            <p class="crm-card__text">24/7 server monitoring to detect and resolve potential issues
                                before they cause downtime or data loss.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-gauge-high"></i>
                            </div>
                            <h3 class="crm-card__title">Performance Optimisation</h3>
                            <p class="crm-card__text">Continuous speed and performance tuning — caching, compression,
                                and database optimisation to keep load times minimal.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-headset"></i>
                            </div>
                            <h3 class="crm-card__title">Technical Support</h3>
                            <p class="crm-card__text">Dedicated UK-based support team available to help you with any
                                hosting issues, questions, or technical challenges.</p>
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
                            <h3 class="crm-cta__title">Ready for hosting that actually works?</h3>
                            <p class="crm-cta__text">Get reliable, fully managed hosting that keeps your website fast,
                                secure, and always online.</p>
                        </div>
                        <div class="col-lg-4 text-lg-end text-center mt-4 mt-lg-0">
                            <a href="contact" class="crm-cta__btn">Get Your Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY CHOOSE US ===== -->
        <section class="crm-why section-padding">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp" data-wow-delay=".2s">Why Choose CreateAweb
                    Hosting?</h2>
                <p class="crm-section-desc text-center wow fadeInUp" data-wow-delay=".3s">We go beyond basic hosting.
                    Our solutions are built to support your business goals with enterprise-grade reliability.</p>
                <div class="row g-4 mt-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-bolt"></i></div>
                            <h4>Blazing Fast Speed</h4>
                            <p>Optimised servers and caching deliver sub-second load times for your visitors.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-shield-alt"></i></div>
                            <h4>Rock-Solid Security</h4>
                            <p>SSL, firewalls, malware scanning, and proactive monitoring keep your site safe.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-clock"></i></div>
                            <h4>99.9% Uptime</h4>
                            <p>Your website stays online when it matters most — no more lost sales from downtime.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-why__card">
                            <div class="crm-why__icon"><i class="fa-solid fa-arrows-up-down-left-right"></i></div>
                            <h4>Scalable Infrastructure</h4>
                            <p>Hosting that grows with your business — handle traffic spikes without breaking a sweat.
                            </p>
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