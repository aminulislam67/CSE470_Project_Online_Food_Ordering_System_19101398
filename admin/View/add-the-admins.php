<?php include("../View/menu.php");?>
<div class="main-content">
    <div class="wrapper">
        <br>
        <h1>Add Admin</h1>
        <br><br>
        <?php include("../Controller/check-session.php")?>
        <form action="" method="POST">
            <table class="tbl-add_admin">
                <tr>
                    <td>Enter Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Please enter your full name"></td>
                </tr>
                <tr>
                    <td>Enter Username: </td>
                    <td><input type="text" name="username" placeholder="Please enter username"></td>
                </tr>
                <tr>
                    <td>Choose Password: </td>
                    <td><input type="password" name="password" placeholder="Please choose a password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Click to add" class="btn-secondary"></td>
                </tr>

            </table>

        </form>
    </div>

</div>
<?php include("../View/footer.php");
      include("../Model/admin_database.php")
?>


