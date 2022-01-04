<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert([
            [
                'name' => 'IP Camera'
            ],
            [
                'name' => 'Shampoo'
            ],
            [
                'name' => 'Lampu'
            ],
            [
                'name' => 'Alat Pertukangan'
            ],
            [
                'name' => 'Alat Musik'
            ],
        ]);
    }
}
