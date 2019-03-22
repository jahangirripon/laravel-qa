<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function getUrlAttribute()
    {
        //return route("questions.show", $this->id);
        return '#';
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getAvatarAttribute()
    {
        $email = $this->email;
        $size = 20;

        return  "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "&s=" . $size;
    }


}
