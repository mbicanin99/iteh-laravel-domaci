<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Zubar;

class ZubarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zubar::factory()->count(50)->create();
    }
}
