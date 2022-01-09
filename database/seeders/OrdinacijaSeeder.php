<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ordinacija;

class OrdinacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ordinacija::factory()->count(40)->create();
    }
}
