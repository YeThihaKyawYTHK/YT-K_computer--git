<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic</title>
   
    <link rel="stylesheet" type='text/css'  href="style.css">
   <!-- <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"> -->
    <script src="store.js" async></script> 
    <?php include('cdn.php'); ?>
    
    <?php include('db.php');
    // session_start();
      
     ?>
  
    
</head>
<body>



<?php 
session_start();
include('nav.php'); 
// include('oop_style_item_record.php');

?>  



<div class="bg-dark mt-1 p-1">

</div>
<!-- ads layouts -->
<?php include('adsLayout.php'); ?>
          

<!-- items layout -->

<!-- // -->
         <div class="container-fluid ">
        <div class="row ms-3 mt-0">
            
            <div class="col-md-3  ">
                <?php include('category.php') ?>
                
                </div>

                <div class="col-md-9">

                <div class="row">
                    <div class="products_container msi_items bg-dark show_area "   >
                     
                     <?php include('changeitemdisplay.php') ?>
                    </div>
                  
                         
                         <?php include('modal.php'); ?>
                    
<?php include('modal.php'); ?>
<script>
                    
               $(document).ready(function(){
                    $('.cb1').click(function(){
                            var item_name2=$(this).attr('itemname');
                            var item_price=$(this).attr('itemprice');
                            var photo=$(this).attr('itemphoto');
                            var itemid=$(this).attr('itemid');
                            var itemname22=$(this).attr('itemname');
                            var itemprice22=$(this).attr('itemprice');
                            var itemquantity="1";
                          $.ajax({
                            url:"shopcarttemp.php",
                            method:"POST",
                            data:{item_name2,item_price,photo,itemid,itemname22,itemprice22,itemquantity},
                            success:function(d)
                            
                            {
                              a=d;
                            
                              if(d =='Item already added'){
                                alert(d);
                            }else{
                                $('.atc').html(a);
                               
                                $('#addtocartalert').modal('show');
                                setTimeout(function() { $('#addtocartalert').modal('hide'); }, 3000);
                                // alert(d)
                               }
                                
                            }
                            
                          })
                             

                        })
                        
        //               $('.choosecategory').click(function(){
        //     var name=$(this).attr('name');
        //     // $(this).css({"color":"blue","font-weight": "bold"});
        //     $.ajax({
        //         url:"changeitemdisplay.php",
        //         method:"GET",
        //         data:{name},
        //         success:function(d)
        //         {
        //           $('.show_area').html(d);
        //           console.log(d)
        //         }

        //     })
        // })
                   
      })


                      
                    </script>

</body>
</html>


                    