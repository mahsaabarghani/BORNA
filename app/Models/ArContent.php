<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArContent extends Model
{
    use HasFactory,  SoftDeletes;

    protected $fillable = ['arable_type', 'arable_id', 'title', 'media_path', 'description'];

    public function arable()
    {
        return $this->morphTo();
    }
}
