<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'rut',
        'representative',
        'phone',
        'email',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class,'client_user')->withPivot('user_id');
    }

    public function files()
    {
        return $this->hasMany(Files::class);
    }
}
