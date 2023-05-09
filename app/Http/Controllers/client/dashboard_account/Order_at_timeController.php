<?php

namespace App\Http\Controllers\client\dashboard_account;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_origin;
use App\Models\Product;
use Illuminate\Http\Request;

class Order_at_timeController extends Controller
{
    private $v;
    function __construct(){
        $this->v = [];
    }
    function index(Request $request,$id){
        $objOder = new Order_origin();
        $this->v['order_at_time'] = $objOder->Order_at_time($id);
        $objProduct = new Product();
        $this->v['product'] = [];
        foreach($this->v['order_at_time'] as $item){
            $id_product = $item->id_product;
            array_push( $this->v['product'],$objProduct->loadOne($id_product));
        }
        return view('client.dashboard_account.order_at_time',$this->v);
    }
}
