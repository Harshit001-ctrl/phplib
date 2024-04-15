
<?php 
session_start();
if(isset($_SESSION['people'])){
?>
<?php require_once('dao.php');?>
<?php require_once('header.php');?>

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
        <table class="table table-striped table-hover">

        <thead class="table table-dark">
            <tr>
            <th>Admission Id</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Fee recived Date</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>

        </thead>
        <tbody>
            <?php 
            
            $table="subscriber";
            $all_sub=$_GET['All_subscribed'];
            $row=selectByCondition($table,"admission_id='$all_sub'");

            for($i=0;$i<count($row);$i++){
            ?>
            <tr>
                <td><?php echo $row[$i]["admission_id"];?></td>
                <td><?php echo $row[$i]["start_date"];?></td>
                <td><?php echo $row[$i]["end_date"];?></td>
                <td><?php echo $row[$i]["feereciveddate"];?></td>
                <td><?php echo $row[$i]["amount"];?></td>
                <td><?php echo $row[$i]["status"];?></td>
            </tr>
            <?php }?>
        </tbody>

        </table>
    </div>
    
<?php
}else{
  header("location:login.php?error=please login first");
}
?>