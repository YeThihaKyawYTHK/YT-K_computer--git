
<link rel="stylesheet"   href="style.css">

<!-- ................Register Modal................ -->
<!--Register Modal -->
<div class="modal fade" id="registerModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Registration Form</b></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="auth/register.php">
        	<input type="text" name="name" placeholder="Enter Username" class="form-control"><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
          <input type="password" name="cpassword" placeholder="Enter Confirm Password" class="form-control"><br>
        	<input type="email" name="email" placeholder="Enter email" class="form-control"><br>
        	<input type="number" name="phone" placeholder="Enter Phone Number" class="form-control"><br>
        	<input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control"><br>
        	<input type="radio" name="gender" value="male" checked class="mr-1">Male
        	<input type="radio" name="gender" value="female" class="mr-1">Female<br><br>
        	<input type="file" name="photo"> <br><br>
          <textarea class="form-control" placeholder="Enter Address" name="address"></textarea> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="register" class="btn btn-secondary"><i class="fas fa-registered mr-1" ></i>Register</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--Login Modal -->
<div class="modal fade" id="loginModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Login Form</b></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="auth/login.php">
        	<input type="text" name="name" placeholder="Enter Username" class="form-control"><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="login" class="btn btn-secondary"><i class="fas fa-sign-in-alt mr-1"></i>Login</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>

<!-- add to cart Modal -->


<!--     
        <img src="" class="mini_cart_img photoid1" style="width:180px;height:180px;"  alt="...">
        <h2 class="prod__title"> </h2>
        <div class="item_price">
            <del>3,500,000</del>
            <span><span class="item_price1" org-price=""></span> MMK</span>
        </div>
  
          <div class="quantity">
              <button class="plus-btn" type="button" name="button">
              <i class="bi bi-plus-lg"></i>
               </button>
               <input class="inde" type="text" name="name" value="1">
              <button class="minus-btn" type="button" name="button">
              <i class="bi bi-dash-lg"></i>
              </button>
          </div>
 
          <div class="total-price">Total : <span class="item_pricesub"></span> MMK</div>
    
          <div class="add_another text-white bg-dark btn " data-bs-dismiss="offcanvas">add another items</div>
          <a class=" text-white bg-dark btn" type="button" data-bs-toggle="modal" data-bs-target="#checkout1" data-bs-dismiss="offcanvas" >CHECK OUT</a> -->
    

  






  
<!-- item data Modal -->

<div class="modal fade" id="itemdatai3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Registration Form</b></h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="auth/register.php">
        	<input type="text" name="name" placeholder="Enter Username" class="form-control"><br>
        	<input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
          <input type="password" name="cpassword" placeholder="Enter Confirm Password" class="form-control"><br>
        	<input type="email" name="email" placeholder="Enter email" class="form-control"><br>
        	<input type="number" name="phone" placeholder="Enter Phone Number" class="form-control"><br>
        	<input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control"><br>
        	<input type="radio" name="gender" value="male" checked class="mr-1">Male
        	<input type="radio" name="gender" value="female" class="mr-1">Female<br><br>
        	<input type="file" name="photo"> <br><br>
          <textarea class="form-control" placeholder="Enter Address" name="address"></textarea> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" name="register" class="btn btn-secondary"><i class="fas fa-registered mr-1" ></i>Register</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Check out Modal -->

<div class="modal fade modal-lg" id="checkout1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ms-5">
    <div class="modal-content modal-xl ms-5">
      <div class="modal-header modal-xl ms-5">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>Popover in a modal</h5>

        //
            


        //
        <h5>Tooltips in a modal</h5>
            <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
      </div>
      <div class="modal-footer modal-footer-xl ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>


<!--for add to cart alert!! -->


<!-- Modal -->
<div class="modal fade" id="addtocartalert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <div class="text-center text-lg ">
         <h1> <i class="bi bi-check-lg rounded bg-success "></i></h1><br><h4>Success!!<h4> <br> <h4>Add to Cart Successfully!!</h4>
        </div>
      </div>
      
    </div>
  </div>
</div>

