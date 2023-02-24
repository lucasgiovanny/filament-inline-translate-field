<?php

namespace LucasGiovanny\FilamentInlineTranslateField\Forms\Components\Fields;

use Filament\Forms\Components\KeyValue;
use LucasGiovanny\FilamentInlineTranslateField\Rules\LocaleRule;

class InlineTranslateField extends KeyValue
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->keyLabel(__('filament-inline-translate-field::filament-inline-translate-field.key_label'))
            ->disableAddingRows()
            ->disableDeletingRows()
            ->disableEditingKeys()
            ->default(array_fill_keys(config('filament-inline-translate-field::filament-inline-translate-field.available_locales'), ''))
            ->valueLabel(__('filament-inline-translate-field::filament-inline-translate-field.value_label'))
            ->rules([new LocaleRule]);
    }
}
