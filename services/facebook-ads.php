<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- ===== HERO SECTION ===== -->
        <section class="crm-hero">
            <div class="crm-hero__overlay"></div>
            <img src="assets/services/imgs/facebook-ads-hero.png"
                alt="Facebook Ads Management" class="crm-hero__bg">
            <div class="crm-hero__content">
                <span class="crm-hero__badge">Social Advertising</span>
                <h1 class="crm-hero__title">Facebook Ads</h1>
                <p class="crm-hero__subtitle">High-performing campaigns that connect your brand with the right audience
                    at the right time.</p>
                <a href="contact" class="crm-hero__btn">
                    <span>Launch Your Campaign</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- ===== INTRO TEXT ===== -->
        <section class="crm-intro section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="crm-section-title wow fadeInUp" data-wow-delay=".2s">Results-Driven Facebook
                            Advertising</h2>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".3s">At CreateAWeb, we create and
                            manage high-performing Facebook advertising campaigns that connect your brand with the right
                            audience at the right time. With billions of active users across Facebook and Instagram,
                            social media advertising offers unmatched targeting capabilities. Our data-led strategies
                            ensure your ads don't just generate clicks — they generate measurable business results.</p>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".4s" style="margin-top: 16px;">Whether
                            you're building brand awareness, launching a new product, or scaling your sales, CreateAWeb
                            delivers Facebook Ads campaigns designed to maximise return on investment.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY FACEBOOK ADS ===== -->
        <section class="crm-services-grid">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-3" data-wow-delay=".2s">Why Facebook
                    Advertising?</h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">Facebook Ads allow
                    businesses to target users based on demographics, interests, behaviours, and purchasing patterns —
                    making it one of the most powerful customer acquisition platforms available. Unlike traditional
                    advertising, every pound spent can be tracked, measured, and optimised.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <h3 class="crm-card__title">Reach Specific Audiences</h3>
                            <p class="crm-card__text">Target users by age, location, interests, job title, and buying
                                behaviour to reach the people who matter most to your business.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <h3 class="crm-card__title">Build Brand Awareness</h3>
                            <p class="crm-card__text">Get your brand in front of thousands of potential customers
                                quickly with engaging visual ads across Facebook and Instagram.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-user-check"></i>
                            </div>
                            <h3 class="crm-card__title">Generate Qualified Leads</h3>
                            <p class="crm-card__text">Capture high-quality leads directly through Facebook's lead forms
                                or drive traffic to optimised landing pages.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <h3 class="crm-card__title">Drive Online Sales</h3>
                            <p class="crm-card__text">Convert social media users into paying customers with conversion-
                                optimised campaigns and compelling product showcases.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-rotate"></i>
                            </div>
                            <h3 class="crm-card__title">Retarget Website Visitors</h3>
                            <p class="crm-card__text">Re-engage people who visited your site but didn't convert —
                                bringing them back with tailored messaging and offers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3 class="crm-card__title">Scale Based on Data</h3>
                            <p class="crm-card__text">Every campaign is tracked and optimised in real time — double down
                                on what works and cut what doesn't for maximum ROI.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include __DIR__ . '/../include/footer.html'; ?>