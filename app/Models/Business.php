<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $fillable = [


        'company',
        'reg_number',
        'ownership_type',
        'telephone',
        'business_email',
        'website',
        'address',
        'activity',   
        'logo', 
        'member_mid',
      ];
 

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
