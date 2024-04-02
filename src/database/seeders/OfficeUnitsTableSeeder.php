<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfficeUnit;

class OfficeUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeUnit:: create([
            'office_unit_name' => 'Police Unit',
        ]);

        OfficeUnit:: create([
            'office_unit_name' => 'Police Unit 2',
        ]);
    }
}
