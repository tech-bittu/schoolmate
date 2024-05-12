<?php
session_start();
include_once('./admin_navbar.php');
if ($_SESSION['sAdminName'] == "") {
    header('location:../login.php');
}
?>
<link rel="stylesheet" href="./stylemessage.css">


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Contact Message</h5>
        <div class="row">
            <?php
            include('../db.php');
            $q = "SELECT * FROM `users`";
            $data = mysqli_query($connect, $q);
            $i = 0;

            while ($rowdata = mysqli_fetch_assoc($data)) {

                $i++;
                $_SESSION['messageId'] = $rowdata['id'];
            ?>
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip">
                        <div class="mainflip flip-0">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p>Sr.No. <b><?php echo $i; ?>&nbsp;&nbsp;</b>  Id : <b class="text-primary"><?php echo $rowdata['id']; ?></b></p>
                                        <h4 class="card-title"><?= $rowdata['name'] ?></h4>  
                                        <h6><?= $rowdata['email'] ?> </h6>
                                        <p>Mobile No. : <?= $rowdata['number'] ?></p>
                                        <p>Subject : <b><?= $rowdata['subject'] ?></b></p>
                                        <p><i> <?= $rowdata['dor'] ?></i></p>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title"><i>Subject : </i> <?= $rowdata['subject'] ?></h4>
                                         <p class="card-text"><i>Message : </i> <?= $rowdata['message'] ?></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                            <button class="btn btn-info"><<<<<</button>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="delete.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-danger">  delete  </button></a>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                          <button class="btn btn-info">>>>>></button></a>
                                               
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- Team -->

<?php
include('../footer.php');
?>