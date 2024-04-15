
<?php 
session_start();
if(isset($_SESSION['people'])){
?>
<?php require_once('dao.php'); ?>
<?php require_once('header.php'); ?>

<div class="table-responsive ">

    <table class="table table-hover table-striped ">

       <thead class="table table-dark">
        <tr> 
            <td>Admission Id</td>
            <td>Start Date</td>
            <td>End Date</td>
            <td>Fee Recived Date</td>
            <td>Amount</td>
            <td>Status</td>
        </tr>
       </thead>

       <tbody>
        <?php 
        $table="subscriber";
        $row=selectByCondition($table,"status=1");
        for($i=0;$i<count($row);$i++){
        ?>

        <tr>
            <td><?php echo $row[$i]['admission_id']?></td>
            <td><?php echo $row[$i]['start_date']?></td>
            <td><?php echo $row[$i]['end_date']?></td>
            <td><?php echo $row[$i]['feereciveddate']?></td>
            <td><?php echo $row[$i]['amount']?></td>
            <td><?php echo $row[$i]['status']?></td>
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