<?php include("../View/menu.php");?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Items</h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/View/add-food.php" class="btn-primary">Add Food</a>

                <br /><br /><br />

                <?php include("../Controller/managefoodcontroller.php")?>
                   
                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>

                    <?php include("../Controller/manage-food-control.php")?>

                    
                </table>
    </div>
    
</div>

<?php include("../View/footer.php");?>