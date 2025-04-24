# reneolaundry

    # Laundry Gen Z

**Laundry Gen Z** adalah platform laundry online yang dibangun menggunakan **CodeIgniter 3**.

## Prasyarat

Sebelum memulai, pastikan kamu sudah menginstal beberapa hal berikut:

## Langkah-langkah Setup

Ikuti langkah-langkah berikut untuk memulai project ini: dibagian index.php rubah aja menjadi production bukan development
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
define('ENVIRONMENT', 'production');
itu tujuan nya agar tidak muncul eror karena ci 3 hanya bisa diakses di php tingkat bawah bukan atas makanya harus dihilangin notif eror nya biar nggak menggangu 

### 1. Clone Repo

Clone repository ke komputer kamu dengan perintah:

```bash
git clone https://github.com/sakhiasyam18/reneolaundry-v2.git

Masuk ke folder project:
cd reneolaundry

2. Set up Database (ini semua nya bebas ingin ngikutin atau bikin sendiri di pc kalian)

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
    'database' => 'reneolaundryy', //aku saranin ini aja sih database nya biar enak
    'dbdriver' => 'mysqli',
    // sesuaikan lainnya...
);

5. Menjalankan Server

Jika kamu menggunakan XAMPP/WAMP, pastikan Apache dan MySQL sudah berjalan. Kemudian, buka project ini di browser dengan URL:
http://localhost/reneolaundry
http://localhost/reneolaundry/layanann
http://localhost/reneolaundry/kontakk
http://localhost/reneolaundry/tentanggkami
http://localhost/reneolaundry/testimoni

