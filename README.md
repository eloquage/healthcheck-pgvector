# Healthcheck pgvector for Laravel

![pgvector PostgreSQL extension check](art/banner.png)

A [Spatie Laravel Health](https://spatie.be/docs/laravel-health) check that
reports whether the `vector` extension is installed on your PostgreSQL
connection.

[![Tests](https://github.com/eloquage/healthcheck-pgvector/actions/workflows/run-tests.yml/badge.svg)](https://github.com/eloquage/healthcheck-pgvector/actions/workflows/run-tests.yml)
[![Latest Version](https://img.shields.io/packagist/v/illuma-law/healthcheck-pgvector)](https://packagist.org/packages/illuma-law/healthcheck-pgvector)
[![License](https://img.shields.io/packagist/l/illuma-law/healthcheck-pgvector)](LICENSE.md)

## Requirements

- PHP 8.3 or later
- Laravel 12 or 13
- Spatie Laravel Health 1.39 or later
- A PostgreSQL database connection

## Install

```bash
composer require illuma-law/healthcheck-pgvector
```

Laravel discovers the service provider automatically. Register the check with
your other health checks:

```php
use IllumaLaw\HealthCheckPgvector\PgvectorExtensionCheck;
use Spatie\Health\Facades\Health;

Health::checks([
    PgvectorExtensionCheck::new(),
]);
```

## Configure

The check looks up the installed `vector` extension and reports its version.
When the extension is missing, the result is a warning by default. Require it
with the environment variable or published configuration:

```dotenv
HEALTH_PGVECTOR_REQUIRED=true
```

```bash
php artisan vendor:publish --tag=healthcheck-pgvector-config
```

You can override the default for one check:

```php
PgvectorExtensionCheck::new()->required();
```

Database query errors always return a failed result.

## Test

```bash
composer test
composer analyse
vendor/bin/pint --test
```

MIT licensed. See [LICENSE.md](LICENSE.md).
