<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{


          protected $fillable = [

          	'gender', 'age', 'fullname','phone','point',
          	'leak','key','tap','fence','gate',
          	'price','bribe','income','invoice', 'cheating',
  			     'extracash','alotofmoney','kept','income','invoice',
   			 'taste','dirtywater','Hardwater','slowwater','fourtaps',
			'faraway','light','longer','toaccess','gatelocked','overcrowded','waitingtime',
			'drink', 'sick',
			'security','securitynight','securityday',

          ];

// a survey belongs to one project 


 public function town()
              {
                  return $this->belongsTo(Town::class);
              }


           public function questions()
           {
             return $this->belongsToMany(Question::class);
           }

}
