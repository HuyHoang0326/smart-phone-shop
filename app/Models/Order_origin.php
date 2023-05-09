<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order_origin extends Model
{
    use HasFactory;

    protected $table = 'Order_origin';

    protected $fields = [
        'id',
        'id_user',
        'status',
        'created_at',	
        'updated_at'

    ];

    public function loadList($param=[]){
        $query = DB::table($this->table)->select($this->fields)->get();
        return $query;
    }

    public function saveNew ($param){
        unset($param['cols']['_token']);
        if(!isset($param['cols'])){
            $data = $param;
            $res = DB::table($this->table)->insertOrIgnore($data);
        }
        else{
            $data = array_merge($param["cols"]);
            $res = DB::table($this->table)->insertGetId($data);
        }
        return $res;
    }

    public function loadOne ($id){
        $query = DB::table($this->table)->where('id',$id);
        $obj = $query->first();
        return $obj;
    }
    
    public function saveUpdate($params){
        if (empty($params['cols']['id'])){
        }
        $dataUpdate = [];
        foreach($params['cols'] as $colName =>$val){
            if($colName == 'id') continue;
            $dataUpdate[$colName] = (strlen($val) == 0)? null:$val;
        }
        $res = DB::table($this->table)->where('id',$params['cols']['id'])->update($dataUpdate);
        return $res;
    }

    public function Order_at_time($id){
        $res = DB::table('order')->where('id_order_origin',$id)->get();
        return $res;
    }
    
    public function order_at_user($id){
        $res = DB::table('order_origin')->where('id_user',$id)->get();
        return $res;
    }
}
