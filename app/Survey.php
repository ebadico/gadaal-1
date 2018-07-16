<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{


          protected $fillable = ['point',
          				'gender','age','leak','dagaal',
          				'vdate', 'price','bribe','jirgaan'];

// a survey belongs to one project 


 



		public function categories()
           {
             return $this->belongsToMany(Category::class);
           }

           public function questions()
           {
             return $this->belongsToMany(Question::class);
           }

}
