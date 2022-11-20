<?php
    session_start();
    if(isset($_GET['login_result'])) {
        $loggedin_user = $_SESSION['loggedin_user'];
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
    
    <h1>Welcome <?=$loggedin_user?></h1>

    <form action="../controllers/logout_controller.php" method="POST">
        <button name="">Log out</button>
    </form>

</body>
</html>