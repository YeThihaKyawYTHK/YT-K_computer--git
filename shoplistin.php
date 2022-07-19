<?php

include('db.php');

if(isset($_POST['itemname1']) && ($_POST['itemprice1']))
{
    $itemphotoin=$_POST['itemphoto1'];
    $itemnamein=$_POST['itemname1'];
    $itempricein=$_POST['itemprice1'];
    $totalpricein=$_POST['totalprice'];
    $quantity=$_POST['quantity'];
    
    
    mysqli_query($conn,"INSERT INTO shoppingcart (name,price,quantity,total,created_date,modified_date,photo) 
                                        VALUES ('$itemnamein','$itempricein','$quantity','$totalpricein',now(),now(),'$itemphotoin')");
}



// session_start();
// $_SESSION["timeout"] = time();
// //if 100 seconds have passed since creating session delete it.
// if(time() - $_SESSION["timeout"] > 100){ 
//     unset($_SESSION["timeout"]);
// }