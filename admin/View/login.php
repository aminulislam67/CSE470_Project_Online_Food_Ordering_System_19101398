<?php include('../../configuration/constrants.php'); ?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel="stylesheet" href="../../css/admin.css">
    </head>

    <body>
     <div class="adadad">  
        <div class="login">
            <h1 class="text-center">Admin Login</h1>
            <br><br>

            <?php include("../Controller/login-control2.php")?>

            <!-- Login Form Starts HEre -->
            <form action="" method="POST" class="text-center">
            <h3 class="aaa">Username:</h3> <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            <h3 class="aaa">Password:</h3> <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            <!-- Login Form Ends HEre -->

            
        </div>
     </div>

    </body>
</html>

<?php include("../Controller/login-control.php");?>