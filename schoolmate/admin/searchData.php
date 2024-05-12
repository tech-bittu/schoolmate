<?php
include('../db.php');
$search = $_POST['search'];
$q = "SELECT * FROM `registration`";
$data = mysqli_query($connect, $q);
if ($search != "") {
    $i = 0;
    $q .= "WHERE id like '%$search%' or name like '%$search%' or email like '%$search%' or number like '%$search%' or status like '%$search%' or gender like '%$search%'";

    $data = mysqli_query($connect, $q);
    if (mysqli_num_rows($data) > 0) {
        $i = 0;
        while ($rowdata = mysqli_fetch_assoc($data)) {

            $i++;
?>
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
    }
 else {
    echo "<h5>Data not Found</h5>";
}
}
?>