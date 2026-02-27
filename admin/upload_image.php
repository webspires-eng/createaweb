<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

header('Content-Type: application/json');

$accepted_origins = ["http://localhost", "http://127.0.0.1"];

// Verify origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    $origin_valid = false;
    foreach ($accepted_origins as $origin) {
        if (strpos($_SERVER['HTTP_ORIGIN'], $origin) === 0) {
            $origin_valid = true;
            break;
        }
    }
}

// File upload handling
if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo json_encode(['error' => 'No file uploaded or upload error']);
    exit();
}

$file = $_FILES['file'];

// Validate file type
$allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/svg+xml'];
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime_type = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

if (!in_array($mime_type, $allowed_types)) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid file type. Only JPEG, PNG, GIF, WebP and SVG are allowed.']);
    exit();
}

// Validate file size (max 5MB)
$max_size = 5 * 1024 * 1024;
if ($file['size'] > $max_size) {
    http_response_code(400);
    echo json_encode(['error' => 'File too large. Maximum size is 5MB.']);
    exit();
}

// Upload directory
$upload_dir = '../assets/uploads/editor/';
if (!file_exists($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Generate unique filename
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$filename = 'editor_' . time() . '_' . bin2hex(random_bytes(4)) . '.' . $extension;
$filepath = $upload_dir . $filename;

if (move_uploaded_file($file['tmp_name'], $filepath)) {
    // Return the URL relative to the site root for TinyMCE
    $url = '../assets/uploads/editor/' . $filename;
    echo json_encode(['location' => $url]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to upload file']);
}
