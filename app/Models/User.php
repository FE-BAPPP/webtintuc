<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'password',
        'avatar',
        'role',
        'sex'
    ];

    protected $hidden = [
        'password'
    ];

    public function getAvatarPathAttribute()
    {
        return $this->avatar
            ? asset('storage/avatars/' . $this->avatar)
            : asset('img/avatar_default.jpg');
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }


}



