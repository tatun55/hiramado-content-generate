<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineMessageSticker extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $casts = ['keywords' => 'json'];
    protected $primaryKey = 'line_message_id';
}