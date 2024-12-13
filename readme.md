# Business Requirements Document (BRD)

## 1. Dokumentasi
Untuk dokumentasi, bisa dilihat pada `Doc/Doc.md` atau bisa [klik disini](Doc/doc.md)

## 2. Pendahuluan
### 2.1 Latar Belakang
Sistem informasi data mahasiswa bertujuan untuk membantu pengelolaan data mahasiswa secara efisien dan terintegrasi menggunakan framework Laravel Filament. Sistem ini akan mempermudah admin untuk mengelola data mahasiswa seperti pendaftaran, pembaruan data, dan pencatatan aktivitas akademik.

### 2.2 Tujuan
- Membuat sistem yang memudahkan pengelolaan data mahasiswa.
- Memastikan keamanan dan validitas data mahasiswa.
- Memberikan antarmuka yang intuitif bagi pengguna melalui Laravel Filament.

## 3. Ruang Lingkup
Sistem ini mencakup:
- Pendaftaran mahasiswa baru.
- Pengelolaan data mahasiswa (tambah, edit, hapus, lihat).
- Pencarian dan pelaporan data mahasiswa.

Sistem tidak mencakup modul untuk pembayaran, jadwal akademik, atau manajemen mata kuliah.

## 4. Pemangku Kepentingan
- **Admin:** Bertanggung jawab atas pengelolaan data mahasiswa.
- **Mahasiswa:** Subjek utama data dalam sistem.
- **IT Support:** Menyediakan dukungan teknis untuk pengoperasian sistem.

### 4.1 Karakteristik Pengguna: Admin
| **Aspek**            | **Detail**                                                                                     |
|-----------------------|-----------------------------------------------------------------------------------------------|
| **Peran Utama**       | Admin adalah pengguna dengan akses penuh untuk mengelola data mahasiswa dan fitur dalam sistem. |
| **Latar Belakang**    | - Memiliki pengetahuan dasar tentang sistem informasi.<br>- Terbiasa menggunakan aplikasi berbasis web. |
| **Kemampuan Teknis**  | - Mampu memahami alur kerja aplikasi (CRUD: Create, Read, Update, Delete).<br>- Familiar dengan navigasi dashboard Laravel Filament.<br>- Dapat mengelola data secara akurat. |
| **Tanggung Jawab**    | - Menambah, mengedit, menghapus, dan melihat data mahasiswa.<br>- Menjaga validitas dan keamanan data yang dikelola. |
| **Kebutuhan Khusus**  | - Antarmuka yang sederhana dan intuitif.|
| **Tujuan Utama**      | - Memastikan data mahasiswa selalu terbaru dan valid.<br>- Mendukung proses pencatatan data mahasiswa dengan cepat dan efisien. |
| **Batasan Kemampuan** | - Tidak selalu memiliki kemampuan teknis yang mendalam terkait pengelolaan server atau troubleshooting teknis. |

## 5. Fitur Utama
### 5.1 Pendaftaran Mahasiswa
- Admin dapat menambahkan data mahasiswa baru ke dalam sistem.
- Field yang harus disimpan: NIM, Nama, Tanggal Lahir, Program Studi, Fakultas, dan Tahun Masuk.

### 5.2 Pengelolaan Data Mahasiswa
- **Tambah Data:** Admin dapat menambahkan data mahasiswa baru.
- **Edit Data:** Admin dapat mengedit data mahasiswa yang sudah ada.
- **Hapus Data:** Admin dapat menghapus data mahasiswa.
- **Lihat Data:** Admin dapat melihat daftar mahasiswa secara lengkap.

### 5.3 Pencarian dan Pelaporan
- **Pencarian:** Admin dapat mencari mahasiswa berdasarkan NIM, nama, atau program studi.

## 6. Persyaratan Fungsional
1. Sistem harus memungkinkan admin untuk masuk ke dalam dashboard Laravel Filament.
2. Sistem harus menyediakan form validasi untuk setiap data mahasiswa.
3. Sistem harus memungkinkan pencarian cepat berdasarkan kata kunci.

## 7. Persyaratan Non-Fungsional
1. Sistem harus responsif dan dapat diakses melalui desktop dan perangkat mobile.
2. Sistem harus mendukung keamanan data dengan autentikasi berbasis Laravel Filament.
3. Sistem harus mendukung database relasional (MariaDB/MySQL).

## 8. Antarmuka Pengguna
- **Dashboard Laravel Filament:** Menampilkan data mahasiswa secara real-time.
- **Form Pendaftaran:** Form dengan input NIM, nama, tanggal lahir, program studi, dan tahun masuk.
- **Menu Navigasi:** Akses ke fitur tambah, edit, hapus, dan laporan.

## 9. Teknologi yang Digunakan
- **Framework Backend:** Laravel
- **Dashboard Admin:** Laravel Filament
- **Database:** MariaDB/MySQL
- **Authentication:** Laravel Breeze/Filament Auth Plugin

## 10. Risiko
- **Data Loss:** Kehilangan data akibat kesalahan sistem atau pengguna.
  - **Mitigasi:** Implementasi backup database secara berkala.
- **Keamanan Data:** Akses tidak sah ke data mahasiswa.
  - **Mitigasi:** Menggunakan autentikasi dua faktor.
