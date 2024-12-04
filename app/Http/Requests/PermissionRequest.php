<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PermissionRequest extends FormRequest
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
            'permission_id' => [
                'required',
                Rule::unique('role_user')
                    ->where('role_id', $this->role_id), // Ensures uniqueness for the same role_id
            ],
            'role_id' => 'required|exists:roles,id',
        ];        
    }

    public function message(): array
    {
        return [
            'permission_id.required' => 'Permission field is required.',
            'role_id.required' => 'Role field is required.',
        ];        
    }
}
