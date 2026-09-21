# Sistem Informasi Data Produk

## Deskripsi

Sistem Informasi Data Produk adalah mini project berbasis PHP yang digunakan untuk menampilkan informasi data produk secara sederhana.

Project ini dibuat untuk menerapkan konsep dasar pemrograman PHP, seperti multidimensional associative array, function, perulangan, conditional logic, dan penggunaan `require_once`.

## Fitur

- Menampilkan data produk
- Menampilkan ID, nama, kategori, harga, stok, dan deskripsi produk
- Menghitung total nilai stok produk
- Memberikan tanda pada produk dengan stok kritis
- Menampilkan data produk dalam bentuk tabel

## Struktur File

### `products.php`

Berisi data produk dalam bentuk multidimensional associative array yang terdiri dari ID, nama, kategori, harga, stok, dan deskripsi.

### `functions.php`

Berisi function `hitungTotalNilaiStok()` yang digunakan untuk menghitung total nilai stok seluruh produk.

### `index.php`

Merupakan halaman utama yang menampilkan data produk dalam bentuk tabel HTML serta menampilkan total nilai stok dan tanda untuk produk dengan stok kritis.

## Teknologi yang Digunakan

- PHP
- HTML
- CSS
- XAMPP
- Visual Studio Code

## Cara Menjalankan Project

1. Pastikan XAMPP sudah terinstall.
2. Jalankan Apache melalui XAMPP Control Panel.
3. Simpan folder project di dalam folder `htdocs`.
4. Buka browser.
5. Akses alamat berikut:

`http://localhost/product_information/`

6. Halaman Sistem Informasi Data Produk akan ditampilkan.

## Konsep yang Digunakan

Project ini menerapkan pemisahan sederhana antara data, proses, dan tampilan:

- **Data Layer** → `products.php`
- **Processing Layer** → `functions.php`
- **Presentation Layer** → `index.php`

## Tujuan Project

Project ini bertujuan untuk memahami penerapan dasar pemrograman PHP dalam membuat sistem informasi sederhana dengan memisahkan data, proses, dan tampilan.