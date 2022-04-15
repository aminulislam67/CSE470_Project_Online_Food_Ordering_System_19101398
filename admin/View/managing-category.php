<?php include("../View/menu.php");?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Category</h1>

        <br /><br />
        <?php include("../Controller/manage_category_session.php")?>
        
            
        <br><br>

                <!-- Button to Add ategory -->
                <a href="<?php echo SITEURL; ?>admin/View/add_categry.php" class="btn-primary">Add Category</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Featured</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>

                    <?php include("../Controller/manage_category_control.php")?>     
                                 
                </table>
    </div>  
</div>

<?php include("../View/footer.php");?>