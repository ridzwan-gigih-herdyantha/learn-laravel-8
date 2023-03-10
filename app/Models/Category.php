<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['title','slug','excerpt','body'];
    protected $guarded = ['id'];

            public function posts()
            {
                return $this->hasMany(Post::class);
            }
}
