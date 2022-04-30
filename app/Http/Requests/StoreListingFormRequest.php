<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreListingFormRequest extends FormRequest
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
            'company'       => ['required', Rule::unique('listings', 'company')],
            'title'         => 'required',
            'location'      => 'required',
            'email'         => 'required|email',
            'website'       => 'required',
            'tags'          => 'required',
            'description'   => 'required',
        ];
    }
}
