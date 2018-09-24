<?php

namespace App\Nova\Metrics;

use Illuminate\Http\Request;
use Laravel\Nova\Metrics\Partition;
use App\Status;
use App\Surveys;
class CountStatus extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public $name ="Survey Status";

    public function calculate(Request $request)
    {


    
        $Status = Status::withcount('Surveys')->get();
        
        $fixed = Status::find(1);
        $countfixed=count($fixed->Surveys);

        $notfixed = Status::find(2);
        $countnotfix=count($notfixed->Surveys);

        $cantfixed = Status::find(3);
        $countcantfix=count($cantfixed->Surveys);

        return  $this->result([
            'Fixed' => $countfixed, 
            'Not Fixed' => $countnotfix,
            'Can\'t Fix' => $countcantfix,
                ]);
              
    }


  // ->label(function ($label){
  //                   switch ($label) {
  //                       case 3:
  //                           return 'cant fix';
  //                       case 2:
  //                           return 'Not Fixed';
  //                       case 1:
  //                           return 'Fixed';

  //                   }
  //               });
    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        //return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'CountStatus';
    }
}
