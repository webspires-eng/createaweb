<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}
require_once '../include/db.php';

$message = '';

// Add Team Member
if (isset($_POST['add_team'])) {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];

    // Image Upload
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../assets/img/team/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $image = "assets/img/team/" . basename($_FILES["image"]["name"]);
    }

    $stmt = $pdo->prepare("INSERT INTO teams (name, designation, image, facebook, twitter, linkedin, instagram) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$name, $designation, $image, $facebook, $twitter, $linkedin, $instagram])) {
        $message = "Team member added successfully!";
    } else {
        $message = "Error adding team member.";
    }
}

// Delete Team Member
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM teams WHERE id = ?");
    if ($stmt->execute([$id])) {
        $message = "Team member deleted successfully!";
    }
}

// Fetch Team Members
$stmt = $pdo->query("SELECT * FROM teams ORDER BY created_at DESC");
$teams = $stmt->fetchAll();
?>
<?php include 'header.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0"><i class="fas fa-plus-circle me-2 text-warning"></i> Add Team Member</h5>
                </div>
                <div class="card-body">
                    <?php if ($message): ?>
                        <div class="alert alert-info">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" name="designation" class="form-control" required placeholder="e.g. CEO">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Facebook URL</label>
                            <input type="url" name="facebook" class="form-control" placeholder="Optional">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Twitter URL</label>
                            <input type="url" name="twitter" class="form-control" placeholder="Optional">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">LinkedIn URL</label>
                            <input type="url" name="linkedin" class="form-control" placeholder="Optional">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Instagram URL</label>
                            <input type="url" name="instagram" class="form-control" placeholder="Optional">
                        </div>
                        <button type="submit" name="add_team" class="btn btn-warning text-white w-100">Add
                            Member</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0"><i class="fas fa-list me-2 text-warning"></i> Team List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Socials</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($teams as $member): ?>
                                    <tr>
                                        <td>
                                            <?php if ($member['image']): ?>
                                                <img src="../<?php echo $member['image']; ?>" width="50" height="50"
                                                    class="rounded-circle" style="object-fit: cover;">
                                            <?php else: ?>
                                                <span class="text-muted">No Image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($member['name']); ?>
                                        </td>
                                        <td><span class="badge bg-secondary">
                                                <?php echo htmlspecialchars($member['designation']); ?>
                                            </span></td>
                                        <td>
                                            <?php if ($member['facebook']): ?><a
                                                    href="<?php echo htmlspecialchars($member['facebook']); ?>" target="_blank"
                                                    class="me-1"><i class="fab fa-facebook text-primary"></i></a>
                                            <?php endif; ?>
                                            <?php if ($member['twitter']): ?><a
                                                    href="<?php echo htmlspecialchars($member['twitter']); ?>" target="_blank"
                                                    class="me-1"><i class="fab fa-twitter text-info"></i></a>
                                            <?php endif; ?>
                                            <?php if ($member['linkedin']): ?><a
                                                    href="<?php echo htmlspecialchars($member['linkedin']); ?>" target="_blank"
                                                    class="me-1"><i class="fab fa-linkedin text-primary"></i></a>
                                            <?php endif; ?>
                                            <?php if ($member['instagram']): ?><a
                                                    href="<?php echo htmlspecialchars($member['instagram']); ?>" target="_blank"
                                                    class="me-1"><i class="fab fa-instagram text-danger"></i></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="?delete=<?php echo $member['id']; ?>"
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