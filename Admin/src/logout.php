<?php
require "../config/connection.php";
session_unset();
session_destroy();
header("Location:../sign-in.php");
?>