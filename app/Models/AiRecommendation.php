<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AiRecommendation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'type', 'recommended_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
