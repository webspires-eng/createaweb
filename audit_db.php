<?php
require_once 'include/db.php';

try {
    echo "<h3>Database Tables Status</h3>";
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);

    if (empty($tables)) {
        echo "No tables found in database '$db'.<br>";
    } else {
        echo "<ul>";
        foreach ($tables as $table) {
            $count = $pdo->query("SELECT COUNT(*) FROM `$table`")->fetchColumn();
            echo "<li><strong>$table</strong>: $count records</li>";

            // Show columns for context
            $columns = $pdo->query("DESCRIBE `$table`")->fetchAll(PDO::FETCH_COLUMN);
            echo "   <small>(Columns: " . implode(', ', $columns) . ")</small>";
        }
        echo "</ul>";
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
