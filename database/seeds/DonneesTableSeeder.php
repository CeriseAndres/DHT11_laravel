<?php

use Illuminate\Database\Seeder;

class DonneesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory ( App\Donnees::class, 50)->create ();
    }
}
