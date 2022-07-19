<?php
session_start();

if(isset($_POST['select']))
{
    $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
    echo  $_SESSION['addtocarttotal'];
}

?>