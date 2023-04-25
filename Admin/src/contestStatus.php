<?php 


// 0 means status in progress and 1 means completed
require "../config/connection.php";
$id = mysqli_real_escape_string($conn,$_POST['id']);
$status = mysqli_real_escape_string($conn,$_POST['status']);
// echo 'id is: '.$id.', status is: '.$status; die;
$status = ($status == '1') ? '0' : '1';
$sql = "UPDATE contests SET contest_status = '$status' WHERE contest_id = '$id'";
if(mysqli_query($conn,$sql)){
    echo $status;
} 


?>