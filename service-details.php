<?php
require_once 'include/db.php';
include 'include/header.html';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
$stmt->execute([$id]);
$service = $stmt->fetch();

if (!$service) {
    echo "<div class='container pt-150 pb-150 text-center'><h2>Service not found</h2><a href='service.php' class='btn btn-primary mt-3'>Back to Services</a></div>";
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
        <div class="service-details-area">
            <div class="service-details-wrapper mb-150">
                <div class="container">
                    <div class="section-title text-center">
                        <!-- <div class="sub-title">Service details</div> -->
                        <h1 class="title title-anim"><?php echo htmlspecialchars($service['title']); ?></h1>
                    </div>

                    <div class="main-content">
                        <div class="thumb-content mb-40">
                            <div class="row gy-5 justify-content-center">
                                <div class="col-xl-8 col-lg-8 col-md-10 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="thumb fix">
                                        <?php if (!empty($service['image'])): ?>
                                            <img data-speed=".8" src="<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" style="width: 100%; height: auto; border-radius: 20px;">
                                        <?php else: ?>
                                            <!-- <img data-speed=".8" src="./assets/img/pages/servicePageThumb1_2.png" alt="Service Image"> -->
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="text-content mb-50">
                            <div class="text-title"><?php echo htmlspecialchars($service['title']); ?></div>
                            <div class="text">
                                <?php echo $service['description']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section Start -->
        <div class="contact-form-area">
            <div class="contact-form-wrapper pt-150 pb-150">
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

                                            <div class="col-xl-6 col-lg-12">
                                                <textarea class="form-control" name="message" rows="5"
                                                    placeholder="write about project . . ." required></textarea>
                                            </div>

                                            <div class="col-xl-6 col-lg-12">
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