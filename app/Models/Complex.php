<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Complex extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'floors',
        'parking_spaces',
        'manager_person_id',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function manager()
    {
        return $this->belongsTo(Person::class, 'manager_person_id');
    }
}
