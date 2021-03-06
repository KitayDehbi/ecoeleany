<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'nom' => 'required|min:5|max:255',
             'image_produit' => 'required',
             'description' => 'required',
             'contenance' => 'required',
             'prix' => 'required'


        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nom.required'=> 'champ obligatoire',
            'prix.required'=> 'champ obligatoire',
            'description.required'=> 'champ obligatoire',
            'image_produit.required'=> 'selectionnez une image',
            'contenance.required'=> 'champ obligatoire',
        ];
    }
}
