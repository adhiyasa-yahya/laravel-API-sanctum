<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_details')->insert([
            [
                'product_id'   =>  1,
                'weight'       =>  600,
                'unit'         =>  'g',
                'code_stok'    =>  'SMP98',
                'stok'         =>  23
            ],
            [
                'product_id'   =>  2,
                'weight'       =>  1000,
                'unit'         =>  'g',
                'code_stok'    =>  'PALU9283',
                'stok'         =>  123
            ],
            [
                'product_id'   =>  3,
                'weight'       =>  850,
                'unit'         =>  'g',
                'code_stok'    =>  'IPCAM283',
                'stok'         =>  10
            ],
            [
                'product_id'   =>  4,
                'weight'       =>  1500,
                'unit'         =>  'g',
                'code_stok'    =>  'GTR1000cc',
                'stok'         =>  147
            ],
            [
                'product_id'   =>  5,
                'weight'       =>  250,
                'unit'         =>  'g',
                'code_stok'    =>  'DL98273',
                'stok'         =>  32
            ],
        ]);
    }
}
