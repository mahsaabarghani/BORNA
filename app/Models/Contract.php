<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'person_id',
        'start_date',
        'end_date',
        'monthly_rent',
        'deposit',
        'status',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
