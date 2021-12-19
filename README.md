# Laravel Moodle Client

### This is a fork of [zhiru/laravel-moodle](https://github.com/zhiru/laravel-moodle)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zhiru/laravel-moodle.svg?style=flat-square)](https://packagist.org/packages/zhiru/laravel-moodle)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/zhiru/laravel-moodle/master.svg?style=flat-square)](https://travis-ci.org/zhiru/laravel-moodle)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/zhiru/laravel-moodle.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/zhiru/laravel-moodle/?branch=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/25320a08-8af4-475e-a23e-3321f55bf8d2.svg?style=flat-square)](https://insight.sensiolabs.com/projects/25320a08-8af4-475e-a23e-3321f55bf8d2)
[![Quality Score](https://img.shields.io/scrutinizer/g/zhiru/laravel-moodle.svg?style=flat-square)](https://scrutinizer-ci.com/g/zhiru/laravel-moodle)
[![Total Downloads](https://img.shields.io/packagist/dt/zhiru/laravel-moodle.svg?style=flat-square)](https://packagist.org/packages/zhiru/laravel-moodle)

| **Laravel**  |  **laravel-modules** |
|---|---|
| ^5.5  | ^1.0  |

`kiba86/laravel-moodle` is a Laravel package which created way to interact with moodle through api/webservice.

## In adaptation and Work in Progress

## Install
To install through Composer, by run the following command:
```
$ composer require kiba86/laravel-moodle
```
The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Kiba86\LaravelMoodle\LaravelMoodleServiceProvider"
```

### Incorrect Documentation below 

## Installation
The recommended way to install the library is through Composer:


## Usage

Create instance of moodle clients, e.g. REST client:
```php
$client = new RestClient();
```

If there is no build in needed services and entities, you can create it.  
Services must extend Service abstract class, entities (as DTO's) must extend Entity abstract class.  

Also, you can use moodle client without service layer:
```php
$courses = $client->sendRequest('core_course_get_courses', $parameters);
```
