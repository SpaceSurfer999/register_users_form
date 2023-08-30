<?php

require_once 'include/boot.php';

// Check email
$stmt = pdo()->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute(['email' => $_POST['email']]);
if ($stmt->rowCount() > 0) {
    $_SESSION['msg'] = 'This email already exists.';
    header('Location: register.php');
    die;
}

// If email not used => add user in database
$stmt = pdo()->prepare("INSERT INTO `users`  ( `first_name`, `last_name`, `email`, `company`, `position`, `phone_1`, `phone_2`, `phone_3`) 
VALUES ( :first_name, :last_name, :email, :company, :position, :phone_1, :phone_2, :phone_3) ");

$stmt->execute([
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'company' => $_POST['company'],
    'position' => $_POST['position'],
    'phone_1' => $_POST['phone_1'],
    'phone_2' => $_POST['phone_2'],
    'phone_3' => $_POST['phone_3'],

]);
$_SESSION['msg'] = 'Registration completed successfully.';
header('Location: register.php');
