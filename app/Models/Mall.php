<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mall extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'city', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stores()
    {
        return $this->hasMany(Store::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function parkingSlots()
    {
        return $this->hasMany(ParkingSlot::class);
    }

    public function internalMaps()
    {
        return $this->hasMany(InternalMap::class);
    }

    public function arContents()
    {
        return $this->morphMany(ArContent::class, 'arable');
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }
}
