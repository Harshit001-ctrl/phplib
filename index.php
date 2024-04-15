<?php
session_start();
if (isset($_SESSION['people'])) {
?>


    <?php require_once("header.php"); ?>

    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <p>Welcome to the dashboard!</p>
        <p>Come For Your Child Future</p>
        <p>Your Chlid Future In Safe Hand</p>
        <div class="mb-3 row">
            <div class="col-2">
                <label for="review" class="form-label">Review <span class="required">*</span></label>
            </div>
            <div class="col-10">
                <textarea name="" id="review" required class="form-control"></textarea>
            </div>
        </div>
        <h1>Thanks For Chossing Us!</h1>
    </div>
    </div>

    <?php require_once("footer.php"); ?>
<?php
} else {
    header("location:login.php");
}
?>