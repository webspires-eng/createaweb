<?php include 'include/header.html'; ?>


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
            <!-- Error Section Start -->
        <div class="error-wrapper section-padding">
            <div class="error">
                <h2>404</h2>
            </div>
            <div class="error-content">
                <h2><span>Oops!</span> Page not found</h2>
                <p>Sorry, the page you’re looking for doesn’t exist or has been moved. <br> Let’s get you back
                    explore
                    our Latest Posts</p>
            </div>
             <a href="index" class="error-btn">Back To Home <i class="fa-solid fa-arrow-right"></i></a>
        </div>

            <!-- CTA Section Start -->
            <div class="cta-area-three fix">
                <div class="cta-wrapper pb-150">
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
                                            <a href="project-1"
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

