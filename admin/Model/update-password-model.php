
<?php 

//CHeck whether the Submit Button is Clicked on Not
if(isset($_POST['submit']))
{
    //echo "CLicked";

    //1. Get the DAta from Form
    $id=$_POST['id'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);

                    //2. Check whether the user with current ID and Current Password Exists or Not
                    $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

                    //Execute the Query
                    $res = mysqli_query($conn, $sql);
    
                    if($res==true)
                    {
                        //CHeck whether data is available or not
                        $count=mysqli_num_rows($res);
    
                        if($count==1)
                        {
                            //User Exists and Password Can be CHanged
                            //echo "User FOund";
    
                            //Check whether the new password and confirm match or not
                            if($new_password==$confirm_password)
                            {
                                //Update the Password
                                $sql2 = "UPDATE tbl_admin SET 
                                    password='$new_password' 
                                    WHERE id=$id
                                ";
    
                                //Execute the Query
                                $res2 = mysqli_query($conn, $sql2);
    
                                //CHeck whether the query exeuted or not
                                if($res2==true)
                                {
                                    //Display Succes Message
                                    //REdirect to Manage Admin Page with Success Message
                                    $_SESSION['change-pwd'] = "<div class='success'>Password Changed Successfully. </div>";
                                    //Redirect the User
                                    header('location:'.SITEURL.'admin/view/manage-admin.php');
                                }
                                else
                                {
                                    //Display Error Message
                                    //REdirect to Manage Admin Page with Error Message
                                    $_SESSION['change-pwd'] = "<div class='error'>Failed to Change Password. </div>";
                                    //Redirect the User
                                    header('location:'.SITEURL.'admin/view/manage-admin.php');
                                }
                            }
                            else
                            {
                                //REdirect to Manage Admin Page with Error Message
                                $_SESSION['pwd-not-match'] = "<div class='error'>Password Did not Patch. </div>";
                                //Redirect the User
                                header('location:'.SITEURL.'admin/view/manage-admin.php');
    
                            }
                        }
                        else
                        {
                            //User Does not Exist Set Message and REdirect
                            $_SESSION['user-not-found'] = "<div class='error'>User Not Found. </div>";
                            //Redirect the User
                            header('location:'.SITEURL.'admin/view/manage-admin.php');
                        }
                    }
    
                    //3. CHeck Whether the New Password and Confirm Password Match or not
    
                    //4. Change PAssword if all above is true
                }
    
    ?>