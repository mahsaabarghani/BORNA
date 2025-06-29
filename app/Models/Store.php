<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'user_id', 'mall_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mall()
    {
        return $this->belongsTo(Mall::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function ratings()
    {
        return $this->morphMany(Rating::class, 'rateable');
    }

    public function analytics()
    {
        return $this->hasOne(StoreAnalytics::class);
    }

    public function crmLogs()
    {
        return $this->hasMany(CrmLog::class);
    }

    public function arContents()
    {
        return $this->morphMany(ArContent::class, 'arable');
    }
}
