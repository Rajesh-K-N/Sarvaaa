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
                   
         	<h3><a href="workerpanel.php">View Your Profile</a></h3>          
           	<h3><a href="workerprofile.php">Edit Your Profile</a></h3>         
            <h3><a href="Workerchngpassword.php">Change Your Password</a></h3> 
            <h3><a href="logout.php">Logout</a></h3>                     
                </header>
            </section>
            <section>
            <header class="menu-item">
            <h2>Check Job Requests</h2>
            <h3><a href="viewworkerrequest.php">View Your Jobs</a></h3>
            <h3><a href="workerpanel.php?workschedule=set">Work Schedule</a></h3>
            </header>
            </section>
</div> 