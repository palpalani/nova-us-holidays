
# USA Holidays for Laravel nova.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/palpalani/usholidayscard.svg?style=flat-square)](https://packagist.org/packages/palpalani/usholidayscard)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/palpalani/usholidayscard/run-tests?label=tests)](https://github.com/palpalani/usholidayscard/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/palpalani/usholidayscard/Check%20&%20fix%20styling?label=code%20style)](https://github.com/palpalani/usholidayscard/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/palpalani/usholidayscard.svg?style=flat-square)](https://packagist.org/packages/palpalani/usholidayscard)

Prinits list of upcoming holidays for Laravel Nova card.

## Installation

You can install the package via composer:

```bash
composer require palpalani/us-holidays-card
```

## Usage

```php
$usHolidaysCard = new palPalani\UsHolidaysCard();
echo $usHolidaysCard->echoPhrase('Hello, palPalani!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [palPalani](https://github.com/palpalani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
