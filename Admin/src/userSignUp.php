<?php
include "../config/connection.php";
// if (isset($_POST['submit1'])) {
    $name = $email = $role = $password = $image = $phone ='';
    $phoneArr = [];
    // print_r( $_POST['phone']); die;
    $errors = array('nameErr'=>'' , 'emailErr'=>'', 'imageErr'=>'' );
    $name = mysqli_real_escape_string($conn, $_POST['namesurname']);
    if (!empty($_POST['email'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['nameErr'] = "<div class ='alert bg-red'>Please Enter Email in Correct format</div>";
        }
    } else {
        $errors['emailErr']= "<div class ='alert bg-red'>Email cannot be empty</div>";
    }

    $allowed_extensions = array('jpg', 'jpeg', 'png');
    $target_dir = "../uploads/profile/";
    $image_name = $_FILES["pic"]["name"];
    $temp_image_name = explode(".", $image_name);
    $ext = end($temp_image_name);
    if(!file_exists($_FILES["pic"]["tmp_name"])){
        $errors['imageErr'] = "<div class ='alert bg-red'> Image not selected </div>";
    } else {
        if (!in_array($ext, $allowed_extensions)) {
            $errors['imageErr'] = "<div class ='alert bg-red'>Only jpg,jpeg,png images are allowed</div>";
            // print_r($errors);
        } else {
            if ($_FILES["pic"]["size"] > 1048576) {
                $errors['imageErr'] = "<div class ='alert bg-red'>file size too large</div>";
            } else {
                $image = uniqid("img_") . "." . $ext;
            }
        }
    }

    $password = mysqli_real_escape_string($conn,base64_encode($_POST['password']));
    $role = mysqli_real_escape_string($conn,$_POST['role']);
    $created_on = date('d-m-y h:i:s');
    $phoneArr = $_POST['phone'];
    $phone = implode(",",$phoneArr);


    $query = "INSERT INTO users(user_name,user_email,phone_no,user_role,user_image,user_password,user_created_on ) VALUES('$name','$email','$phone','$role','$image','$password','$created_on')";
    if(!array_filter($errors)){
        if (mysqli_query($conn, $query)) {
            if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_dir . $image)){
                echo "<div class ='alert bg-green'>User is registered successfully</div>";
            } else {
                echo "<div class ='alert bg-red'>Could not move the file</div>";
            }
        } else {
            echo "<div class ='alert bg-red'>User could not register due to</div> " . mysqli_errno($conn);
        }
    } else {
        foreach($errors as $error){
            echo $error.'<br>';
        }
    }

?>