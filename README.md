## Needed apps

1. Code Editor
2. Postman
3. Composer
4. MySQL DB
5. Web Browser

## Extra features

1. Token
2. Pagination
3. Collection/Resource

## Starting the app

1. Clone repo:

```
https://github.com/x01000101x/Merkle-test.git
```

2. Setelah selesai clone, buka appnya.

3. Setelah membuka app, silahkan download composer dengan perintah : `composer install`.

4. Cari file `.env-example` lalu ubah nama file ke `.env`.

5. Ubah dalaman .env sesuai kebutuhan contohnya : database `DB_DATABASE=laravel` menjadi nama database
   yang diinginkan atau apabila memiliki password ubah `DB_PASSWORD=` ke password database anda.

6. Generate key `php artisan key:generate`.

7. Migrate dengan command `php artisan migrate` untuk migrate DB.

8. Jalankan command `php artisan serve` untuk menjalankan app.

## Testing Test 1

1. Jalankan `php artisan serve`.

2. Buka web browser dan ketik ke search bar : `http://localhost:8000/`

3. Function untuk test 1 berada di path `app\Http\Controllers\WEB\FuncController.php`

## Test 2
