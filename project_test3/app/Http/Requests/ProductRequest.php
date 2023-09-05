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
        $rule = [];
    
        $currentAction = $this->route()->getActionMethod();
    
        switch($this->method()):
            case'POSt':
                 switch($currentAction) :
                    case 'add':
                        $rule = [
                            "name"=>"required",
                            "gender"=>"required",
                            "phone"=>"required",
                            "address"=>"required",
                        ];
                        break;
                    endswitch;
                endswitch;
                return $rule;
            }
            public function messages()
            {
                return [
                    //
                    "name.required"=>"nhập đúng tên",
                    "gender.required"=>"nhập đúng",
                    "phone.required"=>"nhập đi",
                    "address.required"=>"có nhập không ?"
    
                ];
            }
}



        