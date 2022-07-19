<?php
session_start();
// session_destroy();




if (isset($_POST['item_name2']) && isset($_POST['item_price']))
{
    if(isset($_SESSION['cart2']))
    {
        $myitems=array_column($_SESSION['cart2'],'itemname22');//to check same items are added to cart or not.
        $it="";
        if(in_array($_POST['itemname22'],$myitems))
        {
            $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
           echo"Item already added"
           ;
           
        }else{
        $count=count($_SESSION['cart2']);
        $_SESSION['cart2'][$count]=array('item_id'=>$_POST['itemid'],'itemname22'=>$_POST['itemname22'],'item_price'=>$_POST['item_price'],'item_pp'=>$_POST['photo'],'itemname22'=>$_POST['itemname22'],'itemprice22'=>$_POST['itemprice22'],'itemquantity'=>$_POST['itemquantity']);
        $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
        // echo'add to cart. Successfully!!';
        echo $_SESSION['addtocarttotal'];
        // print_r($_SESSION['cart2']);
    }
    }else{
         $_SESSION['cart2'][0]=array('item_id'=>$_POST['itemid'],'itemname22'=>$_POST['itemname22'],'item_price'=>$_POST['item_price'],'item_pp'=>$_POST['photo'],'itemname22'=>$_POST['itemname22'],'itemprice22'=>$_POST['itemprice22'],'itemquantity'=>$_POST['itemquantity']);
          $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
        //  echo'add to cart. Successfully!!';
        echo $_SESSION['addtocarttotal'];
        }

   
    
}
 if(isset($_POST['item_name55']))
    {
        foreach($_SESSION['cart2'] as $key => $value)
        {
            if($value['itemname22']==$_POST['item_name55'])
            {
                unset($_SESSION['cart2'][$key]);
                $_SESSION['cart2']=array_values($_SESSION['cart2']);
                // $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
               $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
               echo $_SESSION['addtocarttotal'];
                
                

            }
        }
    }
      
    //   $_SESSION['addtocarttotal']=count($_SESSION['cart2']);
        // print_r($_SESSION['cart2']) ;
        // print_r($myitems) ;
        // echo $addtocarttotal;
        // echo $_SESSION['addtocarttotal'];
        

?>