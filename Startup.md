#Cấu hình
- step 1: git clone ...
- step 2: cd to project folder and run `composer install`.
- step 3: copy file `.env` và chuyển từ

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=project_sem2
DB_USERNAME=root
DB_PASSWORD=
```

thành

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project_sem2
DB_USERNAME=root
DB_PASSWORD=
```

- step 4: run `php artisan key:generate`
- step 5: run `php artisan migrate`
- step 6: run `php artisan db:seed`
- step 7: run `php artisan serve`

