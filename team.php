<?php
require_once 'include/db.php';
include 'include/header.html';

// Fetch team members
$stmt = $pdo->query("SELECT * FROM teams ORDER BY created_at DESC");
$teams = $stmt->fetchAll();
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
            <div class="breadcrumb-page-wrap pb-150">
                <div class="container">
                    <div class="gt-breadcrumb-wrapper mb-0">
                        <div class="title title-1">Our awesome team</div>

                        <div class="right-contents">
                            <p class="pra-text">
                                We work together by prioritizing quality, time, and innovation in every
                                project. Client satisfaction is our main goal, and that is the true strength of our
                                team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb  page Section End -->

        <!-- Our Team Section Start -->
        <div class="team-members team-members-page">

            <div class="container">
                <div class="section-title mb-75">
                    <div class="title">Core team the driving force behind our vision and success</div>

                    <div class="slider-control">
                        <div class="array-nav gt_fade_anim" data-delay=".5" data-fade-from="top" data-ease="bounce"
                            style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                            <button class="array-prev slick-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M9.414 7.9961L18.021 16.6031L16.607 18.0171L8 9.4111L8 16.9961L6 16.9961L6 5.9961L17 5.9961L17 7.9961L9.414 7.9961Z"
                                        fill="black"></path>
                                </svg>
                            </button>
                            <button class="array-next slick-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M14.586 16.0039L5.979 7.39691L7.393 5.98291L16 14.5889L16 7.00391L18 7.00391L18 18.0039L7 18.0039L7 16.0039L14.586 16.0039Z"
                                        fill="black"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper team-slider-active">
                <div class="swiper-wrapper">
                    <?php foreach ($teams as $member): ?>
                            <div class="swiper-slide">
                                <div class="team-card">
                                    <div class="team-member-info">
                                        <div class="name"><a class="text-black" href="#"><?php echo htmlspecialchars($member['name']); ?></a></div>
                                        <p class="designation text-black"><?php echo htmlspecialchars($member['designation']); ?></p>
                                    </div>
                                    <div class="thumb">
                                        <?php if ($member['image']): ?>
                                                <img class="thumb-1" src="./<?php echo $member['image']; ?>" alt="thumb" style="width: 100%; height: 400px; object-fit: cover;">
                                                <img class="thumb-2" src="./<?php echo $member['image']; ?>" alt="thumb" style="width: 100%; height: 400px; object-fit: cover;">
                                        <?php else: ?>
                                                <img class="thumb-1" src="./assets/img/home-2/team/teamThumb1_2.png" alt="thumb">
                                                <img class="thumb-2" src="./assets/img/home-2/team/teamThumb1_2.png" alt="thumb">
                                        <?php endif; ?>

                                        <div class="social-links">
                                            <ul>
                                                <?php if ($member['facebook']): ?>
                                                    <li>
                                                        <a href="<?php echo htmlspecialchars($member['facebook']); ?>">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($member['twitter']): ?>
                                                    <li>
                                                        <a href="<?php echo htmlspecialchars($member['twitter']); ?>">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($member['linkedin']): ?>
                                                    <li>
                                                        <a href="<?php echo htmlspecialchars($member['linkedin']); ?>">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if ($member['instagram']): ?>
                                                    <li>
                                                        <a href="<?php echo htmlspecialchars($member['instagram']); ?>">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        
                        <?php if (empty($teams)): ?>
                            <div class="container"><p class="text-center">No team members found.</p></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="team-page-thumb mt-75 fix">
                    <div class="container">
                        <div class="thumb img-container">
                            <img src="./assets/img/pages/teamPageShape1_1.png" alt="thumb">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Team Section  End-->

            <!-- Contact Section Start -->
            <div class="contact-form-area">
                <div class="contact-form-wrapper pt-150 pb-150">
                    <div class="container">
                        <div class="row gy-5">
                            <div class="col-xl-4 col-xl-4">
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

                            <div class="col-xl-8 col-xl-8">
                                <div class="form-title">
                                    Get a design consultation free quote
                                </div>
                                <div class="contact-form">
                                    <div class="container">
                                        <form action="#" method="post">
                                            <div class="row gy-3">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="name">
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="email address">
                                                </div>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="about project">
                                                </div>

                                                <div class="col-md-6">
                                                    <select class="form-control" name="subject">
                                                        <option value="" disabled selected>where did you hear about us?
                                                        </option>
                                                        <option value="web">Web Development</option>
                                                        <option value="design">Web Design</option>
                                                        <option value="consult">Consultation</option>
                                                    </select>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
                                                    <textarea class="form-control" name="message" rows="5"
                                                        placeholder="write about project . . ."></textarea>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12">
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
            </div>
            <!-- Contact Section Start -->

            <?php include 'include/footer.html'; ?>