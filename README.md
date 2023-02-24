# Create a beautiful key-value field to allow users to enter all possible language values for a fiel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lucasgiovanny/filament-inline-translate-field.svg?style=flat-square)](https://packagist.org/packages/lucasgiovanny/filament-inline-translate-field)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lucasgiovanny/filament-inline-translate-field/run-tests?label=tests)](https://github.com/lucasgiovanny/filament-inline-translate-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lucasgiovanny/filament-inline-translate-field/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lucasgiovanny/filament-inline-translate-field/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lucasgiovanny/filament-inline-translate-field.svg?style=flat-square)](https://packagist.org/packages/lucasgiovanny/filament-inline-translate-field)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lucasgiovanny/filament-inline-translate-field
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-inline-translate-field-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-inline-translate-field-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-inline-translate-field-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-inline-translate-field = new LucasGiovanny\FilamentInlineTranslateField();
echo $filament-inline-translate-field->echoPhrase('Hello, LucasGiovanny!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lucas Giovanny](https://github.com/lucasgiovanny)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
