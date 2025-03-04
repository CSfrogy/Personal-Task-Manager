<?php
require 'db.php';
$message = ''; // Initialize an empty message variable

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process login
    // Example: Check credentials, set session, etc.
    $message = "Register processing..."; // Set the message to display
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css.css">
    <title>Home</title>
</head>

<body>
    <form action="" method="POST">
        <h1>Registration</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Your name...">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Your email...">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Create your own password...">
        <button type="submit" value="Sign in">Sign in</button>
        <?php if (!empty($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <p style="font-size:small">Already have an account? <a href="/login.php" style="color:blue-500;">Login here</a></p>
    </form>

</body>

</html>