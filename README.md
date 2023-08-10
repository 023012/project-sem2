# Các câu lệnh trong PHP framework Laravel

- Câu lệnh khởi tạo dự án:
  `composer create-project --prefer-dist laravel/laravel name-project`

- Câu lệnh chạy server ảo trong Laravel :

`php artisan serve`

- Câu lệnh để xem toàn bộ routes đang có trong PHP Framework Laravel :

`php artisan route:list`

- Câu lệnh tạo controller trong Laravel :

`php artisan make:controller UserController`

- Câu lệnh tạo controller với 7 functions CRUD trong Laravel :

`php artisan make:controller UserController --resource`

- Câu lệnh tạo Migration trong Laravel:

`php artisan make:migration create_users_table`

- Câu lệnh chạy Migration:

`php artisan migrate`

- Câu lệnh quay trở lại dựa trên dữ liệu đã ghi vào migrations table và chạy lại migration:

`php artisan migrate:refresh`

- Câu lệnh xóa hết các bảng, không quan tâm về rollback và chạy lại migration:

`php artisan migrate:fresh`

- Câu lệnh tạo file Seeder trong Laravel:

`php artisan make:seeder UsersTableSeeder`

- Câu lệnh chạy file Seeder cụ thể với tên class trong Laravel:

`php artisan db:seed --class=UsersTableSeeder`

- Câu lệnh chạy file DatabaseSeeder, có thể gọi tới nhiều file với class seeder cụ thể:

`php artisan db:seed`

- Câu lệnh để xóa tất cả các bảng dữ liệu, sau đó chạy lại migration sau đó chạy file DatabaseSeeder, có thể gọi tới nhiều class seeder:

`php artisan migrate:fresh --seed`

- Câu lệnh tạo Model trong PHP Framework Laravel :

`php artisan make:model User`

- Câu lệnh kết hợp tạo Model và Controller trong Laravel :

`php artisan make:model User -c`

- Câu lệnh kết hợp tạo Model, Controller và Migration trong PHP Framework Laravel:

`php artisan make:model Category -mc`

- Câu lệnh kết hợp tạo Model, Controller + 7 functions CRUD và Migration trong PHP Framework Laravel:

`php artisan make:model User -mcr`
"# project-sem2" 
