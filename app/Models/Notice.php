<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title','content','target_audience','complex_id'
    ];

    public function complex() { return $this->belongsTo(Complex::class); }
}
