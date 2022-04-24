<?php include("../View/usermenu.php")?>
   <!-- fOOD sEARCH Section Starts Here -->
   <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>admin/View/userfood-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <?php include("../Controller/userfoodcontrol.php")?>
          
            <div class="clearfix"></div>
       
        </div>
    </section>
    <!-- fOOD Menu Section Ends Here -->

<?php include("../View/userfooter.php")?>