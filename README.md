# Estara — Sistem Manajemen Perkebunan

Estara adalah aplikasi manajemen perkebunan kelapa sawit berbasis Laravel 13. Aplikasi ini dirancang untuk mengelola data master perkebunan: perusahaan, kebun (estate), afdeling, blok, departemen, jabatan, dan karyawan.

## Fitur Utama

- **Manajemen Perusahaan (Company)** — data perusahaan induk, alamat, NPWP, kontak, dan status aktif.
- **Manajemen Kebun (Estate)** — data kebun dengan lokasi GIS (GeoJSON), luas total, luas tanam, dan status aktif.
- **Manajemen Afdeling** — pembagian afdeling dalam setiap kebun dengan luas dan status.
- **Design System Components** — komponen Blade reusable: Button, Input, Card, Badge dengan variant, size, dan slot support.
- **Database Seeders** — data dummy untuk Company, Estate, dan Afdeling (idempotent via `updateOrCreate`).
- **Testing** — Pest PHP dengan 26 test yang lolos (Auth, Registration, Profile, Example).
- **Authentication** — Laravel Breeze (login, register, profile, password reset).

## Struktur Direktori

```
app/
├── app/
│   ├── Models/           # Eloquent models (Company, Estate, Afdeling, Block, Employee, dll.)
│   └── View/Components/  # Blade components (Button, Input, Card, Badge)
├── database/
│   ├── migrations/       # Schema database
│   └── seeders/          # Database seeders
├── resources/
│   └── views/components/ # Blade view components
├── routes/
├── tests/                # Pest tests
├── composer.json
├── artisan
├── tailwind.config.js
├── vite.config.js
└── README.md
```

## Persyaratan

- PHP ^8.3
- Composer
- Node.js & NPM
- SQLite / MySQL / PostgreSQL

## Instalasi

```bash
# Clone repository
git clone https://github.com/budieqnet/estara.git
cd estara

# Install PHP dependencies
composer install

# Salin environment
cp .env.example .env
php artisan key:generate

# Install frontend dependencies
npm install
npm run build

# Jalankan migrasi dan seeder
php artisan migrate --seed

# Jalankan server development
php artisan serve
```

## Database Seeders

Seeder tersedia untuk data master:

```bash
php artisan db:seed --class=CompanySeeder
php artisan db:seed --class=EstateSeeder
php artisan db:seed --class=AfdelingSeeder
```

Atau jalankan semua sekaligus:

```bash
php artisan db:seed
```

Seeder menggunakan `updateOrCreate` sehingga aman untuk dijalankan berulang kali (idempotent).

## Testing

```bash
vendor/bin/pest
```

Hasil: 26 passed, 77 assertions.

## Komponen Blade

Komponen tersedia di `resources/views/components/`:

- `button.blade.php` — tombol dengan variant dan size
- `input.blade.php` — input form dengan error message
- `card.blade.php` — kartu konten
- `badge.blade.php` — badge dengan variant, size, dan opsi removable

Contoh penggunaan:

```blade
<x-button variant="primary" size="md">Simpan</x-button>
<x-badge variant="success" :dot="true">Aktif</x-badge>
```

## Lisensi

MIT License.

## Kontribusi

Pull request dan laporan bug sangat diterima. Silakan buka issue atau pull request di repository ini.