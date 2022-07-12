<?php
$message="";
require_once('logics/dbconnection.php');
$queryuser= mysqli_query($conn, "SELECT * FROM enrollment WHERE no='" .$_GET['id']."' ");

while($fetchuser = mysqli_fetch_array($queryuser))
{
    $id = $fetchuser['no'];
    $fullname = $fetchuser['fullname'];
    $phonenumber = $fetchuser['phonenumber'];
    $email = $fetchuser['email'];
    $gender = $fetchuser['gender'];
    $course = $fetchuser['course'];
    

}
//update user record
if( isset($_POST['updaterecords']))
{
  //fetch form data
  $name = $_POST['fullname'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['email'];
  $formgender = $_POST['gender'];
  $formcourse = $_POST['course'];

  //update records
  $updatequery = mysqli_query($conn,
  "UPDATE enrollment SET fullname='$name',phonenumber='$phonenumber',email='$email',gender='$formgender',course='$formcourse'
  
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
                            <h4>Edit Students: <?php echo $fullname?></h4>
                            <span> <?php echo $message ?> </span>
                        </div>
                        <div class="card-body"> 
                            <!-- Added form here from another related file .-->
                    <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST">
                    
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="fullname" class="form-label">Full name</label>
                                <input type="text" name="fullname" class="form-control" value=<?php echo $fullname?> placeholder="Enter your full name">
                        </div>
            <div class="mb-3 col-lg-6">
              <label for="phonenumber" class="form-label">Phone number</label>
              <input type="tell"  name="phonenumber" value=<?php echo $phonenumber?> class="form-control" placeholder="+2547....">
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-lg-6">
              <label for="email" class="form-label">Email</label>
              <input type="text"  name="email" value=<?php echo $email?> class="form-control" placeholder="Enter email">
            </div>
            <div class=" col-lg-6">
            <label for="gender" name="gender" class="form-label">What's your gender?</label>
            <select class="form-control" name="gender">
              <option selected><?php echo $gender?><option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="nonbinary">Non-binary</option>
            <select>
          </div>
          </div>
         
       <div class="row">
        <div class="mb-3 col-lg-6">
          <label for="course" name="course" class="form-label">What's your preference course?</label>
            <select class="form-control" name="course">
              <option selected><?php echo $course?><option>
              <option value="webdesign">Web Design</option>
              <option value="webdesign">Data Science</option>
              <option value="webdesign">Cyber security</option>
            <select>
      </div>

      </div>
    <div class="col-lg-6">
     <button type="submit" name="updaterecords" class="btn btn-outline-primary">Update Records</button>
    </div>
    </div>
        </form>








                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('includes/scripts.php')?>

</body>
</html>