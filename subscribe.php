<?php
// Set the content type to JSON for the response
header('Content-Type: application/json');

// Include the database configuration constants
require_once 'config.php';

// --- Database Connection ---
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    // In a real app, you'd log this error, not expose it to the user.
    echo json_encode(['success' => false, 'message' => 'Database connection failed. Please try again later.']);
    exit;
}

// Get the posted data from the fetch request
$data = json_decode(file_get_contents('php://input'), true);
$email = isset($data['email']) ? trim($data['email']) : '';

// --- Validation ---
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
    exit;
}

// --- Insert Data ---
// Use a prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO subscriptions (email) VALUES (?)");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    // Success
    echo json_encode(['success' => true, 'message' => 'Thank you for subscribing!']);
} else {
    // Check for duplicate entry error (MySQL error code 1062)
    if ($conn->errno == 1062) {
        echo json_encode(['success' => false, 'message' => 'This email address is already subscribed.']);
    } else {
        // Other database error
        echo json_encode(['success' => false, 'message' => 'An error occurred. Please try again.']);
    }
}

$stmt->close();
$conn->close();