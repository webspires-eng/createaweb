<?php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = $_SERVER["DOCUMENT_ROOT"] . $path;

// If it's a real file or a directory, let the server handle it
if (file_exists($file)) {
    return false;
}

// If it's extensionless and the .php file exists, serve it
if (pathinfo($file, PATHINFO_EXTENSION) === "" && file_exists($file . '.php')) {
    chdir(dirname($file . '.php')); // Change directory to the script's directory (important for relative includes)
    require $file . '.php';
    return;
}

// Otherwise, let the server handle the 404
return false;
?>