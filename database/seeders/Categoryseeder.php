<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '本',
                'sort_order' => 1,
            ],
            [
                'name' => 'CD',
                'sort_order' => 2,
            ],
            [
                'name' => 'DVD',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'コミック',
                'sort_order' => 1,
                'primary_category_id' => 1
            ],
            [
                'name' => '小説',
                'sort_order' => 2,
                'primary_category' => 1
            ],
            [
                'name' => 'J-ROCK',
                'sort_order' => 3,
                'primary_category_id' => 2
            ],
            [
                'name' => 'アニソン',
                'sort_order' => 4,
                'primary_category_id' => 2
            ],
            [
                'name' => 'アニメ',
                'sort_order' => 5,
                'primary_category_id' => 3
            ],
            [
                'name' => '映画',
                'sort_order' => 6,
                'primary_category_id' => 3
            ],
        ]);
    }
}
