<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Estate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EstateSeeder extends Seeder
{
    public function run(): void
    {
        $estara = Company::where('name', 'PT Estara Perkasa')->first();
        $smj = Company::where('name', 'PT Sawit Makmur Jaya')->first();

        if ($estara) {
            Estate::updateOrCreate(
                ['company_id' => $estara->id, 'code' => 'KSM'],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'Kebun Sei Mangkei',
                    'location' => ['type' => 'Point', 'coordinates' => [99.1234, 2.8765]],
                    'total_area_ha' => 5000.50,
                    'planted_area_ha' => 4500.00,
                    'is_active' => true,
                ]
            );

            Estate::updateOrCreate(
                ['company_id' => $estara->id, 'code' => 'KTP'],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'Kebun Tanjung Putus',
                    'location' => ['type' => 'Point', 'coordinates' => [98.7654, 3.4567]],
                    'total_area_ha' => 3200.75,
                    'planted_area_ha' => 2900.25,
                    'is_active' => true,
                ]
            );
        }

        if ($smj) {
            Estate::updateOrCreate(
                ['company_id' => $smj->id, 'code' => 'KSR'],
                [
                    'uuid' => Str::uuid(),
                    'name' => 'Kebun Sei Rokan',
                    'location' => ['type' => 'Point', 'coordinates' => [100.5432, 0.7890]],
                    'total_area_ha' => 4100.00,
                    'planted_area_ha' => 3800.50,
                    'is_active' => true,
                ]
            );
        }
    }
}