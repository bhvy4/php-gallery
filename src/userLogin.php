<?php
include "../Admin/config/connection.php";
// echo "test"; die;
$_SESSION['user'] = array();

$name = $password = '';

$errors = array('email' => '', 'password' => '');

$name = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// echo $name . $password; die;


if (!array_filter($errors)) {
    // echo 'test'; die;
    $query = "SELECT * FROM users WHERE user_name ='$name'";
    if(mysqli_query($conn, $query)){
        $result = mysqli_query($conn, $query);
        $users = mysqli_fetch_assoc($result);
        if (base64_encode($password) == $users['user_password']) {
            $_SESSION['user']['name'] = $users['user_name'];
            $_SESSION['user']['user_role'] = $users['user_role'];
            echo 'Login successfull';
            // header('Location: ../index.php');
        } else{
            echo 'user name doesnt exist or password not matching';
        }
        
    }else{
        echo 'User not registered';
    }

}
