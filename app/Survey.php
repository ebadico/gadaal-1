<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStatus\HasStatuses;

class Survey extends Model
{

    use HasStatuses;
    
          protected $fillable = [

          	 'gender', 'age','point','town_id',
          	 'leak','key','tap','fence','gate',
          	 'price','bribe','income','invoice', 'cheating',
  			     'extracash','alotofmoney','kept','income','invoice','pjirgaan',
       			 'taste','dirtywater','Hardwater','slowwater','fourtaps',
    			   'faraway','light','longer','toaccess','gatelocked','overcrowded','waitingtime',
    			   'drink', 'sick','stomachache','headache',
    			   'security','securitynight','securityday','sgender',
             'infrastructure','finance','quantity','access','violence','health',

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
