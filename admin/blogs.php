<?php
require_once 'header.php';
require_once '../include/db.php';

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;
$msg = "";

// Handle Delete
if ($action == 'delete' && $id) {
    $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: blogs.php?msg=Blog post deleted successfully");
    exit();
}

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];
    $thumb = $_POST['old_thumb'] ?? '';

    if (!empty($_FILES['thumb']['name'])) {
        $target_dir = "../assets/uploads/";
        $file_name = "blog_" . time() . "_" . basename($_FILES["thumb"]["name"]);
        $target_file = $target_dir . $file_name;
        if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
            $thumb = "assets/uploads/" . $file_name;
        }
    }

    if ($id) {
        $stmt = $pdo->prepare("UPDATE blogs SET title=?, content=?, author=?, thumb=? WHERE id=?");
        $stmt->execute([$title, $content, $author, $thumb, $id]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO blogs (title, content, author, thumb) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $content, $author, $thumb]);
    }
    header("Location: blogs.php?msg=Blog post saved successfully");
    exit();
}

$blog = null;
if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = ?");
    $stmt->execute([$id]);
    $blog = $stmt->fetch();
}

if ($action == 'add' || $action == 'edit'): ?>

<!-- Page Header -->
<div class="page-header animate-in">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2" style="background: transparent; padding: 0;">
            <li class="breadcrumb-item"><a href="dashboard.php" style="color: var(--gt-text-muted); text-decoration: none;">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="blogs.php" style="color: var(--gt-text-muted); text-decoration: none;">Blogs</a></li>
            <li class="breadcrumb-item active" style="color: var(--gt-theme);"><?php echo $id ? 'Edit' : 'New Post'; ?></li>
        </ol>
    </nav>
    <h1 class="page-title"><?php echo $id ? 'Edit' : 'Create New'; ?> <span>Blog Post</span></h1>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card p-4 animate-in">
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="old_thumb" value="<?php echo $blog['thumb'] ?? ''; ?>">
                
                <div class="row g-4">
                    <div class="col-12">
                        <label class="form-label">Blog Title <span style="color: #ef4444;">*</span></label>
                        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($blog['title'] ?? ''); ?>" placeholder="Enter an engaging blog title..." required>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Author Name</label>
                        <div class="input-group">
                            <span class="input-group-text" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-right: none; color: var(--gt-theme);">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" name="author" class="form-control" value="<?php echo htmlspecialchars($blog['author'] ?? $_SESSION['admin_user']); ?>" style="border-radius: 0 12px 12px 0;">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Featured Image</label>
                        <input type="file" name="thumb" class="form-control" accept="image/*">
                        <?php if($blog['thumb'] ?? ''): ?>
                            <div class="mt-3 d-flex align-items-center gap-3">
                                <img src="../<?php echo $blog['thumb']; ?>" width="80" height="50" style="object-fit: cover; border-radius: 8px; border: 2px solid rgba(201, 243, 29, 0.2);">
                                <small class="text-muted">Current thumbnail</small>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="col-12">
                        <label class="form-label">Content</label>
                        <textarea name="content" class="form-control" rows="12" placeholder="Write your blog content here... You can use HTML tags for formatting."><?php echo htmlspecialchars($blog['content'] ?? ''); ?></textarea>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <i class="fas fa-code" style="color: var(--gt-theme); font-size: 0.8rem;"></i>
                            <small class="text-muted">HTML tags supported for rich formatting</small>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex gap-3 mt-4 pt-3" style="border-top: 1px solid rgba(255,255,255,0.05);">
                    <button type="submit" class="btn btn-theme px-4">
                        <i class="fas fa-save me-2"></i><?php echo $id ? 'Update Post' : 'Publish Post'; ?>
                    </button>
                    <a href="blogs.php" class="btn btn-dark-custom px-4">
                        <i class="fas fa-times me-2"></i>Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card p-4 animate-in" style="animation-delay: 0.1s;">
            <h5 class="section-title mb-3" style="font-size: 1rem;">Writing Tips</h5>
            <div class="d-flex flex-column gap-3">
                <div class="d-flex gap-3" style="padding: 12px; background: rgba(201, 243, 29, 0.05); border-radius: 10px;">
                    <i class="fas fa-heading" style="color: var(--gt-theme); margin-top: 3px;"></i>
                    <small class="text-muted">Use a compelling headline that grabs attention.</small>
                </div>
                <div class="d-flex gap-3" style="padding: 12px; background: rgba(99, 102, 241, 0.05); border-radius: 10px;">
                    <i class="fas fa-image" style="color: #6366f1; margin-top: 3px;"></i>
                    <small class="text-muted">Featured images work best at 1200x630px.</small>
                </div>
                <div class="d-flex gap-3" style="padding: 12px; background: rgba(236, 72, 153, 0.05); border-radius: 10px;">
                    <i class="fas fa-paragraph" style="color: #ec4899; margin-top: 3px;"></i>
                    <small class="text-muted">Keep paragraphs short for better readability.</small>
                </div>
                <div class="d-flex gap-3" style="padding: 12px; background: rgba(34, 197, 94, 0.05); border-radius: 10px;">
                    <i class="fas fa-tags" style="color: #22c55e; margin-top: 3px;"></i>
                    <small class="text-muted">Use &lt;h2&gt;, &lt;h3&gt; tags for subheadings.</small>
                </div>
            </div>
        </div>
        
        <?php if($blog): ?>
        <div class="card p-4 mt-4 animate-in" style="animation-delay: 0.2s;">
            <h5 class="section-title mb-3" style="font-size: 1rem;">Post Info</h5>
            <div class="d-flex flex-column gap-2">
                <div class="d-flex justify-content-between">
                    <small class="text-muted">Created</small>
                    <small><?php echo date('M d, Y', strtotime($blog['created_at'])); ?></small>
                </div>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">Author</small>
                    <small><?php echo htmlspecialchars($blog['author']); ?></small>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php else: 
    $blogs = $pdo->query("SELECT * FROM blogs ORDER BY id DESC")->fetchAll();
?>

<!-- Page Header -->
<div class="page-header d-flex justify-content-between align-items-center flex-wrap gap-3 animate-in">
    <div>
        <h1 class="page-title">Manage <span>Blog Posts</span></h1>
        <p class="text-muted mt-1 mb-0"><?php echo count($blogs); ?> posts total</p>
    </div>
    <a href="blogs.php?action=add" class="btn btn-theme">
        <i class="fas fa-plus me-2"></i>Create New Post
    </a>
</div>

<?php if(isset($_GET['msg'])): ?>
    <div class="alert alert-success animate-in d-flex align-items-center gap-2">
        <i class="fas fa-check-circle"></i>
        <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
<?php endif; ?>

<?php if($blogs): ?>
<div class="row g-4">
    <?php foreach($blogs as $b): ?>
    <div class="col-lg-4 col-md-6 animate-in">
        <div class="card h-100" style="overflow: hidden;">
            <div style="position: relative; height: 200px; overflow: hidden;">
                <img src="../<?php echo $b['thumb'] ?: 'assets/img/placeholder.jpg'; ?>" alt="<?php echo htmlspecialchars($b['title']); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                <div style="position: absolute; top: 15px; right: 15px; display: flex; gap: 8px;">
                    <a href="blogs.php?action=edit&id=<?php echo $b['id']; ?>" class="action-btn edit" style="width: 34px; height: 34px;" title="Edit">
                        <i class="fas fa-edit" style="font-size: 0.85rem;"></i>
                    </a>
                    <a href="blogs.php?action=delete&id=<?php echo $b['id']; ?>" class="action-btn delete" style="width: 34px; height: 34px;" title="Delete" onclick="return confirm('Are you sure you want to delete this post?')">
                        <i class="fas fa-trash" style="font-size: 0.85rem;"></i>
                    </a>
                </div>
            </div>
            <div class="p-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <span style="padding: 4px 10px; background: rgba(201, 243, 29, 0.1); border-radius: 20px; font-size: 0.75rem; color: var(--gt-theme);">
                        <?php echo date('M d, Y', strtotime($b['created_at'])); ?>
                    </span>
                    <span style="color: var(--gt-text-muted); font-size: 0.8rem;">
                        by <?php echo htmlspecialchars($b['author']); ?>
                    </span>
                </div>
                <h5 style="font-family: 'Inter', sans-serif; font-weight: 600; font-size: 1.1rem; text-transform: none; letter-spacing: 0; line-height: 1.4; margin-bottom: 10px;">
                    <?php echo htmlspecialchars($b['title']); ?>
                </h5>
                <p class="text-muted mb-0" style="font-size: 0.9rem; line-height: 1.6;">
                    <?php echo substr(strip_tags($b['content']), 0, 100); ?>...
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php else: ?>
<div class="card p-5 animate-in">
    <div class="text-center">
        <div style="width: 80px; height: 80px; background: rgba(201, 243, 29, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
            <i class="fas fa-newspaper" style="font-size: 2rem; color: var(--gt-theme);"></i>
        </div>
        <h4 class="section-title mb-2">No Blog Posts Yet</h4>
        <p class="text-muted mb-4">Start sharing your thoughts and insights with the world.</p>
        <a href="blogs.php?action=add" class="btn btn-theme">
            <i class="fas fa-plus me-2"></i>Write Your First Post
        </a>
    </div>
</div>
<?php endif; ?>

<?php endif; ?>

<?php require_once 'footer.php'; ?>
