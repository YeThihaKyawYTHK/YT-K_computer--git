<?php 
// session_start();


?>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
    <div class="container">
        <a href="index.php" class="navbar-brand">YT#K Computers</a>

        <button 
         class="navbar-toggler"
         type="button"
         data-bs-toggle="collapse"
         data-bs-target="#navmenu"
        >
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">Home</a>
                </li>

                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  text-white" type="button" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Services
                </a>
                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <li><a class="dropdown-item" href="web_develop.php">Website building and services</a></li>
                   <li><a class="dropdown-item" href="internet_service.php">Internet FTTH services</a></li>
                   <!-- <li><hr class="dropdown-divider"></li> -->
                   <!-- <li><a class="dropdown-item" href="#">FTTH service</a></li> -->
                 </ul>
                 </li>
                
                <?php 
                
                if(isset($_SESSION['id']))  { 
                    $sql=mysqli_query($conn,"SELECT * FROM shopping_register WHERE id='".$_SESSION['id']."'");
                $user=mysqli_fetch_assoc($sql);
                    ?>   
                        
                        <li class="nav-item log">
                         <a class="nav-link text-white font-weight-bold" href="home.php"><img src="img/<?php echo $user['photo']; ?>" class="rounded-circle mr-1" width="30px;" height="30px;"> <?php echo $user['name']; ?></a>
                        </li> 
                        </li>    
       
  
                        <li class="nav-item dropdown log">
                             <a class="nav-link font-weight-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <i class="fas fa-cog"></i>
                             </a>
                        <ul class="dropdown-menu log" aria-labelledby="navbarDropdown">
                             <li> <a class="dropdown-item" href="#">Action</a></li>
                             <li> <a class="dropdown-item" href="#">Another action</a></li>
                             <li> <div class="dropdown-divider"></div></li>
                             <li> <a class="dropdown-item" href="auth/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                        </ul>
                         </li>
               
                <?php } else { ?>

                
                <li class="nav-item login unlog">
                    <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn nav-link text-white">Login</a>
                </li>
                <li class="nav-item register unlog">
                    <a  class="btn  nav-link text-white" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                </li>
                
                    <?php } ?>

                <li class="nav-item ms-3 fw-bold">
                    <a  href="shoplistshow.php" type="button" class="nav-link text-white shopcarttemp" >Your Cart 
                        <span class="position-relative top-0 start-0 translate-middle badge rounded-pill bg-danger atc"   >
                                                        <?php 
                                                        if(isset($_SESSION['addtocarttotal'])){
                                                             echo $_SESSION['addtocarttotal']; 
                                                        }else{
                                                                echo $_SESSION['addtocarttotal']="0";
                                                        }
                                                         
                                                        ?> 
                                                        </span>
                                                        <!-- <span class="visually-hidden">unread messages</span> -->
                                                        </span> <i class="bi bi-cart-check "></i></a>
                </li>
            </ul>
        </div>
    </div>
     
</nav>

