<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    protected $fillable = ['shop_id','title','description'];
    public function shop() { return $this->belongsTo(Shop::class); }
}
