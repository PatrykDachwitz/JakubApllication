<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class books extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seed = [];

        for ($i = 0; $i < 8; $i++) {
            Book::create([
                'name' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
                'category' => rand(1, 4),
                'mp3' => "",
                'image' => "/files/template.jpeg",
            ]);
        }

    }
}
