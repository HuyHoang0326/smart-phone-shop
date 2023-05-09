<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Order_origin;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysqli;

class CreateOrderController extends Controller
{
    private $v;
    
    function __construct(){
       $this->v = []; 
    }
    function index (Request $request ){
        // add new order_origin
        $id_user = Auth::user()->id;
        $param = [];
        $param['cols']['id_user'] = $id_user;
        $param['cols']['status'] = 'unconfirmed';
        $modleTest = new Order_origin();
        $id_order_origin = $modleTest->saveNew($param);
        // connect Database
        $host = 'localhost';
        $dbname = 'root';
        $pass = '';
        $dbName = 'smart-phone-shop';
        $conn = new mysqli($host,$dbname,$pass,$dbName);
        // add new order
        $param['cols'] = $request->post();
        for ($i=0; $i < count((array)$param['cols']['id_product']); $i++) { 
            $id_product = $param['cols']['id_product'][$i];
            $price = $param['cols']['price'][$i];
            $quatity = $param['cols']['quantity'][$i];
            $sale = $param['cols']['sale'][$i];
            
            $query = "INSERT INTO `Order` (`id_order_origin`,`id_product`,`id_user`,`quatity`,`sale`,`price`,`status`)
            VALUES ($id_order_origin,$id_product,$id_user,$quatity,$sale,$price,'unconfirmed')";

            $product = DB::table('Product')->where('id',$id_product)->get();
            $dataUpdate = [];
            foreach($product[0] as $colName =>$val){
                if($colName == 'id') continue;
                $dataUpdate[$colName] = (strlen($val) == 0)? null:$val;
            }
            $sum_quantity = $dataUpdate['quantity'] - $quatity;
            if($sum_quantity >= 0){
                $conn->query($query);
                $dataUpdate['quantity'] = $sum_quantity;
                DB::table('product')->where('id',$id_product)->update($dataUpdate);
            }
            else{
                echo('<script>alert('.'sản phẩm còn '.$dataUpdate['quantity'].'/'.$quatity.')</script>');
            }
        }
        $conn->close();
        return redirect()->route('my-account-order');
    }
}
