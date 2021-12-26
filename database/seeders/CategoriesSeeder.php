<?php

namespace Database\Seeders;

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
        $categories = array('Transport', 'Housekeeping');

        foreach ($categories as $value)
        {
            DB::table('categories')->insert([
                'name' => $value,
            ]);
        }

    }
}
