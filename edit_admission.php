<?php include_once('header.php'); ?>
<?php
if (isset($_GET['saved'])) {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success</strong> Admission add successfully
    </div>

<?php
} else if (isset($_GET['failed'])) {
?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error</strong> admission not add
    </div>
<?php
} ?>

<?php 
require_once('dao.php');

if(isset($_GET['edit'])){
    $update=$_GET['edit'];
    $row=select_By_id("enquiry","id",$update);


?>

<div class="contaier-fluid">
    <h1 class="mt-3">Admission</h1>
    <div class="container">
        <form class="" method="post" enctype="multipart/form-data" action="admission_controller.php">
            <div class="mb-3 row">
                <div class="col-2">
                    <label for="name" class="form-label">Name <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="text" name="name" id="" class="form-control" placeholder="name"  value="<?php echo $row['name'];?>" required>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="contact">Contact <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="number" name="contact" id="" class="form-control" placeholder="mobile no." required value="<?php echo $row['contact'];?>">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="email" name="email" id="" class="form-control" placeholder="123@gmail.com" required value="<?php echo $row['email'];?>">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="state">State <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="text" name="state" id="" class="form-control" placeholder="haryana" required value="<?php echo $row['state'];?>">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="city" class="form-label">City <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="text" name="city" id="" class="form-control" placeholder="city" required value="<?php echo $row['city'];?>">
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col-2">
                    <label for="aadharnumber" class="form-label">Aadhar Number <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="number" name="aadharnumber" id="" class="form-control" placeholder="1234-5678-1234" required value="<?php echo $row['aadharnumber'];?>">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="pin" class="form-label">Pin Code <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="number" name="pin" id="" class="form-control" placeholder="12345" required  value="<?php echo $row['pin'];?>" >
                </div>
            </div>

            <div class="mb-3 row">

                <div class="col-2">
                    <label for="study">Admission class <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <input type="number" name="study" id="" class="form-control" required  value="<?php echo $row['study'];?>">

                </div>



            </div>
            <div class="mb-3 row">

                <div class="col-5">
                    <label for="image" class="form-label">Choose Profile Image <span class="required">*</span></label>
                </div>
                <div class="col-5">
                    <input type="file" class="form-control" id="image" accept="image/*" name="profileimage"  value="<?php echo $row['image'];?>">

                </div>
                <img alt="" id="showimage" class="profile-image">


            </div>

            <div class="mb-3 row">

                <div class="col-5">
                    <label for="aadhaarfront" class="form-label">Choose aadhaar front Image <span class="required">*</span></label>
                </div>
                <div class="col-5">
                    <input type="file" class="form-control" id="aadhaarfront" accept="image/*" name="aadhaarfront"  value="<?php echo $row['aadharfront'];?>">

                </div>
                <img alt="" id="aadhaarfrontpreview" class="profile-image">


            </div>

            <div class="mb-3 row">

                <div class="col-5">
                    <label for="aadhaarback" class="form-label">Choose aadhaar back Image <span class="required">*</span></label>
                </div>
                <div class="col-5">
                    <input type="file" class="form-control" id="aadhaarback" accept="image/*" name="aadhaarback"  value="<?php echo $row['aadharback'];?>">

                </div>
                <img alt="" id="aadhaarbackpreview" class="profile-image">


            </div>


            <input type="hidden" name="edit" value="<?php echo $update;?>">
            <button class="btn btn-primary" name="update_admission">Submit</button>
        </form>

    </div>

</div>
</div>
<script>
    function showImage(image, showimage) {
        var fr = new FileReader();
        fr.onload = function(e) {
            showimage.src = this.result;
        };
        image.addEventListener("change", function() {
            fr.readAsDataURL(image.files[0]);
        });
    }

    var image = document.getElementById("image");
    var showimage = document.getElementById("showimage");
    showImage(image, showimage);

    var aadhaarfront = document.getElementById("aadhaarfront");
    var aadhaarfrontpreview = document.getElementById("aadhaarfrontpreview");
    showImage(aadhaarfront, aadhaarfrontpreview);

    var aadhaarback = document.getElementById("aadhaarback");
    var aadhaarbackpreview = document.getElementById("aadhaarbackpreview");
    showImage(aadhaarback, aadhaarbackpreview);
</script>

<?php }?>