<?php include_once('dao.php'); ?>
<?php

if (isset($_POST['admission'])) {
    $gsn=selectbygsn("select max(gsn) as serial from student");
    
    $length=4-strlen($gsn."");
    $repeat=str_repeat("0",$length).$gsn;

    
    $table = "student";
    $data = array();
    
    $admission_id = strtolower(substr($_POST['name'], 0, 3)) . $_POST['pin'] . $repeat;

    
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
    $data['image']=imageupload($_FILES['image'], $admission_id);
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


// edit admission use h sirf or koi functon nhi h
if(isset($_POST['edit_admission'])){
 
    $admission_id=$_POST['admission_id'];
    $data['gsn']=$gsn;
    $data['name']= $_POST['name'];
    $data['contact']=$_POST['contact'];
    $data['email']=$_POST['email'];
    $data['state']=$_POST['state'];
    $data['city']=$_POST['city'];
    $data['aadharnumber']=$_POST['aadharnumber'];
    $data['pin']=$_POST['pin'];
    $data['study']=$_POST['study'];
  
    if($_FILES["image"]['name']!=""){
        $data['image']=imageupload($_FILES["image"], $admission_id);
    }
    if($_FILES["aadhaarfront"]['name']!=""){
        $data['aadhaarfront']=imageupload($_FILES["aadhaarfront"], "aadhaarfront".$admission_id);
    }
    if($_FILES["aadhaarback"]['name']!=""){
        $data['aadhaarback']=imageupload($_FILES["aadhaarback"], "aadhaarback".$admission_id);
    }


    if(update("student", $data,"admission_id='$admission_id'")){
        header("location:showadmission.php?saved='success'");            
        // echo "success";
    }else{
        header("location:showadmission.php?failed='error'");
        // echo "fail";
    }


}

if(isset($_GET['delete'])){
     $id=$_GET['delete'];
    
    if(deleteRecord("student","admission_id='$id'")){
        header("location:showadmission.php?saved='success'");
    }else{
        header("location:showadmission.php?failed='error'");

    }
}

?>

