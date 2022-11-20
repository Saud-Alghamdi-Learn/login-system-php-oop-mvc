<?php
include '../autoloader.php';

if(isset($_POST['register-btn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // create db object to connect to db
    $db = new Database();
    $conn = $db->connect();

    // create user object and reigster
    $user = new User($username, $password, $conn);
    $register_result = $user->register();

    if($register_result === true) {
        header("Location: ../views/login.php?register_result=$register_result");
    } else {
        header("Location: ../views/register.php?register_result=$register_result");
    }
};

