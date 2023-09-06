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

# Làm việc với shopping cart
Để làm việc với gói `darryldecode/cart` trong Laravel, bạn cần thực hiện các bước sau:

**Bước 1: Cài đặt gói `darryldecode/cart`**

Sử dụng Composer để cài đặt gói này bằng cách chạy lệnh sau trong thư mục gốc của dự án Laravel:

```
composer require darryldecode/cart
```

**Bước 2: Cấu hình gói `cart`**

Sau khi cài đặt xong, bạn cần cấu hình gói `cart`. Thêm ServiceProvider và Facade vào tệp `config/app.php`:

```php
'providers' => [
    // ...
    Darryldecode\Cart\CartServiceProvider::class,
],

'aliases' => [
    // ...
    'Cart' => Darryldecode\Cart\Facades\CartFacade::class,
],
```

Sau đó, chạy lệnh sau để xuất bản cấu hình của `cart`:

```
php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider" --tag="config"
```

**Bước 3: Sử dụng `cart` trong ứng dụng Laravel**

Bây giờ, bạn có thể sử dụng `cart` trong ứng dụng Laravel của mình. Dưới đây là một số thao tác phổ biến:

- **Thêm sản phẩm vào giỏ hàng**:

```php
use Cart;

Cart::add([
    'id' => 1,
    'name' => 'Product Name',
    'price' => 100.00,
    'quantity' => 2,
]);
```

- **Lấy danh sách sản phẩm trong giỏ hàng**:

```php
use Cart;

$items = Cart::getContent();
```

- **Xóa sản phẩm khỏi giỏ hàng**:

```php
use Cart;

Cart::remove(1); // Xóa sản phẩm có ID là 1
```

- **Cập nhật số lượng sản phẩm trong giỏ hàng**:

```php
use Cart;

Cart::update(1, [
    'quantity' => 5, // Số lượng mới
]);
```

- **Xóa toàn bộ giỏ hàng**:

```php
use Cart;

Cart::clear();
```

- **Lấy tổng số lượng sản phẩm trong giỏ hàng**:

```php
use Cart;

$totalQuantity = Cart::getTotalQuantity();
```

Để sử dụng `cart` trong view, bạn có thể truy cập nó bằng cách sử dụng Blade Template Engine. Ví dụ:

```blade.php
@foreach (Cart::getContent() as $item)
    {{ $item->name }} - {{ $item->quantity }} - {{ $item->price }}
@endforeach
```

Đây là một số thao tác cơ bản với gói `darryldecode/cart`. Bạn có thể tìm hiểu thêm về cách sử dụng và cấu hình gói này trong tài liệu chính thức của nó tại [https://github.com/darryldecode/laravelshoppingcart](https://github.com/darryldecode/laravelshoppingcart).