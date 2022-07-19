<?php
include('db.php');
include('cdn.php');
if(isset($_POST['itemInput']))
{
    $itemname=$_POST['itemname'];
    $price=$_POST['price'];
    $discountPrice=$_POST['discountPrice'];
    $photo=$_FILES['photo']['name'];
    $tmp=$_FILES['photo']['tmp_name'];
    move_uploaded_file($tmp,"img/$photo");

    $sql="INSERT INTO item_record (itemName,price,discountPrice,created_date,modified_date,photo) VALUES
                                 ('$itemname','$price','$discountPrice',now(),now(),'$photo')";
    mysqli_query($conn,$sql);
    header("location:itemquery.php");
}


?>




<script>
    $(.ebtn).click(function(){
        
    })
</script>