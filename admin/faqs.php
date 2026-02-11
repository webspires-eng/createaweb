<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit();
}
require_once '../include/db.php';

$message = '';

// Add FAQ
if (isset($_POST['add_faq'])) {
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $stmt = $pdo->prepare("INSERT INTO faqs (question, answer) VALUES (?, ?)");
    if ($stmt->execute([$question, $answer])) {
        $message = "FAQ added successfully!";
    } else {
        $message = "Error adding FAQ.";
    }
}

// Delete FAQ
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM faqs WHERE id = ?");
    if ($stmt->execute([$id])) {
        $message = "FAQ deleted successfully!";
    }
}

// Fetch FAQs
$stmt = $pdo->query("SELECT * FROM faqs ORDER BY created_at DESC");
$faqs = $stmt->fetchAll();
?>
<?php include 'header.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0"><i class="fas fa-plus-circle me-2 text-warning"></i> Add New FAQ</h5>
                </div>
                <div class="card-body">
                    <?php if ($message): ?>
                        <div class="alert alert-info">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Question</label>
                            <input type="text" name="question" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Answer</label>
                            <textarea name="answer" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" name="add_faq" class="btn btn-warning text-white w-100">Add FAQ</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0"><i class="fas fa-list me-2 text-warning"></i> FAQ List</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($faqs as $faq): ?>
                                    <tr>
                                        <td width="30%"><strong>
                                                <?php echo htmlspecialchars($faq['question']); ?>
                                            </strong></td>
                                        <td>
                                            <?php echo nl2br(htmlspecialchars($faq['answer'])); ?>
                                        </td>
                                        <td>
                                            <a href="?delete=<?php echo $faq['id']; ?>"
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