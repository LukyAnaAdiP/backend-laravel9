<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_products')->insert([
            [
                'name' => 'Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mainan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olah Raga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Makanan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
