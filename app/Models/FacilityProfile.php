<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityProfile extends Model
{
    protected $primaryKey = 'user_id';
    protected $keyType = 'integer';
    public $incrementing = false;
    protected $fillable = ['user_id', 'name', 'operation', 'type', 'scale', 'age', 'zip', 'pref', 'city', 'street', 'building',];

    const OPERATION = [
        1 => "民間施設",
        2 => "公的施設",
    ];

    const TYPE = [
        1 => "介護付き有料老人ホーム",
        2 => "住宅型有料老人ホーム",
        3 => "サービス付き高齢者向け住宅",
        4 => "グループホーム",
        5 => "ケアハウス",
        6 => "特別養護老人ホーム",
        7 => "介護老人保健施設",
        8 => "介護医療院",
        0 => "その他",
    ];

    const SCALE = [
        1 => "10人以下",
        2 => "11〜20人",
        3 => "21〜30人",
        4 => "31〜40人以上",
        5 => "41〜50人以上",
        6 => "51人以上",
    ];

    const AGE = [
        1 => "60歳以下",
        2 => "61歳〜70歳",
        3 => "71歳〜80歳",
        4 => "81歳〜90歳",
        5 => "91歳以上",
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}