<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [];
    // protected $fillabe = ['title', 'exerpt', 'body'];


    public function category(){
        // hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo(Category::class);
    }

}
