<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}
require_once '../include/db.php';

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;
$msg = "";

// Handle Delete
if ($action == 'delete' && $id) {
    $stmt = $pdo->prepare("DELETE FROM services WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: services.php?msg=Service deleted successfully");
    exit();
}

// Handle Form Submission (Add/Edit)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $icon = $_POST['icon'];
    $description = $_POST['description'];
    $image = $_POST['old_image'] ?? '';

    // Handle Image Upload
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "../assets/uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $file_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $file_name;
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = "assets/uploads/" . $file_name;
        }
    }

    if ($id) {
        $stmt = $pdo->prepare("UPDATE services SET title=?, icon=?, description=?, image=? WHERE id=?");
        $stmt->execute([$title, $icon, $description, $image, $id]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO services (title, icon, description, image) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $icon, $description, $image]);
    }
    header("Location: services.php?msg=Service saved successfully");
    exit();
}

// Get Service Data if Editing
$service = null;
if ($id) {
    $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->execute([$id]);
    $service = $stmt->fetch();
}

if ($action == 'add' || $action == 'edit'): ?>
    <?php require_once 'header.php'; ?>

    <!-- Page Header -->
    <div class="page-header animate-in">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2" style="background: transparent; padding: 0;">
                <li class="breadcrumb-item"><a href="dashboard.php"
                        style="color: var(--gt-text-muted); text-decoration: none;">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="services.php"
                        style="color: var(--gt-text-muted); text-decoration: none;">Services</a></li>
                <li class="breadcrumb-item active" style="color: var(--gt-theme);"><?php echo $id ? 'Edit' : 'Add'; ?></li>
            </ol>
        </nav>
        <h1 class="page-title"><?php echo $id ? 'Edit' : 'Add New'; ?> <span>Service</span></h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card p-4 animate-in">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="old_image" value="<?php echo $service['image'] ?? ''; ?>">

                    <div class="row g-4">
                        <div class="col-12">
                            <label class="form-label">Service Title <span style="color: #ef4444;">*</span></label>
                            <input type="text" name="title" class="form-control"
                                value="<?php echo htmlspecialchars($service['title'] ?? ''); ?>"
                                placeholder="e.g. Web Development" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Icon Class</label>
                            <div class="input-group">
                                <span class="input-group-text"
                                    style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.1); border-right: none; color: var(--gt-theme);">
                                    <i class="fas <?php echo $service['icon'] ?? 'fa-cog'; ?>"></i>
                                </span>
                                <input type="text" name="icon" class="form-control"
                                    value="<?php echo htmlspecialchars($service['icon'] ?? ''); ?>"
                                    placeholder="e.g. fa-code" style="border-radius: 0 12px 12px 0;">
                            </div>
                            <small class="text-muted mt-1 d-block">Use FontAwesome class names</small>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Service Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <?php if ($service['image'] ?? ''): ?>
                                <div class="mt-3 d-flex align-items-center gap-3">
                                    <img src="../<?php echo $service['image']; ?>" width="60" height="60"
                                        style="object-fit: cover; border-radius: 10px; border: 2px solid rgba(245, 166, 35, 0.2);">
                                    <small class="text-muted">Current image</small>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-12">
                            <label class="form-label editor-toolbar-label">
                                Content / Description
                                <!-- <div>
                                    <span class="badge-free">Free</span>
                                    <span class="badge-advanced">Advanced</span>
                                </div> -->
                            </label>
                            <textarea name="description" id="description-editor" class="form-control" rows="6"
                                placeholder="Write a detailed description of the service..."><?php echo htmlspecialchars($service['description'] ?? ''); ?></textarea>
                        </div>
                    </div>

                    <div class="d-flex gap-3 mt-4 pt-3" style="border-top: 1px solid rgba(255,255,255,0.05);">
                        <button type="submit" class="btn btn-theme px-4">
                            <i class="fas fa-save me-2"></i><?php echo $id ? 'Update Service' : 'Create Service'; ?>
                        </button>
                        <a href="services.php" class="btn btn-dark-custom px-4">
                            <i class="fas fa-times me-2"></i>Cancel
                        </a>
                    </div>
                </form>

                <script>
                    tinymce.init({
                        selector: '#description-editor',
                        height: 450,
                        menubar: true,
                        plugins: [
                            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                            'insertdatetime', 'media', 'table', 'help', 'wordcount',
                            'emoticons', 'codesample', 'directionality', 'nonbreaking',
                            'quickbars', 'autoresize'
                        ],
                        toolbar: [
                            'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough',
                            'forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
                            'link image media table | emoticons charmap codesample | blockquote hr nonbreaking',
                            'removeformat fullscreen code help'
                        ].join(' | '),
                        toolbar_mode: 'sliding',
                        block_formats: 'Paragraph=p; Heading 1=h1; Heading 2=h2; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6; Preformatted=pre; Blockquote=blockquote',
                        font_size_formats: '8px 10px 12px 14px 16px 18px 20px 24px 28px 32px 36px 48px 72px',
                        content_style: `
                            body {
                                font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                                font-size: 15px;
                                line-height: 1.7;
                                color: #1C1C1C;
                                padding: 15px 20px;
                                max-width: 100%;
                            }
                            h1, h2, h3, h4, h5, h6 {
                                font-weight: 700;
                                margin-top: 1em;
                                margin-bottom: 0.5em;
                                color: #1C1C1C;
                            }
                            p { margin-bottom: 0.8em; }
                            a { color: #f5a623; text-decoration: underline; }
                            blockquote {
                                border-left: 4px solid #f5a623;
                                padding: 12px 20px;
                                margin: 1em 0;
                                background: #fefbf3;
                                border-radius: 0 8px 8px 0;
                                font-style: italic;
                                color: #555;
                            }
                            table { border-collapse: collapse; width: 100%; }
                            table td, table th {
                                border: 1px solid #e9ecef;
                                padding: 10px 14px;
                            }
                            table th { background: #f8f9fa; font-weight: 600; }
                            img { max-width: 100%; height: auto; border-radius: 8px; }
                            pre { background: #1e1e1e; color: #d4d4d4; padding: 16px; border-radius: 8px; overflow-x: auto; }
                            code { background: #f0f0f0; padding: 2px 6px; border-radius: 4px; font-size: 0.9em; }
                            ul, ol { padding-left: 1.5em; margin-bottom: 1em; }
                            li { margin-bottom: 0.3em; }
                            hr { border: none; border-top: 2px solid #e9ecef; margin: 1.5em 0; }
                        `,
                        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote',
                        quickbars_insert_toolbar: 'quickimage quicktable hr',
                        contextmenu: 'link image table',
                        image_advtab: true,
                        image_caption: true,
                        automatic_uploads: true,
                        images_upload_url: 'upload_image.php',
                        file_picker_types: 'image',
                        promotion: false,
                        branding: false,
                        statusbar: true,
                        resize: true,
                        min_height: 350,
                        max_height: 800,
                        autoresize_bottom_margin: 20,
                        setup: function(editor) {
                            editor.on('init', function() {
                                // Style the editor container after init
                                var container = editor.getContainer();
                                if (container) {
                                    container.style.borderRadius = '12px';
                                    container.style.overflow = 'hidden';
                                    container.style.border = '1px solid #e9ecef';
                                    container.style.transition = 'border-color 0.3s ease, box-shadow 0.3s ease';
                                }
                            });
                            editor.on('focus', function() {
                                var container = editor.getContainer();
                                if (container) {
                                    container.style.borderColor = '#f5a623';
                                    container.style.boxShadow = '0 0 0 3px rgba(245, 166, 35, 0.2)';
                                }
                            });
                            editor.on('blur', function() {
                                var container = editor.getContainer();
                                if (container) {
                                    container.style.borderColor = '#e9ecef';
                                    container.style.boxShadow = 'none';
                                }
                            });
                        }
                    });
                </script>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-4 animate-in" style="animation-delay: 0.1s;">
                <h5 class="section-title mb-3" style="font-size: 1rem;">Tips</h5>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex gap-3"
                        style="padding: 12px; background: rgba(245, 166, 35, 0.05); border-radius: 10px;">
                        <i class="fas fa-lightbulb" style="color: var(--gt-theme); margin-top: 3px;"></i>
                        <small class="text-muted">Use a clear, descriptive title that explains what the service
                            offers.</small>
                    </div>
                    <div class="d-flex gap-3"
                        style="padding: 12px; background: rgba(99, 102, 241, 0.05); border-radius: 10px;">
                        <i class="fas fa-image" style="color: #6366f1; margin-top: 3px;"></i>
                        <small class="text-muted">Upload high-quality images (recommended: 800x600px).</small>
                    </div>
                    <div class="d-flex gap-3"
                        style="padding: 12px; background: rgba(236, 72, 153, 0.05); border-radius: 10px;">
                        <i class="fas fa-icons" style="color: #ec4899; margin-top: 3px;"></i>
                        <small class="text-muted">Find icons at <a href="https://fontawesome.com/icons" target="_blank"
                                style="color: var(--gt-theme);">fontawesome.com</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php else:
    require_once 'header.php';
    $services = $pdo->query("SELECT * FROM services ORDER BY id DESC")->fetchAll();

?>


    <!-- Page Header -->
    <div class="page-header d-flex justify-content-between align-items-center flex-wrap gap-3 animate-in">
        <div>
            <h1 class="page-title">Manage <span>Services</span></h1>
            <p class="text-muted mt-1 mb-0"><?php echo count($services); ?> services total</p>
        </div>
        <a href="services.php?action=add" class="btn btn-theme">
            <i class="fas fa-plus me-2"></i>Add New Service
        </a>
    </div>

    <?php if (isset($_GET['msg'])): ?>
        <div class="alert alert-success animate-in d-flex align-items-center gap-2">
            <i class="fas fa-check-circle"></i>
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <div class="card p-4 animate-in">
        <?php if ($services): ?>
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 80px;">Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="width: 120px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($services as $s): ?>
                            <tr>
                                <td>
                                    <img src="../<?php echo $s['image'] ?: 'assets/img/placeholder.jpg'; ?>" class="table-img"
                                        alt="<?php echo htmlspecialchars($s['title']); ?>">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <?php if ($s['icon']): ?>
                                            <span
                                                style="width: 32px; height: 32px; background: rgba(245, 166, 35, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                                <i class="fas <?php echo htmlspecialchars($s['icon']); ?>"
                                                    style="color: var(--gt-theme); font-size: 0.85rem;"></i>
                                            </span>
                                        <?php endif; ?>
                                        <strong><?php echo htmlspecialchars($s['title']); ?></strong>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="text-muted"><?php echo substr(htmlspecialchars(strip_tags($s['description'])), 0, 80); ?>...</span>
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="services.php?action=edit&id=<?php echo $s['id']; ?>" class="action-btn edit"
                                            title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="services.php?action=delete&id=<?php echo $s['id']; ?>" class="action-btn delete"
                                            title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this service?')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <div
                    style="width: 80px; height: 80px; background: rgba(245, 166, 35, 0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-concierge-bell" style="font-size: 2rem; color: var(--gt-theme);"></i>
                </div>
                <h4 class="section-title mb-2">No Services Yet</h4>
                <p class="text-muted mb-4">Start by adding your first service to showcase on your website.</p>
                <a href="services.php?action=add" class="btn btn-theme">
                    <i class="fas fa-plus me-2"></i>Add Your First Service
                </a>
            </div>
        <?php endif; ?>
    </div>

<?php endif; ?>

<?php require_once 'footer.php'; ?>