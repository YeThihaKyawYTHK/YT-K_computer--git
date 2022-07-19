

<?php
session_start();

if(isset($_POST['purchase']))
{ 
    if(isset($_SESSION['id'])){
       
      
        if($_SESSION['addtocarttotal']>0){
           echo "<script>alert('Congratulation Order completed!!');location.href='index.php'</script>";
             unset($_SESSION['addtocarttotal']);
             unset($_SESSION['cart2']);

        }else{

             echo "<script>alert('Please add products to Cart!!.Thank you.');location.href='index.php'</script>";
        }

        
    }else{
        echo "<script>alert ('please Login');location.href='shoplistshow.php'</script>";
    }
   
   
}

?>
