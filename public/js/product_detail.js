function add_product_to_cart(){
    var img = document.getElementsByName('primary_img')[0].src;
    var name = document.getElementsByName('product_name')[0].innerText;
    var old_price = document.getElementsByName('old_price')[0].innerText;
    var current_price = document.getElementsByName('current_price')[0].innerText;
    var sale_product = document.getElementsByClassName('sale_product')[0].innerText;
    var product_quantity = document.getElementsByName('product_quantity')[0].value;
    var id_product = document.querySelector('.id_product').innerText;
    var data =
            [{
                "name": name,
                "price": current_price,
                "price_origin": old_price,
                'sale_id':sale_product,
                'id_product':id_product,
                'quantity':product_quantity,
                "img": img
            }]
    ;
    var dataPush = {
        "name": name,
        "price": current_price,
        "price_origin": old_price,
        'sale_id':sale_product,
        'id_product':id_product,
        'quantity':product_quantity,
        "img": img
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
                item.quantity = (Number(item.quantity)+Number(product_quantity));
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
