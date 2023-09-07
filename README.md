# Simple User Resource for filamentphp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rupadana/filament-user-resource.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-user-resource)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/rupadana/filament-user-resource/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/rupadana/filament-user-resource/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/rupadana/filament-user-resource/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/rupadana/filament-user-resource/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rupadana/filament-user-resource.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-user-resource)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rupadana/filament-user-resource
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-user-resource-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-user-resource-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-user-resource-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentUserResource = new Rupadana\FilamentUserResource\Filament();
echo $filamentUserResource->echoPhrase('Hello, Rupadana!');
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

- [Rupadana](https://github.com/rupadana)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
