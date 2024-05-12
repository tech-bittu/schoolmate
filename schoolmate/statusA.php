<?php
session_start();
include('db.php');
$getId = $_GET['id'];
$q = "UPDATE `registration` SET `status`='0' WHERE `id` = $getId";
mysqli_query($connect,$q);
if($_SESSION['sname']!=""){
    header("location:fetchuser.php");
}
if($_SESSION['sAdminName']!=""){
    header("location:admin/registerData.php");
}
?>