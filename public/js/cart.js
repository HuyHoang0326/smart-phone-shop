// add_cart in storage ------------------------
var add_cart = document.getElementsByName('add_to_cart');
add_cart.forEach(onclick);
function onclick(item) {
    item.onclick = function () {
        var inforProduct = item.parentElement;
        var name = inforProduct.querySelector('.product_name').innerText;
        var price = inforProduct.querySelector('.current_price').innerText;
        var image = inforProduct.parentElement.querySelector('.primary_img').firstElementChild.src;
        var price_origin = inforProduct.querySelector('.old_price').innerText;
        var sale_id = inforProduct.querySelector('.sale_product').innerText;
        var id_product = inforProduct.querySelector('.id_product').innerText;
        var data =
            [{
                "name": name,
                "price": price,
                "price_origin": price_origin,
                'sale_id':sale_id,
                'id_product':id_product,
                'quantity':'1',
                "img": image
            }]
            ;
        var dataPush = {
            "name": name,
            "price": price,
            "price_origin": price_origin,
            'sale_id':sale_id,
            'id_product':id_product,
            'quantity':'1',
            "img": image
        }
            ;
        var json = JSON.stringify(data);
        if (!localStorage.getItem("cart")||localStorage.getItem("cart") == '[]') {
            localStorage.setItem("cart", json);
        } 
        else {
            var cartStorage = JSON.parse(localStorage.getItem("cart"));
            cartStorage.forEach(checkAdd)
            function checkAdd(item){
               if(item.name == dataPush.name){
                    item.quantity = (Number(item.quantity)+1);
               }
               else if(item.name == cartStorage[(cartStorage.length-1)].name){
                    cartStorage.push(dataPush);
               }
            }
            var jsonList = JSON.stringify(cartStorage);
            localStorage.setItem("cart", jsonList);
        }
        show_quantity_and_price_mini_cart_wrapper();
    }
}
// show to mini_cart_wrapper -------------------------------
var miniCart = document.querySelector(".mini_cart_wrapper");
miniCart.onclick = function(){
    document.getElementById('cartList').innerHTML = '';
    if (localStorage.getItem('cart')) {
        var localStorageArr = JSON.parse(localStorage.getItem('cart'));
        var cart_item = document.getElementById('cartList');
        
        localStorageArr.forEach(htmlFrom);
        function htmlFrom (item,index){
            if(item == null){
                
            }
            else{
                var text =`
                <div class="cart_img">
                     <a href="#"><img src="${item.img}" alt=""></a>
                </div>
                <div class="cart_info">
                        <a href="#">${item.name}</a>
                        <p>Qty: ${item.quantity} X <span> ${item.price} </span></p>
                </div>
                <div class="cart_remove" name="${item.name}">
                    <button class = 'button_a'><i class="ion-android-close"></i></button>
                </div>
           `
            var elementItem =  document.createElement('div');
            elementItem.setAttribute("name",'cart_item_'+item.name);
            elementItem.setAttribute("class",'cart_item'); 
            elementItem.innerHTML = text;
            cart_item.appendChild(elementItem);
            }
        } 
    }
// delete cart item ---------------------------------
    if(document.querySelector('.cart_remove')){
        var cart_remove = document.querySelectorAll('.cart_remove');
        cart_remove.forEach(remove_cart);
        function remove_cart(item){
            item.onclick = function(){
                var nameCart_item ='cart_item_'+item.getAttribute('name');
                document.getElementsByName(nameCart_item)[0].hidden = true;
                localStorageArr.forEach(deleteStorage);
                function deleteStorage(itemStorage,index){
                    if(itemStorage.name == item.getAttribute('name')){
                        delete localStorageArr[index];
                    }
                }
                localStorageArr = localStorageArr.filter(function( element ) {
                    return element !== undefined;
                });
                localStorage.setItem('cart',JSON.stringify(localStorageArr));
                show_quantity_and_price_mini_cart_wrapper();
            }
        }
    }
}
// show quantity and price mini_cart_wrapper
function show_quantity_and_price_mini_cart_wrapper (){
    var arrList = JSON.parse(localStorage.getItem('cart'));
    var count_cart_item = arrList.length;
    document.querySelector('.cart_count').innerText = count_cart_item
    var price = 0;

    arrList.forEach(sum_price)
    function sum_price(item,index){
        var price_item = item.price
        price_item = price_item.slice(1);
        price_item = Number(price_item);
        price += price_item*Number(item.quantity);
    }
    document.querySelector('.cart_price').innerText = price;
}
show_quantity_and_price_mini_cart_wrapper();