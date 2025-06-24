<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaintenanceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'person_id',
        'request_type',
        'description',
        'status',
        'priority',
        'requested_at',
        'resolved_at',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
