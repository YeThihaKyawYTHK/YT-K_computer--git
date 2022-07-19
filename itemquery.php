

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item query</title>
     <?php include('cdn.php'); ?>
 
     
</head>
<body>
    <button type="button" class="btn border bordar-info  text-dark m-2"  data-bs-toggle="modal" data-bs-target="#itemdatai3" data-whatever="item_record">item data input</button>
    <button type="button" class="btn border bordar-info  text-dark m-2"  data-bs-toggle="modal" data-bs-target="#itemdatai3" data-whatever="dell_laptop">Dell laptop input</button>

    
    
</body>
</html>



<!-- input item data Modal -->
<div class="modal fade" id="itemdatai3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Item Data input Form</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="oop_style_item_record.php">
        	 <input type="text" name="itemname" placeholder="Enter Product Name" class="form-control iname"><br>
        	 <input type="hidden" name="hideitemname" placeholder="Enter Product Name" class="form-control hideitemname"><br>
        	<input type="int" name="price" placeholder="Enter Item Price" class="form-control iprice"><br>
            <input type="int" name="discountPrice" placeholder="Enter Discount Price" class="form-control"><br>
        	<input type="file" name="photo"> <br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" name="itemInput" class="btn btn-secondary"><i class="fas fa-registered mr-1" ></i>Register</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
$('#itemdatai3').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.hideitemname').val(recipient)
  
})

</script>