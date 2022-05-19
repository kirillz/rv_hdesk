<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'task_start_date' => 'string',
            'task_due_date' => 'string',
            'task_end_date' => 'string',
        ];
    }
}
