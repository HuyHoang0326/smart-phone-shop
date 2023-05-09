<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_origin;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private $v;
    protected $page = 'home';
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
    public function index (Request $request){
        $test = new Product();
        $this->v['param'] = $request->all();
        $this->v['list']['item'] = $test->loadListProduct($this->v['param']);
        $this->v['list']['fields'] = $this->fields;
        $objCategory = new Category;
        $this->v['category'] = $objCategory->loadList();
        $objsale = new Sale;
        $this->v['sale'] = $objsale->loadList();
        $objUser = Auth::user();
        $objOder_origin = new Order_origin;
        $this->v['order_origin'] = $objOder_origin->order_at_user($objUser->id);
        return view('client/my-account',$this->v);
    }
}
