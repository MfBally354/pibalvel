# 📊 Laravel Dashboard Application

![Laravel](https://img.shields.io/badge/Laravel-12.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

Aplikasi dashboard modern yang dibangun dengan Laravel 12, menampilkan sistem manajemen data barang dan transaksi dengan antarmuka yang bersih dan responsif menggunakan Bootstrap 5.

---

## 📋 Daftar Isi

- [Fitur Utama](#-fitur-utama)
- [Teknologi yang Digunakan](#-teknologi-yang-digunakan)
- [Prasyarat](#-prasyarat)
- [Instalasi](#-instalasi)
- [Konfigurasi](#-konfigurasi)
- [Menjalankan Aplikasi](#-menjalankan-aplikasi)
- [Struktur Proyek](#-struktur-proyek)
- [Fitur Detail](#-fitur-detail)
- [Screenshot](#-screenshot)
- [Testing](#-testing)
- [Deployment](#-deployment)
- [Troubleshooting](#-troubleshooting)
- [Kontribusi](#-kontribusi)
- [Lisensi](#-lisensi)

---

## ✨ Fitur Utama

### 🔐 Autentikasi
- **Login System** - Sistem login dengan validasi email dan password
- **Session Management** - Manajemen sesi pengguna yang aman
- **Logout Functionality** - Fitur logout dengan pembersihan sesi

### 📦 Manajemen Data Barang
- **CRUD Operations** - Create, Read, Update, Delete data barang
- **Kategori Produk** - Pengelompokan barang berdasarkan kategori
- **Tracking Stok** - Monitoring stok barang real-time
- **Search & Filter** - Pencarian dan filter berdasarkan kategori
- **Status Indicator** - Indikator visual untuk ketersediaan stok

### 💰 Manajemen Transaksi
- **Riwayat Transaksi** - Daftar lengkap semua transaksi
- **Status Tracking** - Pelacakan status transaksi (Selesai, Proses, Pending)
- **Detail Pelanggan** - Informasi lengkap pelanggan
- **Total Pendapatan** - Kalkulasi otomatis total pendapatan
- **Filter Tanggal** - Filter transaksi berdasarkan rentang tanggal

### 🎨 User Interface
- **Responsive Design** - Tampilan optimal di semua perangkat
- **Modern UI** - Antarmuka modern dengan Bootstrap 5
- **Bootstrap Icons** - Ikon yang konsisten dan menarik
- **Interactive Cards** - Kartu interaktif dengan hover effects
- **Navigation Bar** - Navigasi yang mudah dan intuitif

---

## 🛠️ Teknologi yang Digunakan

### Backend
- **Laravel 12.0** - PHP Framework
- **PHP 8.2+** - Programming Language
- **SQLite** - Database (default)
- **Blade Template** - Template Engine

### Frontend
- **Bootstrap 5.3** - CSS Framework
- **Bootstrap Icons 1.11** - Icon Library
- **Tailwind CSS 4.0** - Utility-first CSS (optional)
- **Vite 7.0** - Frontend Build Tool

### Development Tools
- **Composer** - PHP Dependency Manager
- **NPM** - Node Package Manager
- **Laravel Pint** - PHP Code Style Fixer
- **PHPUnit** - Testing Framework

---

## 📦 Prasyarat

Sebelum memulai, pastikan sistem Anda memiliki:

- **PHP** >= 8.2
- **Composer** >= 2.0
- **Node.js** >= 18.0
- **NPM** atau **Yarn**
- **SQLite** (atau database lain yang didukung Laravel)
- **Git** (untuk cloning repository)

### Memeriksa Versi

```bash
# Cek versi PHP
php -v

# Cek versi Composer
composer --version

# Cek versi Node.js
node --version

# Cek versi NPM
npm --version
```

---

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/laravel-dashboard.git
cd laravel-dashboard
```

### 2. Install Dependencies PHP

```bash
composer install
```

### 3. Install Dependencies JavaScript

```bash
npm install
```

### 4. Setup Environment

```bash
# Copy file .env.example menjadi .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Setup Database

```bash
# Buat file database SQLite (jika belum ada)
touch database/database.sqlite

# Jalankan migrasi
php artisan migrate
```

### 6. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

---

## ⚙️ Konfigurasi

### Environment Variables

Edit file `.env` untuk konfigurasi aplikasi:

```env
APP_NAME="Laravel Dashboard"
APP_ENV=local
APP_KEY=base64:generated_key_here
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite

# Session Configuration
SESSION_DRIVER=database
SESSION_LIFETIME=120

# Cache Configuration
CACHE_STORE=database
```

### Database Options

Aplikasi mendukung berbagai database:

**SQLite (Default)**
```env
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite
```

**MySQL**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_dashboard
DB_USERNAME=root
DB_PASSWORD=
```

**PostgreSQL**
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel_dashboard
DB_USERNAME=postgres
DB_PASSWORD=
```

---

## 🎮 Menjalankan Aplikasi

### Development Mode

```bash
# Terminal 1: Jalankan Laravel Development Server
php artisan serve

# Terminal 2: Jalankan Vite Development Server
npm run dev
```

Aplikasi akan berjalan di: `http://localhost:8000`

### Production Mode

```bash
# Build assets untuk production
npm run build

# Jalankan dengan PHP built-in server
php artisan serve --host=0.0.0.0 --port=8000

# Atau gunakan web server seperti Nginx/Apache
```

### Menggunakan Composer Scripts

```bash
# Setup lengkap (install + migrate + build)
composer setup

# Jalankan development mode (server + queue + logs + vite)
composer dev

# Jalankan tests
composer test
```

---

## 📁 Struktur Proyek

```
laravel-dashboard/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── AuthController.php
│   ├── Models/
│   │   └── User.php
│   └── Providers/
│       └── AppServiceProvider.php
│
├── bootstrap/
│   ├── app.php
│   └── cache/
│
├── config/
│   ├── app.php
│   ├── database.php
│   └── session.php
│
├── database/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 0001_01_01_000001_create_cache_table.php
│   │   └── 0001_01_01_000002_create_jobs_table.php
│   ├── factories/
│   │   └── UserFactory.php
│   └── seeders/
│       └── DatabaseSeeder.php
│
├── public/
│   ├── index.php
│   └── build/
│
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   └── views/
│       ├── login.blade.php
│       ├── dashboard.blade.php
│       ├── barang.blade.php
│       ├── transaksi.blade.php
│       └── layouts/
│           ├── app.blade.php
│           └── dashboard.blade.php
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── storage/
│   ├── app/
│   ├── framework/
│   └── logs/
│
├── tests/
│   ├── Feature/
│   │   └── ExampleTest.php
│   └── Unit/
│       └── ExampleTest.php
│
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
```

---

## 🎯 Fitur Detail

### 1. Halaman Login (`/`)

**Fitur:**
- Form login dengan validasi
- Email dan password validation
- Session management
- Redirect ke dashboard setelah login

**Validasi:**
```php
[
    'email' => 'required|email',
    'password' => 'required|min:6'
]
```

**Screenshot:**
```
┌─────────────────────────────────┐
│     Dashboard Login             │
│                                 │
│  Email Address                  │
│  [________________]             │
│                                 │
│  Password                       │
│  [________________]             │
│                                 │
│  [      Login      ]            │
│                                 │
│  © 2025 Dashboard App           │
└─────────────────────────────────┘
```

---

### 2. Dashboard (`/dashboard`)

**Fitur:**
- Statistics cards (Total Barang, Total Transaksi, Total Revenue)
- Recent activity feed
- Quick navigation
- User session info

**Stats Cards:**
- 📦 Total Barang: 125 items
- 💰 Total Transaksi: 89 transactions
- 💵 Total Revenue: Rp 45M (monthly)

---

### 3. Data Barang (`/barang`)

**Fitur:**
- Tabel data barang dengan pagination
- Search functionality
- Filter berdasarkan kategori
- Sort options (Nama, Harga, Stok)
- Status indicator (Tersedia/Habis)
- Action buttons (Edit, Delete)

**Sample Data:**
```
╔═══════╦══════════╦═════════════════════════╦════════════╦═════════════╦═══════╗
║  No   ║  Kode    ║  Nama Barang            ║  Kategori  ║   Harga     ║ Stok  ║
╠═══════╬══════════╬═════════════════════════╬════════════╬═════════════╬═══════╣
║   1   ║ BRG001   ║ Laptop Asus             ║ Elektronik ║ Rp 8.500.000║  15   ║
║   2   ║ BRG002   ║ Mouse Logitech          ║ Aksesoris  ║ Rp   150.000║  50   ║
║   3   ║ BRG003   ║ Keyboard Mechanical     ║ Aksesoris  ║ Rp   750.000║  30   ║
╚═══════╩══════════╩═════════════════════════╩════════════╩═════════════╩═══════╝
```

---

### 4. Data Transaksi (`/transaksi`)

**Fitur:**
- Tabel transaksi dengan detail lengkap
- Status badges (Selesai, Proses, Pending)
- Filter berdasarkan status
- Date range filter
- Total pendapatan calculation
- Action buttons (Detail, Edit, Print, Delete)

**Sample Data:**
```
╔════╦═════════════╦════════════╦═════════════════╦═══════════════╦══════════╗
║ No ║ Kode Trans  ║  Tanggal   ║   Pelanggan     ║     Total     ║  Status  ║
╠════╬═════════════╬════════════╬═════════════════╬═══════════════╬══════════╣
║ 1  ║ TRX001      ║ 15-10-2024 ║ Ahmad Rizki     ║ Rp 8.650.000  ║ Selesai  ║
║ 2  ║ TRX002      ║ 16-10-2024 ║ Siti Nurhaliza  ║ Rp   900.000  ║ Proses   ║
║ 3  ║ TRX003      ║ 17-10-2024 ║ Budi Santoso    ║ Rp 2.650.000  ║ Selesai  ║
╚════╩═════════════╩════════════╩═════════════════╩═══════════════╩══════════╝
```

---

## 📸 Screenshot

### Login Page
```
🖥️ Modern login interface with gradient background
└── Email & Password validation
└── Remember me option
└── Responsive design
```

### Dashboard Overview
```
📊 Statistics cards with icons
├── 📦 Total Barang: 125
├── 💰 Total Transaksi: 89
└── 💵 Total Revenue: Rp 45M
```

### Data Tables
```
📋 Interactive data tables
├── Search & Filter
├── Pagination
├── Action buttons
└── Status indicators
```

---

## 🧪 Testing

### Menjalankan Tests

```bash
# Jalankan semua tests
php artisan test

# Atau dengan PHPUnit
./vendor/bin/phpunit

# Test dengan coverage
php artisan test --coverage
```

### Test Structure

```
tests/
├── Feature/
│   ├── AuthenticationTest.php
│   ├── BarangManagementTest.php
│   └── TransaksiManagementTest.php
└── Unit/
    ├── UserModelTest.php
    └── ValidationTest.php
```

### Sample Test

```php
public function test_user_can_login()
{
    $response = $this->post('/login', [
        'email' => 'test@example.com',
        'password' => 'password123'
    ]);

    $response->assertRedirect('/dashboard');
    $this->assertAuthenticatedAs($user);
}
```

---

## 🚀 Deployment

### Deployment ke Production

#### 1. Optimasi Aplikasi

```bash
# Clear dan cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Optimasi autoload
composer install --optimize-autoloader --no-dev
```

#### 2. Build Assets

```bash
npm run build
```

#### 3. Set Permissions

```bash
chmod -R 775 storage bootstrap/cache
```

#### 4. Environment Production

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

### Deployment Options

**Shared Hosting**
- Upload files via FTP
- Configure `.htaccess`
- Set document root ke `/public`

**VPS/Cloud (DigitalOcean, AWS, etc)**
```bash
# Install dependencies
sudo apt update
sudo apt install php8.2 php8.2-cli php8.2-fpm nginx

# Configure Nginx
sudo nano /etc/nginx/sites-available/laravel-dashboard

# Restart services
sudo systemctl restart nginx
sudo systemctl restart php8.2-fpm
```

**Laravel Forge**
- Connect repository
- Configure deployment script
- Auto-deploy on push

**Laravel Vapor**
```bash
vapor init
vapor deploy production
```

---

## 🔧 Troubleshooting

### Common Issues

**1. Permission Denied Error**
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

**2. Database Connection Error**
```bash
# Check database path
php artisan tinker
>>> DB::connection()->getPdo();
```

**3. Vite Not Found**
```bash
npm install
npm run build
```

**4. Session Not Working**
```bash
php artisan session:table
php artisan migrate
```

**5. 404 Not Found (Routes)**
```bash
php artisan route:clear
php artisan route:cache
```

### Debug Mode

```env
# Enable debug di .env
APP_DEBUG=true
LOG_LEVEL=debug
```

### Clear Cache

```bash
# Clear all cache
php artisan optimize:clear

# Atau individual
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

---

## 🤝 Kontribusi

Kami menerima kontribusi dari siapa saja! Berikut cara berkontribusi:

### 1. Fork Repository

```bash
# Fork via GitHub UI, lalu clone
git clone https://github.com/YOUR_USERNAME/laravel-dashboard.git
```

### 2. Buat Branch Baru

```bash
git checkout -b feature/amazing-feature
```

### 3. Commit Changes

```bash
git add .
git commit -m "Add: Amazing feature description"
```

### 4. Push ke Branch

```bash
git push origin feature/amazing-feature
```

### 5. Buat Pull Request

- Buka GitHub repository
- Klik "New Pull Request"
- Describe your changes
- Submit PR

### Contribution Guidelines

- Follow PSR-12 coding standards
- Write meaningful commit messages
- Add tests for new features
- Update documentation
- Keep PR focused and small

---

## 📝 Changelog

### Version 1.0.0 (2025-01-XX)
- ✨ Initial release
- 🔐 Login system dengan session management
- 📦 CRUD data barang
- 💰 Manajemen transaksi
- 📊 Dashboard dengan statistics
- 🎨 Bootstrap 5 UI/UX

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah **MIT License**.

```
MIT License

Copyright (c) 2025 Laravel Dashboard

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```

---

## 👨‍💻 Author

**Developer Team**

- Website: https://MfBally354.github.io/Portofolio/
- Email: iqbalguntur313@gmail.com
- GitHub: https://github.com/MfBally354

---

## 🙏 Acknowledgments

- [Laravel Framework](https://laravel.com) - The PHP Framework for Web Artisans
- [Bootstrap](https://getbootstrap.com) - The world's most popular front-end toolkit
- [Bootstrap Icons](https://icons.getbootstrap.com) - Official open source icon library
- [Tailwind CSS](https://tailwindcss.com) - A utility-first CSS framework
- [Vite](https://vitejs.dev) - Next Generation Frontend Tooling

---

## 📚 Resources

### Documentation
- [Laravel Documentation](https://laravel.com/docs)
- [Bootstrap Documentation](https://getbootstrap.com/docs)
- [PHP Documentation](https://www.php.net/docs.php)

### Tutorials
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com)
- [Laravel Daily](https://laraveldaily.com)

### Community
- [Laravel Forum](https://laracasts.com/discuss)
- [Laravel Discord](https://discord.gg/laravel)
- [Stack Overflow](https://stackoverflow.com/questions/tagged/laravel)

---

## ❓ FAQ

**Q: Apakah aplikasi ini bisa digunakan untuk production?**  
A: Ya, namun disarankan untuk menambahkan fitur keamanan tambahan dan testing yang lebih komprehensif.

**Q: Database apa yang didukung?**  
A: SQLite (default), MySQL, PostgreSQL, SQL Server.

**Q: Bagaimana cara menambahkan user baru?**  
A: Gunakan seeder atau buat melalui tinker: `php artisan tinker` → `User::create([...])`

**Q: Apakah responsive untuk mobile?**  
A: Ya, menggunakan Bootstrap 5 yang fully responsive.

**Q: Bagaimana cara update data dummy?**  
A: Edit file `routes/web.php` pada route `/barang` dan `/transaksi`.

---

<div align="center">

**⭐ Jika proyek ini bermanfaat, berikan star di GitHub! ⭐**

Made with ❤️ using Laravel

[🐛 Report Bug](https://github.com/MfBally354/laravel-dashboard/issues) · 
[✨ Request Feature](https://github.com/MfBally354/laravel-dashboard/issues) · 
[📖 Documentation](https://github.com/yourusername/laravel-dashboard/wiki)

</div>
