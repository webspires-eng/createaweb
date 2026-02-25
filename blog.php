<?php
require_once 'include/db.php';
include 'include/header.html';
$stmt = $pdo->query("SELECT * FROM blogs ORDER BY created_at DESC");
$blogs = $stmt->fetchAll();
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
                    <div class="gt-breadcrumb-wrapper mb-60">
                        <div class="title title-1">Read our article</div>

                        <p class="text blog-text">Stay updated with tips,
                            trends, and articles</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb  page Section End -->

        <div class="blog-page-area blog-page-area21">
            <div class="blog-page-wrapper pb-150">
                <div class="blog-card">
                    <div class="container">
                        <?php foreach ($blogs as $blog): ?>
                            <div class="blog-card tp-service-pin mb-30">
                                <div class="blog-card-item tp-service-panel bg-white">
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="blog-thumb">
                                                <?php if (!empty($blog['thumb'])): ?>
                                                    <img src="./<?php echo htmlspecialchars($blog['thumb']); ?>" alt="thumb" style="width: 100%; height: 350px; object-fit: cover; border-radius: 20px;">
                                                <?php else: ?>
                                                    <img src="./assets/img/pages/blogPageThumb1_1.png" alt="thumb">
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">
                                            <div class="blog-content">
                                                <a href="blog-details?id=<?php echo $blog['id']; ?>" class="title"><?php echo htmlspecialchars($blog['title']); ?></a>
                                                <div class="text">
                                                    <?php echo substr(strip_tags($blog['content']), 0, 150) . '...'; ?>
                                                </div>

                                                <div class="meta-content">
                                                    <!-- <div class="author d-flex align-items-center">
                                                                <div class="author-thumb">
                                                                    <img src="./assets/img/pages/blogPageVactor1_1.png" alt="author">
                                                                </div>

                                                                <div class="author-name">
                                                                    <div class="name"><?php echo htmlspecialchars($blog['author'] ?? 'Admin'); ?></div>
                                                                    <span>Composed by</span>
                                                                </div>
                                                            </div> -->

                                                    <div class="post-date">
                                                        <span class="type">Blog</span>
                                                        <span><?php echo date('jS M, Y', strtotime($blog['created_at'])); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <?php if (empty($blogs)): ?>
                            <div class="text-center py-5">
                                <h3>No blog posts found.</h3>
                                <p>Check back later for updates!</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'include/footer.html'; ?>