<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Butter',
            'description' => 'Regular butter',
            'price' => '7.99'
        ]);

        DB::table('products')->insert([
            'name' => 'Bread',
            'description' => 'Just bread',
            'price' => '2.99'
        ]);

        DB::table('products')->insert([
            'name' => 'Lech Pils',
            'description' => 'Lech Pils, local beer',
            'price' => '2.59'
        ]);
    }
}
