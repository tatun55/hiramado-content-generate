<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LineBot extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    protected $fillable = ['id', 'status', 'channel_id', 'channel_secret', 'bot_basic_id', 'channel_access_token',];
}