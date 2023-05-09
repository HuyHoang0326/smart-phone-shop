<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;

class BlogController extends Controller
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
        return view('client/blog',$this->v);
    }
}
