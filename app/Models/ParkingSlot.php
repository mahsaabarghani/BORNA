<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParkingSlot extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['mall_id', 'slot_number', 'is_reserved'];

    public function mall()
    {
        return $this->belongsTo(Mall::class);
    }
}
