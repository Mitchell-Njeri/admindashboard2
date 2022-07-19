<?php
require_once('contact/contactconnection.php');

$sqlDeleteStudent = mysqli_query($conn, "DELETE FROM contactus WHERE no='" .$_GET['id']."' ");
if($sqlDeleteStudent)
{
    echo "User Records Deleted";
    header('location:contactus.php');

}
else{
    echo "Error Occurred";
}




?>