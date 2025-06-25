<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    protected $fillable = [
        'user_id','complex_id','shop_id',
        'type','description','status'
    ];

    public function user()    { return $this->belongsTo(User::class); }
    public function complex() { return $this->belongsTo(Complex::class); }
    public function shop()    { return $this->belongsTo(Shop::class); }
}
