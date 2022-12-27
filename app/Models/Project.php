<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'description1',
        'startdate',
        'enddate',
        'starttime',
        'endtime',
        'location',
        'deadline',
        'event_type',
        'category',
        'organiser',
        'link_text',
        'link',
        'image'
       
      ];
 
}
