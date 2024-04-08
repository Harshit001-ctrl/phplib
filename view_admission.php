<?php require_once("dao.php"); ?>
<?php require_once("header.php"); ?>

<?php

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $row = select_By_Id("student", "admission_id", "'$id'");
}
?>


<div class="contaier-fluid">
    <h1 class="mt-3">Admission</h1>
    <div class="container">
        <form class="" method="post" enctype="multipart/form-data" action="admission_controller.php">



            <div class="mb-3 row ">
                <div class="col-2">
                    <label for="name" class="form-label">Admission Id <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['admission_id']; ?></label>
                    <input type="hidden" name="admission_id" value="<?php echo $row['admission_id']; ?>">
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col-2">
                    <label for="name" class="form-label">Name <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['name']; ?></label>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="contact">Contact <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['contact']; ?></label>

                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="email" class="form-label">Email <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['email']; ?></label>

                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="state">State <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['state']; ?></label>

                </div>
            </div>  

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="city" class="form-label">City <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['city']; ?></label>
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col-2">
                    <label for="aadharnumber" class="form-label">Aadhar Number <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['aadharnumber']; ?></label>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-2">
                    <label for="pin" class="form-label">Pin Code <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['pin']; ?></label>
                </div>
            </div>

            <div class="mb-3 row">

                <div class="col-2">
                    <label for="study">Admission class <span class="required">*</span></label>
                </div>
                <div class="col-10">
                    <label for="name" class="form-label"><?php echo $row['study']; ?></label>

                </div>



            </div>
            <div class="mb-3 row">

                <div class="col-5">
                    <label for="image" class="form-label">Choose Profile Image <span class="required">*</span></label>
                </div>
                <div class="col-5">
                    <img alt="" id="showimage" src="<?php echo "saved photo/" . $row['image'] ?>" class="profile-image">

                </div>


            </div>

            <div class="mb-3 row">

                <div class="col-5">
                    <label for="aadhaarfront" class="form-label">Choose aadhaar front Image <span class="required">*</span></label>
                </div>
                <div class="col-5">
                    <img alt="" id="aadhaarfrontpreview" class="profile-image" src="<?php echo "saved photo/" . $row['aadhaarfront']; ?>">

                </div>


            </div>

            <div class="mb-3 row">

                <div class="col-5">
                    <label for="aadhaarfront" class="form-label">Choose aadhaar back Image <span class="required">*</span></label>
                </div>
                <div class="col-5">
                    <img alt="" id="aadhaarfrontpreview" class="profile-image" src="<?php echo "saved photo/" . $row['aadhaarback']; ?>">

                </div>


            </div>



            <a href="edit_admission.php?edit=<?php echo $id; ?>" class="btn btn-warning ">Edit</a>
    </div>

</div>