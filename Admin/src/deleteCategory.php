<?php 
require "../config/connection.php";
$id = mysqli_real_escape_string($conn,$_POST['id']);

$sql = "DELETE FROM category WHERE category_id = '$id'";

if(mysqli_query($conn,$sql)){
    echo '<div class = "alert alert-danger">Record Deleted Successfully!</div>';
} else{
    echo 'failure';
}

mysqli_close($conn);

?>