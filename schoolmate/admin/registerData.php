<?php
error_reporting(1);
session_start();
include('./admin_navbar.php');
if ($_SESSION['sAdminName'] == "") {
    header('location:index.php');
}
?>

<style>
    h2 {
        border-radius: 9px;
    }

    h2 b {
        width: 40%;
        margin-right: 15px;
    }

    h2 input {
        width: 60%;
        padding-left: 21px;
    }
</style>

<div class="">
    <div class="row">
        <div class="col-12">
            <h2><b>Search : </b><input type="text" name="search" id="search" placeholder="Search......" onkeyup="searchdata()"><button class="btn btn-primary" type="search" onclick="re()">Refresh</button></h2>
            <h4 class="text-center" id="headingIs"> All Register Data </h4>
            <table class="table table-striped">
                <thead>
                    
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Id</th>
                    <th scope="col">image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Country</th>
                    <th scope="col">pincode</th>
                    <th scope="col">status</th>
                    <th scope="col">Date of Reg.</th>
                    <th scope="col">Action</th>
                </thead>
                <span><tbody  id="search_table"></tbody></span>
                <tbody  id="dataIs">

                    <?php
                    include('../db.php');
                    // $semailis=$_SESSION['semail'];
                    $q = "SELECT * FROM `registration`";
                    $data = mysqli_query($connect, $q);
                    while ($rowdata = mysqli_fetch_assoc($data)) {

                        $i++;
                    ?>
                            
                        <tr>
                            <td scope="row"> <?php echo $i; ?> </td>
                            <td colspan=""><?php echo $rowdata['id']; ?></td>
                            <td><img src="../upload/<?php echo $rowdata['image']; ?>" alt="" width="50px" height="50px"></td>
                            <td><?= $rowdata['name'] ?></td>
                            <td><?= $rowdata['email'] ?></td>
                            <td><?= $rowdata['number'] ?></td>
                            <td><?= $rowdata['gender'] ?></td>
                            <td><?= $rowdata['country'] ?></td>
                            <td><?= $rowdata['pincode'] ?></td>
                            <td><?= $rowdata['status'] ?></td>
                            <td><?= $rowdata['dateOfRegister'] ?></td>
                            <td><a href="../statusA.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-primary">Activate</button></a>
                                <a href="delete.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-danger">delete</button></a> <a href="../status.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-info">DeActivate</button></a> <a href="../update.php?id=<?php echo $rowdata['id']; ?>"><button class="btn btn-success">Update</button></a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script defer>
    function re(){
       this.refresh();
    }
    function searchdata() {
       document.getElementById('dataIs').style.display = "none";
       document.getElementById('headingIs').innerText = "Search Data";
    
        var se = $('#search').val();
        $.ajax({
            type: 'post',
            url: 'searchData.php',
            data: {
                search: se
            },
            success: function(da) {
                $('#search_table').html(da);
            }
        })
    }
</script>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php
include('footer.php')
?>