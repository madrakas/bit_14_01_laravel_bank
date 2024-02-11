<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTransactionRequest extends FormRequest
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
            'time' => 'required|string|min:19|max:19',
            'fromAccountId' => 'integer',
            'toAccountId' => 'integer',
            'fromIBAN' => 'required|string|regex:/^[A-Z]{2}-[0-9]{17}$/',
            'toIBAN' => 'required|string|regex:/^[A-Z]{2}-[0-9]{17}$/',
            'fromName' => 'required|string|min:3|max:64',
            'ToName' => 'required|string|min:3|max:64',
            'amount' => 'required|numeric',
            'currency' => 'required|string|min:2|max:4',
        ];
    }
}
