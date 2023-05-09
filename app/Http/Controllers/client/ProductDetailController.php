<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    private $v;
    
    protected $fields = [
        'id',
        'name',
        'category',
        'price',
        'quantity',
        'sale',
        'description',
        'image'
    ];
    function __construct(){
        $this->v = [];
    }
    function detail ($id){
        $this->v['page'] = 'Product';
        $this->v['_title'] = 'detail';
        $objProduct = new Product();
        $this->v['objItem'] = $objProduct->loadOne($id);
        $this->v['fields'] = $this->fields;
        $objsale = new Sale();
        $this->v['saleObj'] = $objsale;
        $this->v['sale'] = $objsale->loadList();
        return view('client/product-details',$this->v);
    }
}
