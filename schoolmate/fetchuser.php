<?php
error_reporting(1);
include('navbar.php');
session_start();
if ($_SESSION['sname'] == "") {
    header('location:login.php');
}
?>

<div class="xl-container">
    <div class="row">
        <div class="col-8 bg-success justify-center text-center">
            <h2>Welcome : <?= $_SESSION['sname'] ?></h2>
            <div class="row  d-flex">

                <?php
                include('db.php');
                $semailis = $_SESSION['semail'];
                $q = "SELECT * FROM `registration` WHERE `email` = '$semailis'";
                $data = mysqli_query($connect, $q);
                $i = 0;

                while ($rowdata = mysqli_fetch_assoc($data)) {

                    $i++;
                ?>
                    <h3>Id : <?php echo $rowdata['id']; ?></h3>
                    <div class="col-lg-7 col-12">
                        <h5>Name : <?= $rowdata['name'] ?> </h5>
                        <h5>email : <?= $rowdata['email'] ?> </h5>
                        <h5>Number : <?= $rowdata['number'] ?> </h5>
                        <h5>Gender : <?= $rowdata['gender'] ?> </h5>
                    </div>
                    <div class="col-lg-5 col-12"><img src="upload/<?php echo $rowdata['image']; ?>" alt="" width="50px" height="50px"></div>
                    <div class="col-lg-6 col-12">
                        <h5>Country : <?= $rowdata['country'] ?></h5>
                        <h5>pinCode : <?= $rowdata['pincode'] ?></h5>
                        <h5>Date Of Registration : <?= $rowdata['dateOfRegister'] ?> </h5>
                    </div>
                    <div class="col-lg-6 col-12">
                        <a href="status.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-danger">Delete Account</button></a> <a href="update.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-info">Update Account</button></a>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

<?php
include('footer.php')
?>