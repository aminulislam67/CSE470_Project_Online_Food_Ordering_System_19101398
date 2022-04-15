<?php 

//Query to Get all CAtegories from Database
$sql = "SELECT * FROM tbl_category";

//Execute Query
$res = mysqli_query($conn, $sql);

//Count Rows
$count = mysqli_num_rows($res);

//Create Serial Number Variable and assign value as 1
$sn=1;

//Check whether we have data in database or not
if($count>0)
{
    //We have data in database
    //get the data and display
    while($row=mysqli_fetch_assoc($res))
    {
        $id = $row['id'];
        $title = $row['title'];
        $image_name = $row['image_name'];
        $featured = $row['featured'];
        $active = $row['active'];

        ?>

            <tr>
                <td><?php echo $sn++; ?>. </td>
                <td><?php echo $title; ?></td>

                <td>

                    <?php  
                        //Chcek whether image name is available or not
                        if($image_name!="")
                        {
                            //Display the Image
                            ?>
                            
                            <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" width="100px" >
                            
                            <?php
                        }
                        else
                        {
                            //DIsplay the MEssage
                            echo "<div class='error'>Image not Added.</div>";
                        }
                    ?>

                </td>

                <td><?php echo $featured; ?></td>
                <td><?php echo $active; ?></td>
                <td>
                    <a href="<?php echo SITEURL; ?>admin/View/update-category.php?id=<?php echo $id; ?>" class="btn-secondary">Update Category</a>
                    <a href="<?php echo SITEURL; ?>admin/Controller/delete_category_cntrller.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-third">Delete Category</a>
                </td>
            </tr>

        <?php

    }
}
else
{
    //WE do not have data
    //We'll display the message inside table
    ?>

    <tr>
        <td colspan="6"><div class="error">No Category Added.</div></td>
    </tr>

    <?php
}

?>