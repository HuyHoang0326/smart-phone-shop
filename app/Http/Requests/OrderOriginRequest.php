<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderOriginRequest extends FormRequest
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
                            'id_user'=>'exists:User,id',
                            'status'=>'required',
                        ];
                        break;
                    case 'update' :
                        $rules = [
                            'id_user'=>'exists:User,id',
                            'status'=>'required',
                            ];
                            break;
                    default:
                        break;
                }
                break;
        endswitch;
        return $rules;
    }
}
