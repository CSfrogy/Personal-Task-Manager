<?php
// Check if the user is trying to access the registration page
if (isset($_GET['action']) && $_GET['action'] == 'register') {
    require 'register.php';
} else {
    // Default to login page
    require 'login.php';
}
