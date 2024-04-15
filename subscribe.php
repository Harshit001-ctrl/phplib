
<?php 
session_start();
if(isset($_SESSION['people'])){
?>
<?php require_once("dao.php");?>
<?php require_once("header.php");?>

<?php
if (isset($_GET['saved'])) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Enquiry has been added.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
} else if (isset($_GET['failed'])) {
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> Enquiry has not been added.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
}
?>
<?php 
if(isset($_GET['subscribed'])){
    $id=$_GET['subscribed'];
    $row=select_By_Id("student","admission_id","'$id'");


?>

<div class="container-fluid">
    <h1>Subscription</h1>
    <div class="container">
        <form action="subscribe_controller.php">

        <div class="mb-3 row">
            <div class="col-2"><label for="admission_id"class="form-label">Admission_id</label></div>
            <div class="col-5"><input type="text" name="admission_id"class="form-control"  id="" value="<?php echo $row['admission_id']?>" readonly></div>
        </div>

        

        <div class="mb-3 row">
            <div class="col-2"><label for="start_date"class="form-label">Start Date <span class="required" >*</span> </label></div>
            <div class="col-4"><input type="date" name="start_date"class="form-control"  id="" required ></div>
        </div>

        <div class="mb-3 row">
            <div class="col-2"><label for="end_date"class="form-label">End Date<span class="required" >*</span></label></div>
            <div class="col-4"><input type="date" name="end_date"class="form-control"  id="" required></div>
        </div>

        <div class="mb-3 row">
            <div class="col-2"><label for="feereciveddate"class="form-label">Fee Recived<span class="required" >*</span></label></div>
            <div class="col-4"><input type="date" name="feerecived"class="form-control"  id=""required ></div>
        </div>

        <div class="mb-3 row">
            <div class="col-2"><label for="amount"class="form-label">Amount<span class="required" >*</span></label></div>
            <div class="col-4"><input type="text" name="amount"class="form-control"  id="" required></div>
        </div>
        <div class="mb-3 row">
            <div class="col-2"><label for="status"class="form-label">Status<span class="required" >*</span></label></div>
            <div class="col-4">
                <select name="status" id="">
                    <option value="1">Active</option>
                    <option value="0">End</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="subscribe">Submit</button>
        </form>
    </div>
    <?php }?>
</div>

<?php
}else{
  header("location:login.php?error=please login first");
}
?>