<?php
include 'Admin/config/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>SnapX Photography by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->
</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="SnapX Photography Template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li class="has-sub">
                                <a href="javascript:void(0)">Photos &amp; Videos</a>
                                <ul class="sub-menu">
                                    <li><a href="contests.php">Contests</a></li>
                                    <li><a href="contest-details.php">Single Contest</a></li>
                                </ul>
                            </li>
                            <li><a href="categories.php">Categories</a></li>
                            <?php if (isset($_SESSION['user']['name'])) : ?>
                                <li><a href="users.php"><?= "welcome, " . $_SESSION['user']['name'] ?></a></li>
                            <?php endif ?>
                        </ul>
                        <?php if (isset($_SESSION['user']['name'])) : ?>
                            <div class="border-button">
                                <a href="src/logout.php"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        <?php else : ?>
                            <div class="border-button">
                                <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                            </div>
                        <?php endif; ?>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>