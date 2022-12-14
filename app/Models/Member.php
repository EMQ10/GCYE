<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Member extends Model
{
    use HasFactory;
    use Notifiable;

    protected $primaryKey = 'mid';
    public $incrementing = false;
    public function getRouteKey() {
    return 'mid';
    }

      //member has one Business data
      public function business(){
        return $this->hasOne(Business::class,'member_mid');
    }

    
}
