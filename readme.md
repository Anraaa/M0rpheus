# Business Requirements Document (BRD) - Cek Jadwal Mata Kuliah Mahasiswa Fakultas Ilmu Komputer Berbasis Website (Filament)

## 1. Dokumentasi
Untuk dokumentasi, bisa dilihat pada `Doc/Doc.md` atau bisa [klik disini](Doc/doc.md)

## 2. Pendahuluan
### 2.1 Latar Belakang
Sistem ini bertujuan untuk mempermudah mahasiswa Fakultas Ilmu Komputer dalam mengakses jadwal perkuliahan harian mereka secara online. Sistem juga mendukung admin dalam pengelolaan data jadwal perkuliahan menggunakan framework Laravel.

### 2.2 Tujuan
- Memberikan kemudahan bagi mahasiswa dalam mengakses jadwal perkuliahan dengan cepat dan akurat.
- Membantu admin dalam pengelolaan data mahasiswa dan jadwal perkuliahan melalui antarmuka yang user-friendly.

## 3. Ruang Lingkup
Sistem ini mencakup:
- Tampilan jadwal perkuliahan mahasiswa.
- Fitur CRUD (Create, Read, Update, Delete) untuk jadwal perkuliahan untuk admin.
- Fitur pencarian data jadwal perkuliahan.

Sistem tidak mencakup pengelolaan keuangan untuk pembayaran, atau manajemen mata kuliah.

## 4. Pemangku Kepentingan
- **Admin:** 
  - **Peran:** Mengelola data jadwal kuliah.
  - **Kebutuhan:** Dashboard yang responsif dan mudah digunakan.
  - **Tanggung Jawab:** Memastikan data jadwal selalu terkini.
- **Mahasiswa:** Subjek utama data dalam sistem.
  - **Peran:** Mengakses jadwal perkuliahan.
  - **Kebutuhan:** Dashboard yang responsif dan mudah digunakan
  - **Tanggung Jawab:** Memanfaatkan sistem untuk melihat jadwal secara efisien.

## 5. Fitur Utama
### 5.1 PManajemen Data Perkuliahan
- Tambah, ubah, hapus, dan lihat jadwal kuliah.
- Data jadwal meliputi:
  - Hari (Menggunakan tipe data string dengan batas karakter 255)
  - Tanggal (Menggunakan tipe data date)
  - Jam Mulai (Menggunakan tipe data time)
  - Jam Berakhir (Menggunakan tipe data time) 
  - Mata Kuliah (Menggunakan tipe data string dengan batas karakter 255)
  - Dosen Pengajar (Menggunakana tipe data string dengan batas karakter 255)
  - Ruangan (Menggunakan tipe data string dengan batas karakter 255)
  - Keterangan (Pertemuan ke n atau kuliah pengganti) (menggunakan tipe data string dengan batas karakter 255)

### 5.2 Pencarian 
- Pencarian jadwal berdasarkan mata kuliah atau dosen.

## 6. Persyaratan Fungsional
1. Sistem harus menyediakan form login untuk admin dengan autentikasi berbasis Laravel Filament.
2. Sistem harus menyediakan form registrasi dan login untuk mahasiswa dengan autentikasi berbasis Laravel Filament.
3. Sistem harus mendukung fitur CRUD untuk data jadwal perkuliahan.
4. Sistem harus menyediakan fitur pencarian cepat untuk data jadwal.
5. Validasi input harus diterapkan pada setiap form.

## 7. Persyaratan Non-Fungsional
1. Sistem harus mendukung keamanan data dengan autentikasi dan enkripsi.

## 8. Antarmuka Pengguna
### 8.1 Admin
- **Dashboard Admin:** Menampilkan statistik dan akses ke fitur utama.
- **Form Jadwal:** Form untuk tambah, ubah, dan hapus data jadwal.
- **Navigasi Sederhana:** Menu intuitif untuk akses fitur CRUD dan pencarian.
### 8.2 Mahasiswa
- **Halaman Jadwal:** Tampilan jadwal kuliah secara real-time.
- **Pencarian Jadwal:** Input sederhana untuk mencari jadwal berdasarkan mata kuliah atau dosen.
- **Navigasi Mudah:** Akses intuitif untuk melihat detail jadwal.

## 9. Lampiran 
### 9.1 Flowchart 
Untuk diagram flowchart, bisa dilihat pada `Doc/diagram/` atau bisa [klik disini](Doc/diagram/)