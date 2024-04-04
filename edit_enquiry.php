<?php require_once('header.php')?>
<?php 

if(isset($_GET['saved'])){
    ?>
    <div class="alert alert-success alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success</strong> Enquiry add successfully
</div>

<?php
}else if(isset($_GET['failed'])){
    ?>
    <div class="alert alert-danger alert-dismissible">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Error</strong> Enquiry not add
</div>
<?php
}?>



<?php 
require_once('dao.php');

if(isset($_GET['edit'])){
    $update=$_GET['edit'];
    $row=select_by_id("enquiry","id",$update);


?>
<div class="container-fluid">
    <h1 class="mt-3">Enquiry</h1>
    <div class="container">
        <form action="enquiry_controller.php">


           
            <div class="mb-3 row">
                <div class="col-2">
                    <label for="name">Name <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="text" name="name" class="form-control" id="" placeholder="Your Name" value="<?php echo $row['name'];?>" required >
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="mobile" class="form-label">Mobile  <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="tel" name="mobile" id="" class="form-control" placeholder="Mobile" value="<?php echo $row['mobileno'];?>" required >
                </div>
            </div>

            <div class="mb-3 row ">
                <div class="col-2"><label for="City" class="form-label">City <span class="required">*</span></label></div>
                <div class="col-10"><input type="text" name="city" id="" class="form-control" value="<?php echo $row['city'];?>" required placeholder="city"></div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="state" class="form-label">State <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="text" name="state" id="" class="form-control" value="<?php echo $row['state'];?>" placeholder="state">
                </div>
            </div>

            <div class="mb-3 row ">
                <div class="col-2">
                    <label for="gmail" class="form-label">Gmail <span class="required">*</span></label>
                </div>
                <div class="col-10">
                <input type="email" name="gmail" id="" class="form-control"value="<?php echo $row['gmail'];?>" required>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="review" class="form-label">Review <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <textarea name="review" id="" cols="30" rows="10" placeholder="comments" class="form-control" value="<?php echo $row['review'];?>"></textarea>
                </div>
            </div>
            <input type="hidden" name="edit" value="<?php echo $update;?>">
            <button class="btn btn-primary" name="update">Submit</button>
    </div>
    </form>

</div>
<?php }?>