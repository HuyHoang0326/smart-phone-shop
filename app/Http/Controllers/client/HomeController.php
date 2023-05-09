<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $this->v['sale_total'] = 0;
        return view('client/client_main',$this->v);
    }
}
