<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $v;
    function __construct(){
       $this->v = [];
    }
    public function index(Request $request){
        $objCategory = new Category();
        $this->v['category'] = $objCategory->loadList();
        $test = new Product();
        $this->v['param'] = $request->all();
        return view('client/checkout',$this->v);
    }
}
