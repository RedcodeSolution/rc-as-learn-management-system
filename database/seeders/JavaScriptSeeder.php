<?php

namespace Database\Seeders;

use App\Models\javascript;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JavaScriptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        javascript::factory()->count()->create();
    }
}
