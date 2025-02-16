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
            <h3><a href="sellerpanel.php">View Your Profile</a></h3>          
           	<h3><a href="sellerprofile.php">Edit Your Profile</a></h3>     
            
            <h3><a href="Sellerchngpassword.php">Change Your Password</a></h3>
            <h3><a href="logout.php">Logout</a></h3> 
            </header>
            </section>
            <section>
            <header class="menu-item">
            <h2>Farm Sales Details</h2>
          	<h3><a href="Product.php">Put Your Produce On Sale</a></h3>
          	<h3><a href="viewProduct.php">View Your Produce On Sale</a></h3>
          	<h3><a href="viewsellerpurchaserequest.php">View Purchase Request</a></h3>
         	<h3><a href="viewpurchaseorder.php">View Purchase Order</a></h3>
          	<h3><a href="viewpurchasereport.php">Purchase Billing Report</a></h3>
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
            <h2>Hire Details</h2>
          	<h3><a href="viewworkerrequest.php">View Hired Worker</a></h3> 	                     
            </header>
            </section>
</div>