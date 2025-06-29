<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['store_id', 'title', 'description', 'start_date', 'end_date'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
