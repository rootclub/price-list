# Root Price List

 

[![Style checks](https://github.com/mloru/root-price-list/actions/workflows/style-checks.yml/badge.svg)](https://github.com/mloru/root-price-list/actions?query=workflow%3Astyle-checks+branch%3Adevelop)
[![Security checks](https://github.com/mloru/root-price-list/actions/workflows/security-checks.yml/badge.svg)](https://github.com/mloru/root-price-list/actions?query=workflow%3Asecurity-checks+branch%3Adevelop)
[![Tests](https://github.com/mloru/root-price-list/actions/workflows/tests.yml/badge.svg)](https://github.com/mloru/root-price-list/actions?query=workflow%3Atests+branch%3Adevelop)



## Description

Simple project to display and manage the Root Club price list.

## Startup

### Start DDEV

```shell
ddev start
```

### Install php dependencies

```shell
ddev composer install
```

### Database migration

The project uses two database:

* For `local` environment: `db`
* For `testing` environment: `test`

Migrations on `test` are not required since the `LazilyRefreshDatabase` trait is used.
See [Resetting The Database After Each Test](https://laravel.com/docs/5.7/database-testing#resetting-the-database-after-each-test)
for more information.

```shell
ddev artisan migrate
```

### Run seeders

```shell
ddev artisan db:seed
```

To set up a fresh version of database and run seeders at the same time:

```shell
ddev artisan migrate:fresh --seed
```

## Styles and static analyzers

Run checks before committing:

```shell
ddev exec tools/static-analysis.sh
```

Fix style in project with PHP CS Fixer:

```shell
ddev exec tools/fix-style.sh
```

To run PHP Insights with verbose output:

```shell
ddev exec ./vendor/bin/phpinsights -v
```

## Testing

Run tests with:


```shell
ddev exec vendor/bin/pest
```

## Coverage

Run tests coverage with:

```shell
ddev xdebug
```

and:

```shell
ddev exec XDEBUG_MODE=coverage vendor/bin/pest --coverage
```

## Queues

By defaults, queues are sync:

```dotenv
QUEUE_CONNECTION=sync
```

It's possible to set them as async with:

```dotenv
QUEUE_CONNECTION=redis
```

Redis is used as message queues manager.

### Local development

```shell
ddev artisan queue:work
```

### Test

During tests, queues are sync since `.env.testing` contains:

```dotenv
QUEUE_CONNECTION=sync
```
