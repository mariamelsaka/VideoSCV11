<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $table = 'podcasts';
    protected $primaryKey = 'id';
    protected $fillable = [ "created_at", "updated_at","podcast_title","podcast_img"];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
