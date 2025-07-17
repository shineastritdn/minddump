
🧠 Minddump – Platform Jurnal Digital Anonim

Minddump adalah platform jurnal digital berbasis Laravel yang memungkinkan pengguna menulis dan berbagi cerita . Aplikasi ini menyediakan ruang pribadi yang aman untuk mencurahkan isi hati, pikiran, dan pengalaman hidup tanpa harus mengungkap identitas.

 📌 Fitur Utama

- 🔐 Registrasi dan Login pengguna
- 📓 CRUD entri jurnal pribadi (tambah, lihat, edit, hapus)
- 🔒 Proteksi halaman dengan middleware `auth`
- 📊 Dashboard pengguna setelah login
- ✨ Desain sederhana dan bersih

 🛠️ Instalasi

Ikuti langkah berikut untuk menjalankan aplikasi ini di lokal:

```bash
git clone https://github.com/username/minddump.git
cd minddump
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
````

**Catatan:**

* Pastikan kamu sudah membuat database dan menyesuaikan konfigurasinya di file `.env`.
* Jalankan `php artisan migrate` untuk membuat tabel-tabel database.

🚀 Teknologi yang Digunakan

* [Laravel 10](https://laravel.com)
* Laravel Breeze (autentikasi)
* Blade Template Engine
* MySQL/MariaDB


🖼️ Tampilan Aplikasi

* ✅ Halaman Login dan Register
* ✅ Dashboard Jurnal
* ✅ Form Tambah/Edit Jurnal
* ✅ Tabel Jurnal

*(Tambahkan screenshot di sini jika tersedia)*

✍️ Kontribusi

Jika kamu tertarik untuk mengembangkan atau menambahkan fitur pada Minddump:

1. Fork repositori ini
2. Buat branch baru: `git checkout -b fitur-baru`
3. Commit perubahanmu: `git commit -am 'Tambah fitur baru'`
4. Push ke branch: `git push origin fitur-baru`
5. Buat pull request


👩‍💻 Pengembang

Dikembangkan oleh: **Astrit Dwi Antika**
NIM: 231240001401
Tahun: 2025
