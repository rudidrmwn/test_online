<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Ali',
                'age' => 17,
                'gender' => 'M',
                'city' => 'semarang'
            ],
            [
                'name' => 'Aisyah',
                'age' => 35,
                'gender' => 'F',
                'city' => 'solo'
            ],
            [
                'name' => 'Salim',
                'age' => 29,
                'gender' => 'M',
                'city' => 'jogja'
            ],
            [
                'name' => 'Budi',
                'age' => 24,
                'gender' => 'M',
                'city' => 'semarang'
            ],
            [
                'name' => 'Eko',
                'age' => 18,
                'gender' => 'M',
                'city' => 'solo'
            ],
            [
                'name' => 'Umar',
                'age' => 20,
                'gender' => 'M',
                'city' => 'jogja'
            ],
            [
                'name' => 'Abdurrahman',
                'age' => 32,
                'gender' => 'M',
                'city' => 'semarang'
            ],
            [
                'name' => 'Daniel',
                'age' => 23,
                'gender' => 'M',
                'city' => 'solo'
            ],
            [
                'name' => 'Hasan',
                'age' => 40,
                'gender' => 'M',
                'city' => 'semarang'
            ],
            [
                'name' => 'Husna',
                'age' => 19,
                'gender' => 'F',
                'city' => 'solo'
            ],
            [
                'name' => 'Putri',
                'age' => 45,
                'gender' => 'F',
                'city' => 'jogja'
            ],
            [
                'name' => 'Wahyu',
                'age' => 51,
                'gender' => 'M',
                'city' => 'semarang'
            ],
            [
                'name' => 'Mansur',
                'age' => 47,
                'gender' => 'M',
                'city' => 'solo'
            ],
            [
                'name' => 'Sarah',
                'age' => 32,
                'gender' => 'F',
                'city' => 'jogja'
            ],
        ];
           
        Customer::insert($data);
    }
}
