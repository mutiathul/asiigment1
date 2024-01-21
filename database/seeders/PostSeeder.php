<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::collection('posts')->count() == 0){

            DB::collection('posts')->insert([

                [
                    'id' => 1,
                    'name' => Str::random(10),
                    'author_id' => 001,
                    'detail' => Str::random(10)
                    
                ],
                [
                    'id' => 2,
                    'name' => Str::random(10),
                    'author_id' => 002,
                    'detail' => Str::random(30)
                ],
                ['id' => 3,
                'name' => Str::random(10),
                'author_id' => 003,
                'detail' => Str::random(30)
                ]

            ]);
            
        } else { echo "\e[31mTable is not empty, therefore NOT "; }

    }
}
