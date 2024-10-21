<?php

namespace Database\Seeders;

use App\Models\html;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HtmlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        html::factory()->count(45)->create();
    }
}
