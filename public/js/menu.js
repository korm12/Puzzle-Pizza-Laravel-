

window.onload = function(){
    var orders = [];
    
    if(localStorage.getItem("ordersStr") !== null){
        var orders = JSON.parse(localStorage.getItem('ordersStr'));
        console.log(orders);
    }

    var addToCartButton = document.getElementsByClassName('pizza');
    //console.log(addToCartButton.length);
    var addLength = addToCartButton.length;
    for(var i = 0; i < addLength; i++){
        var button = addToCartButton[i];
    // console.log(button)
        button.addEventListener('click', function(event){
            addItemsToCart(event)
            
        })
    }
    

    var addToCartButton = document.getElementsByClassName('drinks');
   // console.log("drin");
    var addLength = addToCartButton.length;
    for(var i = 0; i < addLength; i++){
        var button = addToCartButton[i];
        button.addEventListener('click', function(event){
            addItemsToCart(event);
            
        })
    }

    

    function addItemsToCart(event){
        var button = event.target;
        var itemQty = 1;
        var itemCard = button.parentElement.parentElement.parentElement
        var itemName = itemCard.getElementsByClassName('item-name')[0].innerText;
        var itemPrice = itemCard.getElementsByClassName('item-price')[0].innerText;
        itemPrice = itemPrice.replace('Php. ','')
        var itemSrc = itemCard.getElementsByClassName('item-src')[0].src;
        
        var order = 
            {'itemName' : itemName,
            'itemQty': itemQty,
            'itemPrice': itemPrice,
            'itemSrc': itemSrc
            };
        if(localStorage.getItem("ordersStr") !== null){
            for(var i = 0 ; i < orders.length; i++){
                if(order['itemName'] == orders[i]["itemName"]){
                    alert('Item already in cart');
                    return;
                }
            }
        }
        orders.push(order);
        console.log(orders);
        localStorage.setItem('ordersStr', JSON.stringify(orders));

    }
   
  
}