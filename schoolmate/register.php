<?php
include("navbar.php");
?>
<?php
include('db.php');
extract($_POST);
if (isset($_POST['submit'])) {
    $name = trim($fName) . " " . trim($lName);
    $emai = trim($email);
    $num = trim($number);
    $pin = trim($pincode);
    $pass = trim(md5($pass));
    $image = rand(1, 999) . $_FILES['img']['name'];

    $emailQ = "SELECT * FROM `registration` WHERE `email` = '$emai'";
    $data = mysqli_query($connect, $emailQ);
    $result = mysqli_num_rows($data);

    if (mysqli_num_rows($data) > 0) {
        echo "<script> alert('Already Register!')                                         
        location.href='login.php';
            </script>";
    } else {

        if (!empty($name) && !empty($emai) && !empty($num) && !empty($pin) && !empty($pass) && !empty($_FILES['img']['name'])) {
            $q = "INSERT INTO `registration`(`name`, `email`, `number`, `gender`,`image`, `country`, `pincode`, `password`) VALUES ('$name','$emai','$num','$gender','$image','$country','$pin','$pass')";
            mysqli_query($connect, $q);
            move_uploaded_file($_FILES['img']['tmp_name'], "upload/" . $image);
            echo "<script> alert('Registration Successful !'); 
            location.href='login.php'; </script>";
        }
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
                        <h3 class="text-center">Register</h3>

                        <input type="text" name="fName" id="fName" placeholder="First Name">
                        <input type="text" name="lName" id="lName" placeholder="Last Name">
                        <input type="email" name="email" id="email" placeholder="Email Address">
                        <input type="number" name="number" id="number" placeholder="Mobile Number">
                        <div class="gender">
                            <label for="gender" id="gender">Gender : </label>
                            <input type="radio" name="gender" value="Male" checked> Male
                            <input type="radio" name="gender" value="Female"> Female
                        </div>
                        <input type="file" size="100kb" name="img" id="img" placeholder="Upload image">
                        <div class="country-div">
                            <label for="country">country :</label>
                            <select name="country" id="country">
                                <option value="India">India</option>
                                <option value="Usa">Usa</option>
                                <option value="UEA">UEA</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <input type="number" name="pincode" id="pincode" placeholder="Pin Code">
                        <input type="password" name="pass" id="pass" placeholder="Password">
                        <input type="password" name="cpass" id="cpass" placeholder="Conform Password">
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
    const lname = document.getElementById('lName');
    const email = document.getElementById('email');
    const number = document.getElementById('number');
    const pincode = document.getElementById('pincode');
    const img = document.getElementById('img');
    const pass = document.getElementById('pass');
    const cpass = document.getElementById('cpass');
    const form = document.querySelector("form.form-tag");

    const textRejex = /^([a-zA-Z]{3,})$/
    const numberRejex = /^[6-9][0-9]{9}$/
    const emailRejex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3,})$/
    const passRejex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,15}$/
    const pinRejex = /^\d{6,}$/

    const varExt = [".jpeg", ".png", ".jpg"];

    form.addEventListener("submit", (e) => {
        // e.preventDefault();  //for testing
        let fnvalue = fname.value;
        let lnvalue = lname.value;
        let emailvalue = email.value;
        let numvalue = number.value;
        let pinvalue = pincode.value;
        let imgValue = img.value;
        let passvalue = pass.value;
        let cpassvalue = cpass.value;

        const imgRejex = varExt.includes(imgValue.substring(imgValue.lastIndexOf('.'))) && (img.files[0].size / 1024) <= 250 && (img.files[0].size / 1024) >= 50;

        // console.log(imgValue, imgRejex, (img.files[0].size / 1024))

        function borderred(element) {
            element.focus();
            element.style.border = "2px solid red";
            e.preventDefault();
        }

        function borderNone(element) {
            element.style.border = "none";
        }


        function elementTest(element, elementValue, RejexText) {
            return new Promise((resolve, reject) => {

                if (elementValue != "" && (elementValue.match(RejexText) || RejexText == true)) {
                    borderNone(element);
                    console.log("hello")
                    resolve();
                } else {
                    borderred(element)
                    if (element == img) {
                        alert(`fill the box ${element.name} . and image must between 50 to 250 kb and jpg/jpeg/png format.`)
                    } else {
                        alert(`fill the box ${element.name}`)
                    }
                    reject("Fill the REd Box");
                }
            })
        }
        elementTest(fname, fnvalue, textRejex)
            .then(() => elementTest(lname, lnvalue, textRejex))
            .then(() => elementTest(email, emailvalue, emailRejex))
            .then(() => elementTest(number, numvalue, numberRejex))
            .then(() => elementTest(img, imgValue, imgRejex))
            .then(() => elementTest(pincode, pinvalue, pinRejex))
            .then(() => elementTest(pass, passvalue, passRejex))
            .then(() => elementTest(cpass, cpassvalue, passRejex))
            .catch((error) => {
                console.log(error, " not found")
            })

    })
</script>

<?php
include("footer.php")
?>


  