<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //


     public function Surveys()
           {
             return $this->belongsToMany(Survey::class)->withPivot('note');
           }
}
