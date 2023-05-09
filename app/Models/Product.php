<?php

namespace App\Models;

use App\Http\Requests\TestRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'id',
        'name',
        'category',
        'price',
        'quantity',
        'sale',
        'description',
        'image'
    ];

    public function loadListProduct($param = []){
        $query = DB::table('product')->select($this->fillable)->get();
        foreach($query as $product){
            $saleArr = [];
            foreach($this->product_sale($product->id) as $sale){
                array_push($saleArr,$sale->id_sale);
                $saleArr = array_unique($saleArr);
            }
            $product->sale = implode(",",$saleArr);;
        }
        return $query;
    }
    public function saveNew($param){
        unset($param['cols']['_token']); 
        $data = array_merge($param["cols"]);
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }

    public function loadOne($id,$param = []){
        $query = DB::table($this->table)->where('id',$id);
        $obj = $query->first();
        return $obj;
    }

    public function saveUpdate($params){
        if (empty($params['cols']['id'])){
            Session::push('errer','không xác định bản gi');
        }
        $dataUpdate = [];
        foreach($params['cols'] as $colName =>$val){
            if($colName == 'id') continue;
            $dataUpdate[$colName] = (strlen($val) == 0)? null:$val;
        }
        $res = DB::table($this->table)->where('id',$params['cols']['id'])->update($dataUpdate);
        return $res;
    }

    public function product_category_list ($id){
        $query = DB::table('product')->where('category',$id)->get();
        return $query;
    }

    public function product_sale($product){
        $query = DB::table('sale')->select('id_sale')->where('id_product',$product)->get();
        return $query;
    }
}
?>
