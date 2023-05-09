<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartegoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    private $v;
    protected $fields = [
        'id',
        'name',
        'quantity'
    ];

    private $method_route = 'route_BackEnd_categoryList';
    protected $page = 'Category';
    function __construct(){
        $this->v = [];
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $this->v['page'] = $this->page;
        $param = $request->all();
        $obj = new Category;
        $this->v['list']['fields'] = $this->fields;
        $this->v['list']['item'] = $obj->loadList($param);
        $this->count_product($this->v['list']['item']);
        return view('test.list',$this->v);
    }

    public function detail ($id){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'detail';
        $this->v['fields'] = $this->fields;
        $objItem = new Category;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function update($id, CartegoryRequest $request){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'update';
        $this->v['fields'] = $this->fields;
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        $objItem = new Category;
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(CartegoryRequest $request){
        $this->v['page'] = 'Category';
        $method_route = 'route_BackEnd_categoryList';
        $this->v['_title'] = "create category";
        $this->v['fields'] = $this->fields;
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Category;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route($method_route);
           }
           elseif ($res > 0){
                return redirect()->route( $method_route);
           }
           else{
           }
        }
        return view('test.add',$this->v);
    }

    public function count_product($param){
        $queryProductModel = new Category;
        $queryProduct = $queryProductModel->count_product();
        foreach($queryProduct as $queryProductItem){
            foreach($param as $paramItem){
                if($queryProductItem->id == $paramItem->id && $queryProductItem->quantity != $paramItem->quantity){
                    DB::table($this->page)->where('id',$queryProductItem->id)->update((array)$queryProductItem);
                }
            }
        }

    }
}
?>