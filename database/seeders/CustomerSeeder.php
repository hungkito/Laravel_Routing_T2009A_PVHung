<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(){
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('customers')->truncate();
        \Illuminate\Support\Facades\DB::table('customers')->insert([
            [
                'name' => 'Hưng',
                'address' => 'Lào Cai'
            ],
            [
                'name' => 'Tân',
                'address' => 'Hà Nội'
            ],
            [
                'name' => 'Duy',
                'address' => 'Cần Thơ'
            ],
            [
                'name' => 'Hà',
                'address' => 'Sài Gòn'
            ],
            [
                'name' => 'Vy',
                'address' => 'Phú Quốc'
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
