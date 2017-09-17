<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referal extends Model
{
    protected $fillable = ['user_code','friend_code','friend_id'];
}
