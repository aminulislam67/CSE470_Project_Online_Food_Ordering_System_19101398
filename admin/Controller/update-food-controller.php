<?php 
        
        if(isset($_POST['submit']))
        {
            //echo "Button Clicked";

            //1. Get all the details from the form
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $category = $_POST['category'];

            $featured = $_POST['featured'];
            $active = $_POST['active'];

            //2. Upload the image if selected

            //CHeck whether upload button is clicked or not
            if(isset($_FILES['image']['name']))
            {
                //Upload BUtton Clicked
                $image_name = $_FILES['image']['name']; //New Image NAme

                //CHeck whether th file is available or not
                if($image_name!="")
                {
                    //IMage is Available
                    //A. Uploading New Image

                    //REname the Image
                    $ext = end(explode('.', $image_name)); //Gets the extension of the image

                    $image_name = "Food-Name-".rand(0000, 9999).'.'.$ext; //THis will be renamed image

                    //Get the Source Path and DEstination PAth
                    $src_path = $_FILES['image']['tmp_name']; //Source Path
                    $dest_path = "../../images/food/".$image_name; //DEstination Path

                    //Upload the image
                    $upload = move_uploaded_file($src_path, $dest_path);

                    /// CHeck whether the image is uploaded or not
                    if($upload==false)
                    {
                        //FAiled to Upload
                        $_SESSION['upload'] = "<div class='error'>Failed to Upload new Image.</div>";
                        //REdirect to Manage Food 
                        header('location:'.SITEURL.'admin/View/managing-foods.php');
                        //Stop the Process
                        die();
                    }
                    //3. Remove the image if new image is uploaded and current image exists
                    //B. Remove current Image if Available
                    if($current_image!="")
                    {
                        //Current Image is Available
                        //REmove the image
                        $remove_path = "../../images/food/".$current_image;

                        $remove = unlink($remove_path);

                        //Check whether the image is removed or not
                        if($remove==false)
                        {
                            //failed to remove current image
                            $_SESSION['remove-failed'] = "<div class='error'>Faile to remove current image.</div>";
                            //redirect to manage food
                            header('location:'.SITEURL.'admin/View/managing-foods.php');
                            //stop the process
                            die();
                        }
                    }
                }
                else
                {
                    $image_name = $current_image; //Default Image when Image is Not Selected
                }
            }
            else
            {
                $image_name = $current_image; //Default Image when Button is not Clicked
            }

            

            //4. Update the Food in Database
            $sql3 = "UPDATE tbl_food SET 
                title = '$title',
                description = '$description',
                price = $price,
                image_name = '$image_name',
                category_id = '$category',
                featured = '$featured',
                active = '$active'
                WHERE id=$id
            ";

            //Execute the SQL Query
            $res3 = mysqli_query($conn, $sql3);

            //CHeck whether the query is executed or not 
            if($res3==true)
            {
                //Query Exectued and Food Updated
                $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                header('location:'.SITEURL.'admin/View/managing-foods.php');
            }
            else
            {
                //Failed to Update Food
                $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                header('location:'.SITEURL.'admin/View/managing-foods.php');
            }

            
        }
    
    ?>