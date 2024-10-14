<?php

namespace Database\Seeders;

use App\Models\htmlprogress;
use Illuminate\Database\Seeder;

class HtmlProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        htmlprogress::factory()->count(2)->create();
    }
}
