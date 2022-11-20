<?php
    if(isset($_GET['register_result'])) {
        echo "<strong>" . $_GET['register_result'] . "</strong>";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Register form:</h1>

    <form action="../controllers/register_controller.php" method="POST">
        <label for="">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="">Password:</label>
        <input type="text" name="password">
        <br>
        <button name="register-btn">Register</button>
    </form>

</body>
</html>