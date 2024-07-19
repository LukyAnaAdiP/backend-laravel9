<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_category_id' => 1,
                'name' => 'Obat',
                'price' => 15000,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 2,
                'name' => 'Kartu Remi',
                'price' => 20000,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 3,
                'name' => 'Raket',
                'price' => 1000000,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 4,
                'name' => 'Snack',
                'price' => 10000,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_category_id' => 5,
                'name' => 'Coca-cola',
                'price' => 8000,
                'image' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
