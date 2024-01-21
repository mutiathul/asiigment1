<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use  Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
	protected $collection = 'posts';

    protected $fillable = [
        'id', 'name','author_id' ,'detail'
    ];

    public function author()
   {
       return $this->hasMany(Author::class,  "id", "author_id");
   }
}
