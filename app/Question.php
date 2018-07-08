<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    //

    //Questions belong to Categories 

	public function Category()
        {
            return $this->belongsTo(Category::class);
        }


        	// a question can be in any survey

        public function Surveys()
           {
             return $this->belongsToMany(Survey::class);
           }
}
