<?php

namespace App\Http\Requests\Task;

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
      'task_id' => 'integer',
      'name' => 'string',
      'description' => 'string',
      'address2' => 'string',
      'start_date' => 'date',
      'due_date' => 'date',
    ];
    }
}
