<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Transport', 'Housekeeping', 'Delivery', 'Shopping'];

        foreach ($categories as $value)
        {
            Category::updateOrCreate([
                'name' => $value
            ],
            [
                'name' => $value
            ]);
        }

    }
}
