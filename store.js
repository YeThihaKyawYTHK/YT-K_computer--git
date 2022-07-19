if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready()
}

function ready(){

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    console.log(quantityInputs)
    for(var i=0; i < quantityInputs.length; i++){
        var input =quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var removeCartItemButtons = document.getElementsByClassName('bb')
    console.log(removeCartItemButtons)
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var removeCartItemButtons = document.getElementsByClassName('purchaseclick')
    console.log(removeCartItemButtons)
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', purchaseclick)
    }
    
}

function increaseclick(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    // var datatotal92 = document.getElementsByClassName('databasetotal')
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    const people=[]
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var nameElement= cartRow.getElementsByClassName('cartitem-name')[0]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var photoElement = cartRow.getElementsByClassName('photoref')[0]

        var photo=photoElement.value
        var name=nameElement.innerText
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        // console.log(name, price, quantity) 
        const obj = { itemname22: name, itemprice22: price, itemquantity:quantity, item_pp:photo}
        
        people.push(obj)
        console.log(people)
}
      $.ajax({
          url:"shoplistshow.php",
          method:"POST",
          data:{people},
          dataType:"json",
          
      })
       
}


function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}


function quantityChanged(event){
    var input = event.target
    if (isNaN(input.value) || input.value <=0 ){
        input.value=1
    }
    updateCartTotal()
    increaseclick()
}

function updateCartTotal(){
    var cartItemContainer= document.getElementsByClassName('cart-items')[0]
    // var datatotal92 = document.getElementsByClassName('databasetotal')
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total=0
    for (var i=0; i < cartRows.length; i++){
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
        
        
    }
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total

    
    

    
}

// $('.dell_button').click(function () {
//     $('.msi_items').toggleClass('hideitems');
//     $('.dell_items').toggleClass('hideitems');
// }) 


