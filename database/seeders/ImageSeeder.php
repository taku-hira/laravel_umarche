<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'name' => 'sample1.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'name' => 'sample2.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'name' => 'sample3.jpg',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'name' => 'sample4.png',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'name' => 'sample5.png',
                'title' => null,
            ],
            [
                'owner_id' => 1,
                'name' => 'sample6.png',
                'title' => null,
            ],
        ]);
    }
}
