<?php require_once('dao.php'); ?>
<?php require_once('header.php'); ?>
<?php 

if(isset($_GET['saved'])){
    ?>
    <div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success</strong> Enquiry Updated
</div>

<?php
}else if(isset($_GET['failed'])){
    ?>
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Error</strong> Enquiry not Updated
</div>
<?php
}?>

<div class="table-responsive ">

    <table class="table table-striped table-hover">
        <thead>
            <tr class="table table-dark ">

                <th>Name</th>
                <th>Mobile</th>
                <th>City</th>
                <th>State</th>
                <th>Gmail</th>
                <th>Review</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $table = "enquiry";
            $rows=selectall($table);

            for($i=0;$i<count($rows);$i++){
            ?>
            <tr>
                <td><?php echo $rows[$i]['name'];?></td>
                <td><?php echo $rows[$i]['mobileno'];?></td>
                <td><?php echo $rows[$i]['city'];?></td>
                <td><?php echo $rows[$i]['state'];?></td>
                <td><?php echo $rows[$i]['gmail'];?></td>
                <td><?php echo $rows[$i]['review'];?></td>
                <td><a href="edit_enquiry.php?edit=<?php echo $rows[$i]['id'];?>" class="btn btn-primary " >Edit</a></td>
                <td><a href="enquiry_controller.php?delete=<?php echo $rows[$i]['id'];?>" class="btn btn-danger" >Delete</a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>


</div>

<?php require_once('footer.php');?>