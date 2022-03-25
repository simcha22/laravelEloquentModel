<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
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

    public function articles(){
        return $this->hasMany(Article::class);
    }

    // החזרה של שדה חדש שמקמפל בתוכו 2 שדות יחד
    public function getFullNameAttribute(){
        return $this->name . ' ' . $this->surname;
    }

    // החלפה של המידע לפני שמירה
    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
    public function setSurameAttribute($value){
        $this->attributes['surname'] = ucfirst($value);
    }
}
