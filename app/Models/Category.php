<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use League\CommonMark\Extension\Table\Table;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fields = [
        'id',
        'name',
        'quantity'
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

    public function count_product(){
        $queryProduct = DB::table('Product')
                        ->select('category as id',DB::raw('COUNT(id) as quantity'))
                        ->groupBy('category')
                        ->get();
        return $queryProduct;
    }
}
?>
