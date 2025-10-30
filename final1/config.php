<?php
/**
 * Main Configuration and Routing File
 */

// --- DATABASE CONFIGURATION (for future use) ---
// Replace with your actual database credentials
define('DB_HOST', 'srv1371.hstgr.io');
define('DB_USER', 'u320740834_melvy');
define('DB_PASS', 'Melvies@2024');
define('DB_NAME', 'u320740834_mashebela');

// --- SITE CONFIGURATION ---
// The base URL of your website.
define('SITE_URL', 'http://localhost'); // Root URL; pretty URLs handled via .htaccess

// If the request is for our API endpoint, stop the router.
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if (strpos($request_uri, '/subscribe.php') !== false) {
    // Let the subscribe.php script handle itself.
    return;
}




// 1. Get the requested page from the URL query string (e.g., index.php?page=about)
// If no page is requested, default to 'home'.
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 2. A whitelist of allowed pages. This is a security measure to prevent
// users from accessing unintended files.
$allowed_pages = [
    'home'    => 'index.php',
    'about'   => 'about.php',
    // Services is part of home page; route to index.php
    'services'=> 'index.php',
    // Blog remains static html for now
    'blog'    => 'blog.php',
    'contact' => 'contact.php',
    'contact' => 'contact.php', // Changed from contact.html
    'admin'   => 'admin.php', // Assuming this is your login page
    'upload'  => 'uploadblog.php' // New page for uploading posts
];

// 3. Check if the requested page is in our whitelist.
if (array_key_exists($page, $allowed_pages)) {
    // If it's a valid page, include the corresponding file.
    require_once $allowed_pages[$page];
} else {
    // If the page is not found, display a 404 error.
    http_response_code(404);
    require_once '404.php';
}
