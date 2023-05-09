<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $v;
    protected $fields =  [
        'id',
        'name',
        'email',
        'permissions'
    ];
    private $method_route = 'route_Backend_userList';
    private $page = 'User';

    function __construct(){
        $this->v = [];
    }

    function index (Request $request){
        $this->v['page']=$this->page;
        $this->v['param'] = $request->all();
        $users = new User();
        $this->v['list']['item'] = $users->loadList($this->v['param']);
        $this->v['list']['fields'] = $this->fields;
        return view('test.list',$this->v);
    }

    function detail ($id){
        $this->v['page']=$this->page;
        $this->v['_title'] = 'detail';
        $this->v['fields'] = $this->fields;
        $objUser = new User;
        $this->v['objItem'] = $objUser->loadOne($id);
        return view('test.detail',$this->v);
    }

    public function add(UserRequest $request){
        $this->v['page']=$this->page;
        $fields =[ 
        'id',
        'name',
        'email',
        'password',
        'permissions'
    ];
        $this->v['_title'] = "create user";
        $this->v['fields'] = $fields;
        if($request->isMethod('post')){
           $param = [];
           $param['cols'] = $request->post();
           $param['cols']['remember_token'] = $param['cols']['_token'];
           unset($param['cols']['_token']);
           $modleTest = new User;
           $res = $modleTest->saveNew($param);
           if($res == null){
                return redirect()->route('route_BackEnd_User_Add');
           }
           elseif ($res > 0){
                return redirect()->route($this->method_route);
           }
           else{
           }
        }
        return view('test.add',$this->v);
    }

    public function update ($id,UserRequest $request){
        $this->v['page']=$this->page;
        $this->v['_title'] = 'uptate user';
        $param['cols'] = $request->post();
        unset($param['cols']['_token']); 
        $param['cols']['id'] = $id;
        $objuser = new User;
        $objuser->saveUpdate($param);
        return redirect()->route($this->method_route);
    }
}
?>
