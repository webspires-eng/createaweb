<?php
$whitelist = array(
    '127.0.0.1',
    '::1',
    'localhost'
);

if (in_array($_SERVER['REMOTE_ADDR'], $whitelist) && (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false)) {
    // Local Credentials
    $host = '127.0.0.1';
    $db = 'createaweb_cms';
    $user = 'root';
    $pass = '';
} else {
    // Live Server Credentials
    $host = 'localhost';
    $db = 'tfwrwwhkyf';
    $user = 'tfwrwwhkyf';
    $pass = 'B7WZzHFjvx';
}

$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // Database creation logic removed for compatibility with live server restrictions.
    // Ensure the database exists before connecting via DSN.

    // Create tables if they don't exist
    $pdo->exec("CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        icon VARCHAR(100),
        description TEXT,
        image VARCHAR(255)
    )");

    $pdo->exec("CREATE TABLE IF NOT EXISTS blogs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        content LONGTEXT,
        author VARCHAR(100),
        thumb VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

    // Insert a default admin (User: admin | Pass: admin123)
    // We check if an admin already exists first
    $stmt = $pdo->query("SELECT COUNT(*) FROM admins");
    if ($stmt->fetchColumn() == 0) {
        $username = 'admin';
        $password = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
    }

} catch (\PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>