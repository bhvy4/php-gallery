<?php 
include "config/connection.php";
if(isset($_SESSION['admin']['user_name'])){
    $email = base64_decode($_SESSION['admin']['user_name']);
    $query = 'SELECT * FROM users where user_email = "$email"';

    $result = mysqli_query($conn,$query);
    if($result){
        $user_data = mysqli_fetch_assoc($result);
    }
} else{
    header('location: sign-in.php');
}
?>

<?php include 'inc/head.php' ?>

<!-- Page Loader -->
<?php include 'inc/page-loader.php' ?>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<?php include 'inc/search-bar.php' ?>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<?php include 'inc/navbar.php' ?>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <?php include 'inc/left-sidebar.php' ?>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <?php include 'inc/right-sidebar.php' ?>
    <!-- #END# Right Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        
        </div>
    </div>
</section>

<?php include 'inc/foot.php' ?>