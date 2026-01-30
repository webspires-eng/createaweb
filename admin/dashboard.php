<?php
require_once 'header.php';
require_once '../include/db.php';

// Get counts for dashboard stats
$serviceCount = $pdo->query("SELECT COUNT(*) FROM services")->fetchColumn();
$blogCount = $pdo->query("SELECT COUNT(*) FROM blogs")->fetchColumn();

// Get recent services
$recentServices = $pdo->query("SELECT * FROM services ORDER BY id DESC LIMIT 5")->fetchAll();

// Get recent blogs  
$recentBlogs = $pdo->query("SELECT * FROM blogs ORDER BY id DESC LIMIT 5")->fetchAll();
?>

<!-- Page Header -->
<div class="page-header animate-in">
    <h1 class="page-title">Welcome to <span>Dashboard</span></h1>
    <p class="text-muted mt-2">Here's what's happening with your website today.</p>
</div>

<!-- Stats Cards -->
<div class="row g-4 mb-5">
    <div class="col-lg-4 col-md-6 animate-in delay-1">
        <div class="card stat-card card-glow p-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <p class="stat-label mb-2">Total Services</p>
                    <h2 class="stat-value"><?php echo str_pad($serviceCount, 2, '0', STR_PAD_LEFT); ?></h2>
                </div>
                <div class="stat-icon primary">
                    <i class="fas fa-concierge-bell"></i>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.05); margin: 20px 0;">
            <a href="services.php" class="stat-link">
                Manage Services <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 animate-in delay-2">
        <div class="card stat-card card-glow p-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <p class="stat-label mb-2">Blog Posts</p>
                    <h2 class="stat-value"><?php echo str_pad($blogCount, 2, '0', STR_PAD_LEFT); ?></h2>
                </div>
                <div class="stat-icon secondary">
                    <i class="fas fa-newspaper"></i>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.05); margin: 20px 0;">
            <a href="blogs.php" class="stat-link">
                Manage Blogs <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    
    <div class="col-lg-4 col-md-6 animate-in delay-3">
        <div class="card stat-card card-glow p-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <p class="stat-label mb-2">Website Status</p>
                    <h2 class="stat-value" style="-webkit-text-fill-color: #22c55e;">LIVE</h2>
                </div>
                <div class="stat-icon" style="background: linear-gradient(135deg, #22c55e, #16a34a);">
                    <i class="fas fa-globe" style="color: #fff;"></i>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.05); margin: 20px 0;">
            <a href="../index.php" target="_blank" class="stat-link">
                View Website <i class="fas fa-external-link-alt"></i>
            </a>
        </div>
    </div>
</div>



<!-- Recent Content -->
<div class="row g-4">
    <!-- Recent Services -->
    <div class="col-lg-6 animate-in">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title mb-0">Recent Services</h3>
                <a href="services.php" class="stat-link">View All <i class="fas fa-arrow-right"></i></a>
            </div>
            <?php if($recentServices): ?>
                <div class="list-group list-group-flush">
                    <?php foreach($recentServices as $s): ?>
                    <div class="list-group-item d-flex align-items-center gap-3" style="background: transparent; border-color: rgba(255,255,255,0.05); padding: 15px 0;">
                        <img src="../<?php echo $s['image'] ?: 'assets/img/placeholder.jpg'; ?>" class="table-img" alt="">
                        <div class="flex-grow-1">
                            <h6 class="mb-1" style="font-family: 'Inter', sans-serif; font-weight: 600; text-transform: none; letter-spacing: 0;"><?php echo htmlspecialchars($s['title']); ?></h6>
                            <small class="text-muted"><?php echo substr(htmlspecialchars($s['description']), 0, 50); ?>...</small>
                        </div>
                        <a href="services.php?action=edit&id=<?php echo $s['id']; ?>" class="action-btn edit">
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted text-center py-4 mb-0">No services added yet.</p>
            <?php endif; ?>
        </div>
    </div>
    
    <!-- Recent Blogs -->
    <div class="col-lg-6 animate-in">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="section-title mb-0">Recent Blogs</h3>
                <a href="blogs.php" class="stat-link">View All <i class="fas fa-arrow-right"></i></a>
            </div>
            <?php if($recentBlogs): ?>
                <div class="list-group list-group-flush">
                    <?php foreach($recentBlogs as $b): ?>
                    <div class="list-group-item d-flex align-items-center gap-3" style="background: transparent; border-color: rgba(255,255,255,0.05); padding: 15px 0;">
                        <img src="../<?php echo $b['thumb'] ?: 'assets/img/placeholder.jpg'; ?>" class="table-img" alt="">
                        <div class="flex-grow-1">
                            <h6 class="mb-1" style="font-family: 'Inter', sans-serif; font-weight: 600; text-transform: none; letter-spacing: 0;"><?php echo htmlspecialchars($b['title']); ?></h6>
                            <small class="text-muted">By <?php echo htmlspecialchars($b['author']); ?> • <?php echo date('M d', strtotime($b['created_at'])); ?></small>
                        </div>
                        <a href="blogs.php?action=edit&id=<?php echo $b['id']; ?>" class="action-btn edit">
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted text-center py-4 mb-0">No blog posts yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
