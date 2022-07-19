<?php
include('../db.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    
    // $hash_password=hash('md5', $password);
    $gender=$_POST['gender'];
    $photo=$_FILES['photo']['name'];
    $tmp=$_FILES['photo']['tmp_name'];
    
    if($photo)
    {
        $exe=pathinfo($photo,PATHINFO_EXTENSION);
        $photo=uniqid().".".$exe;
        move_uploaded_file($tmp,"../img/$photo");
    }else{
        $photo="empty.png";
    }

    $sql1=mysqli_query($conn,"SELECT * FROM shopping_register WHERE name='$name'");
    
    // echo mysqli_num_rows($sql1);
    if(mysqli_num_rows($sql1)>0)
    {
        //already exist
        echo "<script>alert('Username already exist');location.href='../index.php'</script>";
    }else if($password==$cpassword){
        //register
           $sql="INSERT INTO shopping_register (name,password,cpassword,email,phone,dob,gender,photo,address,created_date,modified_date) VALUES ('$name','$password','$cpassword','$email','$phone','$dob','$gender','$photo','$address',now(),now())";
           mysqli_query($conn,$sql);
           echo "<script>alert('Successfully Registered');location.href='../index.php'</script>";
    }else{
         echo "<script>alert('Password does not match');location.href='../index.php'</script>";
    }


    // $sql="INSERT INTO user (name,password,cpassword,email,phone,dob,gender,photo,address,created_date,modified_date) VALUES ('$name','$password','$cpassword','$email','$phone','$dob','$gender','$photo','$address',now(),now())";
    // mysqli_query($conn,$sql);
}


?>
