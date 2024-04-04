<?php
require_once("header.php");
require_once("dao.php");
?>
<?php
if (isset($_GET['saved'])) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Enquiry has been updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
} else if (isset($_GET['failed'])) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> Enquiry has not updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>

<div class="table-responsive">

<table class="table table-hover table-striped">

<thead>
    <tr>
        <th>admission_id</th>
        <th>gsn</th>
        <th>name</th>
        <th>contact</th>
        <th>email</th>
        <!-- <th>state</th> -->
        <th>city</th>
        <!-- <th>aadhaarnumber</th> -->
        <!-- <th>pin</th> -->
        <!-- <th>study</th> -->
        <th>image</th>
        <th>aadhaarfront</th>
        <th>aadhaarback</th>
        <th>View</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>

<tbody>

<?php 
$table="student";
$rows=selectall($table);
for($i=0;$i<count($rows);$i++) {

?>

<tr>
    <td><?php echo $rows[$i]['admission_id'] ;?></td>
    <td><?php echo $rows[$i]['gsn'] ;?></td>
    <td><?php echo $rows[$i]['name']; ?></td>
    <td><?php echo $rows[$i]['contact']; ?></td>
    <td><?php echo $rows[$i]['email']; ?></td>
    <td><?php echo $rows[$i]['city']; ?></td>
    <td><img src="saved photo/<?php echo $rows[$i]["image"]; ?>" alt="" width="100px"></td>
    <td><img src="saved photo/<?php echo $rows[$i]["aadhaarfront"]; ?>" alt="" width="100px"></td>
    <td><img src="saved photo/<?php echo $rows[$i]["aadhaarback"]; ?>" alt="" width="100px"></td>


    <td><a href="viewprofile.php?view=<?php echo $rows[$i]['admission_id'];?>" class="btn btn-primary " >View</a></td>
    <td><a href="edit_admission.php?edit=<?php echo $rows[$i]['admission_id'];?>" class="btn btn-warning " >Edit</a></td>
    <td><a href="admission_controller.php?deleteAdm=<?php echo $rows[$i]['admission_id'];?>" class="btn btn-danger" >Delete</a></td>


</tr>
<?php
 }
?>
</tbody>
</table>
</div>