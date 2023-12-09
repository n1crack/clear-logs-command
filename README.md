# Clear Logs Command for Laravel

A Laravel Artisan command to clear application logs with additional options. The logs cleared by this command are located in the logs directory within the Laravel storage folder. It is a standard practice in Laravel to store logs in this location.

## Installation

Install the package via Composer:

```bash
composer require ozdemir/clear-logs-command
```

The package will be automatically registered by Laravel.


## Usage
#### Clear Logs
To clear all logs in the default logs directory, run the following command:

```bash
php artisan logs:clear
```

## Options
**--dry-run:** Simulate the command without clearing any files.

```bash
php artisan logs:clear --dry-run
```

## License
This package is open-sourced software licensed under the MIT license.

## Contributing
Please read CONTRIBUTING.md for details on our code of conduct, and the process for submitting pull requests to us.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Yusuf Özdemir](https://github.com/n1crack)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
