<?php include("../View/menu.php");?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food Order</h1>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                ?>
                <br><br>

                <table class="tbl-full">
                    <tr>
                        <th width="5%">#</th>
                        <th width="10%">Order Date</th>
                        <th width="10%">Food</th>
                        <th width="5%">Price</th>
                        <th width="5%">Qty</th>
                        <th width="6%">Total</th>
                        <th width="8%">Status</th>
                        <th width="10%">Customer</th>
                        <th width="10%">Contact</th>
                        <th width="15%">Email</th>
                        <th width="10%">Address</th>
                        <th>Actions</th>
                    </tr>

                    <?php include("../Model/manage-ord.php")?>
                        

 
                </table>
    </div>
    
</div>

<?php include("../View/footer.php");?>