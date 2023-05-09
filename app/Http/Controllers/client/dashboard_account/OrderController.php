<?php

namespace App\Http\Controllers\client\dashboard_account;

use App\Http\Controllers\Controller;
use App\Models\Order_origin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private $v;
    function __construct(){
        $this->v = [];
    }
    function index(){
        $objUser = Auth::user();
        $objOder_origin = new Order_origin();
        $this->v['order_origin'] = $objOder_origin->order_at_user($objUser->id);
        return view('client.dashboard_account.order',$this->v);
    }
}
