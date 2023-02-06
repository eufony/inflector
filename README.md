<h1 align="center">The Eufony Inflector Package</h1>

<p align="center">
    <a href="https://packagist.org/packages/eufony/inflector">
        <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/eufony/inflector?label=Packagist%20Downloads">
    </a>
    <a href="https://github.com/eufony/inflector">
        <img alt="GitHub Stars" src="https://img.shields.io/github/stars/eufony/inflector?label=GitHub%20Stars">
    </a>
    <a href="https://github.com/eufony/inflector/issues">
        <img alt="Issues" src="https://img.shields.io/github/issues/eufony/inflector/open?label=Issues">
    </a>
    <br>
    <a href="https://github.com/eufony/inflector#license">
        <img alt="License" src="https://img.shields.io/github/license/eufony/inflector?label=License">
    </a>
    <a href="https://github.com/eufony/inflector#contributing">
        <img alt="Community Built" src="https://img.shields.io/badge/Made%20with-%E2%9D%A4-red">
    </a>
</p>

> **Warning**: This branch of *eufony/inflector* has been deprecated. Please update to the latest stable branch instead.

*eufony/inflector provides a standardized interface for linguistic inflection libraries.*

*eufony/inflector* is a PHP library that aims to improve interoperability between linguistic inflection implementations.
It provides a common interface for changing the capitalization of strings, as well as the pluralization and
singularization of words.

Interested? [Here's how to get started.](#getting-started)

## Getting started

### Installation

*eufony/inflector* is released as a [Packagist](https://packagist.org/) package and can be easily installed
via [Composer](https://getcomposer.org/) with:

    composer require "eufony/inflector"

### Usage

*eufony/inflector* provides `InflectorInterface`, which defines the following methods:

```php
// Convert between `PascalCase`, `snake_case`, and `camelCase`.
echo $inflector->toPascalCase($string);
echo $inflector->toSnakeCase($string);
echo $inflector->toCamelCase($string);

// Convert between pluralized and singularized words.
echo $inflector->pluralize($string);
echo $inflector->singularize($string);
```

It also provides a fake implementation that returns any string it is given without any modifications:

```php
$inflector = new NullInflector();
```

## Contributing

Found a bug or a missing feature? You can report it over at
the [issue tracker](https://github.com/eufony/inflector/issues).

## License

*eufony/inflector* is open-sourced software published under the [MIT license](LICENSE).
