<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{


          protected $fillable = [

          	'gender', 'age', 'fullname','phone',

          	'leak','key','tap','fence','gate',
          	'price','bribe','income','invoice', 'cheating'];

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
