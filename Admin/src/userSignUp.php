<?php
include "../config/connection.php";
// if (isset($_POST['submit1'])) {
    $name = $email = $role = $password = $image = '';
    // $nameErr = $
    $name = mysqli_real_escape_string($conn, $_POST['namesurname']);
    if (!empty($_POST['email'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<div class ='alert bg-red'>Please Enter Email in Correct format</div>";
        }
    } else {
        echo "<div class ='alert bg-red'>Email cannot be empty</div>";
    }

    $allowed_extensions = array('jpg', 'jpeg', 'png');
    $target_dir = "../uploads/profile/";
    $image_name = $_FILES["pic"]["name"];
    $temp_image_name = explode(".", $image_name);
    $ext = end($temp_image_name);
    if (!in_array($ext, $allowed_extensions)) {
        echo "Only jpg,jpeg,png images are allowed";
        // print_r($errors);
    } else {
        if ($_FILES["pic"]["size"] > 1048576) {
            echo "file size too large";
        } else {
            $image = uniqid("img_") . "." . $ext;
        }
    }

    $password = mysqli_real_escape_string($conn,base64_encode($_POST['password']));
    $role = mysqli_real_escape_string($conn,$_POST['role']);
    $created_on = date('d-m-y h:i:s');


    $query = "INSERT INTO users(user_name,user_email,user_role,user_image,user_password,user_created_on ) VALUES('$name','$email','$role','$image','$password','$created_on')";
    if (mysqli_query($conn, $query)) {
        if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_dir . $image)){
            echo "<div class ='alert bg-green'>file successfully moved</div>";
        } else {
            echo "<div class ='alert bg-red'>Could not move the file</div>";
        }
    } else {
        echo "<div class ='alert bg-red'>User could not register due to</div> " . mysqli_errno($conn);
    }

?>