<?php include("../View/menu.php");?>

<div class="main-content">
    <div class="wrapper">
        <h1>Admin Panel</h1>

        <br />

        <!-- Button to Add Admin -->

        <?php include("../Controller/manage-admin-control.php")?>
           
     
        <br><br>

        <a href="add-the-admins.php" class="btn-primary">Add Admin</a>
        <br><br>

        <table class="tbl-full">
            <tr>
                <th>Serial Number</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            <?php include("../Model/manage-admin.php")?>


              
<?php include("../View/footer.php");?>