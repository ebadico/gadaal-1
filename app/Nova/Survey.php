<?php

namespace App\Nova;

use Laravel\Nova\Panel;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Status;
use App\Nova\Metrics;
//use Spatie\ModelStatus\HasStatuses;
use OwenMelbz\RadioField\RadioButton;

use Laravel\Nova\Fields\Textarea;

use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Survey extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Survey';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */

    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','fullname','Created_at','phone',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
           
            $this->StatusField(),
            ID::make()->sortable(),
            Text::make('fullname')->hideWhenUpdating(),
            Text::make('phone')->hideWhenUpdating(),
            Text::make('age')
                ->sortable()
                ->hideWhenUpdating(),
            Text::make('Gender')->hideWhenUpdating(),
            BelongsTo::make('Town')->searchable()->hideWhenUpdating(),
            DateTime::make('Created at')->format('DD MMM, YY'),
            DateTime::make('Updated at')->hideFromIndex(),

          new Panel('Infrastructure', $this->Infrastructure()),
          new Panel('Finance', $this->Finance()),
          new Panel('Quantity/Quality', $this->Quantity()),
          new Panel('Access', $this->Access()),
          new Panel('Health', $this->Health()),
          new Panel('Violence', $this->Violence()),



    ];
           
    }
public function StatusField()
    {

        return BelongsToMany::make('Status')
                ->fields(function () {
                    return [
                        Textarea::make('Comments','note')                
                            ->rules('required'),
                    ];
                });
    }

  
    protected function Infrastructure()
        {
            return [

                Text::make('Is there any water leakage?', 'leak')
                     ->hideFromIndex(),
                Text::make('Is there any missing handler?','key')
                     ->hideFromIndex(),
                Text::make('Is there any broken tap','tap')
                     ->hideFromIndex(),
                Text::make('fence')
                     ->hideFromIndex(),
                Text::make('gate')
                     ->hideFromIndex(),
            ];
        }

    protected function Finance()
        {
            return [
                Text::make('Is the water expensive?', 'price')
                    ->hideFromIndex(),
                Text::make('how much is 20 litre??','pjirgaan')
                    ->hideFromIndex(),
                Text::make('Have you paid any extra cash to get your water?','extracash')->hideFromIndex(),
                Text::make('Was this a bribe or something reasonable?','bribe')
                    ->hideFromIndex(),
                Text::make('Was it a lot of money??','alotofmoney')
                    ->hideFromIndex(),
                Text::make('is the extra money kept at the kiosk?','kept')
                    ->hideFromIndex(),
                Text::make('Do you have any Income?','income')
                    ->hideFromIndex(),
                Text::make('Do you receive the water receipt','invoice')
                    ->hideFromIndex(),
                Text::make('is there any cheating at the water point?','cheating')
                    ->hideFromIndex(),
                
            ];
        }

    protected function Quantity()
        {
            return [

                Text::make('Does the water have a taste?', 'taste')
                    ->hideFromIndex(),
                Text::make('Is the tap water dirty??','dirtywater')
                    ->hideFromIndex(),
                Text::make('Is the water hard when washing clothes?','hardwater')
                    ->hideFromIndex(),
                Text::make('Is the water slow during the day','slowwater')
                    ->hideFromIndex(),
                Text::make('Is there any challenge of Working four taps at the same time?','fourtaps')
                    ->hideFromIndex(),   
            ];
        }

    protected function Access()
        {
            return [

                Text::make('Is the kiosk dark at night?', 'light')
                    ->hideFromIndex(),
                Text::make('is the gate locked more often?','hardwater')
                    ->hideFromIndex(),
                Text::make('Is the water kiosk far from you more than 500 Meter','faraway')
                    ->hideFromIndex(),
                Text::make('Do you wait the kiosk line more than 15 munites?','longer')
                    ->hideFromIndex(),
                Text::make('Is Waiting time for women more than men?
                        ?','waitingtime')
                    ->hideFromIndex(),
                Text::make('the kiosk attendant doesnt allow kids?','toaccess')
                    ->hideFromIndex(),
                Text::make('Is the kiosk overcrowded?','overcrowded')
                    ->hideFromIndex(), 
            ];
        }

    protected function Health()
        {
            return [
                Text::make('Do you drink the kiosk  water?', 'drink')
                    ->hideFromIndex(),
                Text::make('Do you feel headache after drinking the water?', 'headache')
                    ->hideFromIndex(),
                Text::make('Do you have diarrhea when you drink the kiosk water?','sick')
                    ->hideFromIndex(),
                Text::make('Do you feel stomachache after drinking the water??','stomachache')
                    ->hideFromIndex(),
                Text::make('Do you have diarrhea when you drink the kiosk water','diarrhea')
                    ->hideFromIndex(),
            ];
        }

    protected function Violence()
        {
            return [
                Text::make('Have you faced any security problem while fetching water?', 'security')
                    ->hideFromIndex(),
                Text::make('Gender', 'sgender')
                    ->hideFromIndex(),
                Text::make('Do you face security problem during the night?','securitynight')
                    ->hideFromIndex(),
                Text::make('Do you face security problem during the Day?','securityday')
                    ->hideFromIndex(),
                
            ];
        }
    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [

            (new Metrics\NewSurveys)->width('1/2'),
            (new Metrics\SurveyAgeGroup)->width('1/2'),
            
            
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [
            new Filters\SurveyStatus,

        ];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {


        return [


       
         (new DownloadExcel)
                ->only('id', 'request->key','fullname','phone','gender','age','town_id','created_at','infrastructure', 'finance',
                'quantity', 'access',
                'health', 'violence')->withHeadings(),


        ];
    }
}
