<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class LineLinkCode extends Model {
  protected $fillable = ['user_id','code','expires_at','used_at'];
  protected $casts = ['expires_at'=>'datetime','used_at'=>'datetime'];
}
