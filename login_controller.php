<?php require_once('dao.php');?>

<?php
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $row=selectByCondition('users',"username='$username' and userpassword ='$password'");
    if($row){
        session_start();
        $_SESSION['people']=$username;
        header("location:index.php");
    }else{
        header("location:login.php?error=invalid username and password");
    }
}
?>