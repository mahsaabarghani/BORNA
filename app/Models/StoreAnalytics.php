<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreAnalytics extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['store_id', 'views', 'clicks', 'heatmap_data'];

    protected $casts = [
        'heatmap_data' => 'array',
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
