# EasyAuth Laravel Package Documentation

## Introduction

EasyAuth is a Laravel package designed to simplify the integration of authentication features into your Laravel applications. This package provides views, controllers, and traits to facilitate the authentication process.

## Installation

To install EasyAuth, use Composer by running the following command in your terminal:

```bash
composer require lakum/easy-auth


Once installed, add the EasyAuth service provider to the providers array in your config/app.php file:

'providers' => [
    // ...
    Lakum\EasyAuth\EasyAuthServiceProvider::class,
],

## Usage
Publishing Views
Publish the package views using the following Artisan command:

publish all required resources
php artisan vendor:publish --tag=easy-auth

# OR

php artisan vendor:publish --tag=easy-auth-views

This will copy the views to the resources/views/vendor/easy-auth directory.

# Publishing Controllers

To publish the package controllers, run the following Artisan command:

php artisan vendor:publish --tag=easy-auth-controllers

This will copy the controllers to the app/Http/Controllers directory.

php artisan vendor:publish --tag=easy-auth-traits

This will copy the traits to the app/Http/Traits directory.



# Configuration
EasyAuth does not require additional configuration. Customize the views, controllers, or traits by modifying the files in the published directories.

Contributing
If you encounter issues or have suggestions for improvements, feel free to open an issue or create a pull request on the GitHub repository.

License
EasyAuth is open-source software licensed under the MIT license.

Credits
This package is developed and maintained by [Your Name].

Changelog
Check the changelog for information on updates and new features.
