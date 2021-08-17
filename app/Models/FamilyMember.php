<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class FamilyMember extends Authenticatable
{
    protected $gurded = [];

    public function profile()
    {
        return $this->hasOne(FamilyMemberProfile::class);
    }

    public function lineBot($id)
    {
        return LineBot::find($id);
    }
}