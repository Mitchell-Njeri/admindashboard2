<?php

require_once('logics/dbconnection.php');
$sqlQuery = mysqli_query($conn,"SELECT * FROM subscribers");

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
					<div class="card-header bg-dark text-white text-center">
						<span>Subscribers</span>
					</div>
		
                    <div class="card-body">
                        <table class="table table-hover " style="font-style: 24px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php while($fetchrecords = mysqli_fetch_array($sqlQuery)) {?>
								<tr>
                                    <td>
                                    <?php echo $fetchrecords['no'] ?>
                                    </td>
									<td>
										<?php echo $fetchrecords['email'] ?>
									</td>
									
									
								</tr>
								<?php }?>
                            </tbody>
                        </table>

















                    </div>
					<div class="card-footer"></div>
				</div>
			</div>

        </div>
    </div>

	<?php require_once('includes/scripts.php')?>

</body>
</html>