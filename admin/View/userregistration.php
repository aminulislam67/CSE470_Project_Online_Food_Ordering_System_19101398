<?php include("../../configuration/config.php");?>

<?php include("../Controller/userregistrationcontrol.php")?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="../../css/login.css" />
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
          <form action="" class="login__create" id="login-up" method="post" autocomplete="off">
              <h1 class="login__title">Create Account</h1>

              <div class="login__box">
                <i class="bx bx-user login__icon"></i>
                <input
                  type="text"
                  placeholder="Name"
                  class="login__input"
                  name="name" 
                  required value=""
                />
              </div>

              <div class="login__box">
                <i class="bx bx-user login__icon"></i>
                <input type="text" placeholder="Username" class="login__input"
                name="username" required value="" />
              </div>

              <div class="login__box">
                <i class="bx bx-at login__icon"></i>
                <input
                  
                  placeholder="Email"
                  class="login__input"
                  type="email" name="email" required value=""
                />
              </div>
              <div class="login__box">
                <i class="bx bx-lock-alt login__icon"></i>
                <input
                  
                  placeholder="Password"
                  class="login__input"
                  type="password" name="password" required value=""
                />
              </div>
              <div class="login__box">
                <i class="bx bx-lock-alt login__icon"></i>
                <input
                  
                  placeholder="Password"
                  class="login__input"
                  type="password" name="confirmpassword" required value=""
                />
              </div>

              <button type="submit" name="submit" class="login__button">Sign Up</button>

              <div>
                <span class="login__account">Already have an Account ?</span>
                <a href="../View/userlogin.php" class="login__signup" id="sign-in">Sign In</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  
</html>
