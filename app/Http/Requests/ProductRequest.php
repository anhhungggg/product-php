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
     * @return array
     */
    public function rules()
    {
        return [
            'sku'=>'required|unique:products,sku',
            'name'=>'required',
            'price'=>'required|numeric|gte:0',
            'productType'=>'required',
            'width'=>'required_with:height,length',
            'length'=>'required_with:width,length',
            'height'=>'required_with:width,height',
        ];
    }

    public function messages()
    {
        return [
            'sku.required'=>'sku is required',
            'sku.unique'=>'sku already exist',
            'name.required'=>'name is required',
            'price.required'=>'price is required',
            'price.numeric'=>'price has to be a number',
            'price.gte:0'=>'price should be non-negative number',
            'product_type.required'=>'product type is required',
            'attribute'=>'attributes are required',
        ];
    }
}
