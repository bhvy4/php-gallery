<?php
include "../config/connection.php";

$_SESSION['admin'] = array();

$email = $password = '';

$errors = array('email' => '', 'password' => '');

$email = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// echo $email . $password;

if (!filter_var($email)) {
    $errors['email'] = 'Email Invalid';
}

if (!array_filter($errors)) {
    $query = "SELECT * FROM users WHERE user_email ='$email'";
    if(mysqli_query($conn, $query)){
        $result = mysqli_query($conn, $query);
        $users = mysqli_fetch_assoc($result);
        if (base64_encode($password) == $users['user_password']) {
            $_SESSION['admin']['name'] = $users['user_name'];
            $_SESSION['admin']['user_name'] = base64_encode($users['user_email']);
            $_SESSION['admin']['user_role'] = $users['user_role'];
            echo 'Login successfull';
            // header('location: ../index.php');
        } else{
            echo 'user name doesnt exist or password not matching';
        }
        
    }else{
        echo 'User not registered';
    }

}
