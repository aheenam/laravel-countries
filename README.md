Laravel Countries
===

This package is a Laravel Wrapper for the [country-list](https://github.com/umpirsky/country-list) package by [Saša Stamenković](https://github.com/umpirsky). It was created as a fallback to [antonioribeiro/countries](https://github.com/antonioribeiro/countries) which has PHP 7 and Laravel 5.3 as it minimum requirements.

> **Note**: that this package does NOT contain the whole functionality as antonioribeiro/countries but only provides the name of the countries

---

Installation
---
You can install the package via composer:

```bash
$ composer require aheenam/laravel-translatable
```

Then add the service provider must be registered:

```php
// config/app.php
'providers' => [
    // ...
    Aheenam\Countries\CountriesServiceProvider::class,
];
```

Also add Countries to your aliases list
```php
// config/app.php
'aliases' => [
    // ...
    'Countries' => \Aheenam\Countries\Facades\Countries::class,
];
```

Usage
---
There are not that much methods for now. If you are interested in more, feel free to add them and send us a PR.

### Get All Countries

```php
<?php

Countries::all();
```

returns a list of all countries in all languages currently loaded. By default the current language set in `App::setLocale()` is populated.

If you want to get the countries in another language, use

```php
<?php
App::setLocale('en'):
$countries = Countries::allIn();
$countries->get('en'); // returns a collection with all countries in English
```

### Get A specific country
To get a specific country call the `get()` method with the language key, you are looking for

```php
<?php
App::setLocale('en'):
Countries::get('de'); // returns "Germany"
```

If you want to get the language in a specific language, just add the language code as the second parameter.

```php
<?php
App::setLocale('en'):
Countries::get('de', 'de'); // returns "Deutschland"
```

Changelog
---
Check [CHANGELOG](CHANGELOG.md) for the changelog

Testing
---

To run tests use
```bash
$ composer test
```
or 
```bash
$ composer test:windows
```
on windows machines.

Contributing
---
*soon*

Security
---
If you discover any security related issues, please email rathes@aheenam.com or use the issue tracker of GitHub.

About Aheenam
---
Aheenam is a small company from NRW, Germany creating custom digital solutions. Visit [our website](https://aheenam.com) to find out more about us.

License
---
The MIT License (MIT). Please see [License File](LICENSE)
for more information.