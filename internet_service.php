<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type='text/css'  href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php include('cdn.php'); ?>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
                    <img src="img/repairlogo.png" alt="logo" width="140" height="40">
   </a>

         
          <button 
         class="navbar-toggler  "
         type="button"
         data-bs-toggle="collapse"
         data-bs-target="#navbarNav"

        >
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav" id="navmenu">
                  <li class="nav-item ">
                    <a class="nav-link text-white" href="index.php"><i class="bi bi-house-door" style="font-size: 15px;"></i> Home</span></a>
                  </li>
                  <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu"  aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item " id="gg"  href="web_develop.php" >Website building and services</a>
                <a class="dropdown-item " id="gg" href="internet_service.php">Internet FTTH services</a>
                
              </div>
            </div>
              </li>
              <li class="nav-item" >
                <div class="nav-link text-white" href="#"><i class="bi bi-phone-vibrate" ></i> +959 123-456-7890</div>
              </li>
              <li class="nav-item">
                <div class="nav-link text-white" href="#"><i class="bi bi-envelope-check" style="font-size: 15px;"></i> yethihakyawythk121@gmail.com</div>
              </li>
              <li class="nav-item">
                <a href="https://www.youtube.com/watch?v=RGQJLA2guxw" >
                                    <i class="bi bi-youtube tmp-icon tmp-contact-icon tmp-icon-hover" style="font-size: 20px;margin-right:10px;"></i>
                                  </a>
              </li>
              <li class="nav-item">
                <a href="https://www.google.com/search?client=firefox-b-d&q=ye-thiha-kyaw-74864a100" >
                                    <i class="bi bi-linkedin tmp-icon tmp-icon-hover-linkdin" style="font-size: 20px;"></i>
                                </a>
              </li>
              
            </ul>
          </div>
         
</nav> 

        <div id="carouselcontrol" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="img/isp1.png" class="d-block h-50 w-100" alt="..." width="500" height="600">
                    <div class="carousel-caption   position-absolute top-50 start-50 translate-middle" data-aos="fade-up" data-aos-duration="500" >
                        <h5  style="color:white;background:blue;opacity:0.7;border-radius: 10px;"  data-aos="fade-right" data-aos-duration="500">The future of advertising is the Internet.</h5>
                        <p style="color:white;background:blue;opacity:0.7;border-radius: 10px;"  data-aos="fade-left" data-aos-duration="1000">Connect your business to Global</p>
                        
                        
                    </div>
                    
                   
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/isp2.png" class="d-block h-50 w-100" alt="...">
      <div class="carousel-caption   position-absolute top-50 start-50 translate-middle "  data-aos="zoom-in-right" data-aos-delay="50" data-aos-duration="1000">
                        <h5  style="color:white;background:blue;opacity:0.7;border-radius: 10px;" >If Your Business is not on the Internet,</h5>
                        <p style="color:white;background:blue;opacity:0.7;border-radius: 10px;" >Then Your Business Will Be Out of Business.</p>>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="img/isp3.png" class="d-block h-50 w-100" alt="...">
      <div class="carousel-caption   position-absolute top-50 start-50 translate-middle " data-aos="zoom-in-right" data-aos-delay="50" data-aos-duration="1000">
                        <h5  style="color:white;background:blue;opacity:0.7;border-radius: 10px;" >"Always deliver more than expected"</h5>
                        <p style="color:white;background:blue;opacity:0.7;border-radius: 10px;" >Make it Possible!!</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselcontrol" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselcontrol" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
            <h1 class="text-center p-4">About Us</h1>
            <div class="row mb-5">
                <div class="col">
                    <div class="p-5  text-center aboutus"  >
                        <i class="bi bi-graph-up-arrow" style="font-size:50px;" data-aos="fade-left" ></i>
                        <h3 data-aos="fade-right" data-aos-duration="1000">MISSIONS</h3>
                        <ul style="display:inline-block;text-align:left;">
                            <li data-aos="fade-right" data-aos-duration="2000">Fast</li>
                            <li data-aos="fade-right" data-aos-duration="2500">Reliable</li>
                            <li data-aos="fade-right" data-aos-duration="3000">Last Long</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5   text-center aboutus">
                        <i class="bi bi-wrench" style="font-size:50px;"></i>
                        <h3 data-aos="fade-right" data-aos-duration="500">WHAT WE DO</h3>
                        <ul style="display:inline-block;text-align:left;">
                            <li data-aos="zoom-in-up" data-aos-duration="1000">Build</li>
                            <li data-aos="zoom-in-up" data-aos-duration="1500">Design</li>
                            <li data-aos="zoom-in-up" data-aos-duration="2000">Maintenance</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="p-5  text-center aboutus">
                        <i class="bi bi-person-square" style="font-size:50px;"></i>
                        <h3 data-aos="fade-left" data-aos-duration="1000">WHO WE ARE</h3>
                        <ul style="display:inline-block;text-align:left;">
                            <li data-aos="fade-left" data-aos-duration="2000">Expert</li>
                            <li data-aos="fade-left" data-aos-duration="2500">Professional</li>
                            <li data-aos="fade-left" data-aos-duration="3000">Qualify</li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>

        <h1 id="contacthead" style="text-align: center; margin-bottom: 2px;">Contact us</h1>
        <div class="contact">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3030.8769062097977!2d96.1828842904008!3d16.84294724341114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1655391386486!5m2!1sen!2smm" width="98%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                

                <div class="contactinfo">
                             <!-- social links -->
                            <div class="contact-social-icons mb-2">
                                <div>Get social</div>
                                <a href="https://www.youtube.com/watch?v=RGQJLA2guxw" class="me-1">
                                    <i class="bi bi-youtube tmp-icon tmp-contact-icon tmp-icon-hover"></i>
                                  </a>
                                  <a href="https://www.google.com/search?client=firefox-b-d&q=ye-thiha-kyaw-74864a100" class="me-1">
                                    <i class="bi bi-linkedin tmp-icon tmp-icon-hover-linkdin"></i>
                                </a>
                                  
                                  <a href="https://www.facebook.com" class="me-1">
                                    <i class="bi bi-facebook tmp-icon "></i>
                                  </a>
                                  <a href="https://telegram.org" class="me-1 ">
                                   <i class="bi bi-telegram text-info"></i>
                                  </a>
                                  
                            </div>

                            <div class="mb-2">
                                <div>Phone</div>
                                <div>
                                    <i class="bi bi-telephone-fill me-1 tmp-icon tmp-contact-icon"></i>
                                    <a href="tel:0801234567">+1 123-456-7890</a>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div>E-mail</div>
                                <div>
                                    <i class="bi bi-envelope-fill me-1 tmp-icon tmp-contact-icon"></i>
                                    <a href="mailto:offline@example.com">yethihakyawythk121@gmail.com</a>
                                </div>
                            </div>
                            <div>
                                <div>Address</div>
                                <div>
                                    <i class="bi bi-geo-alt-fill me-1 tmp-icon tmp-contact-icon"></i> 
                                    <a href="#">
                                        Thitsar Road,South Okkalapa Tsp. Yangon
                                    </a>
                                </div>
                            </div>
                </div>
        </div>                    
                       
        <div class="container-fluid bg-dark text-white text-center py-3"><b>&copy;Copyright By YT#K Computer</b></div>

             
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script> AOS.init();</script>              
            
</body>
</html>