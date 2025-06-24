<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'complex_id',
        'unit_number',
        'floor',
        'area_sqm',
        'status',
        'current_contract_id',
    ];

    public function complex()
    {
        return $this->belongsTo(Complex::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function currentContract()
    {
        return $this->belongsTo(Contract::class, 'current_contract_id');
    }

    public function maintenanceRequests()
    {
        return $this->hasMany(MaintenanceRequest::class);
    }
}
