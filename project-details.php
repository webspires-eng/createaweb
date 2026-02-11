<?php
require_once 'include/db.php';
include 'include/header.html';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
$stmt->execute([$id]);
$project = $stmt->fetch();

if (!$project) {
    echo "<div class='container pt-150 pb-150 text-center'><h2>Project not found</h2><a href='project.php' class='btn btn-primary mt-3'>Back to Projects</a></div>";
    include 'include/footer.html';
    exit();
}
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
                        <div class="title title-1"><?php echo htmlspecialchars($project['title']); ?></div>

                        <div class="right-contents">
                            <div class="meta-data">
                                <ul>
                                    <li><span>Category :</span> <?php echo htmlspecialchars($project['category']); ?>
                                    </li>
                                    <li><span> Client :</span> Createaweb Client</li>
                                    <li><span>Date :</span>
                                        <?php echo date('d M, Y', strtotime($project['created_at'])); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb  page Section End -->

        <!-- project page Section Start -->
        <div class="project-page-area">
            <div class="project-page-wrapper style-3 pb-150">
                <div class="container">
                    <div class="main-content">
                        <div class="thumb fix mb-60 justify-content-center d-flex">
                            <?php if (!empty($project['image'])): ?>
                                <img data-speed=".8" src="<?php echo htmlspecialchars($project['image']); ?>" alt="thumb"
                                    style="width: 100%; max-height: 600px; object-fit: cover; border-radius: 20px;">
                            <?php else: ?>
                                <img data-speed=".8" src="assets/img/pages/projectPageThumb1_11.png" alt="thumb">
                            <?php endif; ?>
                        </div>

                        <div class="middle-content">
                            <div class="row gy-5 justify-content-center">
                                <div class="col-xl-10">
                                    <div class="project-text-content">
                                        <div class="title">About this project</div>

                                        <div class="text">
                                            <?php echo nl2br(htmlspecialchars($project['description'])); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project page Section End -->

        <!-- Contact Section Start  -->
        <div class="contact-form-area">
            <div class="contact-form-wrapper style-2 pt-150 mb-150 pb-150">
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
                            <div class="form-title">
                                Get a Design Consultation free quote
                            </div>
                            <div class="contact-form">
                                <div class="container">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" placeholder="name">
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
                                                <select class="form-control" name="subject" required>
                                                    <option value="" disabled selected>where did you hear about us?
                                                    </option>
                                                    <option value="web">Web Development</option>
                                                    <option value="design">Web Design</option>
                                                    <option value="consult">Consultation</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <textarea class="form-control" name="message" rows="5"
                                                    placeholder="write about project . . ."></textarea>
                                            </div>

                                            <div class="col-12 mt-50">
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
        <!-- Contact Section End  -->

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
                                <div class="move-btn gt_fade_anim" data-delay=".5" data-fade-from="top"
                                    data-ease="bounce">
                                    <div class="gt-hover-btn-wrapper-two">
                                        <a href="project.php"
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