
# USA Holidays for Laravel nova.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/palpalani/us-holidays-card.svg?style=flat-square)](https://packagist.org/packages/palpalani/us-holidays-card)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/palpalani/us-holidays-card/run-tests?label=tests)](https://github.com/palpalani/us-holidays-card/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/palpalani/us-holidays-card/Check%20&%20fix%20styling?label=code%20style)](https://github.com/palpalani/us-holidays-card/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/palpalani/us-holidays-card.svg?style=flat-square)](https://packagist.org/packages/palpalani/us-holidays-card)

A Laravel Nova card that displays the list of upcoming USA holidays.

## Requirements
    PHP 8.0 or higher
    Nova 4^3

## Installation

You can install the package via composer:

```bash
composer require palpalani/us-holidays-card
```

## Usage

To add this card to the dashboard or resource add it to the cards method like this:

```php
namespace App\Nova\Dashboards;

use palPalani\UsHolidaysCard;
use Laravel\Nova\Dashboard;

class Main extends Dashboard
{
    public function cards(): array
    {
        $cards = [
            new UsHolidaysCard(),
        ];
    }
}
```

## Testing

```bash
composer test
```

## Feedback

If you have any feedback, comments or suggestions, please feel free to open an issue within this repository.



## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Thanks to

[Carbon Support for US Holidays](https://github.com/geoffreyrose/us-holidays), so many thanks to its author and contributors!

## Credits

- [palPalani](https://github.com/palpalani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
