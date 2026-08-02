<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Catering Nusantara Bogor — Website

Website untuk UMKM catering **Catering Nusantara Bogor**. Sistemnya sederhana:
customer pilih paket di web → checkout → pesan otomatis ke-generate dan dikirim ke WhatsApp admin.
Nggak ada sistem pembayaran online, nggak ada e-commerce beneran — ini murni **katalog + lead-gen ke WA**.

---

## 1. Kenapa Project Ini Dibangun Kayak Gini

| Kebutuhan | Solusi |
|---|---|
| Client (owner) nggak paham teknis | Admin panel dibikin sesimpel mungkin, tombol besar, bahasa manusiawi |
| Order tetap harus masuk WA (kebiasaan lama) | Checkout nggak pakai payment gateway, cuma generate teks otomatis & redirect ke `wa.me` |
| Owner cuma 1 orang yang pegang admin | Login admin cukup 1 akun (dari seeder), nggak ada fitur register/multi-user |
| Biar aman tapi tetap simpel | Halaman `/admin` sengaja nggak ada link/tombol dari halaman publik manapun — cuma bisa diakses kalau tau URL-nya, dan tetap wajib login |
| Brand identitasnya wayang (hitam-emas) | Semua warna & font udah disesuaikan sama logo asli client |

---

## 2. Stack yang Dipakai

- **Laravel 13** — backend, routing, database, auth admin
- **Tailwind CSS v4** — styling (pakai `@theme` di CSS, bukan `tailwind.config.js`)
- **Livewire 4** — buat CRUD di admin panel (kelola kategori & menu tanpa reload halaman)
- **Alpine.js** *(rencana)* — buat keranjang belanja sisi customer (disimpan di local storage browser, bukan database)
- **MySQL** — database, jalan lewat Laragon

---

## 3. Struktur Folder Penting

```
app/
├── Http/Controllers/         → Logic halaman publik (Home, Menu) & admin (Auth, Dashboard)
├── Livewire/Admin/           → (lama, sudah tidak dipakai — Livewire 4 pindah ke resources/views/components)
├── Models/                   → Category, Product, Package, PackageItem, Testimonial, Admin

database/
├── migrations/                → Struktur tabel database
├── seeders/                   → AdminSeeder (bikin akun admin default)

resources/
├── css/app.css                 → Warna & font custom brand (cnb-black, cnb-gold, dll)
├── views/
│   ├── layouts/app.blade.php    → Layout halaman publik (navbar, footer)
│   ├── layouts/admin.blade.php  → Layout dashboard admin
│   ├── home.blade.php, menu/, gallery.blade.php, about.blade.php  → Halaman publik
│   ├── admin/login.blade.php, admin/dashboard.blade.php           → Halaman admin
│   └── components/admin/⚡category-manager.blade.php, ⚡menu-manager.blade.php
│       → Ini Livewire 4 component (1 file = class PHP + tampilan sekaligus)

routes/web.php                 → Semua URL didaftarkan di sini
```

**Kenapa ada file dengan emoji ⚡ di depan?** Itu bukan salah nama — cara penamaan resmi Livewire 4 buat nandain file itu Livewire component (beda dari file Blade biasa).

---

## 4. Alur Aplikasi (Biar Kebayang)

**Sisi Customer (belum full dibangun, masih tahap kerangka):**
```
Beranda → Menu (pilih kategori: Nasi Box/Tumpeng/Snack Box)
        → Pilih Paket (Silver/Gold/Premium/Custom)
        → Keranjang (local storage browser)
        → Isi data diri (nama, tanggal acara, alamat)
        → Klik "Pesan" → otomatis buka WhatsApp dengan teks pesanan sudah terisi
```

**Sisi Admin:**
```
Buka /admin/login (tidak ada tombol ke sini dari halaman manapun)
→ Login (1 akun saja, dari seeder)
→ Dashboard (lihat ringkasan total kategori/paket/produk)
→ Kelola Kategori & Kelola Menu (CRUD via Livewire)
→ Logout
```

---

## 5. Cara Setup di Laptop Sendiri (Wajib Dibaca Sebelum Ngoding)

```bash
git clone [URL_REPO]
cd catering-nusantara

composer install
npm install

cp .env.example .env
php artisan key:generate
```

**Bikin database dulu** (nama: `catering_nusantara_db`, collation `utf8mb4_unicode_ci`) lewat HeidiSQL atau:
```sql
CREATE DATABASE catering_nusantara_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

```bash
php artisan migrate --seed
php artisan serve
```

Di terminal terpisah:
```bash
npm run dev
```

Buka `http://127.0.0.1:8000`

---

## 6. Aturan Kerja Bareng

- **Jangan kerja langsung di branch `main`.** Bikin branch baru tiap mau nambah fitur:
  ```bash
  git checkout -b fitur/nama-fiturnya
  ```
- Migration & seeder **wajib** di-commit — jangan ubah struktur tabel langsung manual di database.
- File `.env` **jangan pernah** di-push (udah otomatis di-ignore, tapi tetap hati-hati).
- Kalau nambah package baru (`composer require` / `npm install`), kabari di grup biar yang lain tau harus jalanin `composer install`/`npm install` ulang setelah pull.

---

## 7. Yang Masih Kosong / Belum Dikerjakan

- [ ] Konten asli (foto, teks deskripsi, harga real) — **nunggu dari client**
- [ ] Warna final — sudah disesuaikan dari logo, tapi belum di-approve client
- [ ] Fitur keranjang & checkout ke WhatsApp (baru kerangka halaman, logic belum jalan)
- [ ] CRUD Kategori & Menu di Livewire (baru placeholder kosong)
- [ ] AdminSeeder (belum dibikin — dibutuhkan biar bisa login admin)
- [ ] Validasi aturan H- (20 pack same day, 100 pack H-1, di atas itu H-3)