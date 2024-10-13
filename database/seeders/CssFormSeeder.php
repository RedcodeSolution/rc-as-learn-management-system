<?php

namespace Database\Seeders;

use App\Models\CssForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CssFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CssForm::factory()->count(50)->create();
    }
}
