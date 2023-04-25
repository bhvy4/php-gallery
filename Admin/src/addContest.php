<?php 
require "../config/connection.php";

$name = $image = $deadline = $details = '';
$errors = array('name'=>'','deadline'=>'', 'details'=>'', 'image'=>'');

// print_r($_POST);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$deadline = mysqli_real_escape_string($conn,$_POST['deadline']);
$details = mysqli_real_escape_string($conn,$_POST['details']);
$author = mysqli_real_escape_string($conn,$_POST['author']);
$prize = mysqli_real_escape_string($conn,$_POST['contestPrice']);
$category = mysqli_real_escape_string($conn,$_POST['category']);

// echo $prize; die;
$allowed_extensions = array(
    'jpeg',
    'jpg',
    'png'
);

$image_name = $_FILES['contest-image']['name'];
$extension = pathinfo($image_name,PATHINFO_EXTENSION );
$target_dir = '../uploads/contest_profile_images/';

if(!file_exists($_FILES['contest-image']['tmp_name'])){
    $errors['image'] = "Please upload image";
} else if(!in_array($extension,$allowed_extensions)){
    $errors['image'] = "Only JPG and PNG files allowed";
} else if ($_FILES['contest-image']['size']>2000000) {
    echo $_FILES['contest-image']['size']; die;
    $errors['image'] = 'Image size exceeds 2MB, image should be less than 2MB';
} 

if(!array_filter($errors)){
    $image = uniqid('img_') . '.' . $extension;
    if(move_uploaded_file($_FILES['contest-image']['tmp_name'],$target_dir.$image)){
        $sql = "INSERT INTO contests(contest_name,contest_deadline,contest_prize,contest_image,contest_category,contest_author,contest_details) VALUES('$name','$deadline','$prize','$image','$category','$author','$details')";
        if(mysqli_query($conn,$sql)) echo '<div class = "alert alert-success">Record inserted successfully!</div>';
    } else{
        echo 'Problem in uploading image';
    }
    
} else {
    foreach($errors as $error){
        echo "<div class = 'alert alert-danger'>$error</div>";
    }
}

mysqli_close($conn);



?>