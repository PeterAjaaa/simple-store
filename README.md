### For PBWL Course Class B
Link Course: https://stmik-likmi.gitbook.io/laravel-cheatsheet/v/exercise-1-simple-store?fallback=true

## Setup
1. Clone repo ini
```
$ git clone https://github.com/ferdinand-lanvino/simple-store
```
2. Ubah direktori
```
$ cd simple-store
```
3. Buat file konfigurasi .env dengan menjalankan perintah ini
```
$ cp .env.example .env
```
4. Buka file .env, pastikan setting databasenya sudah sesuai (buat databasenya jika belum ada).
5. Jalankan perintah di bawah
```
$ composer install
$ php artisan key:generate
$ php artisan migrate:fresh
```
