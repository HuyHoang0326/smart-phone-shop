<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
                            'name'=>'required|unique:product',
                            'category'=>'required',
                            'price'=>'required',
                            'quantity'=>'required',
                            'sale'=>'exists:Sale_origin,id',
                            'description'=>'required',
                            'image'=>'required'
                        ];
                        break;
                    case 'update' :
                        $rules = [
                            'name'=>'required|unique:product,name,'.$id,
                            'category'=>'required',
                            'price'=>'required',
                            'quantity'=>'required',
                            'sale'=>'exists:Sale_origin,id',
                            'description'=>'required',
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
