<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['mall_id', 'title', 'description', 'event_date'];

    public function mall()
    {
        return $this->belongsTo(Mall::class);
    }
}
