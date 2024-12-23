<?php
// Include common configurations
include "common.php";

// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login or home page
header("Location: " . BASE_URL);
exit; // Ensure no further code is executed
?>
