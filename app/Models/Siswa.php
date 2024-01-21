<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use  Jenssegers\Mongodb\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    //protected $connection = 'mongodb';
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

}
