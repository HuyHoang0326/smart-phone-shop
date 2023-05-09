<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale_origin extends Model
{
    use HasFactory;

    protected $table = 'Sale_origin';

    protected $fields = [
        'id',
        'price',	
        'description',
        'status',
        'created_at',
        'updated_at',
        'cancel_at'
    ];

    public function loadList($param=[]){
        $query = DB::table($this->table)->select($this->fields)->get();
        return $query;
    }

    public function saveNew ($param){
        unset($param['cols']['_token']); 
        $data = array_merge($param["cols"]);
        $res = DB::table($this->table)->insertGetId($data);
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
}
