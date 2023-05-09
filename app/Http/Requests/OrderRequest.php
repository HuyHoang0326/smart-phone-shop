<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        $currenAction = $this->route()->getActionMethod();
        $id = $this->route()->id;
        // name method
        switch($this->method()):
            case'POST':
                switch($currenAction){
                    case 'add' :
                        $rules = [
                            'id_order_origin'=>'required|exists:Order_origin,id',
                            'id_product'=>'required|exists:Product,id',
                            'id_user'=>'required|exists:User,id',	
                            'quatity'=>'required',
                            'sale'=>'required|exists:Order_origin,id',	
                            'price'=>'required',
                            'status'=>'required'	
                        ];
                        break;
                    case 'update' :
                        $rules = [
                            'id_product'=>'required|exists:Product,id',
                            'id_user'=>'required|exists:User,id',	
                            'quatity'=>'required',
                            'sale'=>'required|exists:Order_origin,id',	
                            'price'=>'required',
                            'status'=>'required'	
                        ];
                            break;
                    default:
                        break;
                }
                break;
        endswitch;
        return $rules;
    }
    public function messages(){
        $id = $this->route()->id;
        return [
            'email.required'=>'nhập email',
            'name.required'=>'nhập name',
            'email.unique' => 'email đã tồn tại'
        ];
    }
}
