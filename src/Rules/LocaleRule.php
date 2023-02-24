<?php

namespace LucasGiovanny\FilamentInlineTranslateField\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Arr;

class LocaleRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_array($value)) {
            $fail('The :attribute strucutre is invalid.');
        }

        if (count($value) !== count(config('locale.available_locales'))) {
            $fail('The :attribute must have the same number of locales as the available locales.');
        }

        if (! Arr::has($value, config('locale.available_locales'))) {
            $fail('The :attribute must have the same locales as the available locales.');
        }

        if (count(array_filter($value)) !== count($value)) {
            $fail('The :attribute must have a value for each locale.');
        }
    }
}
