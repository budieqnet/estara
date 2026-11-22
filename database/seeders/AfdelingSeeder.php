<?php

namespace Database\Seeders;

use App\Models\Estate;
use App\Models\Afdeling;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AfdelingSeeder extends Seeder
{
    public function run(): void
    {
        $estates = Estate::all();

        foreach ($estates as $estate) {
            for ($i = 1; $i <= 3; $i++) {
                Afdeling::updateOrCreate(
                    ['estate_id' => $estate->id, 'code' => "AFD{$i}"],
                    [
                        'uuid' => Str::uuid(),
                        'name' => "Afdeling {$i}",
                        'total_area_ha' => rand(500, 1500) / 100 * 100,
                        'planted_area_ha' => rand(400, 1400) / 100 * 100,
                        'is_active' => true,
                    ]
                );
            }
        }
    }
}