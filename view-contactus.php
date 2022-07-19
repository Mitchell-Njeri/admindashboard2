<?php
//database connection
require_once('contact/contactconnection.php');
$sqlfetchcontact = mysqli_query($conn, "SELECT * FROM contactus WHERE no='".$_GET['id']."' ");
while ($fetchstudentcontact = mysqli_fetch_array($sqlfetchcontact))
{
    $firstname = $fetchstudentcontact['firstname'];
    $lastname = $fetchstudentcontact['lastname'];
    $phonenumber = $fetchstudentcontact['phonenumber'];
    $email = $fetchstudentcontact['email'];
    $formmessage = $fetchstudentcontact['message'];
}

?>

<!DOCTYPE html>
<html>
	<?php require_once('includes/headers.php')?>

<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>


	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>

	</div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">First Name:<span class="float-right bagde badge-primary"><?php echo $firstname?> </span></li>
                                <li class="list-group-item">Last Name: <span class="float-right bagde badge-secondary"><?php echo $lastname?></span></li>
                                <li class="list-group-item">Phone Number: <span class="float-right bagde badge-danger" ><?php echo $phonenumber?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title">Other Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Email:<span class="float-right bagde badge-primary"><?php echo $email?> </span></li>
                                <li class="list-group-item">Message: <span class="float-right bagde badge-secondary"><?php echo $formmessage?></span></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php require_once('includes/scripts.php')?>

</body>
</html>