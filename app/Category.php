<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{



    //category has many questions


    public function Questions()
    {
     return $this->hasMany(Question::class);
   }



    //category belongstomany surveys 

     public function Surveys()
           {
             return $this->belongsToMany(Survey::class);
           }
}
