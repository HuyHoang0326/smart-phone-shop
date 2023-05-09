<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleOriginRequest;
use App\Models\Sale_origin;
use App\Http\Requests\StoreSale_originRequest;
use App\Http\Requests\UpdateSale_originRequest;
use Illuminate\Http\Request;

class SaleOriginController extends Controller
{
    private $v;
    protected $fields = [
        'id',
        'price',	
        'description',
        'status',
        'created_at',
        'updated_at',
        'cancel_at'
    ];

    private $method_route = 'route_BackEnd_Sale_Origin_List';
    protected $page = 'Sale_Origin';
    function __construct(){
        $this->v = [];
    }

    public function index (Request $request){
        $this->v['_title'] = $this->page;
        $this->v['page'] = $this->page;
        $param = $request->all();
        $obj = new Sale_origin;
        $this->v['list']['fields'] = $this->fields;
        $this->v['list']['item'] = $obj->loadList($param);
        return view('test.list',$this->v);
    }

    public function detail ($id){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'detail';
        $this->v['fields'] = $this->fields;
        $objItem = new Sale_origin;
        $this->v['objItem'] = $objItem->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function update($id, SaleOriginRequest $request){
        $this->v['page'] = $this->page;
        $this->v['_title'] = 'update';
        $this->v['fields'] = $this->fields;
        $param['cols'] = $request->post();
        $param['cols']['id']= $id;
        unset($param['cols']['_token']);
        $objItem = new Sale_origin;
        $this->v['objItem'] = $objItem->saveUpdate($param);
        return redirect()->route($this->method_route);
    }

    public function add(SaleOriginRequest $request){
        $this->v['page'] = $this->page;
        $this->v['_title'] = "create Sale";
        $this->v['fields'] = $this->fields;
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $modleTest = new Sale_origin;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route($this->method_route);
           }
           elseif ($res > 0){
                return redirect()->route($this->method_route);
           }
           else{
           }
        }
        return view('test.add',$this->v);
    }
}
