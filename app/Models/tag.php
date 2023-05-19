<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
   public function sends()
    {
return $this->morphToMany(send::class,'taggable');
    }

    public function views()
    {
        return $this->morphToMany(view::class,'taggable');
    }
}
