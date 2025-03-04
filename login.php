<?php
$message = ''; // Initialize an empty message variable

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process login
    // Example: Check credentials, set session, etc.
    $message = "Login processing..."; // Set the message to display
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
        <h1>Login</h1>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email...">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password...">
        <button type="submit" value="Log in">Log in</button>
        <?php if (!empty($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
        <p style="font-size:small;">You do not have an account?<a href="/register.php" style="color:blue-500;">Register here</a></p>
    </form>



</body>

</html>