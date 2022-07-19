<?php 
require_once('contact/contactconnection.php');

$sqlfetchrecords = mysqli_query($conn, "SELECT *FROM contactus");


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
                            <h4 class="card-title">Contact Us</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-style: 12px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Lastname</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Enrolled on</th>
                                    <th>Action</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                               <?php while($fetchrecords = mysqli_fetch_array($sqlfetchrecords)) {?>
								<tr>
									<td>
										<?php echo $fetchrecords['no'] ?>
									</td>
									<td>
										<?php echo $fetchrecords['firstname'] ?>
									</td>
									<td>
										<?php echo $fetchrecords['lastname'] ?>
									</td>
									<td>
										<?php echo $fetchrecords['phonenumber'] ?>
									</td>
									<td>
										<?php echo $fetchrecords['email'] ?>
									</td>
									<td>
										<?php echo $fetchrecords['message'] ?>
									</td>
									<td>
										<?php echo $fetchrecords['created_at'] ?>
							        </td>
                                    <td>
									   <a href="edit-contactus.php?id=<?php echo $fetchrecords['no']?>" class="btn btn-primary btn-sm">
									        <i class="fa fa-edit"></i>
									   </a>
									   <a href="view-contactus.php?id=<?php echo $fetchrecords['no']?>" class="btn btn-primary btn-sm">
                                            <i class="fa fa-eye"></i>
									   </a>
									   <a href="delete-contactus.php?id=<?php echo $fetchrecords['no']?>" class="btn btn-danger btn-sm">
                                             <i class="fa fa-trash"></i>
									   </a>
							        </td>
								</tr>
								<?php }?>
                            </tbody>
                        </table>            
                

                </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('includes/scripts.php')?>

</body>
</html>