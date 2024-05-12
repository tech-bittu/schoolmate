<?php
error_reporting(1);
session_start();
include("navbar.php");

?>
<?php
if ($_SESSION['sname'] == "" && $_SESSION['sAdminName'] == "") {
    header('location:login.php');
    exit;
}
include('db.php');
$getId = $_GET['id'];
$emailQ = "SELECT * FROM `registration` WHERE `id` = '$getId'";
$data = mysqli_query($connect, $emailQ);
$row = mysqli_fetch_assoc($data);



extract($_POST);
if (isset($_POST['submit'])) {
    $name = trim($fName);
    $emai = trim($email);
    $num = trim($number);
    $pin = trim($pincode);
    $pass = trim($pass);
    $image = $_FILES['img']['name'];



    if ($row['password'] == md5($pass)) {
        if ($image != "") {
            $q = "UPDATE `registration` SET `name`='$name',`number`='$num',`gender`='$gender',`image`='$image',`country`='$country',`pincode`='$pin' WHERE `id` = $getId";
            move_uploaded_file($_FILES['img']['tmp_name'], "upload/" . $image);
            mysqli_query($connect, $q);
        } else {
            $q = "UPDATE `registration` SET `name`='$name',`number`='$num',`gender`='$gender',`country`='$country',`pincode`='$pin' WHERE `id` = $getId";
            mysqli_query($connect, $q);
        }
        echo "<script> alert('Update Successful !'); </script>";
        if ($_SESSION['sname'] != "") {
            header("location:fetchuser.php");
        }
        if ($_SESSION['sAdminName'] != "") {
            header("location:admin/registerData.php");
        }
    } else {
        echo "<script> alert('Password not match Successful !'); 
            </script>";
    }
}


?>

<link rel="stylesheet" href="custom_css/contact.css" !important>
<div class="container-lg contact-page">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-12 form-container">
                    <form method="post" class="form-tag contact-form done" autocomplete="off" enctype="multipart/form-data">
                        <h3 class="text-center">Update <?php
                                                        echo $_SESSION['captcha'];
                                                        ?></h3>

                        <div class="row">
                            <div class="col-7">
                                <input type="text" name="fName" id="fName" value="<?= $row['name'] ?>">
                                <input type="email" name="email" id="email" readonly value="<?= $row['email'] ?>">
                                <input type="number" name="number" id="number" value="<?= $row['number'] ?>">
                            </div>
                            <div class="col-5 image-div justify-content-center">
                                <img src="upload/<?php echo $row['image'] ?>" id="img-show" class="img-fluid" height="75px" alt="Upload your Image">
                            </div>
                        </div>
                        <input type="text" name="gender" value="<?= $row['gender'] ?>">
                        <input type="file" size="100kb" name="img" id="img" onchange="imgChange()" />
                        <input type="text" name="country" value="<?= $row['country'] ?>">
                        <input type="number" name="pincode" id="pincode" value="<?= $row['pincode'] ?>">
                        <input type="password" name="pass" id="pass" placeholder="Password">
                        <div class="row">
                            <div class="col-5"><input type="text" name="captcha" id="captcha" placeholder="FIll the captcha ....."></div>
                            <div class="col-6"><input type="text" value="Captcha : &nbsp; &nbsp;" readonly><?php
                                                                                                            echo $_SESSION['captcha'];
                                                                                                            ?></div>
                        </div>

                        <div class="row d-flex justify-content-center sub">
                            <div class="col-4">
                                <input type="submit" value="Submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const fname = document.getElementById('fName');
    const email = document.getElementById('email');
    const number = document.getElementById('number');
    const pincode = document.getElementById('pincode');
    const img = document.getElementById('img');
    const pass = document.getElementById('pass');
    const cpass = document.getElementById('cpass');
    const form = document.querySelector("form.form-tag");

    const textRejex = /^([a-zA-Z]{3,})$/
    const numberRejex = /^[6-9][0-9]{9}$/
    const passRejex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,15}$/
    const pinRejex = /^\d{6,}$/

    const varExt = [".jpeg", ".png", ".jpg"];


    function imgChange() {
        console.log("work this");
        // console.log(img.value.files[0].pathinfo);
        return console.log(document.getElementById('img-show').setAttribute("src", `${img.value}`))
    }
    form.addEventListener("submit", (e) => {
        // e.preventDefault();
        let fnvalue = fname.value;
        let lnvalue = lname.value;
        let emailvalue = email.value;
        let numvalue = number.value;
        let pinvalue = pincode.value;
        let passvalue = pass.value;
        let cpassvalue = cpass.value;

        function borderred(element) {
            element.style.border = "2px solid red";
            element.focus();
            e.preventDefault();
        }

        function borderNone(element) {
            element.style.border = "none";
        }
    })
</script>
<?php echo include "captcha.php"; ?>
<?php
include("footer.php")
?>