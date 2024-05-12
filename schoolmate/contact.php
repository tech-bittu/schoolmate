<?php
include("navbar.php");
?>

<link rel="stylesheet" href="custom_css/contact.css">
<div class="container-lg contact-page">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-center">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-12 form-container">
          <form method="post" class="form-tag contact-form done" autocomplete="off">
            <h3 class="text-center">Contact Us</h3>

            <input type="text" name="name" id="name" placeholder="Name">
            <input type="email" name="email" id="email" placeholder="Email Address">
            <input type="number" name="number" id="number" placeholder="Mobile Number">
            <div class="gender">
              <label for="gender" id="gender">Gender : </label>
              <input type="radio" name="gender" id="" value="Male" checked> Male
              <input type="radio" name="gender" value="Female" id=""> Female
              <input type="radio" name="gender" value="other" id=""> Other
            </div>
            <input type="text" name="subject" id="subject" placeholder="Subject">
            <textarea name="textarea" placeholder="Your Message" id="message" cols="30" rows="5"></textarea>
            <div class="row d-flex justify-content-center sub">
              <div class="col-4">
                <input type="submit" value="Submit" name="submitMessage" class="submitMessage">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
define('serverName', 'localhost');
define('userName', 'root');
define('password', '');
define('database', 'schoolmate');

$connect = mysqli_connect(serverName, userName, password, database) or die("Databases is not connected");
?>

<script type="text/javascript">
  const form = document.querySelector("form.form-tag");
  const textRejex = /^([a-zA-Z]{3,})$/
  const numberRejex = /^[6-9][0-9]{9}$/
  const emailRejex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3,})$/
  form.addEventListener("submit", (e) => {
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const number = document.getElementById('number');
    const subject = document.getElementById('subject');
    const message = document.getElementById('message');

    function emptyTest(element, eValue, rejex) {
      return new Promise((resolve, reject) => {
        if (eValue != "" && (eValue.match(rejex) || rejex==true)) {
          element.style.border = "none";
          resolve();
        } else {
          element.focus();
          e.preventDefault();
          element.style.border = "2px solid red";
          alert(`${element.name} is empty`);
          reject("fill the box");
        }
      })
    }
    emptyTest(name, name.value, textRejex)
      .then(() => emptyTest(email, email.value, emailRejex))
      .then(() => emptyTest(number, number.value, numberRejex))
      .then(() => emptyTest(subject, subject.value, true))
      .then(() => emptyTest(message, message.value, true))
      .catch((error) => {
        console.log(error, "not found");
      })
  })
</script>
<?php
extract($_POST);
if (isset($_POST['submitMessage'])) {
  if(!empty($name) && !empty($email) && !empty($number) && !empty($subject) && !empty($textarea)){
  $q = "INSERT INTO `users`(`name`, `email`, `number`, `gender`, `subject`, `message`) VALUES ('$name','$email','$number','$gender','$subject','$textarea')";
  mysqli_query($connect, $q);
  echo "<script> alert('thank for your feedback') </script>";
}
else{
  echo "<script> alert('Something went wrong, try again !') </script>";

}
}
?>
<?php
include("footer.php")
?>