<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
          protected $fillable = [

          	 'gender', 'age', 'fullname','phone','point','town_id',
          	 'leak','key','tap','fence','gate',
          	 'price','bribe','income','invoice', 'cheating',
  			     'extracash','alotofmoney','kept','income','invoice','pjirgaan',
       			 'taste','dirtywater','hardwater','slowwater','fourtaps',
    			   'faraway','light','longer','toaccess','gatelocked','overcrowded','waitingtime',
    			   'drink', 'sick','stomachache','headache','diarrhea',
    			   'security','securitynight','securityday','sgender',
             'infrastructure','finance','quantity','access','violence','health',

          ];

public function Status()
              {
            return $this->belongsToMany(Status::class)->withPivot('note');
              }
// a survey belongs to one project 
public function scopeFixed($query)
    {
        return $query->where('status_id', 1);
    }
public function scopeInfrastructure($query)
    {
        return $query->where('infrastructure', 1);
    }

public function scopeFinance($query)
    {
        return $query->where('finance', 1);
    }

 public function town()
              {
                  return $this->belongsTo(Town::class);
              }

public function getinfrastructureAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getfinanceAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getquantityAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getaccessAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function gethealthAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getviolenceAttribute($value)
    {
           return ($value ? 'Yes' : 'No');
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

    public function gethardwaterAttribute($value)
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



public function gettasteAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getdirtywaterAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getslowwaterAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getfourtapsAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }



public function getsecurityAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getsecuritynightAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getsecuritydayAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
  


public function getdrinkAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getsickAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getstomachacheAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
  public function getheadacheAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }

  public function getdiarrheaAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }

public function getfarawayAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getlightAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getlongerAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
  public function gettoaccessAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }

  public function getgatelockedAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
 public function getovercrowdedlockedAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }
public function getovercrowdedAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }

public function getwaitingtimeAttribute($value)
    {
        return ($value ? 'Yes' : 'No');
    }



}
