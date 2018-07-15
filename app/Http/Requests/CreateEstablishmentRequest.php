<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEstablishmentRequest extends FormRequest
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
        
        return  [
            'name' => 'required|max:191',
            'contact_person' => 'required|max:191',
            'contact_number' => 'required|numeric|min:6',
            'address' => 'required|max:191',
            'liquor_license' => 'required|max:191',
            'hs_license' => 'required|max:191',
            'latitude' => 'required|max:191',
            'longitude' => 'required|max:191',
            'main_picture_url' => 'required',
        ];
    }
}
