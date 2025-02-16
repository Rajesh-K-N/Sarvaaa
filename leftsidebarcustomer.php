<?php
if(!isset($_SESSION)) { session_start(); }
?>
<link rel="stylesheet" href="cssmenu/css/style.css">
<?php
if(isset($_SESSION['customerid']))
?>
<div class="3u">
            <section>
                <header class="menu-item">
             <h2>Account Settings</h2>
                   
            <h3><a href="customerpanel.php">View Your Profile</a></h3>          
           <h3><a href="customerUpdate.php">Edit Your Profile</a></h3>         
            <h3><a href="Customerchngpassword.php">Change Your Password</a></h3> 
            <h3><a href="logout.php">Logout</a></h3>                     
            </header>
            </section>
            <section>
            <header class="menu-item">
            <h2>Agro Products Purchase Details</h2>
            <h3><a href="viewcstpurchasereport.php">Product Purchase Report</a></h3>
            </header>
            </section>
             <section>
                <header class="menu-item">
                    <h2>Farm Produce Purchase Details</h2>           
                <h3><a href="viewpurchaserequest.php">View Farm Produce Purchase request</a></h3>
                <h3><a href="viewcstpurchaseorder.php">View Farm Produce Purchase Order</a></h3>
                <h3><a href="viewpurchasereport.php">View Billing Report</a></h3>
                </header>
            </section>
</div> 