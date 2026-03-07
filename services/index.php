<?php
require_once '../include/db.php';
include '../include/header.html';
// $stmt = $pdo->query("SELECT * FROM services ORDER BY id DESC");
// $services = $stmt->fetchAll();
?>


<!-- GT Search Start -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" name="search" placeholder="Search Here...">
            <button type="submit" aria-label="search submit" class="search-btn">
                <span><i class="fa-regular fa-magnifying-glass"></i></span>
            </button>
        </form>
    </div>
</div>

<div class="page-wrapper dark-bg-4">
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- Breadcrumb page Section Start -->
            <div class="breadcrumb-page-area-one style-2 pt-96 pb-150 fix">
                <div class="breadcrumb-page-wrap pt-250 pb-250"
                    style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/pages/breadcrumbPageThumb1_1.png) center  ; ">
                    <div class="container">
                        <div class="gt-breadcrumb-wrapper mb-0">
                            <div class="title">Our service</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb page Section End -->

            <div class="service-page-cta">
                <div class="service-page-cta-wrap pb-150">
                    <div class="container">
                        <div class="content">
                            <div class="thumb">
                                <img src="assets/img/pages/servicePagelogo1_2.png" alt="shape">
                            </div>

                            <div class="text gt_text_invert">
                                We provide creative and professional design solutions that help brands stand out and
                                connect with their audience. From concept to final delivery, every project is crafted
                                with attention
                                to detail and innovation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Section Start -->
            <section class="service-area-one">
                <div class="service-wrapper pb-150">
                    <div class="container">

                        <div class="row gy-4">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">01</span>
                                        </div>

                                        <h3 class="title">Google Guarantee</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258681_protection-security-rights-guarantee-illustration.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fa-solid fa-shield-check fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/google-guarantee.php">
                                            <div class="card-top-part">
                                                <span class="number">01</span>
                                                <h3 class="title">Google Guarantee</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                Build Trust, Boost Visibility &amp;amp; Win More Local Customers<br>
                                                At CreateAweb, we help businesses unlock the full potential of Google Guarantee. one of the most trusted trust-building features available... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/google-guarantee.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/google-guarantee.php">
                                                </a><a href="services/google-guarantee.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">02</span>
                                        </div>

                                        <h3 class="title">Website Hosting</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258597_dynamic-website-hosting-concept.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fa-solid fa-server fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/website-hosting.php">
                                            <div class="card-top-part">
                                                <span class="number">02</span>
                                                <h3 class="title">Website Hosting</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                At CreateAweb, we provide high-performance website hosting designed to keep your business online, secure, and running at peak speed.Your website is often the first impression customers have of your bu... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/website-hosting.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/website-hosting.php">
                                                </a><a href="services/website-hosting.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">03</span>
                                        </div>

                                        <h3 class="title">CRM (Customer Relationship Management)</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258499_crm-business-company-strategy-marketing-concept.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fa-solid fa-users fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/crm.php">
                                            <div class="card-top-part">
                                                <span class="number">03</span>
                                                <h3 class="title">CRM (Customer Relationship Management)</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                At CreateAweb, we design and develop powerful CRM systems that simplify your operations, automate your follow-ups, and transform customer data into predictable, measurable growth.<br>
                                                In today&amp;rsquo;s co... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/crm.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/crm.php">
                                                </a><a href="services/crm.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">04</span>
                                        </div>

                                        <h3 class="title">Practice Growth</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258441_business-evaluation-information-growth-concept (1).jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fa-solid fa-chart-line fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/practice-growth.php">
                                            <div class="card-top-part">
                                                <span class="number">04</span>
                                                <h3 class="title">Practice Growth</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                At CreateAweb, we specialise in helping professional practices grow with predictable, measurable marketing systems.<br>
                                                Running a practice is demanding. Between managing clients, overseeing operations, a... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/practice-growth.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/practice-growth.php">
                                                </a><a href="services/practice-growth.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">05</span>
                                        </div>

                                        <h3 class="title">Seasonal Event Campaigns</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258366_friends-having-covid-party-using-technology.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fa-solid fa-calendar-star fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/seasonal-event-campaigns.php">
                                            <div class="card-top-part">
                                                <span class="number">05</span>
                                                <h3 class="title">Seasonal Event Campaigns</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                Imely Campaigns. Maximum Impact. Measurable Results.<br>
                                                At CreateAWeb, we design and execute powerful seasonal marketing campaigns that capture attention at the perfect moment &amp;nbsp;when your audience i... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/seasonal-event-campaigns.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/seasonal-event-campaigns.php">
                                                </a><a href="services/seasonal-event-campaigns.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">06</span>
                                        </div>

                                        <h3 class="title">Facebook Ads</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258083_creative-team-having-discussion-social-media-application.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fab fa-facebook fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/facebook-ads.php">
                                            <div class="card-top-part">
                                                <span class="number">06</span>
                                                <h3 class="title">Facebook Ads</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                At CreateAWeb, we create and manage high-performing Facebook advertising campaigns that connect your brand with the right audience at the right time.<br>
                                                With billions of active users across Facebook and... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/facebook-ads.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/facebook-ads.php">
                                                </a><a href="services/facebook-ads.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">07</span>
                                        </div>

                                        <h3 class="title">Google Ads</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258068_online-marketing-commercial-connection-technology.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fab fa-google fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/google-ads.php">
                                            <div class="card-top-part">
                                                <span class="number">07</span>
                                                <h3 class="title">Google Ads</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                At CreateAWeb, we design and manage high-performance Google Ads campaigns that generate qualified leads, increase sales, and maximise your return on investment.<br>
                                                While SEO builds long-term growth, Goo... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/google-ads.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/google-ads.php">
                                                </a><a href="services/google-ads.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number">08</span>
                                        </div>

                                        <h3 class="title">Search Engine Optimisation (SEO)</h3>
                                        <div class="avatars text-center">
                                            <!--                                                 <img src="./assets/uploads/1772258055_searching-engine-optimizing-seo-browsing-concept.jpg" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                             -->
                                            <div class="mt-4 text-center"><i class="fa-solid fa-magnifying-glass fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black"></path>
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="services/search-engine-optimization.php">
                                            <div class="card-top-part">
                                                <span class="number">08</span>
                                                <h3 class="title">Search Engine Optimisation (SEO)</h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                At CreateAWeb, we deliver results-driven SEO services that help businesses dominate search engines, attract qualified traffic, and convert visitors into loyal customers. In today&amp;rsquo;s competitive d... </div>

                                        </a>
                                        <div class="card-bottom-content"><a href="services/search-engine-optimization.php">
                                            </a>
                                            <div class="simple-btn"><a href="services/search-engine-optimization.php">
                                                </a><a href="services/search-engine-optimization.php" class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                    <span class="gt-btn-circle-text-2">details</span>
                                                    <i class="gt-btn-circle-dot"></i>
                                                </a>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="#22E66E"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="row gy-4">
                        <?php
                        $count = 1;
                        foreach ($services as $service):
                            $num = str_pad($count++, 2, "0", STR_PAD_LEFT);
                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="service-card style-2 shadow-sm">
                                    <div class="card-front">
                                        <div class="card-top-part">
                                            <span class="number"><?php echo $num; ?></span>
                                        </div>

                                        <h3 class="title"><?php echo htmlspecialchars($service['title']); ?></h3>
                                        <div class="avatars text-center">
                                            <?php if ($service['image']): ?>
                                                <img src="./<?php echo $service['image']; ?>" alt="service image" style="width: 100%; border-radius: 10px; margin-top: 15px; height: 150px; object-fit: cover;">
                                            <?php else: ?>
                                                <?php endif; ?>
                                            <div class="mt-4 text-center"><i class="fas <?php echo $service['icon'] ?: 'fa-cog'; ?> fa-4x text-dark"></i></div>
                                        </div>

                                        <div class="service-card-shape">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30"
                                                viewBox="0 0 29 30" fill="none">
                                                <path d="M0 30H29V0.75L0 30Z" fill="black" />
                                            </svg>
                                        </div>
                                    </div>

                                    <div class="card-back">
                                        <a href="service-details?id=<?php echo $service['id']; ?>">
                                            <div class="card-top-part">
                                                <span class="number"><?php echo $num; ?></span>
                                                <h3 class="title"><?php echo htmlspecialchars($service['title']); ?></h3>
                                            </div>

                                            <div class="service-desc p-4 text-white text-justify" style="text-align: justify; font-size: 14px; line-height: 1.6;">
                                                <?php echo nl2br(htmlspecialchars(substr(strip_tags($service['description']), 0, 200))); ?><?php echo strlen(strip_tags($service['description'])) > 200 ? '...' : ''; ?>
                                            </div>

                                            <div class="card-bottom-content">
                                                <div class="simple-btn">
                                                    <a href="service-details?id=<?php echo $service['id']; ?>"
                                                        class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                                        <span class="gt-btn-circle-text-2">details</span>
                                                        <i class="gt-btn-circle-dot"></i>
                                                    </a>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30"
                                                    viewBox="0 0 29 30" fill="none">
                                                    <path d="M0 30H29V0.75L0 30Z" fill="#22E66E" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <?php if (empty($services)): ?>
                            <div class="col-12 text-center py-5">
                                <h4 class="text-white">No services added yet. Add them in the <a href="admin/services.php" class="text-primary text-decoration-underline">admin panel</a>.</h4>
                            </div>
                        <?php endif; ?>
                    </div> -->
                    </div>
                </div>
            </section>
            <!-- Service Section End -->



            <?php include '../include/footer.html'; ?>