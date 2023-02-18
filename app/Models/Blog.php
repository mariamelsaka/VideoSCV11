<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = [ "created_at", "updated_at","blog_iframe", "blog_img"];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
