<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Nova\Metrics;
class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        // Gate::define('viewNova', function ($user) {
        //     return in_array($user->email, [
        //         //
        //     ]);
        // });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            (new Metrics\CountStatus)->width('1/2'),
            (new Metrics\SurveyAgeGroup)->width('1/2'),
            (new Metrics\NewSurveys)->width('1/2'),
            (new Metrics\SurveyPerDay)->width('1/2'),
            // (new Metrics\SurveyStatus)->width('1/2'),


        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [

           // new \Vyuldashev\NovaPermission\NovaPermissionTool(),
            (new \Vyuldashev\NovaPermission\NovaPermissionTool())
            ->canSee(function ($request) {
                return $request->user()->hasrole('super-admin', $this);
            }),


            (new \Spatie\BackupTool\BackupTool())
            ->canSee(function ($request) {
                return $request->user()->hasrole('super-admin', $this);
            }),
         

            new \Runline\ProfileTool\ProfileTool,


        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
