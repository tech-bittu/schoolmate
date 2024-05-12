<?php
define('serverName', 'localhost');
define('userName', 'root');
define('password', '');
define('database', 'schoolmate');

$connect = mysqli_connect(serverName, userName, password, database) or die("Databases is not connected");
?>