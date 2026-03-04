<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- ===== HERO SECTION ===== -->
        <section class="crm-hero">
            <div class="crm-hero__overlay"></div>
            <img src="assets/services/imgs/google-ads-hero.png"
                alt="Google Ads Management" class="crm-hero__bg">
            <div class="crm-hero__content">
                <span class="crm-hero__badge">Paid Search</span>
                <h1 class="crm-hero__title">Google Ads</h1>
                <p class="crm-hero__subtitle">High-performance campaigns that generate qualified leads, increase sales,
                    and maximise your return on investment.</p>
                <a href="contact" class="crm-hero__btn">
                    <span>Start Advertising</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- ===== INTRO TEXT ===== -->
        <section class="crm-intro section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="crm-section-title wow fadeInUp" data-wow-delay=".2s">Instant Visibility. Measurable
                            Growth.</h2>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".3s">At CreateAWeb, we design and
                            manage high-performance Google Ads campaigns that generate qualified leads, increase sales,
                            and maximise your return on investment. While SEO builds long-term growth, Google Ads
                            delivers immediate visibility at the exact moment your customers are searching. Our
                            data-driven approach ensures your advertising budget works smarter — not harder.</p>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".4s" style="margin-top: 16px;">Whether
                            you're a startup looking for fast exposure or an established brand scaling aggressively,
                            CreateAWeb creates paid campaigns that convert clicks into revenue.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY GOOGLE ADS ===== -->
        <section class="crm-services-grid">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-3" data-wow-delay=".2s">Why Google Ads?</h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">Google processes billions
                    of searches every day. With Google Ads, your business appears at the top of search results when
                    potential customers actively look for your products or services. When managed strategically, Google
                    Ads becomes one of the most powerful digital growth tools available.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-crosshairs"></i>
                            </div>
                            <h3 class="crm-card__title">High Purchase Intent</h3>
                            <p class="crm-card__text">Reach customers who are actively searching for your products or
                                services — people ready to buy right now.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <h3 class="crm-card__title">Precise Targeting</h3>
                            <p class="crm-card__text">Target specific keywords, locations, and demographics to ensure
                                your ads reach the most relevant audience.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                            <h3 class="crm-card__title">Full Budget Control</h3>
                            <p class="crm-card__text">Set daily budgets, bid strategies, and spending limits — you're
                                always in control of how much you invest.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-chart-column"></i>
                            </div>
                            <h3 class="crm-card__title">Track Every Result</h3>
                            <p class="crm-card__text">Track every click, lead, and sale with full transparency — know
                                exactly what your advertising spend delivers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <h3 class="crm-card__title">Instant Traffic</h3>
                            <p class="crm-card__text">Generate immediate website traffic while your SEO strategy builds
                                long-term organic momentum alongside it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include __DIR__ . '/../include/footer.html'; ?>