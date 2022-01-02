<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $products = [
            ['Butter', 'Regular butter', '6.50'],
            ['Bread', 'Just a bread', '2.99'],
            ['Lech Pils', 'Beer from local brewery', '2.59'],
            ['Pepsi 2l', 'Cuz its better than Cola', '8.29'],
            ['Roll', 'A regular roll', '0.39']
        ];

        foreach ($products as $item) {
            Product::updateOrCreate(
                [
                    'name' => $item[0],
                    'description' => $item[1],
                    'price' => $item[2]
                ],
                [
                    'name' => $item[0],
                    'description' => $item[1],
                    'price' => $item[2]
                ]
            );
        }

    }
}
