<?php
// パスワードのバリデーションルールを定義

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        // return ['required', 'string', Password::default(), 'confirmed'];
        return ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()];
    }
}
