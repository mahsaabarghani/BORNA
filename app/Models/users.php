<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name','email','password','phone','role','status',
    ];

    protected $hidden = ['password','remember_token'];

    /* Relationships */
    public function managedComplexes() { return $this->hasMany(Complex::class,'manager_id'); }
    public function shops()            { return $this->hasMany(Shop::class,'owner_id'); }
    public function requests()         { return $this->hasMany(Request::class); }
    public function payments()         { return $this->hasMany(Payment::class); }
}

