<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('kelas')->insert([
            [
                'id_kelas'=>1,
                'nama_kelas'=>'A',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id_kelas'=>2,
                'nama_kelas'=>'B',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id_kelas'=>3,
                'nama_kelas'=>'C',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            
        ]);
        
    }
}
