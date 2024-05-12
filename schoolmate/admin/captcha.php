<?php
session_start();

$rand_num ="ABCDEFGHIJKLMNOabcdefghijklmno1234567890PQRSTUVWXYZpqrstuvwxyz";
$rand_num = substr(str_shuffle($rand_num),0,6);

echo $_SESSION['captcha']=$rand_num;

?>