<?php
    if(isset($_GET['login_result'])) {
        echo "<strong>" . $_GET['login_result'] . "</strong>";
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
    
    <h1>Log in form:</h1>

    <form action="../controllers/login_controller.php" method="POST">
        <label for="">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="">Password:</label>
        <input type="text" name="password">
        <br>
        <button name="login-btn">Log in</button>
    </form>

</body>
</html>