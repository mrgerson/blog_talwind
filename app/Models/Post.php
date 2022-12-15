<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //relación inversa de uno a muchos
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Post::class);
    }

    //relación de muchos a muchos
    public function tags(){
        $this->belongsToMany(Tag::class);
    }

    //relación polimorfica de uno a uno
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
