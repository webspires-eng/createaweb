<?php
require_once 'include/db.php';
include 'include/header.html';
?>

<div class="page-wrapper dark-bg-4">



    <div id="smooth-wrapper">
        <div id="smooth-content">



            <!-- Hero Section Start -->
            <section class="hero-section-4 hero-4 section-bg-6 bg-cover"
                style="background-image: url('assets/img/home-5/hero-bg.png');">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="text-anim">
                            Smart Marketing <span class="text"></span> <br>
                            Clear Strategy <br>
                        </h1>
                        <div class="hero-bottom">
                            <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay=".3s">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                            <div class="content wow fadeInUp" data-wow-delay=".5s">
                                <p class="text-justify">
                                    We help companies turn data into direction. By uncovering actionable insights, we
                                    identify growth opportunities, reduce risk, and empower smarter decisions that drive
                                    sustainable, long-term success.
                                </p>
                                <a href="about" class="arrow-icon">
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-image fix wow fadeInUp" data-wow-delay=".3s">
                    <img data-speed=".8" src="assets/uploads/homehero.webp" alt="img">
                </div>
            </section>

            <!-- Work Process Section Start -->
            <section class="work-process-section-4 fix section-padding">
                <div class="container">
                    <div class="section-title5 style-4 text-center">
                        <h6 class="sub-title wow fadeInUp">
                            [ our working process ]
                        </h6>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            Driven by passion, guided by purpose <br>
                            We create brands that truly stand out.

                        </h2>
                        <div class="simple-btn-white gt_fade_anim mt-4" data-delay=".5">
                            <a href="about"
                                class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                <span class="gt-btn-circle-text-2">Learn more</span>
                                <i class="gt-btn-circle-dot bg-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $services = $pdo->query("SELECT * FROM services LIMIT 3")->fetchAll();
                        if ($services) {
                            $delay = 0.3;
                            $i = 0;
                            foreach ($services as $service) {
                                $activeClass = ($i == 1) ? 'active' : ''; // Make 2nd item active matching original design
                                $count = str_pad($i + 1, 2, '0', STR_PAD_LEFT);
                        ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                                    <div class="work-process-box-style-4 <?php echo $activeClass; ?> fix bg-cover"
                                        style="background-image: url('assets/img/home-5/process-shape.png');">
                                        <div class="content">
                                            <span><?php echo $count; ?></span>
                                            <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                                            <p class="text-justify">
                                                <?php echo nl2br(htmlspecialchars(substr(strip_tags($service['description']), 0, 200))); ?><?php echo strlen(strip_tags($service['description'])) > 200 ? '...' : ''; ?>
                                            </p>
                                        </div>
                                        <div class="bg-image">
                                            <!-- <img src="<?php echo htmlspecialchars($service['image']); ?>" alt="img"> -->
                                        </div>
                                        <a href="about" class="work-btn">Read More<i class="fa-solid fa-arrow-up-right"></i></a>
                                    </div>
                                </div>
                        <?php
                                $delay += 0.2;
                                $i++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </section>

            <!-- Project Section Start -->
            <!-- <section class="project-section-5 pt-0 fix section-padding">
                <div class="container">
                    <div class="section-title-area">
                        <div class="section-title style-4">
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                our <br> portfolio
                            </h2>
                        </div>
                        <div class="simple-btn-white gt_fade_anim" data-delay=".5">
                            <a href="project"
                                class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                <span class="gt-btn-circle-text-2">View All Projects</span>
                                <i class="gt-btn-circle-dot bg-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-8 col-lg-7 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-style-image-44">
                            <img src="assets/img/home-5/project/project-01.jpg" alt="img">
                            <img src="assets/img/home-5/project/project-01.jpg" alt="img">
                            <div class="content">
                                <h3>
                                    <a href="project-details">
                                        Market expansion
                                    </a>
                                </h3>
                                <ul>
                                    <li>
                                        <a href="project-details">Consulting</a>
                                    </li>
                                    <li>
                                        <a href="project-details">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="project-style-image-44">
                            <img src="assets/img/home-5/project/project-02.jpg" alt="img">
                            <img src="assets/img/home-5/project/project-02.jpg" alt="img">
                            <div class="content">
                                <h3>
                                    <a href="project-details">
                                        Market expansion
                                    </a>
                                </h3>
                                <ul>
                                    <li>
                                        <a href="project-details">Consulting</a>
                                    </li>
                                    <li>
                                        <a href="project-details">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-style-image-44">
                            <img src="assets/img/home-5/project/project-03.jpg" alt="img">
                            <img src="assets/img/home-5/project/project-03.jpg" alt="img">
                            <div class="content">
                                <h3>
                                    <a href="project-details">
                                        Market expansion
                                    </a>
                                </h3>
                                <ul>
                                    <li>
                                        <a href="project-details">Consulting</a>
                                    </li>
                                    <li>
                                        <a href="project-details">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="project-style-image-44">
                            <img src="assets/img/home-5/project/project-04.jpg" alt="img">
                            <img src="assets/img/home-5/project/project-04.jpg" alt="img">
                            <div class="content">
                                <h3>
                                    <a href="project-details">
                                        Market expansion
                                    </a>
                                </h3>
                                <ul>
                                    <li>
                                        <a href="project-details">Consulting</a>
                                    </li>
                                    <li>
                                        <a href="project-details">Business</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Service Section Start -->
            <section class="service-section-4 fix section-padding pt-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title5 style-4 text-center">
                                <h6 class="sub-title wow fadeInUp">
                                    [ our working process ]
                                </h6>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                    Our Creative Services That Deliver Innovation, And Measurable Results
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="service-box-style-4">
                        <div class="service-list-wrap accordion block active-block wow fadeInUp" data-wow-delay=".2s">
                            <div class="service-acc-btn active">
                                <span class="number">001.</span>
                                <h3>
                                    Brand strategy
                                </h3>
                                <div class="icon fa-solid fa-plus"></div>
                            </div>
                            <div class="service-acc-content current">
                                <div class="service-wrap">
                                    <div class="item-text">
                                        <h4>Define identity:</h4>
                                        <div class="text">
                                            <p class="text-justify">
                                                Provide data-driven stratege help companies identifies opportunities,
                                                reduce risk and achieve long term of our growth. Provide driven on
                                                strategie.
                                            </p>
                                        </div>
                                        <div class="simple-btn-white mt-4 gt_fade_anim" data-delay=".5">
                                            <a href="service"
                                                class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                                <span class="gt-btn-circle-text-2">View Details</span>
                                                <i class="gt-btn-circle-dot bg-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        <h4>Includes:</h4>
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Personalisation at scale
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Improved Customer retention
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Data-Driven insights
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-list-wrap accordion block wow fadeInUp" data-wow-delay=".4s">
                            <div class="service-acc-btn">
                                <span class="number">002.</span>
                                <h3>
                                    Leadership Training
                                </h3>
                                <div class="icon fa-solid fa-plus"></div>
                            </div>
                            <div class="service-acc-content">
                                <div class="service-wrap">
                                    <div class="item-text">
                                        <h4>Define identity:</h4>
                                        <div class="text">
                                            <p class="text-justify">
                                                Provide data-driven stratege help companies identifies opportunities,
                                                reduce risk and achieve long term of our growth. Provide driven on
                                                strategie.
                                            </p>
                                        </div>
                                        <div class="simple-btn-white mt-4 gt_fade_anim" data-delay=".5">
                                            <a href="service"
                                                class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                                <span class="gt-btn-circle-text-2">View Details</span>
                                                <i class="gt-btn-circle-dot bg-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        <h4>Includes:</h4>
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Personalisation at scale
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Improved Customer retention
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Data-Driven insights
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-list-wrap accordion block wow fadeInUp" data-wow-delay=".6s">
                            <div class="service-acc-btn">
                                <span class="number">003.</span>
                                <h3>
                                    Digital marketing
                                </h3>
                                <div class="icon fa-solid fa-plus"></div>
                            </div>
                            <div class="service-acc-content">
                                <div class="service-wrap">
                                    <div class="item-text">
                                        <h4>Define identity:</h4>
                                        <div class="text">
                                            <p class="text-justify">
                                                Provide data-driven stratege help companies identifies opportunities,
                                                reduce risk and achieve long term of our growth. Provide driven on
                                                strategie.
                                            </p>
                                        </div>
                                        <div class="simple-btn-white mt-4 gt_fade_anim" data-delay=".5">
                                            <a href="service"
                                                class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                                <span class="gt-btn-circle-text-2">View Details</span>
                                                <i class="gt-btn-circle-dot bg-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        <h4>Includes:</h4>
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Personalisation at scale
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Improved Customer retention
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Data-Driven insights
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-list-wrap accordion block wow fadeInUp" data-wow-delay=".8s">
                            <div class="service-acc-btn">
                                <span class="number">004.</span>
                                <h3>
                                    Web development
                                </h3>
                                <div class="icon fa-solid fa-plus"></div>
                            </div>
                            <div class="service-acc-content">
                                <div class="service-wrap">
                                    <div class="item-text">
                                        <h4>Define identity:</h4>
                                        <div class="text">
                                            <p class="text-justify">
                                                Provide data-driven stratege help companies identifies opportunities,
                                                reduce risk and achieve long term of our growth. Provide driven on
                                                strategie.
                                            </p>
                                        </div>
                                        <div class="simple-btn-white mt-4 gt_fade_anim" data-delay=".5">
                                            <a href="service"
                                                class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                                <span class="gt-btn-circle-text-2">View Details</span>
                                                <i class="gt-btn-circle-dot bg-2"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-text">
                                        <h4>Includes:</h4>
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Personalisation at scale
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Improved Customer retention
                                            </li>
                                            <li>
                                                <i class="fa-solid fa-circle-check"></i>
                                                Data-Driven insights
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Marquee Section Start -->
            <div class="marquee-section2 style-marque-5">
                <div class="marquee5 mb-0 m-0">
                    <div class="marquee-group">
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Innovation
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Transform
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Design
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Create
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Empower
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Build
                        </div>
                    </div>
                    <div class="marquee-group">
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Innovation
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Transform
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Design
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Create
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Empower
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Build
                        </div>
                    </div>
                    <div class="marquee-group">
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Innovation
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Transform
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Design
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Create
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Empower
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Build
                        </div>
                    </div>
                    <div class="marquee-group">
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Innovation
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Transform
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Design
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Create
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Empower
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Build
                        </div>
                    </div>
                    <div class="marquee-group">
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Innovation
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Transform
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Design
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Create
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Empower
                        </div>
                        <div class="text">
                            <img src="assets/img/home-5/star.svg" alt="img">
                            Build
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial Section Start -->
            <section class="testimonial-section-4 fix section-padding">
                <div class="container">
                    <div class="section-title5 style-4 text-center">
                        <h6 class="sub-title wow fadeInUp">
                            [ Clients testimonials ]
                        </h6>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            Our Valued Clients Trust Us To <br> Innovative <span class="testi-iimg"></span>Solutions And <br> Outstanding Results.
                        </h2>
                    </div>
                </div>
                <div class="swiper testimonial-slider-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-box-style-4 bg-cover"
                                style="background-image: url('assets/img/home-5/process-shape.png');">
                                <div class="quote-icon">
                                    <img src="assets/img/home-5/quote-icon.png" alt="img">
                                </div>
                                <h3 class="text-justify">
                                    “From the outset, we provid expectations and regular updates our progress. You’ll
                                    receive comprehensive reports outline. From the outset, we pro expectations and
                                    regular updates our progress.
                                </h3>
                                <div class="client-info-item">
                                    <div class="client-info">
                                        <h4>Robert Allison</h4>
                                        <span>Sales manager</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-style-4 style-2 bg-cover"
                                style="background-image: url('assets/img/home-5/process-shape.png');">
                                <div class="quote-icon">
                                    <img src="assets/img/home-5/quote-icon.png" alt="img">
                                </div>
                                <h3 class="text-justify">
                                    “From the outset, we provid expectations and regular updates our progress. You’ll
                                    receive comprehensive reports outline. From the outset, we pro expectations and
                                    regular updates our progress.
                                </h3>
                                <div class="client-info-item">
                                    <div class="client-info">
                                        <h4>James Anderson </h4>
                                        <span>Sales manager</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-style-4 bg-cover"
                                style="background-image: url('assets/img/home-5/process-shape.png');">
                                <div class="quote-icon">
                                    <img src="assets/img/home-5/quote-icon.png" alt="img">
                                </div>
                                <h3 class="text-justify">
                                    “From the outset, we provid expectations and regular updates our progress. You’ll
                                    receive comprehensive reports outline. From the outset, we pro expectations and
                                    regular updates our progress.
                                </h3>
                                <div class="client-info-item">
                                    <div class="client-info">
                                        <h4>Daniel Taeloor </h4>
                                        <span>Sales manager</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box-style-4 style-2 bg-cover"
                                style="background-image: url('assets/img/home-5/process-shape.png');">
                                <div class="quote-icon">
                                    <img src="assets/img/home-5/quote-icon.png" alt="img">
                                </div>
                                <h3 class="text-justify">
                                    “From the outset, we provid expectations and regular updates our progress. You’ll
                                    receive comprehensive reports outline. From the outset, we pro expectations and
                                    regular updates our progress.
                                </h3>
                                <div class="client-info-item">
                                    <div class="client-info">
                                        <h4>Kevin Harriees </h4>
                                        <span>Sales manager</span>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-dot text-center mt-5">
                        <div class="dot2"></div>
                    </div>
                </div>
            </section>

            <!-- Award Section Start -->
            <section class="award-section fix section-padding">
                <div class="container">
                    <div class="award-wrapper">
                        <h2 class="title text_invert-2 tx-title sec_title  tz-itm-title tz-itm-anim">
                            Explore <br> Recognition
                        </h2>
                        <div class="row">
                            <!-- <div class="col-xl-3"></div> -->
                            <div class="col-xl-12">
                                <div class="section-title5 style-4">
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                        Recognising Our commitment To Excellence Through Prestigious For wards,
                                        celebrating creative, innovation, <span>and outstanding client achievements
                                            globally.</span>
                                    </h2>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="award-box-items bg-cover"
                                            style="background-image: url('assets/img/home-5/process-shape.png');">
                                            <div class="icon">
                                                <img src="assets/img/home-5/award/award-1.png" alt="img">
                                            </div>
                                            <h3 class="award-title">Best innovative for <br> design award.</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="award-box-items bg-cover"
                                            style="background-image: url('assets/img/home-5/process-shape.png');">
                                            <div class="icon">
                                                <img src="assets/img/home-5/award/award-2.png" alt="img">
                                            </div>
                                            <h3 class="award-title">Excellence in <br> branding award.</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="award-box-items bg-cover"
                                            style="background-image: url('assets/img/home-5/process-shape.png');">
                                            <div class="icon">
                                                <img src="assets/img/home-5/award/award-3.png" alt="img">
                                            </div>
                                            <h3 class="award-title">Top creative agency <br> of all time.</h3>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="award-box-items bg-cover"
                                            style="">
                                            <div class="icon">
                                                <img src="assets/img/home-5/award/award-4.png" width="100" alt="img">
                                            </div>
                                            <h3 class="award-title">Global design <br> excellence award.</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Brand Section Start -->
            <!-- <div class="brand-section">
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box-1 style-4">
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-1.png" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-1.png" alt="img">
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box-1 style-4">
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-2.png" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-2.png" alt="img">
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box-1 style-4">
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-3.png" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-3.png" alt="img">
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box-1 style-4">
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-4.png" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-4.png" alt="img">
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box-1 style-4">
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-5.png" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-5.png" alt="img">
                                </span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box-1 style-4">
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-6.png" alt="img">
                                </span>
                                <span class="brand-img-1">
                                    <img src="assets/img/home-5/brand/brand-6.png" alt="img">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- News Section Start -->
            <section class="news-section-4 section-padding">
                <div class="container">
                    <div class="section-title5 style-4 text-center">
                        <h6 class="sub-title wow fadeInUp">
                            [ Explore our blogs ]
                        </h6>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                            Behind The Scenes of <br> Creative Minds.
                        </h2>
                    </div>
                    <div class="row">
                        <?php
                        // Fetch latest 3 blogs
                        $stmt = $pdo->query("SELECT * FROM blogs ORDER BY created_at DESC LIMIT 3");
                        $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);

                        if ($blogs) {
                            // Featured Blog (First Item)
                            $featuredBlog = $blogs[0];
                        ?>
                            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-left-items">
                                    <div class="thumb">
                                        <?php if (!empty($featuredBlog['thumb'])): ?>
                                            <img src="<?php echo htmlspecialchars($featuredBlog['thumb']); ?>" alt="img">
                                            <img src="<?php echo htmlspecialchars($featuredBlog['thumb']); ?>" alt="img">
                                        <?php else: ?>
                                            <img src="assets/img/home-5/news/news-01.jpg" alt="img">
                                            <img src="assets/img/home-5/news/news-01.jpg" alt="img">
                                        <?php endif; ?>
                                    </div>
                                    <div class="content">
                                        <ul>
                                            <li>
                                                <a href="blog">Creative</a>
                                            </li>
                                            <li>
                                                <span><?php echo date('M d, Y', strtotime($featuredBlog['created_at'])); ?></span>
                                            </li>
                                        </ul>
                                        <h3 class="text-justify">
                                            <a href="blog-details.php?id=<?php echo $featuredBlog['id']; ?>">
                                                <?php echo htmlspecialchars($featuredBlog['title']); ?>
                                            </a>
                                        </h3>
                                        <a href="blog-details.php?id=<?php echo $featuredBlog['id']; ?>" class="link-btn">
                                            Read more <i class="fa-solid fa-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <ul class="news-right-list">
                                    <?php
                                    // Remaining Blogs (Items 2 and 3)
                                    for ($i = 1; $i < count($blogs); $i++) {
                                        $blog = $blogs[$i];
                                        $delay = 0.3 + (($i - 1) * 0.2); // Calculate delay: 0.3, 0.5
                                    ?>
                                        <li class="wow fadeInRight" data-wow-delay="<?php echo $delay; ?>s">
                                            <div class="news-box-style-4">
                                                <div class="thumb">
                                                    <?php if (!empty($blog['thumb'])): ?>
                                                        <img src="<?php echo htmlspecialchars($blog['thumb']); ?>" alt="img">
                                                        <img src="<?php echo htmlspecialchars($blog['thumb']); ?>" alt="img">
                                                    <?php else: ?>
                                                        <img src="assets/img/home-5/news/news-02.jpg" alt="img">
                                                        <img src="assets/img/home-5/news/news-02.jpg" alt="img">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="content">
                                                    <ul>
                                                        <li>
                                                            <a href="blog">Creative</a>
                                                        </li>
                                                        <li>
                                                            <span><?php echo date('M d, Y', strtotime($blog['created_at'])); ?></span>
                                                        </li>
                                                    </ul>
                                                    <h3>
                                                        <a href="blog-details.php?id=<?php echo $blog['id']; ?>">
                                                            <?php echo htmlspecialchars($blog['title']); ?>
                                                        </a>
                                                    </h3>
                                                    <a href="blog-details.php?id=<?php echo $blog['id']; ?>" class="link-btn">
                                                        Read more <i class="fa-solid fa-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    <?php } // end for 
                                    ?>
                                </ul>
                            </div>
                        <?php } else { ?>
                            <div class="col-12 text-center">
                                <p class="text-justify">No blog posts found.</p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

            <!-- Footer Section Start -->
            <?php include 'include/footer.html'; ?>