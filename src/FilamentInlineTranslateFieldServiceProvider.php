<?php

namespace LucasGiovanny\FilamentInlineTranslateField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentInlineTranslateFieldServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-inline-translate-field';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations();
    }
}
