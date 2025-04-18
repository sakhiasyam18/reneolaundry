# reneolaundry

✅ Tips Kolaborasi Aman:

    Temenmu bisa clone repo, terus bikin file database.php sendiri.

    Gunakan file .env untuk setting sensitif kalau kamu ingin lebih modular.

    Kalau upload full system/, pastikan gak ngubah-ngubah isinya sembarangan karena itu core CI.

    Bisa tambahin README.md juga buat info setup.

    # Laundry Gen Z

**Laundry Gen Z** adalah platform laundry online yang dibangun menggunakan **CodeIgniter 3**. Ini adalah project backend untuk mengelola pemesanan, pembayaran, dan status laundry.

## Prasyarat

Sebelum memulai, pastikan kamu sudah menginstal beberapa hal berikut:

- **PHP 7.2+** (disarankan versi terbaru)
- **Composer** (jika menggunakan dependensi PHP lain)
- **MySQL** atau **MariaDB**
- **XAMPP/WAMP** atau server lokal lainnya

## Langkah-langkah Setup

Ikuti langkah-langkah berikut untuk memulai project ini:

### 1. Clone Repo

Clone repository ke komputer kamu dengan perintah:

```bash
git clone https://github.com/sakhiasyam18/reneolaundry.git

Masuk ke folder project:
cd reneolaundry

2. Set up Database

    Buat database di MySQL dengan nama reneolaundry (atau nama lain sesuai konfigurasi).

    Import file SQL yang sudah disiapkan (bisa buat file .sql untuk tabel yang dibutuhkan).

        Jangan lupa untuk sesuaikan dengan file konfigurasi database.

3. Konfigurasi Database

    Buka file application/config/database.php.

    Sesuaikan pengaturan database sesuai dengan environment lokal kamu (host, username, password, dll).
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'reneolaundry',
    'dbdriver' => 'mysqli',
    // sesuaikan lainnya...
);

5. Menjalankan Server

Jika kamu menggunakan XAMPP/WAMP, pastikan Apache dan MySQL sudah berjalan. Kemudian, buka project ini di browser dengan URL:
http://localhost/reneolaundry/

