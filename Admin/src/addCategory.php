<?php 
require "../config/connection.php";

$name = $image = '';
$errors = array('name'=>'','image'=>'');

$name = mysqli_real_escape_string($conn,$_POST['category-name']);

// echo $prize; die;
$allowed_extensions = array(
    'jpeg',
    'jpg',
    'png'
);

$image_name = $_FILES['category-image']['name'];
$extension = pathinfo($image_name,PATHINFO_EXTENSION );
$target_dir = '../uploads/category_images/';

if(!file_exists($_FILES['category-image']['tmp_name'])){
    $errors['image'] = "Please upload image";
} else if(!in_array($extension,$allowed_extensions)){
    $errors['image'] = "Only JPG and PNG files allowed";
} else if ($_FILES['category-image']['size']>2000000) {
    echo $_FILES['category-image']['size']; die;
    $errors['image'] = 'Image size exceeds 2MB, image should be less than 2MB';
} 

if(!array_filter($errors)){
    $image = uniqid('img_') . '.' . $extension;
    if(move_uploaded_file($_FILES['category-image']['tmp_name'],$target_dir.$image)){
        $sql = "INSERT INTO category(category_name,category_image) VALUES('$name','$image')";
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