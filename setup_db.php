<?php
require_once 'include/db.php';

try {
    // Projects Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS projects (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        category VARCHAR(100),
        image VARCHAR(255),
        description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "Table 'projects' checked/created.<br>";

    // Teams Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS teams (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        designation VARCHAR(100),
        image VARCHAR(255),
        facebook VARCHAR(255),
        twitter VARCHAR(255),
        linkedin VARCHAR(255),
        instagram VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "Table 'teams' checked/created.<br>";

    // FAQs Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS faqs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        question VARCHAR(255) NOT NULL,
        answer TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");
    echo "Table 'faqs' checked/created.<br>";

} catch (PDOException $e) {
    echo "Error creating tables: " . $e->getMessage();
}
