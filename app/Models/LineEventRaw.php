<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineEventRaw extends Model
{
    protected $fillable = ['meta'];
    protected $casts = ['meta' => 'json'];
    public $timestamps = ["created_at"];
    const UPDATED_AT = null;
}
