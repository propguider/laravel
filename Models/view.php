<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->morphToMany(tag::class,'taggable');
    }
}
