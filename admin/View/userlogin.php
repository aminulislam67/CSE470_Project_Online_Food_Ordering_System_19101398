<?php
include("../../configuration/config.php");?>
<?php

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: userindex.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User is Not Registered yet'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/login.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
 </head>
  <body>
  <div class="overlay">
      <div class="login">
        <div class="login__content">
          <div class="login__forms">
            <form action="" method="post" class="login__registre" autocomplete="off" >
              <h1 class="login__title">Sign In</h1>

              <div class="login__box">
                <i class="bx bx-user login__icon"></i>
                <input
                  type="text"
                  placeholder="Username or Email"
                  class="login__input"
                  name="usernameemail"
                  required value=""
                />
              </div>

              <div class="login__box">
                <i class="bx bx-lock-alt login__icon"></i>
                <input
                  type="password"
                  placeholder="Password"
                  class="login__input"
                  name="password"
                  required value=""
                />
              </div>

              <button type="submit" name="submit"  class="login__button">Sign In</button>

              <div>
                <span class="login__account">Don't have an Account ?</span>
                <a href="userregistration.php" class="login__signin" id="sign-up">Sign Up</a>
              </div>
            </form>
</div>
</div>
</div>
</div>


  </body>
  
</html>
