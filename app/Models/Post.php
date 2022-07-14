<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [];
    // protected $fillabe = ['title', 'exerpt', 'body'];

    // Always load linked class. Use ->without(['category', 'author']) to selectively disable.
    protected $with = ['category', 'author'];


    public function category(){
        // hasOne, hasMany, belongsTo, belongsToMany

        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
