#!/bin/bash

vendor/bin/phpmd app,bootstrap,config,database,routes,tests text phpmd.xml && # can produce this issue: https://github.com/phpmd/phpmd/issues/853
  vendor/bin/phpmnd --hint --progress --extensions=all,-property --allow-array-mapping app &&
  vendor/bin/phpmnd --hint --progress --allow-array-mapping database &&
  vendor/bin/phpmnd --hint --progress --extensions=all --allow-array-mapping routes &&
  vendor/bin/phpmnd --hint --progress --extensions=all --allow-array-mapping tests &&
  vendor/bin/pint --test -v &&
  vendor/bin/phpcs -p -s -d memory_limit=1G &&
  vendor/bin/phpstan analyse --no-interaction --memory-limit=1G &&
  vendor/bin/psalm && # can produce this issue: https://github.com/psalm/psalm-plugin-laravel/issues/145
  vendor/bin/phpinsights --no-interaction --disable-security-check --format=github-action
