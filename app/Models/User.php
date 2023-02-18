<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_img',
        'username',
        'firstname',
        'lastname',
        'phone_number',
        'address',
        'email',
        'password',
        'is_admin',
        'gender_id',
        'image_id',
        "created_at",
        "updated_at"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function videos(){
        return $this->hasMany(Video::class,'user_id','id');
    }
    public function blogs(){
        return $this->hasMany(Blog::class,'user_id','id');
    }
    public function podcasts(){
        return $this->hasMany(Podcast::class,'user_id','id');
    }


    public function profile()
    {
        return $this->hasOne('Profile');
    }
}
