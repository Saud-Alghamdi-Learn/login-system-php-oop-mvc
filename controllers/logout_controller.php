<?php
include '../autoloader.php';

// Post values
if(isset($_POST['logout-btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

// Use static method logout() from User class
User::logout();
header("Location: ../views/login.php?logout_result=true");