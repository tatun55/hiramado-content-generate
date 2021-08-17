<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMemberProfile extends Model
{
    public $incrementing = false;
    protected $guarded = [];
    protected $primaryKey = 'family_member_id';

    const RELATIONSHIP = [
        '1' => '息子',
        '2' => '娘',
        '3' => '義理の息子',
        '4' => '義理の娘',
        '5' => '孫',
        '6' => 'ひ孫',
        '7' => '親戚',
        '8' => 'その他',
        '9' => '無回答',
    ];

    const JOB = [
        10 => "幼児",
        11 => "小学生",
        12 => "中学生",
        13 => "高校生",
        14 => "大学生",
        21 => "社会人",
        22 => "主夫・主婦",
        99 => "その他",
    ];

    const SEX = [
        1 => "男性",
        2 => "女性",
        3 => "その他",
        4 => "無回答",
    ];

    const PREFER = [
        1 => "おだやか",
        2 => "きれい",
        3 => "かわいい",
        4 => "かっこいい",
        5 => "シンプル",
        6 => "無回答",
    ];

    public function getRelationshipLabel()
    {
        $index = $this->relationship;
        return self::RELATIONSHIP[$index];
    }

    public function getJobLabel()
    {
        $index = $this->job;
        return self::JOB[$index];
    }

    public function getSexLabel()
    {
        $index = $this->sex;
        return self::SEX[$index];
    }
}