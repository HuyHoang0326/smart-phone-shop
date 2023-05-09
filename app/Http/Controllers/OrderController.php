<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $v;
    public $fields = [
        'id',
        'id_order_origin',
        'id_product',	
        'id_user',	
        'quatity',
        'sale',	
        'price',
        'status',
        'created_at',
        'updated_at'
    ];

    private $method_route = 'route_BackEnd_OrderList';
    public $page = 'Order';
    function __construct(){
        $this->v = [];
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $this->v['page'] = $this->page;
        $param = $request->all();
        $obj = new Order;
        $this->v['list']['fields'] = $this->fields;
        $this->v['list']['item'] = $obj->loadList($param);
        return view('test.list',$this->v);
    }

    public function detail ($id){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'detail';
        $this->v['fields'] = $this->fields;
        $objItem = new Order;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function update($id, OrderRequest $request){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'update';
        $this->v['fields'] = $this->fields;
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        $objItem = new Order;
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(OrderRequest $request){
        $this->v['page'] = 'Order';
        $method_route = 'route_BackEnd_OrderList';
        $this->v['_title'] = "create order";
        $this->v['fields'] = $this->fields;
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Order;
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

    public function save_update_status(Request $request1){
        $this->v['page'] = 'Order';
        $objStatus = new Order;
        dd($request1);
    }
}
