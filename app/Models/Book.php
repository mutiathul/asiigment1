<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
