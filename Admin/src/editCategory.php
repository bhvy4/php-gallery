<?php
require "../config/connection.php";
// print_r($_POST); 


$errors = array('name' => '', 'deadline' => '', 'details' => '', 'image' => '');
$name = mysqli_real_escape_string($conn, $_POST['name']);
$id = mysqli_real_escape_string($conn, $_POST['id']);
// echo $name; die;

$allowed_extensions = array(
    'jpeg',
    'jpg',
    'png'
);

$image_name = $_FILES['category-image']['name'];
$extension = pathinfo($image_name, PATHINFO_EXTENSION);
$target_dir = '../uploads/category_images/';

if (!file_exists($_FILES['category-image']['tmp_name'])) {
    $sqlImg = "SELECT contest_image FROM contests WHERE id = '$id'";
    $result = mysqli_query($conn,$sqlImg);
    $contest_img = mysqli_fetch_assoc($result);
    $image = $contest_img['contest_image'] ;
} else if (!in_array($extension, $allowed_extensions)) {
    $errors['image'] = "Only JPG and PNG files allowed";
} else if ($_FILES['category-image']['size'] > 2000000) {
    echo $_FILES['category-image']['size'];
    die;
    $errors['image'] = 'Image size exceeds 2MB, image should be less than 2MB';
}
// echo $winner; die;

if (!array_filter($errors)) {
    $image = uniqid('img_') . '.' . $extension;
    if (move_uploaded_file($_FILES['category-image']['tmp_name'], $target_dir . $image)) {
        $sql = "UPDATE category SET category_name = '$name', category_image = '$image' WHERE category_id ='$id'";
        if (mysqli_query($conn, $sql)) echo '<div class = "alert alert-success">Record updated successfully!</div>';
    } else {
        echo 'Problem in uploading image';
    }
} else {
    foreach ($errors as $error) {
        echo "<div class = 'alert alert-danger'>$error</div>";
    }
}
mysqli_close($conn);
