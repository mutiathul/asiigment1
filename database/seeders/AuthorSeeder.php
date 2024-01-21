<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::collection('authors')->insert([

            [
                
                'name' => Str::random(10),
                
                
            ],
            [
                
            'name' => Str::random(10),
               
            ],
            [
            'name' => Str::random(10),
            
            ]

        ]);
    }
}
