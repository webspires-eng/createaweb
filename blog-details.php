<?php
require_once 'include/db.php';
include 'include/header.html';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
$stmt->execute([$id]);
$blog = $stmt->fetch();

// Fetch related blogs (latest 3 excluding current)
$stmtRelated = $pdo->prepare("SELECT * FROM blogs WHERE id != ? ORDER BY created_at DESC LIMIT 3");
$stmtRelated->execute([$id]);
$relatedBlogs = $stmtRelated->fetchAll();

if (!$blog) {
    echo "<div class='container pt-150 pb-150 text-center'><h2>Article not found</h2><a href='blog.php' class='btn btn-primary mt-3'>Back to Blog</a></div>";
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

        <div class="blog-page-area">
            <div class="blog-page-wrapper style-3 pt-150 pb-150">
                <div class="container">
                    <div class="author text-center mb-30">
                        <!-- <div class="author-thumb mb-20">
                            <img src="./assets/img/pages/blogPageVactor1_1.png" alt="author">
                        </div> -->

                        <!-- <div class="author-name">
                            <div class="name"><?php echo htmlspecialchars($blog['author'] ?? 'Admin'); ?></div>
                            <span>Composed by</span>
                        </div> -->
                    </div>

                    <div class="section-title mb-30">
                        <div class="title"><?php echo htmlspecialchars($blog['title']); ?></div>
                        <div class="text-center mt-2 text-muted">
                            <?php echo date('F j, Y', strtotime($blog['created_at'])); ?></div>
                    </div>

                    <div class="main-thumb mb-60 fix img-container justify-content-center d-flex">
                        <?php if (!empty($blog['thumb'])): ?>
                            <img src="<?php echo htmlspecialchars($blog['thumb']); ?>"
                                alt="<?php echo htmlspecialchars($blog['title']); ?>"
                                style="max-height: 500px; width: auto; border-radius: 20px;">
                        <?php else: ?>
                            <img src="assets/img/pages/blogPageThumb1_14.png" alt="thumb">
                        <?php endif; ?>
                    </div>

                    <div class="middle-content">
                        <div class="text-content">
                            <div class="text">
                                <?php echo nl2br(($blog['content'])); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-card pt-100">
                    <div class="container">
                        <div class="blog-card">
                            <div class="card-title mb-75">
                                Related articles
                            </div>
                            <div class="blog-card-item">
                                <div class="row gy-5 align-items-center">
                                    <?php foreach ($relatedBlogs as $related): ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <div class="blog-thumb">
                                                <?php if (!empty($related['thumb'])): ?>
                                                    <img src="<?php echo htmlspecialchars($related['thumb']); ?>" alt="thumb"
                                                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 20px;">
                                                <?php else: ?>
                                                    <img src="./assets/img/pages/blogPageThumb1_5.png" alt="thumb">
                                                <?php endif; ?>
                                            </div>
                                            <div class="blog-content">
                                                <div class="meta-content mb-30 mt-30">
                                                    <div class="post-date">
                                                        <span class="type">Blog</span>
                                                        <span><?php echo date('jS M, Y', strtotime($related['created_at'])); ?></span>
                                                    </div>
                                                </div>

                                                <a href="blog-details.php?id=<?php echo $related['id']; ?>"
                                                    class="title"><?php echo htmlspecialchars($related['title']); ?></a>

                                                <div class="simple-btn-white gt_fade_anim" data-delay=".5"
                                                    data-fade-from="top" data-ease="bounce">
                                                    <a href="blog-details.php?id=<?php echo $related['id']; ?>"
                                                        class="gt-hover-btn gt-hover-btn-item gt-btn-circle-2 d-inline-flex align-items-center justify-content-center flex-column bg-2">
                                                        <span class="gt-btn-circle-text-2">Read more</span>
                                                        <i class="gt-btn-circle-dot bg-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if (empty($relatedBlogs)): ?>
                                        <div class="col-12 text-center">
                                            <p>No related articles found.</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'include/footer.html'; ?>