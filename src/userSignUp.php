<?php
include "../Admin/config/connection.php";
// if (isset($_POST['submit1'])) {
$name = $email = $password = $role = '';

// print_r( $_POST['phone']); die;
$errors = array('nameErr' => '', 'emailErr' => '');
$name = mysqli_real_escape_string($conn, $_POST['username']);
if (!empty($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['nameErr'] = "<div class ='alert bg-red'>Please Enter Email in Correct format</div>";
    }
} else {
    $errors['emailErr'] = "<div class ='alert bg-red'>Email cannot be empty</div>";
}

$password = mysqli_real_escape_string($conn, base64_encode($_POST['password']));
$role = mysqli_real_escape_string($conn, $_POST['role']);
$created_on = date('d-m-y h:i:s');

$query = "INSERT INTO users(user_name,user_email,user_role,user_password,user_created_on) VALUES('$name','$email','$role','$password','$created_on')";
if (!array_filter($errors)) {
    if (mysqli_query($conn, $query)) {
        echo "<div class ='alert bg-green'>User is registered successfully</div>";
    } else {
        echo "<div class ='alert bg-red'>User could not register due to</div> " . mysqli_errno($conn);
    }
} else {
    foreach ($errors as $error) {
        echo $error . '<br>';
    }
}
