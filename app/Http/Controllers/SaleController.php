<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Models\Sale;
use App\Models\Sale_origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    private $v;
    protected $fields = [
        'id',
        'id_product',
        'id_sale',
        'created_at',
        'updated_at'
    ];

    private $method_route = 'route_BackEnd_saleList';
    protected $page = 'Sale';
    function __construct(){
        $this->v = [];
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $this->v['page'] = $this->page;
        $param = $request->all();
        $obj = new Sale();
        $this->v['list']['fields'] = $this->fields;
        $this->v['list']['item'] = $obj->loadList($param);
        return view('test.list',$this->v);
    }

    public function detail ($id){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'detail';
        $this->v['fields'] = $this->fields;
        $objItem = new Sale;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function update($id, SaleRequest $request){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'update';
        $this->v['fields'] = $this->fields;
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        $objItem = new Sale;
        $param['cols']['price'] = $objItem->loadPrice($_POST['id_sale']);
        $param['cols']['status'] = $objItem->loadStatus($_POST['id_sale']);
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(SaleRequest $request){
        $this->v['page'] = 'Sale';
        $method_route = 'route_BackEnd_saleList';
        $this->v['_title'] = "create Sale";
        $this->v['fields'] = $this->fields;
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Sale;
           $param['cols']['price'] = $modleTest->loadPrice($_POST['id_sale']);
           $param['cols']['status'] = $modleTest->loadStatus($_POST['id_sale']);
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

}
