<?php
require 'functions.php';
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
    <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
        <form action="login_register.php" method="POST">
            <h1>Login</h1>
            <?= showError($errors['login']); ?>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email...">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password...">
            <button type="submit" name="login">Log in</button>
            <?php if (!empty($message)): ?>
                <p><?php echo $message; ?></p>
            <?php endif; ?>
            <p style="font-size:small;">You do not have an account?<a href="#" onclick="showForm('register-form')" style="color:blue-500;hover:underline">Register now</a></p>
        </form>
    </div>

    <div class="form-box  <?= isActiveForm('register', $activeForm); ?>" id="register-form">
        <form action="login_register.php" method="POST">
            <h1>Registration</h1>
            <?= showError($errors['register']); ?>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Your name...">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Your email...">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Create your own password...">
            <select name="role" required>
                <option value="">--Select Role--</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <button type="submit" name="register">Create account</button>
            <?php if (!empty($message)): ?>
                <p><?php echo $message; ?></p>
            <?php endif; ?>
            <p style="font-size:small">Already have an account? <a href="#" onclick="showForm('login-form')" style="color:blue-500;">Login here</a></p>
        </form>
    </div>

    <script src="script.js"></script>

</body>

</html>