laravel-error
=============

##Install

Add this config into composer json

```json
    "require": {
        "witooh/error": "dev-master"
    }
```

after run comand `php artisan composer update`
then add this in app.php

```php
    'providers' => array(
        'Witooh\Error\ErrorServiceProvider',
    )
```