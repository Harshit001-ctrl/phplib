<?php include_once('header.php'); ?>

<?php
if (isset($_GET['saved'])) {
?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Success</strong> Admission Done
    </div>

<?php
} else if (isset($_GET['failed'])) {
?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Error</strong> Admission not Updated
    </div>
<?php
} ?>

<?php 
require_once("dao.php");

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $row=select_By_Id("student","admission_id","'$id'");
}


?>
<div class="container-fluid">
    <h1>ADMISSION</h1>
    <div class="container">

        <table class="table table-hover table-striped">
            <form action="admission_controller.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                        <div class="col-3">
                            <label for="name" class="form-label">Admission Id <span class="required">*</span></label>
                        </div>
                        <div class="col-9">
                            <label for="name" class="form-label"><?php echo $row['admission_id']; ?></label>
                            <input type="hidden" name="admission_id" value="<?php echo $row['admission_id']; ?>">
                        </div>
                    </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="name" class="form-label">Name<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="name" class="form-control" id="" value="<?php echo $row['name'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="contact" class="form-label">Mobile<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="contact" class="form-control" id="" value="<?php echo $row['contact'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="email" class="form-label">Gmail<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="email" class="form-control" id=""value="<?php echo $row['email'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="state" class="form-label">State<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="state" class="form-control" id=""value="<?php echo $row['state'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="city" class="form-label">City<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="city" class="form-control" id=""value="<?php echo $row['city'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="aadharnumber" class="form-label">Pincode<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="aadharnumber" class="form-control" id=""value="<?php echo $row['aadharnumber'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="pin" class="form-label">Pincode<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="pin" class="form-control" id=""value="<?php echo $row['pin'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-2">
                        <label for="study" class="form-label">Pincode<span class="required">*</span></label>
                    </div>
                    <div class="col-7">
                        <input type="number" name="study" class="form-control" id=""value="<?php echo $row['study'];?>"required>
                    </div>
                </div>

                <div class="mb-3 row">

                    <div class="col-5">
                        <label for="image" class="form-label">Choose Profile Image <span class="required">*</span></label>
                    </div>
                    <div class="col-5">
                        <input type="file" class="form-control" id="image" accept="image/*" name="image">

                    </div>
                    <img alt="" id="showimage" class="profile-image"src="saved photo/<?php echo $row['image']; ?>">


                </div>

                <div class="mb-3 row">

                    <div class="col-5">
                        <label for="aadhaarfront" class="form-label">Choose aadhaar front Image <span class="required">*</span></label>
                    </div>
                    <div class="col-5">
                        <input type="file" class="form-control" id="aadhaarfront" accept="image/*" name="aadhaarfront">

                    </div>
                    <img alt="" id="aadhaarfrontpreview" class="profile-image" src="saved photo/<?php echo $row['aadhaarfront']; ?>">


                </div>

                <div class="mb-3 row">

                    <div class="col-5">
                        <label for="aadhaarback" class="form-label">Choose aadhaar back Image <span class="required">*</span></label>
                    </div>
                    <div class="col-5">
                        <input type="file" class="form-control" id="aadhaarback" accept="image/*" name="aadhaarback">

                    </div>
                    <img alt="" id="aadhaarbackpreview" class="profile-image"src="saved photo/<?php echo $row['aadhaarback']; ?>">

                </div>
                <button type="submit" class="btn btn-primary" name="edit_admission" >Submit</button>
            </form>
        </table>
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