
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet"   href="style.css">
        <script src="store.js" async></script> 
      </head>
      <body>
        


     </body>
      
      </html>
      
              
              
              
              <!-- list button -->
              <div class="dropend list-group flush pb-1">
                <a class="btn list-group-item-action btn-info text-dark" type="button" data-bs-toggle="collapse" href="#btn2" >Laptop Computer
                     <!-- <i class="bi bi-caret-right"></i>  -->
                    </a>
               
                <div class="list-group">
                <?php 
                $name1="";
                if(isset($_GET['name'])){
                    $name1=$_GET['name'];
                }
                        if($name1=='dell_laptop'){?>
                        <ul class="collapse show list-unstyled bg-white  " id="btn2" >
                            <!-- <li ><a class="btn list-group-item-action border dell_laptop" name="dell_laptop" href="index.php?name=dell_laptop" >Dell</a></li> -->
                            <li ><a class="btn list-group-item-action border bg-primary " href="index.php?name=dell_laptop" style="color:blue;font-weight:bold;">Dell <i class="bi bi-caret-right"></i></a></li>
                            <li ><a class="btn list-group-item-action border "  href="index.php?name=msi_laptop">MSI</a></li> 
                        </ul>
                        <?php }elseif($name1=='msi_laptop'){ ?>
                            <ul class="collapse show list-unstyled bg-white  " id="btn2" >
                            <!-- <li ><a class="btn list-group-item-action border dell_laptop" name="dell_laptop" href="index.php?name=dell_laptop" >Dell</a></li> -->
                            <li ><a class="btn list-group-item-action border  " href="index.php?name=dell_laptop" >Dell</a></li>
                            <li ><a class="btn list-group-item-action border  bg-primary"  href="index.php?name=msi_laptop" style="color:blue;font-weight:bold;">MSI <i class="bi bi-caret-right"></i></a></li> 
                        </ul>
                        <?php }else{?> 
                         <ul class="collapse  list-unstyled bg-white  " id="btn2" >
                             <!-- <li ><a class="btn list-group-item-action border dell_laptop" name="dell_laptop" href="index.php?name=dell_laptop" >Dell</a></li> -->
                             <li ><a class="btn list-group-item-action border  " href="index.php?name=dell_laptop" >Dell</a></li>
                             <li ><a class="btn list-group-item-action border "  href="index.php?name=msi_laptop">MSI</a></li> 
                         </ul>
                        <?php  } ?>
                </div>  
                </div>
                

                <!-- list button -->
               <div class="dropend list-group flush pb-1">
                <a class="btn list-group-item-action btn-info text-dark" type="button" data-bs-toggle="collapse" href="#btn3" >Desktop Computer
                    <!-- <i class="bi bi-caret-right"></i> -->
                 </a>
               <div class="list-group">
               <?php
                    
                    if($name1=='msi_item_record'){?>
                <ul class="collapse show list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop  bg-primary"  href="index.php?name=msi_item_record" style="color:blue;font-weight:bold;">MSI <i class="bi bi-caret-right"></i></a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=hp_desktop">HP</a></li>
                </ul>
                <?php }elseif($name1=='hp_desktop'){ ?>
                <ul class="collapse show list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=msi_item_record">MSI</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop bg-primary" href="index.php?name=hp_desktop" style="color:blue;font-weight:bold;">HP <i class="bi bi-caret-right"></i></a></li>
                </ul>
                 <?php  }  else{ ?> 
                <ul class="collapse list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=msi_item_record">MSI</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=hp_desktop">HP</a></li>
                </ul>
                <?php  } ?>
                </div>  
                </div>


   
            <!-- list button -->

                <div class="dropend list-group flush pb-1">
                <a class="btn list-group-item-action btn-info text-dark" type="button" data-bs-toggle="collapse" href="#btn3" >Desktop Computer
                    <!-- <i class="bi bi-caret-right"></i>  -->
                </a>
               <div class="list-group">
               <?php
                    
                    if($name1=='gaming_chair'){?>
                <ul class="collapse show list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop  bg-primary"  href="index.php?name=gaming_chair" style="color:blue;font-weight:bold;">Gaming Chair <i class="bi bi-caret-right"></i></a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=keyboards_record">Gaming keyboard</a></li>
                </ul>
                <?php }elseif($name1=='keyboards_record'){ ?>
                <ul class="collapse show list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=gaming_chair">Gaming Chair</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop bg-primary" href="index.php?name=keyboards_record" style="color:blue;font-weight:bold;">Gaming keyboard <i class="bi bi-caret-right"></i></a></li>
                </ul>
                 <?php  }  else{ ?> 
                <ul class="collapse list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=gaming_chair">Gaming Chair</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=keyboards_record">Gaming keyboard</a></li>
                </ul>
                <?php  } ?>
                </div>  
                </div>
                <!-- list button -->

                <!-- <div class="dropend list-group flush pb-1">
                <a class="btn list-group-item-action btn-info text-dark" type="button" data-bs-toggle="collapse" href="#btn5" >Computer Components <i class="bi bi-caret-right"></i> </a>
                
                <div class="list-group">
                <ul class="collapse list-unstyled bg-white" id="btn5" >
                    
                    <li ><a class="btn list-group-item-action monitor" href="index.php?name=monitor_records">Monitors</a></li>
                    <li ><a class="btn list-group-item-action graphic_card" href="index.php?name=graphiccard_records">Graphic Cards</a></li>
                  
                </ul>
                </div>  
                </div> -->

                <div class="dropend list-group flush pb-1">
                <a class="btn list-group-item-action btn-info text-dark" type="button" data-bs-toggle="collapse" href="#btn3" >Computer Components
                    <!-- <i class="bi bi-caret-right"></i>  -->
                </a>
               <div class="list-group">
               <?php
                    
                    if($name1=='monitor_records'){?>
                <ul class="collapse show list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=monitor_records" style="color:blue;font-weight:bold;">Monitors</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=graphiccard_records">Graphic Cards</a></li>
                </ul>
                <?php }elseif($name1=='graphiccard_records'){ ?>
                <ul class="collapse show list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=monitor_records">Monitors</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=graphiccard_records" style="color:blue;font-weight:bold;">Graphic Cards</a></li>
                </ul>
                 <?php  }  else{ ?> 
                <ul class="collapse list-unstyled bg-white" id="btn3" >
                    <li ><a class="btn list-group-item-action border msi_desktop "  href="index.php?name=monitor_records">Monitors</a></li>
                    <li ><a class="btn list-group-item-action border hp_desktop" href="index.php?name=graphiccard_records">Graphic Cards</a></li>
                </ul>
                <?php  } ?>
                </div>  
                </div>
                
                
                <div>
                    <img  class="img-fluid rounded h-100" src="img/promotion.jpg"   alt=""> 
                 </div>
         
                  

 <!-- <script>
        $('.dell_laptop').click(function(){
            var name=$(this).attr('name');
            $.ajax({
                url:"changeitemdisplay.php",
                method:"POST",
                data:{name},
                success:function()
                {
                  alert('hi')
                }

            })
        })



<script> -->

 