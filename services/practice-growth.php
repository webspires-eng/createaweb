<?php
require_once __DIR__ . '/../include/db.php';
include __DIR__ . '/../include/header.html';
?>

<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- ===== HERO SECTION ===== -->
        <section class="crm-hero">
            <div class="crm-hero__overlay"></div>
            <img src="assets/services/imgs/practice-growth-hero.png"
                alt="Practice Growth Marketing" class="crm-hero__bg">
            <div class="crm-hero__content">
                <span class="crm-hero__badge">Practice Growth</span>
                <h1 class="crm-hero__title">Practice Growth</h1>
                <p class="crm-hero__subtitle">Predictable, measurable marketing systems designed to help professional
                    practices grow with confidence.</p>
                <a href="contact" class="crm-hero__btn">
                    <span>Grow Your Practice</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- ===== INTRO TEXT ===== -->
        <section class="crm-intro section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="crm-section-title wow fadeInUp" data-wow-delay=".2s">Strategic Growth for
                            Professional Practices</h2>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".3s">At CreateAweb, we specialise in
                            helping professional practices grow with predictable, measurable marketing systems. Running
                            a practice is demanding. Between managing clients, overseeing operations, and maintaining
                            compliance, marketing often becomes reactive rather than strategic. That's where we step
                            in.</p>
                        <p class="crm-section-desc wow fadeInUp" data-wow-delay=".4s" style="margin-top: 16px;">We
                            design complete growth systems that increase visibility, generate qualified enquiries, and
                            turn prospects into long-term clients — without adding pressure to your internal team.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHAT IS PRACTICE GROWTH MARKETING ===== -->
        <section class="crm-services-grid">
            <div class="container">
                <h2 class="crm-section-title text-center wow fadeInUp mb-3" data-wow-delay=".2s">What Is Practice Growth
                    Marketing?</h2>
                <p class="crm-section-desc text-center wow fadeInUp mb-5" data-wow-delay=".3s">Rather than focusing on
                    one tactic, we build a connected strategy that aligns your website, advertising, local search,
                    reputation management, and automation into one streamlined growth engine.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-user-plus"></i>
                            </div>
                            <h3 class="crm-card__title">New Client Acquisition</h3>
                            <p class="crm-card__text">Attract a steady stream of new clients through targeted campaigns
                                and optimised digital presence.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-calendar-check"></i>
                            </div>
                            <h3 class="crm-card__title">Appointment Bookings</h3>
                            <p class="crm-card__text">Streamline the booking process and increase consultation
                                appointments with clear calls-to-action.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <h3 class="crm-card__title">Client Retention</h3>
                            <p class="crm-card__text">Build lasting relationships through automated follow-ups, email
                                sequences, and personalised engagement.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3 class="crm-card__title">Online Authority &amp; Trust</h3>
                            <p class="crm-card__text">Establish your practice as a trusted authority through reviews,
                                testimonials, and credentialed content.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-sterling-sign"></i>
                            </div>
                            <h3 class="crm-card__title">Revenue Per Client</h3>
                            <p class="crm-card__text">Increase the lifetime value of each client through upselling,
                                cross-promotion, and nurture campaigns.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="crm-card">
                            <div class="crm-card__icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3 class="crm-card__title">Long-Term Brand Value</h3>
                            <p class="crm-card__text">Build a recognisable, trusted brand that generates referrals and
                                repeat business organically.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include __DIR__ . '/../include/footer.html'; ?>