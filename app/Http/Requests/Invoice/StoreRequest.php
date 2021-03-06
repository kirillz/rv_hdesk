<?php

namespace App\Http\Requests\Invoice;

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
          'invoice_number' => 'string',
          'invoice_status_id' => 'string',
          'discount' => 'string',
          'invoice_date' => 'string',
          'pay_due_date' => 'string',
          'terms' => 'string',
          'tax_name1' => 'string',
          'tax_rate1' => 'string',
          'amount' => 'string',
          'balance' => 'string',
          'is_deleted' => 'integer',
          'is_recurring' => 'integer',
        ];
    }
}
