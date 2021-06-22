<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->name = 'Phạm Ngô Anh Cương';
        $customer->dob = '1995-06-27';
        $customer->email = 'cuong.pham270695@gmail.com';
        $customer->city_id = 1;
        $customer->save();

        $customer = new Customer();
        $customer->id = 2;
        $customer->name = 'Chử Đức Dương';
        $customer->dob = '2002-07-15';
        $customer->email = 'chuduong1102@gmail.com';
        $customer->city_id = 4;
        $customer->save();

        $customer = new Customer();
        $customer->id = 3;
        $customer->name = 'Nguyễn Đức Tâm';
        $customer->dob = '1991-05-11';
        $customer->email = 'tamtit1102@gmail.com';
        $customer->city_id = 2;
        $customer->save();
    }
}
