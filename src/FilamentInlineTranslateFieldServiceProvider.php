<?php

namespace LucasGiovanny\FilamentInlineTranslateField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentInlineTranslateFieldServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-inline-translate-field';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-inline-translate-field' => __DIR__.'/../resources/dist/filament-inline-translate-field.css',
    ];

    protected array $scripts = [
        'plugin-filament-inline-translate-field' => __DIR__.'/../resources/dist/filament-inline-translate-field.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-inline-translate-field' => __DIR__ . '/../resources/dist/filament-inline-translate-field.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
