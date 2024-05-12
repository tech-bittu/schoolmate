<?php
session_start();
require_once('./admin_navbar.php')
?>
<?php
define('serverName', 'localhost');
define('userName', 'root');
define('password', '');
define('database', 'schoolmate');

$connect = mysqli_connect(serverName, userName, password, database) or die("Databases is not connected");

$query = 'SELECT * FROM `admin`';
$data = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($data);



$rand_num ="ABCDEFGHIJKLMNOabcdefghijklmno1234567890PQRSTUVWXYZpqrstuvwxyz";
$rand_num = substr(str_shuffle($rand_num),0,6);

extract($_POST);
if (isset($_POST['submit'])) {
    if ($row['password'] == md5($password) && $email == $row['email']) {
        //set cookie
        if(isset($_POST['rememberMe'])){
            setcookie("aaddmmemail",$email,time()+60*5);
            setcookie('passwwoord',$password,time()+60*5);
           }

        $_SESSION['sAdminName'] = $row['name'];
        $_SESSION['captcha'] = $rand_num;
        header('location:registerData.php');
    } else {
        echo "<script>alert('Login with Correct Crendential !')</script>";
    }
}
?>
<link rel="stylesheet" href="../custom_css/login.css">

<div class="container-sm">
    <div class="row">
        <div class="col-sm text-center">
            <form action="" method="post" class=" login">
                <h2>LOG IN</h2>
                <input type="email" name="email" id="email" placeholder="Enter user name or email" onchange="cook()">
                <input type="password" name="password" id="password" placeholder="Enter password"></br>
                <input type="checkbox" name="rememberMe">Remember Me
                <button type="submit" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
function cook(){
    if("<?= $_COOKIE['aaddmmemail']; ?>" != null){
        if(document.getElementById('email').value =="<?= $_COOKIE['aaddmmemail'] ?>"){
             document.getElementById('password').value = "<?= $_COOKIE['passwwoord'] ?>";
        }
    }
}
</script>
<?php
include('../footer.php')
?>