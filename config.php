<?php
/**
 * Main Configuration and Routing File
 */

// --- DATABASE CONFIGURATION (for future use) ---
// Replace with your actual database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // Your database password
define('DB_NAME', 'mashabela_db');

// --- SITE CONFIGURATION ---
// The base URL of your website.
define('SITE_URL', 'http://localhost/mashabela'); // Change if your URL is different

// If the request is for our API endpoint, stop the router.
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (strpos($request_uri, '/subscribe.php') !== false) {
    // Let the subscribe.php script handle itself.
    return;
}


// --- SIMPLE PHP ROUTER ---

// 1. Get the requested page from the URL query string (e.g., index.php?page=about)
// If no page is requested, default to 'home'.
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 2. A whitelist of allowed pages. This is a security measure to prevent
// users from accessing unintended files.
$allowed_pages = [
    'home'    => 'index.html',
    'about'   => 'about.html',
    'services'=> 'services.html',
    'blog'    => 'blog.html',
    'contact' => 'contact.html',
    'admin'   => 'admin.html',
    'upload'  => 'uploadblog.html'
];

// 3. Check if the requested page is in our whitelist.
if (array_key_exists($page, $allowed_pages)) {
    // If it's a valid page, include the corresponding file.
    require_once $allowed_pages[$page];
} else {
    // If the page is not found, display a 404 error.
    http_response_code(404);
    echo "<h1>404 Not Found</h1><p>The page you requested could not be found.</p>";
    // Optionally, you could include a dedicated 404.html page here.
    // require_once '404.html';
}
