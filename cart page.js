var removeCartItemsButtons= document.getElementsByClassName('button-delete')
console.log(removeCartItemsButtons)
for(var i=0;i<removeCartItemsButtons.length;i++){
    var button = removeCartItemsButtons[i]
    button.addEventListener('click',function(event){
       var buttonClicked = event.target
       buttonClicked.parentElement.parentElement.parentElement.parentElement.remove()
    updateTotal()
    })
}
function updateTotal(){
var cartItemContainer = document.getElementsByClassName('cart-info')[0]
cartItemContainer.getElementsByClassName('c-row')
for(var i=0;i<c-row.length;i++ )
var cRow = cRow[i]
var priceE = cRow.getElementsByClassName('cart-price')[0]
var quantityE = cRow.getElementsByClassName('cart-quantity')[0]
console.log(priceE,quantityE)
}
