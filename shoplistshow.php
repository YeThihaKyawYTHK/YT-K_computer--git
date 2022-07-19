<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="store.js" async></script> 
    <title>Shopping Cart</title>
    <style>
        body{
            background:black;
            
        }
    </style>
    <link rel="stylesheet"   href="style.css">
   
    <?php include('shopcarttemp.php'); ?>
  
    <?php include('cdn.php');
    ?>
    <?php include('db.php');
    ?>
    
</head>
<body>

<!-- <div class="nav_background " style="display: flex;background-color:#4f19df; height: 100px;border:none;outline: none;border-bottom: 1px solid #000;"> -->
<!-- for nav bar -->
<?php 

include('nav.php'); 
?>  




<!-- ads layouts -->
<?php include('adsLayout.php'); ?>



<!-- items layout -->

<!-- // -->
    <div class="container-fluid bg-dark mb-0 "   >
            <div class="row md-3 mt-0">                     
                <div class="col-md-9  ">

                        <div class="cart_list">

                                <table class="table text-white">
                                        <thead>
                                          <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Item name</th>
                                            <th scope="col">Item price</th>
                                            <th scope="col">Item quantity</th>

                                          </tr>
                                        </thead>       
                                    <tbody class='cart-items'>
                                 <?php
                                    if(isset($_POST['people'])){
                                        $_SESSION['cart2']=$_POST['people'];
                                    }

                                    $total1=0;
                                    if(isset($_SESSION['cart2']))      
                                    {
                                        foreach($_SESSION['cart2'] as $key => $value)
                                        {  
                                            $total1=$total1+$value['itemprice22']; ?>

                                                
                                                    <tr class='cart-row'>
                                                        <td class='cartitem-photo'><input type="hidden" class='photoref' value='<?php echo $value['item_pp']; ?>'><img src="img/<?php echo $value['item_pp']; ?>" width="50px;" height="50px" class="mr-3 rounded-circle" alt="..."></td>
                                                        <td class='cartitem-name'><?php echo $value['itemname22']; ?></td>
                                                        <td class='cart-price'> <?php echo $value['itemprice22']; ?> </td>
                                                        <td>
                                                        <div class='cart-quantity'>

                                                                <input class='cart-quantity-input text-center' type='number'  value='<?php echo $value['itemquantity']; ?>' min='1' max='5'><br>

                                                           </div>
                                                        </td>
                                                        <td>

                                                                <button   class='btn btn-sm btn-outline-danger bb' itname55='<?php echo $value['itemname22']; ?>' >Remove</button>


                                                        </td>
                                                    </tr>
                                       

                                        
                                        
                             <?php       }       }  ?> 
                                    </tbody>
                                 </table>

                        </div> 
                </div>                          

                       <div class="col-md-3  ">
                            <div class="border bg-light rounded p-4">
                                <h4>Total:</h4>
                                 <form action="confirm_buy.php" method="POST">
                                <h5 class="text-right cart-total-price" name="ttotal" value="" >$<?php echo $total1; ?></h5>
                                <br>
                               
                                    <div class="form-check">
                                         <input class="form-check-input" type="radio" name="paysystem" value="bankpay" id="bankpayid">
                                         <label class="form-check-label" for="flexRadioDefault1">
                                         Banking payment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="paysystem" value="bankpay" id="cashpayid" checked>
                                      <label class="form-check-label" for="flexRadioDefault2">
                                        Cash on delivery
                                      </label>
                                    </div>
                                    
                                    <button class="btn btn-primary btn-block purchaseclick" name="purchase">Make purchase</button>    
                                </form>
                            </div>
                        </div>
                                        
            </div>                   
    </div>
                   
                         <!-- <div class="prod">
                             <div class="prod__tag">
                                 <div class="triangle"></div><span class="tagTitle">HOT1</span>
                             </div><a class="prod__link" href="/Desktop/MEG-Aegis-Ti5-12th"><img class="prod__img"
                                     src="https://asset.msi.com/resize/image/global/product/product_16406539915aa9e4eb4d1ea987e34a22628d569f33.png62405b38c58fe0f07fcef2367d8a9ba1/400.png"
                                     alt="MEG Aegis Ti5 12th"></a>
                             <fieldset class="prod__fieldset"><input class="prod__chkbox" type="checkbox" id="240572"
                                     value="MEG-Aegis-Ti5-12th"><label class="prod__label" for="240572">add to compare</label></fieldset>
                             <a class="prod__link" href="/Desktop/MEG-Aegis-Ti5-12th">
                                 <h2 class="prod__title">MEG Aegis Ti5 12th</h2>
                                 <p class="prod__description"></p>
                                 <div class="prod__colors"></div>
                             </a>
                            
                         </div> -->
                         
                    


</body>

<?php include('modal.php'); ?>


<script type="text/javascript">
        

       $('.bb').click(function(){
           var  item_name55=$(this).attr('itname55')
           
           $.ajax({
               url:"shopcarttemp.php",
               method:"POST",
               data:{item_name55},
               success:function(c)
               {
                
                    $('.atc').html(c);
                }

           })
       })

     
        
                 

</script>