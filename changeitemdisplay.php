

<?php 
include('oop_style_item_record.php');

                    $data='';
                    if(isset($_GET['name'])){
                    $query=$obj->selectData($_GET['name']);
                 
                    // while($itempost=mysqli_fetch_assoc($query)){

                    }else{
                    
                    $query=$obj->selectData("item_record");
                    // print_r($query);
                    }
                    while($itempost=mysqli_fetch_assoc($query)){
             
                  

                    
                    
                    echo '
                        <div class="pickitem">
                            <div class="card" style="width: 100%; height:100%">
                              <img src="img/'.$itempost['photo'].' " class="card-img-top" width="150px;" height="180px" alt="...">
                              <div class="card-body pg-1">
                                <a class="but2 cb1 " type="button" itemname="'.$itempost['itemName'].' "
                                                                  itemprice="'.$itempost['price'].'"
                                                                  itemid="'.$itempost['id'].' "
                                                                  itemphoto="'.$itempost['photo'].'">
                                  Add to cart <i class="bi bi-cart-check "></i></a>
                                <div class="prod__price"><a href="https://www.msi.com/Desktop/MAG-Infinite-S3-12th" style="text-decoration:none;color:white;">$ '.$itempost['price'].' </a></div>

                                <div class="itsname text-white pb-4" style="font-size:15px;"><a href="https://www.msi.com/Desktop/MAG-Infinite-S3-12th" style="text-decoration:none;color:white;"> '.$itempost['itemName'].' </a></div>
                                
                              </div>
                            </div>
                        </div>
                    ';
                     } 
                    //  echo $data;

                     ?>
                    
                   
                   
                     