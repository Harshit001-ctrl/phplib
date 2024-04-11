<?php require_once('dao.php');?>


<?php 

if(isset($_GET['subscribe'])){

    $table="subscriber";
    $data=array();

    $data['admission_id']=$_GET['admission_id'];
    $data['start_date']=$_GET['start_date'];
    $data['end_date']=$_GET['end_date'];
    $data['feereciveddate']=$_GET['feereciveddate'];
    $data['amount']=$_GET['amount'];


    if(insert($table,$data)){
        header("location:showadmission.php");
    }else{
        header("location:showadmission.php");
    }


}


?>