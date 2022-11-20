<?php
include '../autoloader.php';

if(isset($_POST['login-btn'])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // create db object to connect to db
    $db = new Database();
    $conn = $db->connect();

    // create user object and login
    $user = new User($username, $password, $conn);
    $login_result = $user->login();

    if($login_result === true) {
        header("Location: ../views/welcome.php?login_result=$login_result");
    } else {
        header("Location: ../views/login.php?login_result=$login_result");
    }
};



