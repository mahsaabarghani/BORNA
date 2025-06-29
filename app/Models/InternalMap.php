<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InternalMap extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['mall_id', 'floor', 'image_path'];

    public function mall()
    {
        return $this->belongsTo(Mall::class);
    }
}
