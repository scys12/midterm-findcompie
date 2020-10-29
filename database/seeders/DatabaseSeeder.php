<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'RAM'
            ],
            [
                'name' => 'Motherboard'
            ],
            [
                'name' => 'VGA'
            ],
            [
                'name' => 'Storage'
            ],
            [
                'name' => 'Processor'
            ],
        ]);
    }
}
