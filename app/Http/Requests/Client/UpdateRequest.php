<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
    public function rules(): array
    {
        return [
      'name' => 'string',
      'email' => 'string',
      'address1' => 'string',
      'address2' => 'string',
      'city' => 'string',
      'state' => 'string',
      'postal_code' => 'integer',
    ];
    }
}
