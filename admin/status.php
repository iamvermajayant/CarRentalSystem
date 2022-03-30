<?php 
include('../db.php');

$booking_id = $_GET['booking_id'];
$status = $_GET['status'];

$sql = "update booking set status='$status' where booking_id='$booking_id'";

mysqli_query($con, $sql);

header('location:adminDashboard.php');

?>