<?php
session_start();
date_default_timezone_set('Asia/Yangon');
include('../db.php');

if(isset($_POST['login']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT * FROM shopping_register WHERE name='$name' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);
    // echo $row['id'];

    if(mysqli_num_rows($query)>0)
    {
        
        $_SESSION['id']=$row['id'];
        $_SESSION['login_date']=date('Y-m-d h:i:s');
        mysqli_query($conn,"INSERT INTO online_user (user_id,active_date,login_date) 
        VALUES ('".$_SESSION['id']."',now(),'".$_SESSION['login_date']."')");
        header("location:../index.php");
    }else{
        echo "<script>alert('Login Failed,Try Again');location.href='../index.php'</script>";
    }
}

?>