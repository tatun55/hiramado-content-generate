<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LineBot;

class FacilityUser extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'name', 'nickname', 'sex', 'thumbnail', 'birthday', 'printer_email', 'line_bot_id',];

    const STATUS = [
        0 => "準備中",
        10 => "ご利用可能",
        20 => "ご利用中",
        30 => "ご利用停止中",
        99 => "その他",
    ];

    const SEX = [
        1 => "男性",
        2 => "女性",
    ];

    public function lineBot()
    {
        return $this->hasOne(LineBot::class, 'id', 'line_bot_id');
    }
}
