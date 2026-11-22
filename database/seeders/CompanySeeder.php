<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        Company::updateOrCreate(
            ['name' => 'PT Estara Perkasa'],
            [
                'uuid' => Str::uuid(),
                'legal_name' => 'PT Estara Perkasa',
                'tax_id' => '12.345.678.9-012.000',
                'address' => 'Jl. Raya Jakarta No. 123, Jakarta Selatan',
                'phone' => '+62-21-555-0123',
                'email' => 'info@estara.co.id',
                'is_active' => true,
            ]
        );

        Company::updateOrCreate(
            ['name' => 'PT Sawit Makmur Jaya'],
            [
                'uuid' => Str::uuid(),
                'legal_name' => 'PT Sawit Makmur Jaya',
                'tax_id' => '98.765.432.1-098.000',
                'address' => 'Jl. Palmerah Barat No. 45, Medan',
                'phone' => '+62-61-555-0456',
                'email' => 'info@sawitmakmur.co.id',
                'is_active' => true,
            ]
        );

        Company::updateOrCreate(
            ['name' => 'PT Agro Nusantara'],
            [
                'uuid' => Str::uuid(),
                'legal_name' => 'PT Agro Nusantara',
                'tax_id' => '11.222.333.4-555.000',
                'address' => 'Jl. Sudirman No. 78, Palembang',
                'phone' => '+62-711-555-0789',
                'email' => 'info@agronusantara.co.id',
                'is_active' => false,
            ]
        );
    }
}