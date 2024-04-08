<?php 
    require_once('dao.php');
if(isset($_GET['enquirysave'])){

    $table="enquiry";
    $data=array();

    $data['name']= $_GET['name'];
    $data['mobileno']=$_GET['mobile'];
    $data['city']=$_GET['city'];
    $data['state']=$_GET['state'];
    $data['gmail']=$_GET['gmail'];
    $data['review']=$_GET['review'];

    if(insert($table,$data)){
        header("location:enquiry.php?saved='success'");
    }else{
        header("location:enquiry.php?failed='error'");

    }
}

if(isset($_GET['update'])){
    $table="enquiry";
    $data=array();

    $data['name']= $_GET['name'];
    $data['mobileno']=$_GET['mobile'];
    $data['city']=$_GET['city'];
    $data['state']=$_GET['state'];
    $data['gmail']=$_GET['gmail'];
    $data['review']=$_GET['review'];
    
    $id=$_GET['edits'];

    if(update($table,$data,"id=$id")){
        header("location:showenquiry.php?saved='success'");
    }else{
        header("location:showenquiry.php?failed='error'");

    }
}

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        if(deleteRecord("enquiry","id=$id")){
            header("location:showenquiry.php?saved='success'");
        }else{
            header("location:showenquiry.php?failed='error'");

        }
    }



?>