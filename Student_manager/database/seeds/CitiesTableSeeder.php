<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new \App\City();
        $city->id = 1;
        $city->name = 'Ha Noi';
        $city->save();

        $city = new \App\City();
        $city->id = 2;
        $city->name = 'Vinh';
    }
}
