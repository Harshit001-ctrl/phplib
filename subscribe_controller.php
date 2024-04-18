<?php
require_once ("dao.php");
if (isset($_GET['subscribe'])) {
    // $data



    $table = "subscriber";
    $data = array();
    $data['admission_id'] = $name = $_GET['admission_id'];
    $data['start_date'] = $mobile = $_GET['startdate'];
    $data['end_date'] = $email = $_GET['enddate'];
    $data['feereceiveddate'] = $email = $_GET['feereceiveddate'];
    $data['amount'] = $email = $_GET['amount'];
    $data['status'] = $email = $_GET['status'];

    if (insert($table, $data)) {

        $data_seat = array();
        $seatid = $_GET['seatid'];
        $data_seat['admission_id'] = $_GET['admission_id'];

        if (update("seats", $data_seat, "seatid=$seatid")) {
            echo "Seat Reserved";
            header("location:showadmission.php?saved='Seat Alloted'");
        } else {
            echo "Seat Reserved Error";
            header("location:showadmission.php?failed='Error'");
        }
    } else {
        header("location:showadmission.php?failed='Error'");
    }
}
?>