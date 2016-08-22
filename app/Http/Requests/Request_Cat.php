<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
//use App\Http\Requests\Request_Cat;

class Request_Cat extends Request
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
     * @return array
     */
    public function rules()
    {
        //echo '<pre>';
       // print_r(\Request::all());die();
       $rules = ['cat_name' => 'required'];
            
        return $rules;
    }
}
