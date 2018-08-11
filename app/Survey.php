<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStatus\HasStatuses;

class Survey extends Model
{

    use HasStatuses;
    
          protected $fillable = [

          	 'gender', 'age', 'fullname','phone','point','town_id',
          	 'leak','key','tap','fence','gate',
          	 'price','bribe','income','invoice', 'cheating',
  			     'extracash','alotofmoney','kept','income','invoice','pjirgaan',
       			 'taste','dirtywater','hardwater','slowwater','fourtaps',
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

 public function getleakAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
  public function getkeyAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    } 
  public function gettapAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
  public function getfenceAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    } 
  public function getgateAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }



  public function getpriceAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }  
    public function getbribeAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    } 
 
  public function getinvoiceAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    } 
  public function getcheatingAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }

   public function getextracashAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }

  public function getalotofmoneyAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
 public function getkeptAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getincomeAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }





}
