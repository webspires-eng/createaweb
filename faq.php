<?php
require_once 'include/db.php';
include 'include/header.html';

// Fetch FAQs
$stmt = $pdo->query("SELECT * FROM faqs ORDER BY created_at ASC");
$faqs = $stmt->fetchAll();
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

<div id="smooth-wrapper">
    <div id="smooth-content">
        <!-- Breadcrumb  page Section Start -->
        <div class="breadcrumb-page-area-one">
            <div class="breadcrumb-page-wrap">

                <div class="container">
                    <div class="gt-breadcrumb-wrapper">
                        <div class="meta-title">
                            FA
                            <img src="./assets/img/pages/faqPageTextBg1_1.png" alt="Shape">
                        </div>

                        <div class="right-contents">
                            <p class="pra-text faq-text">Frequently asked question (FAQ) pages to find answars.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb  page Section End -->

        <!-- Faq Section Start -->
        <section class="faq-page-area faq-service-4 fix">
            <div class="faq-page-wrapper pb-75">
                <div class="container">
                    <div class="faq-content">
                        <div class="row gy-5 design-project-item">
                            <div class="col-xl-3">
                            </div>

                            <div class="col-xl-6 col-lg-12">
                                <div class="faq-main-content">
                                    <div class="section-title mb-50">
                                        <div class="title title-anim">
                                            Comprehensive design process
                                        </div>
                                    </div>

                                    <div class="accordion style3 accordion-flush" id="accordionFlushExample">
                                        <?php if (count($faqs) > 0): ?>
                                            <?php foreach ($faqs as $index => $faq):
                                                $collapseId = "collapse" . $faq['id'];
                                                $headingId = "heading" . $faq['id'];
                                                $isFirst = $index === 0;
                                                ?>
                                                <div class="accordion-item gt_fade_anim"
                                                    data-delay="<?php echo 0.1 * ($index + 1); ?>" data-fade-from="bottom">
                                                    <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                                                        <button
                                                            class="accordion-button <?php echo $isFirst ? '' : 'collapsed'; ?>"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#<?php echo $collapseId; ?>"
                                                            aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>"
                                                            aria-controls="<?php echo $collapseId; ?>">
                                                            <?php echo htmlspecialchars($faq['question']); ?>
                                                        </button>
                                                    </h2>

                                                    <div id="<?php echo $collapseId; ?>"
                                                        class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>"
                                                        data-bs-parent="#accordionFlushExample"
                                                        aria-labelledby="<?php echo $headingId; ?>">
                                                        <div class="accordion-body">
                                                            <?php echo nl2br(htmlspecialchars($faq['answer'])); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="alert alert-info">No FAQs found.</div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Section End -->

        <div class="faq-thumb fix img-container">
            <img src="./assets/img/pages/faqPageThumb1_1.png" alt="">
        </div>


        <div class="cta-area-three fix">
            <div class="cta-wrapper pt-150 pb-150">
                <div class="cta-content">
                    <div class="bg-shape float-bob-x">
                        <img src="./assets/img/home-3/cta/ctaLogo.png" alt="shape">
                    </div>
                    <div class="container">
                        <div class="cta-content-wrap">
                            <div class="title title-anim">
                                Let's create the best
                                <span>
                                    product experience
                                    <img src="./assets/img/home-3/cta/ctaLineShape.png" alt="shape">
                                </span>
                                for your project
                            </div>


                            <div class="content-inner">
                                <div class="our-clint-2 gt_fade_anim" data-delay=".5" data-fade-from="bottom"
                                    data-ease="bounce">
                                    <ul>
                                        <li><img src="assets/img/home-1/hero/heroVector1_1.png" alt="img"></li>
                                        <li><img src="assets/img/home-1/hero/heroVector1_2.png" alt="img"></li>
                                        <li><img src="assets/img/home-1/hero/heroVector1_3.png" alt="img"></li>
                                        <li><img src="assets/img/home-1/hero/heroVector1_4.png" alt="img"></li>
                                    </ul>
                                    <p class="text">trusted clients world wide</p>
                                </div>

                                <div class="move-btn gt_fade_anim" data-delay=".5" data-fade-from="top"
                                    data-ease="bounce">
                                    <div class="gt-hover-btn-wrapper-two">
                                        <a href="project"
                                            class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-flex align-items-center justify-content-center flex-column">
                                            <span class="gt-btn-circle-text-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                                    viewBox="0 0 46 46" fill="none">
                                                    <path
                                                        d="M30.6737 18.0435L14.177 34.5402L11.4668 31.8301L27.9616 15.3333H13.4237V11.5H34.507V32.5833H30.6737V18.0435Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <i class="gt-btn-circle-dot"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Section End -->


        <?php include 'include/footer.html'; ?>