<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            [
                'id_siswa'=>001,
                'id_kelas'=>'1',
                'nama_siswa'=>'Mutia',
                'jenis_kelamin'=>'perempuan',
                'alamat'=>'jakarta timur',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id_siswa'=>002,
                'id_kelas'=>'2',
                'nama_siswa'=>'Dani',
                'jenis_kelamin'=>'laki-laki',
                'alamat'=>'jakarta selatan',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id_siswa'=>003,
                'id_kelas'=>'3',
                'nama_siswa'=>'Kila',
                'jenis_kelamin'=>'perempuan',
                'alamat'=>'jakarta barat',
                'created_at' => Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            
        ]);
        
    }
}
