<?php 
                //Query to Get all Admin
                $sql = "SELECT * FROM tbl_admin";
                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //CHeck whether the Query is Executed of Not
                if($res==TRUE)
                {
                    // Count Rows to CHeck whether we have data in database or not
                    $count = mysqli_num_rows($res); // Function to get all the rows in database

                    $sn=1; //Create a Variable and Assign the value

                    //CHeck the num of rows
                    if($count>0)
                    {
                        //WE HAve data in database
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            //Using While loop to get all the data from database.
                            //And while loop will run as long as we have data in database

                            //Get individual DAta
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $username=$rows['username'];

                            //Display the Values in our Table
                            ?>
                            
                            <tr>
                                <td><?php echo $sn++; ?>. </td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                <a href="<?php echo SITEURL; ?>admin/view/update_password.php?id=<?php echo $id; ?>" class="btn-fourth">Change Password</a>
                                <a href="<?php echo SITEURL; ?>admin/view/update_admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                                <a href="<?php echo SITEURL; ?>admin/Controller/delete_admin.php?id=<?php echo $id; ?>"class="btn-third ">Delete Admin</a>
                                </td>
                            </tr>

                            <?php

                        }
                    }
                    
                }

            ?>

        </table>
    </div>
 </div>
