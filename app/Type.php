<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function categories(){
        return $this->hasMany(Category::class);
    }
}
