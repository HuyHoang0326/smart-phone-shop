<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'permissions'
    ];

    public function loadList($param = []){
        $query = DB::table($this->table)->select($this->fillable)->get();
        return $query;
    }

    public function saveNew($param){
        $data = array_merge($param["cols"],[
            'password' => Hash::make($param['cols']['password'])
            
        ]);
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
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
