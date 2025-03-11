<?php
require_once 'db.php';
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $checkEmail = $pdo->prepare("SELECT email FROM users WHERE email = :email");
    $checkEmail->execute(['email' => $email]);

    if ($checkEmail->rowCount() > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {

        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
    }
    header("Location: index.php");
    die();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];

        if ($user['role'] === 'admin') {
            header("Location: admin_page.php");
        } else {
            header("Location: user_page.php");
        }
        die();
    }

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    die();
}
