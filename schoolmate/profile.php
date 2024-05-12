<?php
error_reporting(1);
include('navbar.php');
session_start();
if ($_SESSION['sname'] == "") {
    header('location:login.php');
}
?>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        /* background-color: #0c104c; */
    }

    .box {
        position: relative;
        background-color: #000;
        width: 35%;
        height: 45%;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        border-radius: 3%;
    }

    .box::after {
        content: '';
        width: 700px;
        height: 600px;
        position: absolute;
        background-image: conic-gradient(transparent, transparent, transparent, rgb(7, 246, 111));
        animation: animate 4s linear infinite;
        animation-delay: -2s;
    }

    .box::before {
        content: '';
        width: 560px;
        height: 600px;
        position: absolute;
        background-image: conic-gradient(transparent, transparent, transparent, rgb(240, 9, 9));
        animation: animate 4s linear infinite;
    }

    @keyframes animate {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .box img {
        width: 100%;
        height: 96%;
        z-index: 2;
        border-radius: 3%;
        inset: 10px;
    }
</style>
<div class="xl-container ">
    <div class="row  d-flex justify-content-center">
        <div class="col-8">
            <h2 class=" text-center">Profile</h2>
            <div class="row ">

                <?php
                include('db.php');
                $semailis = $_SESSION['semail'];
                $q = "SELECT * FROM `registration` WHERE `email` = '$semailis'";
                $data = mysqli_query($connect, $q);
                $i = 0;

                while ($rowdata = mysqli_fetch_assoc($data)) {

                    $i++;
                ?>
                    <div class="row justify-center">
                        <div class="about-content padd-15 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h2></h2>
                                </div>
                                <div class="box padd-15 col-lg-6 col-md-6 col-sm-12">
                                    <img src="upload/<?php echo $rowdata['image']; ?>" alt="" srcset="">
                                </div>
                                <div class="personal-info padd-15 col-lg-6 col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p>ID : <span><?php echo $rowdata['id']; ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Name : <span><?= $rowdata['name'] ?> </span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Email : <span><?= $rowdata['email'] ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Number : <span><?= $rowdata['number'] ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Gender : <span><?= $rowdata['gender'] ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Country : <span><?= $rowdata['country'] ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Pin code : <span><?= $rowdata['pincode'] ?></span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p>Date Of Registration :<span> <?= $rowdata['dateOfRegister'] ?></span></p>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="buttons padd-15">
                                                <a href="update.php?id=<?php echo $rowdata['id']; ?>" class="btn btn-primary">Edit</a>
                                                <a href="status.php?id=<?php echo $rowdata['id']; ?>" class="btn btn-danger">Delete Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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