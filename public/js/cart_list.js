var listItem = document.querySelector('.cart_page').children[0].children[1];
var sum_total = 0;
// show item---------------------------
if (localStorage.getItem('cart')) {
    var arrStorage = JSON.parse(localStorage.getItem('cart'));
    arrStorage.forEach(list)
    function list(item, index) {
        var form_element = ` 
            <td class="product_remove" onclick="remove_product('product_item_${index}','${item.name}',${(Number(item.price.slice(1)) * Number(item.quantity))})"><a href="#"><i class="fa fa-trash-o"></i></a></td>
            <td class="product_thumb"><a href="#"><img src="${item.img}" alt=""></a></td>
            <td class="product_name"><a href="#"><input type="text" name="id_product[]" value="${item.id_product}" hidden> ${item.name}</a></td>
            <td class="product-price">${item.price_origin}</td>
            <td class="product_sale"><input type="text" name="price[]" value="${item.price.slice(1)}" hidden>${item.price}</td>
            <td class="product_quantity"><label>Quantity</label><input name='quantity[]' id='product_quantity_${index}' min="1" max="100" value="${item.quantity}" type="number" onchange="product_total('${item.price}','product_quantity_${index}','product_total_${index}')"></td>
            <td class="product_total" id='product_total_${index}'>$${(Number(item.price.slice(1)) * Number(item.quantity))}</td>
            <td class="product_sale" hidden><input type="text" name="sale[]" value="${item.sale_id}" hidden>${item.sale_id}</td>
        `
        var element = document.createElement('tr');
        element.setAttribute('name', 'product_item_' + index)
        element.innerHTML = form_element;
        listItem.appendChild(element);
        sum_total += (Number(item.price.slice(1)) * Number(document.getElementById('product_quantity_' + index).value));
        document.querySelectorAll('.cart_amount')[0].innerText = '$' + sum_total;
        document.querySelectorAll('.cart_amount')[2].innerText = '$' + (sum_total + 20);
    }
    // total price of all product----------------------------------
    function product_total(price, nameInput, nameTotal) {
        price = price.slice(1);
        price = Number(price);
        quantity = Number(document.getElementById(nameInput).value);
        document.getElementById(nameTotal).innerText = '$' + price * quantity;
        document.querySelectorAll('.cart_amount')[0].innerText = '$' + (sum_total + (price * quantity));
        document.querySelectorAll('.cart_amount')[2].innerText = '$' + (sum_total + 20 + (price * quantity));
    }
    // remove_product in cart list-------------------------
    function remove_product(nameTr, productName,total) {
        document.getElementsByName(nameTr)[0].hidden = true;
        if (localStorage.getItem('cart')) {
            arrStorage.forEach(deleteItem);
            function deleteItem(item, index) {
                if (item.name == productName) {
                    delete arrStorage[index];
                    sum_total = sum_total-total;
                    document.querySelectorAll('.cart_amount')[0].innerText = '$' + sum_total;
                    if(sum_total == 0){
                        document.querySelectorAll('.cart_amount')[2].innerText = '$'+0;
                    }
                    else{
                        document.querySelectorAll('.cart_amount')[2].innerText = '$' + (sum_total+20);
                    }
                }
            }
            arrStorage = arrStorage.filter(function (element) {
                return element !== undefined;
            });
            localStorage.setItem('cart', JSON.stringify(arrStorage));
        }
    }
    // update product in cart list ------------------------------
    document.querySelector('.cart_submit').onclick = function () {
        arrStorage.forEach(getListCart);
        function getListCart(item, index) {
            product_field_quantity = document.getElementById('product_quantity_' + index).value;
            if (product_field_quantity != item.quantity) {
                    var data_push =
                        {
                            "name": item.name,
                            "price": item.price,
                            "price_origin": item.price_origin,
                            'sale_id': item.sale_id,
                            'id_product':id_product,
                            'quantity': product_field_quantity,
                            "img": item.image
                        }
                    ;
                arrStorage[index] = data_push;
            }
        }
        localStorage.setItem('cart',JSON.stringify(arrStorage));
        
    }
}