<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            [
                'name'          =>  'Clear Shampoo Anti Dandruff',
                'category_id'   =>  2,
                'price'         =>  54900
            ],
            [
                'name'          =>  'Palu Karet 16oz Karet Tebal',
                'category_id'   =>  4,
                'price'         =>  34700
            ],
            [
                'name'          =>  'EZVIZ C6N 2MP 1080P WiFi IP Camera Wireless',
                'category_id'   =>  1,
                'price'         =>  379000
            ],
            [
                'name'          =>  'Gitar Akustik Yamaha F500 Jumbo',
                'category_id'   =>  5,
                'price'         =>  340000
            ],
            [
                'name'          =>  'LAMPU DOWNLIGHT LED PHILIPS MESON 5W 9W 13W PAKET ISI 3PCS PUTIH 6500K',
                'category_id'   =>  3,
                'price'         =>  119000
            ]
        ]);
    }
}
