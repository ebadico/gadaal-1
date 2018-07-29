<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    //



     public function Surveys()
           {
             return $this->hasMany(Survey::class);
           }
}
