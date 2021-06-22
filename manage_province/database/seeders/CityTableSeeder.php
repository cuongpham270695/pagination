<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->id = 1;
        $city->name = 'Hà Nội';
        $city->save();

        $city = new City();
        $city->id = 2;
        $city->name = 'Phú Thọ';
        $city->save();

        $city = new City();
        $city->id = 3;
        $city->name = 'Thái Bình';
        $city->save();

        $city = new City();
        $city->id = 4;
        $city->name = 'Nghệ An';
        $city->save();
    }
}
