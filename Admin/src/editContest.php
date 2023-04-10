<?php
require "../config/connection.php";
// print_r($_POST); 
if (isset($_POST['formType'])) {
    $formType = $_POST['formType'];
    if ($formType == 'update1') {
        // echo 'inside first update'; die;
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        // echo $name; die;
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $prize = mysqli_real_escape_string($conn, $_POST['prize']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $winner = mysqli_real_escape_string($conn, $_POST['winner']);
        $details = mysqli_real_escape_string($conn, $_POST['details']);
        // echo $winner; die;
        $sql = "UPDATE contests SET contest_name = '$name', contest_category = '$category' , contest_deadline = '$deadline', contest_author = '$author', contest_prize = '$prize' ,contest_winner = '$winner', contest_details = '$details' WHERE contest_id ='$id'";

        if (mysqli_query($conn, $sql)) {
            echo 'success';
        } else {
            echo 'failed';
        }
        mysqli_close($conn);
    } else if ($formType == 'update2') {
        $errors = array('name' => '', 'deadline' => '', 'details' => '', 'image' => '');
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        // echo $name; die;
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $prize = mysqli_real_escape_string($conn, $_POST['prize']);
        $winner = mysqli_real_escape_string($conn, $_POST['winner']);
        $details = mysqli_real_escape_string($conn, $_POST['details']);

        $allowed_extensions = array(
            'jpeg',
            'jpg',
            'png'
        );

        $image_name = $_FILES['contest-image']['name'];
        $extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $target_dir = '../uploads/contest_profile_images/';

        if (!file_exists($_FILES['contest-image']['tmp_name'])) {
            $sqlImg = "SELECT contest_image FROM contests WHERE contest_id = '$id'";
            $result = mysqli_query($conn, $sqlImg);
            $contest_img = mysqli_fetch_assoc($result);
            $image = $contest_img['contest_image'];
        } else if (!in_array($extension, $allowed_extensions)) {
            $errors['image'] = "Only JPG and PNG files allowed";
        } else if ($_FILES['contest-image']['size'] > 2000000) {
            echo $_FILES['contest-image']['size'];
            die;
            $errors['image'] = 'Image size exceeds 2MB, image should be less than 2MB';
        }
        // echo $winner; die;

        if (!array_filter($errors)) {
            $image = uniqid('img_') . '.' . $extension;
            if (move_uploaded_file($_FILES['contest-image']['tmp_name'], $target_dir . $image)) {
                $sql = "UPDATE contests SET contest_name = '$name', contest_category = '$category' ,contest_deadline = '$deadline', contest_author = '$author', contest_prize = '$prize' ,contest_winner = '$winner', contest_details = '$details', contest_image = '$image' WHERE contest_id ='$id'";
                if (mysqli_query($conn, $sql)) echo '<div class = "alert alert-success">Record inserted successfully!</div>';
            } else {
                echo 'Problem in uploading image';
            }
        } else {
            foreach ($errors as $error) {
                echo "<div class = 'alert alert-danger'>$error</div>";
            }
        }
        mysqli_close($conn);

    }
} else {
    echo 'no formtype1';
}

mysqli_close($conn);
