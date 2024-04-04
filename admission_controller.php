<?php include_once('dao.php'); ?>
<?php

if (isset($_POST['admission'])) {
    $gsn=selectbygsn("select max(gsn) as serial from student");
    
    $length=4-strlen($gsn."");
    $repeat=str_repeat("0",$length).$gsn;

    $admission_id=strtolower(substr($_POST['name'],0,3)).$_POST['pin'].$repeat;
    
    $table = "student";
    $data = array();

    $data["admission_id"]=$admission_id;
    $data['gsn']=$gsn;

    $data['name'] = $_POST['name'];
    $data['contact'] = $_POST['contact'];
    $data['email'] = $_POST['email'];
    $data['state'] = $_POST['state'];
    $data['city'] = $_POST['city'];
    $data['aadharnumber'] = $_POST['aadharnumber'];
    $data['pin'] = $_POST['pin'];
    $data['study'] = $_POST['study'];

    $data['image']=imageupload($_FILES['profileimage'], $admission_id);
    $data['aadhaarfront']=imageupload(($_FILES["aadhaarfront"]),"aadhaarfront".$admission_id);
    $data['aadhaarback']=imageupload(($_FILES["aadhaarback"]),"aadhaarback".$admission_id);
    


if(insert($table,$data)){
    // echo "success";
    header("location:admission.php?saved='success'");
}else{
    header("location:admission.php?failed='error'");

    // echo "error";
}
}

if(isset($_GET['update_admission'])){
    $table="student";
    $data=array();

    $data['name']= $_POST['name'];
    $data['contact']=$_POST['contact'];
    $data['email']=$_POST['email'];
    $data['state']=$_POST['state'];
    $data['city']=$_POST['city'];
    $data['aadharnumber']=$_POST['aadharnumber'];
    $data['pin']=$_POST['pin'];
    $data['study']=$_POST['study'];
    $data['image']=$_POST['image'];
    $data['aadhaarfront']=$_POST['aadhaarfront'];
    $data['aadhaarback']=$_POST['aadhaarback'];
    
    $id=$_GET['edit'];

    if(insert($table,$data)){
        header("location:showadmission.php?saved='success'");
    }else{
        header("location:showadmission.php?failed='error'");

    }
}

if(isset($_GET['deleteAdm'])){
    $id=$_GET['deleteAdm'];
    if(deleteRecord("student","admission_id=$id")){
        header("location:showadmission.php?saved='success'");
    }else{
        header("location:showadmission.php?failed='error'");

    }
}

?>

