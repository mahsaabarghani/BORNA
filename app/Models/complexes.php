<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class complexes extends Model
{
    protected $fillable = ['name','address','city','description','manager_id'];

    public function manager()   { return $this->belongsTo(User::class,'manager_id'); }
    public function shops()     { return $this->hasMany(Shop::class); }
    public function notices()   { return $this->hasMany(Notice::class); }
    public function requests()  { return $this->hasMany(Request::class); }
}
