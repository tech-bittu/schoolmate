<?php
error_reporting(1);
session_start();
include('./navbar.php');
?>
<style>
    form.login {
        margin: 45px auto;
        border: 5px solid rgba(51, 51, 51, 0.619);
        border-radius: 9px;
        height: 300px;
        background-color: rgba(51, 51, 51, 0.409);
        max-width: 540px;
    }

    form.login h2 {
        margin-top: 10px;
        font-size: 35px;
        text-shadow: 3px 3px 5px red;
        font-weight: 700;

    }

    form.login input:not(input[type="checkbox"]) {
        width: 90%;
        font-weight: 500;
        font-size: 1.5rem;
        padding: 7px 13px;
        margin: 11px auto;
        border: none;
        border-radius: 11px;
    }

    form.login button {
        background-color: rgba(0, 255, 255, 0.511);
        font-weight: 500;
        width: 30%;
        padding: 5px;
        font-size: 1.3rem;
        border-radius: 11px;
        margin-top: 11px;
        margin-bottom: 11px;
        margin-left: 11px;
    }

    form.login a:first-child {
        margin-right: 9px;
        border-right: 3px solid red;
        padding-right: 9px;
    }
</style>

<?php

include('db.php');
extract($_POST);
if (isset($_POST['submit'])) {
    $q = "SELECT * FROM `registration` WHERE `email` = '$email'";
    $data = mysqli_query($connect, $q);
    $row = mysqli_fetch_assoc($data);
    if ($row['password'] == md5($password) && $email == $row['email']) {
        if ($row['status'] == 0) {
            //set cookie
           if(isset($_POST['rememberMe'])){
            setcookie('email',$email,time()+60*5);
            setcookie('password',$password,time()+60*5);
           }

            $_SESSION['sname'] = $row['name'];
            $_SESSION['semail'] = $row['email'];
            echo "<script>alert('Login success'); location.href='profile.php' </script>";
        }
        echo "<script>alert('Account deactivate !')</script>";
    } else {
        echo "<script>alert('Email or Password invalid')</script>";
    }
}

?>
<div class="container-sm">
    <div class="row">
        <div class="col-sm text-center">
            <form action="" method="post" class=" login">
                <h2>LOG IN</h2>
                <input type="email" name="email" id="email" placeholder="Enter user name or email" onchange="cook()">
                <input type="password" name="password" id="password" placeholder="Enter password "></br>
                <input type="checkbox" name="rememberMe">Remember Me
                <button type="submit" name="submit">SUBMIT</button>
                <div><a href="register.php"><b><i>new users ? register here</i></b></a><a href="./admin/index.php"><b><i>Admin login</i></b></a></div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
function cook(){
    if("<?= $_COOKIE['email']; ?>" != null){
        if(document.getElementById('email').value =="<?= $_COOKIE['email'] ?>"){
             document.getElementById('password').value = "<?= $_COOKIE['password'] ?>";
        }
    }
}
</script>
<?php
include('./footer.php')
?>