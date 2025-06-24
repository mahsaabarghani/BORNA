<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'first_name',
        'last_name',
        'national_id',
        'phone',
        'email',
        'address',
        'role',
    ];

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }

    public function managedComplexes()
    {
        return $this->hasMany(Complex::class, 'manager_person_id');
    }
}
