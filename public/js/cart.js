document.addEventListener('DOMContentLoaded',function(){
    mainFuntion();
})
function mainFuntion(){
    var cartOrders = JSON.parse(localStorage.getItem('ordersStr'));
    //console.log(cartOrders); 
    for(var i = 0; i < cartOrders.length; i++){
        addItemsToCart(cartOrders[i]['itemName'],cartOrders[i]['itemPrice'],cartOrders[i]['itemSrc'],cartOrders[i]['itemQty'])
    }
    function addItemsToCart(itemName , itemPrice, itemSrc, itemQty ){
        var cartRow = document.createElement('div');
        cartRow.classList.add('items-row');
        cartRow.classList.add('row');
        cartRow.classList.add('pb-3');
        cartRow.classList.add('pt-2');
        cartRow.classList.add('h-100');
        var cartRowContent = `
        <div class="col-md-3 my-auto">
            <img class="itemImg" src="${itemSrc}" alt="pic" width="75%">
        </div>
        <div class="col-md-3 text-center my-auto">
            <h5 class="itemName">${itemName}</h5>
        </div>
        <div class="col-md-2 text-center my-auto">
            <button type="" class="add-qty btn btn-primary">
            <i class="fa fa-plus"></i>
            </button>
            <h5 class="itemQty">${itemQty}</h5>
            <button type="" class="minus-qty btn btn-danger">
            <i class="fa fa-minus"></i>
            </button>
        </div>
        <div class="col-md-2 text-center my-auto">
            <h5 class="itemPrice">${itemPrice}</h5>
        </div>
        <div class="col-md-2 text-center my-auto">
            <button type="" class="remove-item btn btn-danger">
            <i class="fa fa-times"></i>
            </button>
        </div>
        `;
        var cartItems = document.getElementsByClassName('cart-items')[0];
        cartRow.innerHTML = cartRowContent;
        cartItems.append(cartRow);
   }
    

    var removeItemButton = document.getElementsByClassName('remove-item');
    //console.log(removeItemButton.length);
    var removeLength = removeItemButton.length; 
    for(var x = 0; x <5 ; x ++){
        for(var i = 0; i < removeLength; i++){
            var button = removeItemButton[i];
            //console.log(button)
            button.addEventListener('click', function(event){
                var buttonCliked = event.target;
                
                buttonCliked.parentElement.parentElement.remove();
                updateCartTotal();
                
            })
        }
    }

    var addQtyButton = document.getElementsByClassName('add-qty');
    for(var i = 0; i < addQtyButton.length; i++){
        var button = addQtyButton[i];
        // console.log(button);
        button.addEventListener('click', function(event){
            var qtyElement = event.target.parentElement.parentElement.getElementsByClassName('itemQty')[0];
            //console.log(qtyElement)
            var qty = parseInt(qtyElement.innerText);
            qty = qty + 1; 
            event.target.parentElement.parentElement.getElementsByClassName('itemQty')[0].innerText = qty;
            updateCartTotal();
        })
    }
    var minusQtyButton = document.getElementsByClassName('minus-qty');
    for(var i = 0; i < minusQtyButton.length; i++){
        var button = minusQtyButton[i];
        // console.log(button);
        button.addEventListener('click', function(event){
            var qtyElement = event.target.parentElement.parentElement.getElementsByClassName('itemQty')[0];
            //console.log(qtyElement)
            var qty = parseInt(qtyElement.innerText);
            if(qty == 1){
                alert("1 is the minimum limit");
                return;
            }
            qty = qty - 1; 
            event.target.parentElement.parentElement.getElementsByClassName('itemQty')[0].innerText = qty;
            updateCartTotal();
            
        })
    }
    var purchaseButton = document.getElementsByClassName('purchase-btn')[0];
    purchaseButton.addEventListener('click', function(event){
        var button = event.target.parentElement.parentElement;
        var itemsRow = button.getElementsByClassName('items-row');
        if (itemsRow.length == 0 ){
            alert('Your cart is empty');
            return
        }
        //console.log(itemsRow)
        var orders = new Array(); 
        for(var i = 0; i < itemsRow.length; i++){
            var itemName =  itemsRow[i].getElementsByClassName('itemName')[0].innerText;
            var itemPrice = itemsRow[i].getElementsByClassName('itemPrice')[0].innerText;
            var itemSrc = itemsRow[i].getElementsByClassName('itemImg')[0].src;
            var itemQty = itemsRow[i].getElementsByClassName('itemQty')[0].innerText;
            order = {'itemName':itemName, 'itemPrice':itemPrice, 'itemSrc': itemSrc, 'itemQty': itemQty}
            orders.push(order);
            
        }
        console.log(orders)
    });
 

    function updateCartTotal(){
        var totalPrice = 0; 
        var cartRows = 0;

        var orders = [];
        var blankPlate = [];
        var cartItemContainer = document.getElementsByClassName('cart-items')[0];
        cartRows = cartItemContainer.getElementsByClassName('items-row');
        
        if(cartRows.length == 0){
            document.getElementsByClassName('total-price')[0].innerText = "0";
        }
        var price = 0;
        var qty = 0 ;
        var name = "";
        var src = "";

        for(var i = 0; i < cartRows.length; i++){
            var cartRow = cartRows[i];
            var priceElement = cartRow.getElementsByClassName('itemPrice')[0];
            var qtyElement = cartRow.getElementsByClassName('itemQty')[0];
            var nameElement= cartRow.getElementsByClassName('itemName')[0];
            var srcElement = cartRow.getElementsByClassName('itemImg')[0];
            price = parseFloat(priceElement.innerText);
            qty = parseInt(qtyElement.innerText);
            name = nameElement.innerText;
            src = srcElement.src;

            var order = 
            {'itemName' : name,
            'itemQty': qty,
            'itemPrice': price,
            'itemSrc': src
            }

            orders.push(order);
            totalPrice = totalPrice + (price * qty );

            document.getElementsByClassName('total-price')[0].innerText = totalPrice;
           
        } 
        console.log(orders);
        localStorage.setItem('ordersStr',JSON.stringify(blankPlate));
        localStorage.setItem('ordersStr',JSON.stringify(orders));
    }

}