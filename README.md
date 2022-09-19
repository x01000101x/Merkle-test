## Message from me 📫

First of all, Thank you so much for giving me this opportunity,
if the app has an error, problem, or missing something,
please contact me via [WhatsApp - 085280044559](wa.me/6285280044559) or email(leonarddamanik7@gmail.com)
Thank you.

## Needed components

1. Code Editor
2. Postman
3. Composer
4. MySQL DB
5. Web Browser
6. Apache Server/XAMPP/LAMPP/MAMPP
7. PHP 7.4

## Extra features

1. Token
2. Pagination
3. Collection/Resource
4. Security (middleware, input validation)
5. Eloquent

## Installations

1. Clone repo:

```
https://github.com/x01000101x/Merkle-test.git
```

2. Setelah selesai clone, buka appnya.

3. Setelah membuka app, silahkan download composer dengan perintah : `composer install`.

4. Cari file `.env.example` lalu ubah nama file ke `.env`.

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
2. (Optional) Apabila ingin gunakan pagination, Pada Params masukkan 2 key (untuk value bisa
   diubah sesuai keinginan, apabila ingin ke next page, ubah value `page`), contoh:
    ```
    KEY              VALUE
    per-page         1
    page             1
    ```
3. Tekan tombol Send.
4. Cek response.

## Testing Admin

#Admin Page

-   Register

1. Ketik `http://localhost/api/admin/register` dengan metode `POST`.
2. Pada Headers masukkan 2 key yaitu :
    ```
    KEY              VALUE
    Accept           application/json
    Content-Type     application/json
    ```
3. Pada body masukkan value sesuka anda, tetapi jangan ubah keynya `(note : password required min 8)`, contoh :
    ```
    {
    "name": "Mr. Z",
    "email": "admin@test.com",
    "password": "12345678",
    }
    ```
4. Tekan tombol Send.
5. Cek database pada tabel `users`.

-   Login

1. Ketik `http://localhost/api/admin/login` dengan metode `POST`.
2. Pada Headers masukkan 2 key yaitu :
    ```
    KEY              VALUE
    Accept           application/json
    Content-Type     application/json
    ```
3. Pada body masukkan email dan password akun yg sudah dibuat, contoh :
    ```
    {
    "email": "admin@test.com",
    "password": "12345678",
    }
    ```
4. Tekan tombol Send.
5. Lihat response dan simpan tokennya untuk action admin yang lain.

-   Show Guests

1. Ketik `http://localhost/api/admin/guest` dengan metode `GET`.
2. Masukkan Token pada Authorization dengan tipe Bearer Token.
3. (Optional) Apabila ingin gunakan pagination, Pada Params masukkan 2 key (untuk value bisa
   diubah sesuai keinginan, apabila ingin ke next page, ubah value `page`), contoh:
    ```
    KEY              VALUE
    per-page         1
    page             1
    ```
4. Tekan tombol Send.
5. Cek response.

-   Show Guest By Id

1. Ketik `http://localhost/api/admin/guest/{id}` (ubah {id} dengan id yang diinginkan, contoh : 1) dengan metode `GET`.
2. Masukkan Token pada Authorization dengan tipe Bearer Token.
3. Tekan tombol Send.
4. Cek response.

-   Update Guest

1. Ketik `http://localhost/api/admin/guest` dengan metode `PUT`.
2. Masukkan Token pada Authorization dengan tipe Bearer Token.
3. Pada Headers masukkan 2 key yaitu :
    ```
    KEY              VALUE
    Accept           application/json
    Content-Type     application/json
    ```
4. Pada body masukkan value sesuka anda, tetapi jangan ubah keynya, contoh :
    ```
    {
    "name": "Mr. W",
    "address": "Pondok Indah",
    "phone": "0219028122",
    "note": "Selamat menikah A & W!"
    }
    ```
5. Tekan tombol Send.
6. Lihat database `guests` atau get guest.

-   Delete Guest

1. Ketik `http://localhost/api/admin/guest/{id}` (ubah {id} dengan id yang diinginkan, contoh : 1) dengan metode `DELETE`.
2. Masukkan Token pada Authorization dengan tipe Bearer Token.
3. Tekan tombol Send.
4. Lihat database `guests` atau get guest.

-   Logout Admin

1. Ketik `http://localhost/api/admin/logout` dengan metode `GET`.
2. Masukkan Token pada Authorization dengan tipe Bearer Token.
3. Tekan tombol Send.
