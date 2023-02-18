<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public static function pluck(string $string)
    {

    }

    public function users(){
        return $this->hasMany(User::class,'image_id','id');
    }
    public function products(){
        return $this->hasMany(User::class,'image_id','id');
    }
}
