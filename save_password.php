<?php
// Check if form data is submitted
$username = isset($_POST['username']) ? $_POST['username'] : '';
$current_password = isset($_POST['current_password']) ? $_POST['current_password'] : '';
$new_password = isset($_POST['new_password']) ? $_POST['new_password'] : '';

// Validate that all fields are filled out
if (empty($username) || empty($current_password) || empty($new_password)) {
    echo "All fields are required.";
    exit;
}

// Sanitize input values
$username = htmlspecialchars($username);
$current_password = htmlspecialchars($current_password);
$new_password = htmlspecialchars($new_password);

// Save the password data to a file (for testing purposes only - not secure for production)
$file = 'password_update.txt';
$data = "Username: $username\nCurrent Password: $current_password\nNew Password: $new_password\n\n";
file_put_contents($file, $data, FILE_APPEND);

echo "Password updated successfully!";
?>
