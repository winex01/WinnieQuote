# WinnieQuote

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

Laravel package that generates random programming quotes.

## Installation

Via Composer

``` bash
$ composer require winnie/winniequote
```
Add service provider at `config/app.php` if you're using Laravel 5.4 and below. Latest Laravel versions have auto dicovery and automatically add service provider.

```php
'providers' => [
    ...
    Winnie\\WinnieQuote\\WinnieQuoteServiceProvider::class
    ...
];
```
Publish config files.(optional) If you want to add your own quote just add it at the last row of array at `config/winniequote.php` or you can fork this package and contribute.
```sh
$ php artisan vendor:publish --provider='Winnie\WinnieQuote\WinnieQuoteServiceProvider'
```

## Usage

Helper function
```blade

{{ quote_programming() }} //generate single random quote 
echo quote_programming(); //generate single random quote

{{ quote_programming(2) }} //generate 2 random quotes in array form 
echo quote_programming(3); //generate 3 random quotes in array form
```
Facade
```blade

{{ WinnieQuote::programming() }} //generate single random quote 
echo WinnieQuote::programming(); //generate single random quote

{{ WinnieQuote::programming(4) }} //generate 4 random quotes in array form
echo WinnieQuote::programming(5); //generate 5 random quotes in array form
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Todo

Create test

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Winnie A. Damayo][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/winnie/winniequote.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/winnie/winniequote.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/winnie/winniequote/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/winnie/winniequote
[link-downloads]: https://packagist.org/packages/winnie/winniequote
[link-travis]: https://travis-ci.org/winnie/winniequote
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/winex01
[link-contributors]: ../../contributors
