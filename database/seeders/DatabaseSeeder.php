<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PacijentSeeder;
use Database\Seeders\OrdinacijaSeeder;
use Database\Seeders\ZubarSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $pacijentSeeder = new PacijentSeeder;
        $ordinacijaSeeder = new OrdinacijaSeeder;
        $zubarSeeder = new ZubarSeeder;

        $pacijentSeeder->run();
        $ordinacijaSeeder->run();
        $zubarSeeder->run();
    }
}
