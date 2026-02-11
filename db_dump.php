<?php
require_once 'include/db.php';

$tables = [];
$return = "SET FOREIGN_KEY_CHECKS=0;\n\n";

// Get all tables
$stmt = $pdo->query("SHOW TABLES");
while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
    $tables[] = $row[0];
}

foreach ($tables as $table) {
    // Drop table if exists
    $return .= "DROP TABLE IF EXISTS `$table`;\n";

    // Get create table structure
    $stmt = $pdo->query("SHOW CREATE TABLE `$table`");
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $return .= "\n\n" . $row[1] . ";\n\n";

    // Get data
    $stmt = $pdo->query("SELECT * FROM `$table`");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $return .= "INSERT INTO `$table` VALUES(";
        $values = [];
        foreach ($row as $value) {
            if ($value === null) {
                $values[] = "NULL";
            } else {
                $values[] = $pdo->quote($value);
            }
        }
        $return .= implode(", ", $values);
        $return .= ");\n";
    }
    $return .= "\n\n\n";
}

$return .= "SET FOREIGN_KEY_CHECKS=1;";

file_put_contents('database_backup.sql', $return);

echo "Database dump created successfully: database_backup.sql";
?>