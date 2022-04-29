<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login System</title>
    <link rel="stylesheet" href="../../css/style2.css" type="text/css">
</head>
<body>
    <nav>
        <ul>
            <a href="index.php"><li>Home</li></a>
            <?php if(!isset($_SESSION['usersId'])) : ?>
                <a href="signupuser.php"><li>Sign Up</li></a>
                <a href="loginuser.php"><li>Login</li></a>
            <?php else: ?>
                <a href="../Controller/Users.php?q=logout"><li>Logout</li></a>
            <?php endif; ?>
        </ul>
    </nav>