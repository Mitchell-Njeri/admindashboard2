<?php
$message="";
require_once('contact/contactconnection.php');
$queryuser= mysqli_query($conn, "SELECT * FROM contactus WHERE no='" .$_GET['id']."' ");

while($fetchuser = mysqli_fetch_array($queryuser))
{
    $id = $fetchuser['no'];
    $firstname = $fetchuser['firstname'];
    $lastname = $fetchuser['lastname'];
    $phonenumber = $fetchuser['phonenumber'];
    $email = $fetchuser['email'];
    $message = $fetchuser['message'];
}
//update user record
if( isset($_POST['updatecontacts']))
{
  //fetch form data
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['email'];
  $formmessage = $_POST['message'];
  

  //update records
  $updatequery = mysqli_query($conn,
  "UPDATE contactus SET firstname='$name',lastname='$lastname',phonenumber='$phonenumber',email='$email',message='$formmessage'
  
  WHERE no='" .$_GET['id']."' ");
  if($updatequery)
  {
    $message= "Data Updated";
  }
  else{
    $message= "Error Occured";
  }
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
                            <h4>Edit Information: <?php echo $firstname?></h4>
                            <span> <?php echo $message ?> </span>
                        </div>
                        <div class="card-body">
                        <form action="edit-contactus.php?id=<?php echo $id ?>" method="POST">

                        <div class="row">
                           <div class="mb-3 col-lg-6">
                                <label for="firstname" class="form-label">First name</label>
                                <input type="text" name="firstname" class="form-control" value=<?php echo $firstname ?> placeholder="Enter your first name">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="lastname" class="form-label">Last name</label>
                                <input type="text" name="lastname" class="form-control" value=<?php echo $lastname ?> placeholder="Enter your last name">
                            </div>
                        </div>

                        <div class="row">

                            <div class="mb-3 col-lg-6">
                                <label for="phonenumber" class="form-label">Phone Number</label>
                                <input type="tell" name="phonenumber"  class="form-control" value=<?php echo $phonenumber?> placeholder="Enter your phone number">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email"   class="form-control" value=<?php echo $email ?> placeholder="Enter your email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-lg-12">
                                <label for="message" class="your message">Your message</label>
                                <textarea  cols="30" rows="5" name="message" class="form-control" value=<?php echo $message?> ></textarea>
                            </div>
                        </div>
                    </form>   
                    <button type="submit" name="updatecontacts" class="btn btn-outline-primary">Update Contacts</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>

	<?php require_once('includes/scripts.php')?>

</body>
</html>