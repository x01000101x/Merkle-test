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
4. Security (middleware, input validation)
5. Eloquent

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

2. Buka web browser dan ketik ke search bar : `http://localhost:8000/`.

3. Function untuk test 1 berada di path `app\Http\Controllers\WEB\FuncController.php`.

## Testing Test 2

1. Jalankan `php artisan serve`.

2. Buka POSTMAN.

## Testing Guest

    #GUEST FORM
    1. Ketikkan url `http://localhost/api/guest` dengan metode `POST`
    2. Pada Headers masukkan 2 key yaitu :
        ```
        KEY              VALUE
        Accept           application/json
        Content-Type     application/json
        ```
    3. Pada body masukkan value sesuka anda, tetapi jangan ubah keynya, contoh :
        ```
        {
        "name": "Mr. X",
        "address": "Bikini Bottom",
        "phone": "08617251212",
        "note": "Happy wedding bro!!! Jangan lupa traktir ya..."
        }
        ```
    4. Tekan tombol Send.
    5. Cek database pada tabel `guests`.

    #NOTE GALLERY
    1. Ketikkan url `http://localhost/api/guest` dengan metode `GET`
    2. Pada Params masukkan 2 key (untuk value bisa diubah sesuai keinginan, apabila ingin ke next page, ubah value `page`), contoh:
        ```
        KEY              VALUE
        per-page         1
        page             1
        ```
    4. Tekan tombol Send.
    5. Cek result.

## Testing Admin
