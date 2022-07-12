<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn = mysqli_connect($server,$username,$password,$database);

$sqlQuery = mysqli_query($conn,"SELECT * FROM enrollment");
$fetchrecords = mysqli_fetch_array($sqlQuery);
//echo $fetchrecords['email'];
//echo $fetchrecords['fullname']
//echo $fetchrecords['phonenumber'];

while($fetchrecords = mysqli_fetch_array($sqlQuery)){
    echo $fetchrecords['email'].''. $fetchrecords['fullname'].''. $fetchrecords['phonenumber'].'<br>';

}



?>
