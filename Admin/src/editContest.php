<?php 
require "../config/connection.php";
$name = mysqli_real_escape_string($conn,$_POST['name']);
// echo $name; die;
$id = mysqli_real_escape_string($conn,$_POST['id']);
$deadline = mysqli_real_escape_string($conn,$_POST['deadline']);
$author = mysqli_real_escape_string($conn,$_POST['author']);
$prize = mysqli_real_escape_string($conn,$_POST['prize']);

$winner = mysqli_real_escape_string($conn,$_POST['winner']);
$details = mysqli_real_escape_string($conn,$_POST['details']);
// echo $winner; die;
$sql = "UPDATE contests SET contest_name = '$name', contest_deadline = '$deadline', contest_author = '$author', contest_prize = '$prize' ,contest_winner = '$winner', contest_details = '$details' WHERE contest_id ='$id'";

if(mysqli_query($conn,$sql)){
    echo 'success';
} else{
    echo 'failed';
}




?>