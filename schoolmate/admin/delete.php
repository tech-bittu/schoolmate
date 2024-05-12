<?php
session_start();
include('../db.php');
$getId = $_GET['id'];
$messageId = $_SESSION['messageId'];
if ($_SESSION['messageId'] != "") {
    $q = "DELETE FROM `users` WHERE `id`= $messageId";
    mysqli_query($connect, $q);
    header("location:message.php");
} else {
    $q = "DELETE FROM `registration` WHERE `id`= $getId";
    mysqli_query($connect, $q);
    header("location:registerData.php");
}
