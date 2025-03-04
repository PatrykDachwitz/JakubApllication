<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoryBooks extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [];

        for ($i = 0; $i < 4; $i++) {
            $seed = [
                'name' => "Lorem ipsum {$i}",
            ];
        }

        DB::table('category_books')
            ->insert($seed);
    }
}
