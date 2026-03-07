<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- ===== HERO SECTION ===== -->
        <section class="crm-hero">
            <div class="crm-hero__overlay"></div>
            <img src="assets/services/imgs/seo-hero.png"
                alt="Search Engine Optimisation Services" class="crm-hero__bg">
            <div class="crm-hero__content">
                <span class="crm-hero__badge">SEO Services</span>
                <h1 class="crm-hero__title">Search Engine<br>Optimisation (SEO)</h1>
                <p class="crm-hero__subtitle">Results-driven SEO that helps businesses dominate search engines, attract
                    qualified traffic, and convert visitors into loyal customers.</p>
                <a href="contact" class="crm-hero__btn">
                    <span>Get Your SEO Audit</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- ===== INTRO TEXT ===== -->
        <section class="crm-intro section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="crm-section-title wow fadeInUp" data-wow-delay=".2s">Rank Higher. Grow Faster.</h2>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".3s">In today's competitive digital
                            landscape, ranking on the first page of Google is no longer optional — it's essential. Our
                            tailored SEO strategies are built to elevate your brand visibility, strengthen online
                            authority, and generate long-term, sustainable growth. Whether you're a local business, an
                            expanding eCommerce store, or an established national brand, CreateAWeb develops SEO
                            campaigns aligned with your goals and target audience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY SEO MATTERS ===== -->
        <section class="crm-services-grid">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-3" data-wow-delay=".2s">Why SEO Matters More
                    Than Ever</h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">Search engines are the
                    starting point for most buying journeys. If your business isn't visible when potential customers
                    search, your competitors are winning those opportunities. SEO is not just about rankings — it's
                    about building a strong digital foundation for continuous business growth.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                            </div>
                            <h3 class="crm-card__title">Increase Organic Traffic</h3>
                            <p class="crm-card__text">Drive more visitors to your website through improved search
                                rankings without paying for every click.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-crosshairs"></i>
                            </div>
                            <h3 class="crm-card__title">Reach High-Intent Customers</h3>
                            <p class="crm-card__text">Connect with people actively searching for your services — the
                                most qualified leads available online.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <h3 class="crm-card__title">Improve Credibility &amp; Trust</h3>
                            <p class="crm-card__text">Higher rankings signal authority and trustworthiness, building
                                brand confidence with potential customers.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-magnet"></i>
                            </div>
                            <h3 class="crm-card__title">Generate Consistent Leads</h3>
                            <p class="crm-card__text">Build a reliable pipeline of enquiries without relying solely on
                                paid advertising channels.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3 class="crm-card__title">Long-Term Marketing ROI</h3>
                            <p class="crm-card__text">SEO builds compounding results over time — unlike ads, your
                                organic traffic doesn't stop when spending stops.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== OUR SEO SERVICES ===== -->
        <section class="crm-detail crm-detail--alt section-padding">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-3" data-wow-delay=".2s">Our SEO Services</h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">We provide a complete,
                    end-to-end SEO solution tailored to businesses of all sizes and industries.</p>

                <!-- Service 1: SEO Audit -->
                <div class="row g-4 justify-content-center mb-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-magnifying-glass-chart"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">SEO Audit &amp; Strategy Development</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">Every successful campaign
                                        begins with deep analysis and research. We build a clear, customised SEO
                                        roadmap aligned with your business objectives.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> Technical website analysis</li>
                                        <li><i class="fa-solid fa-check"></i> Competitor research</li>
                                        <li><i class="fa-solid fa-check"></i> Market and industry insights</li>
                                        <li><i class="fa-solid fa-check"></i> Advanced keyword research</li>
                                        <li><i class="fa-solid fa-check"></i> Performance benchmarking</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: On-Page SEO -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-file-code"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">On-Page SEO Optimisation</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">We ensure your website
                                        communicates clearly with search engines while delivering an exceptional user
                                        experience.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> Title tags and meta descriptions</li>
                                        <li><i class="fa-solid fa-check"></i> Header structure and keyword placement
                                        </li>
                                        <li><i class="fa-solid fa-check"></i> Internal linking architecture</li>
                                        <li><i class="fa-solid fa-check"></i> Content quality and keyword relevance</li>
                                        <li><i class="fa-solid fa-check"></i> Image optimisation and schema markup</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: Technical SEO -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-microchip"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Technical SEO</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">Technical performance plays a
                                        critical role in rankings. A technically strong website builds authority and
                                        improves long-term ranking stability.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> Website speed optimisation</li>
                                        <li><i class="fa-solid fa-check"></i> Mobile responsiveness improvements</li>
                                        <li><i class="fa-solid fa-check"></i> Core Web Vitals enhancement</li>
                                        <li><i class="fa-solid fa-check"></i> Crawl error resolution</li>
                                        <li><i class="fa-solid fa-check"></i> XML sitemap and structured data</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4: Content Strategy -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-pen-nib"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Content Strategy &amp; SEO Copywriting</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">Content is the foundation of
                                        organic growth. We create strategic, keyword-driven content designed to rank and
                                        convert.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> SEO blog writing</li>
                                        <li><i class="fa-solid fa-check"></i> Landing page optimisation</li>
                                        <li><i class="fa-solid fa-check"></i> Service page content</li>
                                        <li><i class="fa-solid fa-check"></i> Long-form authority content</li>
                                        <li><i class="fa-solid fa-check"></i> Conversion-focused copy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5: Link Building -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-link"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Link Building &amp; Off-Page SEO</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">We implement ethical,
                                        white-hat link building strategies that strengthen your domain authority. We
                                        focus on sustainable growth — not risky shortcuts.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> High-authority backlink acquisition</li>
                                        <li><i class="fa-solid fa-check"></i> Digital PR outreach</li>
                                        <li><i class="fa-solid fa-check"></i> Local citations</li>
                                        <li><i class="fa-solid fa-check"></i> Brand mentions and authority building</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6: Local SEO -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">Local SEO</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">For businesses targeting
                                        specific regions, local SEO ensures your business stands out in local search
                                        results and map listings.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> Google Business Profile optimisation</li>
                                        <li><i class="fa-solid fa-check"></i> Local keyword targeting</li>
                                        <li><i class="fa-solid fa-check"></i> Citation consistency</li>
                                        <li><i class="fa-solid fa-check"></i> Location-specific landing pages</li>
                                        <li><i class="fa-solid fa-check"></i> Review strategy guidance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service 7: eCommerce SEO -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="crm-card" style="text-align: left; background: #fff;">
                            <div class="d-flex align-items-start gap-3">
                                <div class="crm-card__icon" style="flex-shrink: 0;">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </div>
                                <div>
                                    <h3 class="crm-card__title">eCommerce SEO</h3>
                                    <p class="crm-card__text" style="margin-bottom: 16px;">For online stores, visibility
                                        directly impacts revenue. We help transform traffic into measurable sales
                                        growth.</p>
                                    <ul class="crm-detail__list" style="margin: 0;">
                                        <li><i class="fa-solid fa-check"></i> Product page optimisation</li>
                                        <li><i class="fa-solid fa-check"></i> Structured data for products</li>
                                        <li><i class="fa-solid fa-check"></i> Category page targeting</li>
                                        <li><i class="fa-solid fa-check"></i> Conversion rate optimisation</li>
                                        <li><i class="fa-solid fa-check"></i> Technical performance enhancements</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include __DIR__ . '/../include/footer.html'; ?>