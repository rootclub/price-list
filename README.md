# laravel-template-name

laravel-template-description

[![Style checks](https://github.com/mloru/laravel-template/actions/workflows/style-checks.yml/badge.svg)](https://github.com/mloru/laravel-template/actions?query=workflow%3Astyle-checks+branch%3Adevelop)
[![Security checks](https://github.com/mloru/laravel-template/actions/workflows/security-checks.yml/badge.svg)](https://github.com/mloru/laravel-template/actions?query=workflow%3Asecurity-checks+branch%3Adevelop)
[![Tests](https://github.com/mloru/laravel-template/actions/workflows/tests.yml/badge.svg)](https://github.com/mloru/laravel-template/actions?query=workflow%3Atests+branch%3Adevelop)

<!--delete-->
---
This repo can be used to scaffold a new Laravel project. Follow these steps to get started:

1. Press the `Use template` button at the top of this repo to create a new repo with the contents of this skeleton.
2. Run `php init.php` to run a script that will replace all placeholders throughout all the files. It also create
   a `.env` file.
3. Have fun with your new Laravel project.

---
<!--/delete-->

## Description

Laravel template to boot a fresh new Laravel project in seconds.

## Startup

### Start DDEV

```shell
ddev start
```

### Install php dependencies

```shell
ddev composer install
```

### Migrazione database

The project uses two database:

* For `local` environment: `db`
* For `testing` environment: `db_test`

Migrations on `db_test` are not required since `LazilyRefreshDatabase` trait is used.
See [Resetting The Database After Each Test](https://laravel.com/docs/5.7/database-testing#resetting-the-database-after-each-test)
for more information.

```shell
ddev exec php artisan migrate
```

### Run seeders

```shell
ddev exec php artisan db:seed
```

To set up a fresh version of database and run seeders at the same time:

```shell
ddev exec php artisan migrate:fresh --seed
```

## Styles and static analyzers

Run checks prior to commit

```shell
ddev exec tools/static-analysis.sh
```

Fix style in project with PHP CS Fixer:

```shell
ddev exec tools/fix-style.sh
```

To run Php Insights with verbose output:

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

It's possible to set the async with:

```dotenv
QUEUE_CONNECTION=redis
```

Redis is used as message queues manager.

### Local development

```shell
ddev exec php artisan queue:work
```

### Test

During tests, queues are sync since in `.env.testing` there is:

```dotenv
QUEUE_CONNECTION=sync
```
