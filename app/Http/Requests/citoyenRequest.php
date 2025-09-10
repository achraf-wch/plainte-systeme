<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class citoyenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'CIN'=>'Required|string|max:10|unique:citoyens',
                'nom'=> 'required|string',
                'prenom'=> 'required|string',
                'password' => 'required|string|min:4',
                'adress'=> 'required|string',
                 
        ];
    }


}
