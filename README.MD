# Laravel TransIP Rest Client - Wrapper

A very easy way to use the TransIP Rest API in your Laravel 6.x & 7.x Project.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/intvent/transip-laravel.svg?style=flat-square)](https://packagist.org/packages/intvent/transip-laravel)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/intvent/transip-laravel.svg?style=flat-square)](https://packagist.org/packages/intvent/transip-laravel)

# Installation

First add your API credentials into your .env file.
```bash
TRANSIP_LOGIN=<your_login_name>
TRANSIP_PRIVATE_KEY="-----BEGIN PRIVATE KEY-----<your_private_key_here-----END PRIVATE KEY-----"

# Use the token only with whitelisted IP's (true or false) defaults to true.  
TRANSIP_WHITELIST_ONLY=false
```

# Install through composer

```bash
composer require intvent/transip-laravel
```

Next up the service provider must be registered:
```php
'providers' => [
    ...
    IntVent\TransIPLaravel\TransIPServiceProvider::class,
];
```

Optionally the IntVent\TransIPLaravel\GoogleCalendarFacade must be registered:
```php
'aliases' => [
	...
    'TransIP' => IntVent\TransIPLaravel\TransIPFacade::class,
    ...
]
```

You must publish the configuration with this command:

php artisan vendor:publish --provider="IntVent\TransIPLaravel\TransIPServiceProvider"

This will add a configuration file called 'transip.php' in the config folder with the following contents:

```php
return [

    /*
    |--------------------------------------------------------------------------
    | TransIP Laravel Wrapper
    |--------------------------------------------------------------------------
    |
    */

    'login' => env('TRANSIP_LOGIN'),

    'privateKey' => env('TRANSIP_PRIVATE_KEY'),

    'generateWhitelistOnlyTokens' => env('TRANSIP_WHITELIST_ONLY', true),

];
```