<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{

    public function run(){
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'createAt' => 06-3-2021,
                'customersId' => 1
            ],
            [
                'createAt' => 14-4-2021,
                'customersId' => 5
            ],
            [
                'createAt' => 21-5-2021,
                'customersId' => 1
            ],
            [
                'createAt' => 27-5-2021,
                'customersId' => 2
            ],
            [
                'createAt' => 02-6-2021,
                'customersId' => 1
            ],
            [
                'createAt' => 11-6-2021,
                'customersId' => 3
            ],
            [
                'createAt' => 15-6-2021,
                'customersId' => 5
            ],
            [
                'createAt' => 23-6-2021,
                'customersId' => 4
            ],
            [
                'createAt' => 28-6-2021,
                'customersId' => 2
            ],
            [
                'createAt' => 02-7-2021,
                'customersId' => 4
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
