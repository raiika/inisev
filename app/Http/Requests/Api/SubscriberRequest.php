<?php

namespace App\Http\Requests\Api;

use App\Services\Domain;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SubscriberRequest extends FormRequest
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
    public function rules(Domain $domain): array
    {
        return [
            'email' => [
                'required',
                'email',
                Rule::unique('subscribers')->where(fn (Builder $query) => $query->where('domain', $domain->get()))
            ],
            'domain' => 'nullable'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.unique' => 'You already subscribed.'
        ];
    }
}
