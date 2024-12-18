# 🚀 Panduan Setup **SampleApp**

Panduan ini akan memandu Kalian dalam mengonfigurasi **SampleApp** menggunakan Docker, termasuk pengaturan dependency, konfigurasi lingkungan, dan pembuatan model. Ikuti langkah-langkah di bawah ini untuk memudahkan proses setup.

## ⚙️ Persiapan Awal

1. **Ekstrak File Proyek**  
   ```bash
   unzip sampleapp.zip
   cd sampleapp
   ```

2. **Jalankan Docker**
   
   Buka Docker terlebih dahulu untuk memulai, lalu jalankan perintah berikut:
   ```bash
   docker compose up -d
   ```

3. **Masuk ke dalam Container**
   ```bash
   docker exec -it sample bash
   ```

## 🔧 Instalasi Laravel dan Filament

1. **Buat Proyek Laravel**
   Gunakan Composer untuk membuat proyek Laravel baru:
   ```bash
   composer create-project --prefer-dist laravel/laravel .
   ```

2. **Install Filament**
   Install Filament untuk panel admin:
   ```bash
   composer require filament/filament
   ```

3. **Install Filament Panels**
   Jalankan perintah untuk menginstal panel Filament:
   ```bash
   php artisan filament:install --panels
   ```

## 🔧 Konfigurasi Lingkungan

1. **Edit File `.env`**
   
   Sesuaikan konfigurasi di file `.env` sesuai kebutuhan proyek kalian di `src/.env`.
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=db       
   DB_PORT=3306     
   DB_DATABASE=laravel  
   DB_USERNAME=root    
   DB_PASSWORD=p455w0rd  
   ```

2. **Generate Kunci Aplikasi**
   ```bash
   php artisan key:generate
   ```

3. **Buat Link Storage**
   ```bash
   php artisan storage:link
   ```

4. **Jalankan Migrasi Database**
   ```bash
   php artisan migrate
   ```

5. **Atur Izin Akses**
   ```bash
   chown -R www-data:www-data storage/*
   chown -R www-data:www-data bootstrap/*
   ```

6. **Buat Pengguna Filament**
   Buat pengguna admin untuk Filament:
   ```bash
   php artisan make:filament-user
   ```

## 🔧 Spatie Laravel Permission

1. **Install Spatie Laravel Permission package**
   ```bash
   composer require spatie/laravel-permission
   ```

2. **Publikasikan File Migrasi**
   ```bash
   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
   ```
3. **Jalankan Migrasi**
   ```bash
   php artisan migrate
   ```

## 🧩 Pembuatan dan Konfigurasi Model

1. **Buat Model `Mahasiswa`**  
   Gunakan flag `-ms` untuk secara otomatis membuat migration dan seeder:
   ```bash
   php artisan make:model Mahasiswa -ms
   ```

2. **Sesuaikan Migration**
   
   Buka file migration yang dihasilkan di dalam folder `database/migrations/2024_12_13_193044_create_mahasiswas_table.php` dan sesuaikan skema sesuai kebutuhan proyek.
   ![table](img/table_mahasiswa.png)

3. **Sesuaikan Seeder**
   
   Sesuaikan seeder pada file `src/database/seeders` untuk menambahkan data awal pada tabel yang diperlukan.
   - DatabaseSeeder
   ![table](img/databaseSeeder.png)
   - RoleSeeder
   ![table](img/roleSeeder.png)
   - MahasiswaSeeder
   ![table](img/mahasiswaSeeder.png)

4. **Sesuaikan Model**
   
   Edit model `Mahasiswa` di dalam folder `src/app/Models` sesuai dengan kebutuhan analisis Anda.
   - Mahasiswa
   ![table](img/modelMahasiswa.png)

## 🎉 Langkah Terakhir

1. **Generate Filament Resource**
   ```bash
   php artisan make:filament-resource Mahasiswa --generate
   ```

2. **Jalankan Migrasi**
   ```bash
   php artisan migrate
   ```

3. **Inisialisasi Ulang Proyek**
   ```bash
   php artisan project:init
   ```

## Yuhuu kelar 🎉

> :memo: **Catatan:** pasti bener, klo error berarti uda takdir.

