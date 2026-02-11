<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}
require_once '../include/db.php';

$message = '';

// Add Project
if (isset($_POST['add_project'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Image Upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../assets/img/projects/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = "assets/img/projects/" . basename($_FILES["image"]["name"]);
    }

    $stmt = $pdo->prepare("INSERT INTO projects (title, category, image, description) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$title, $category, $image, $description])) {
        $message = "Project added successfully!";
    } else {
        $message = "Error added project.";
    }
}

// Delete Project
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
    if ($stmt->execute([$id])) {
        $message = "Project deleted successfully!";
    }
}

// Fetch Projects
$stmt = $pdo->query("SELECT * FROM projects ORDER BY created_at DESC");
$projects = $stmt->fetchAll();
?>
<?php include 'header.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0"><i class="fas fa-plus-circle me-2 text-warning"></i> Add New Project</h5>
                </div>
                <div class="card-body">
                    <?php if ($message): ?>
                        <div class="alert alert-info">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Project Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input type="text" name="category" class="form-control" required
                                placeholder="e.g. Web Design">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4"></textarea>
                        </div>
                        <button type="submit" name="add_project" class="btn btn-warning text-white w-100">Add
                            Project</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0"><i class="fas fa-list me-2 text-warning"></i> Project List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($projects as $project): ?>
                                    <tr>
                                        <td>
                                            <?php if ($project['image']): ?>
                                                <img src="../<?php echo $project['image']; ?>" width="50" height="50"
                                                    class="rounded" style="object-fit: cover;">
                                            <?php else: ?>
                                                <span class="text-muted">No Image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($project['title']); ?>
                                        </td>
                                        <td><span class="badge bg-secondary">
                                                <?php echo htmlspecialchars($project['category']); ?>
                                            </span></td>
                                        <td>
                                            <a href="?delete=<?php echo $project['id']; ?>"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>