<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Town;
use DB;
use Carbon\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {          
            //dd(Request()->all());
            //$counttwons=town::with('surveys')->get();
            // $counttwons=town::withcount(['surveys' 
            //                 => function ($query) {

            //                 $query->groupBy(
            //                 DB::raw('MONTH(created_at)'));
            //                 }])
            //                 ->get();

            $counttwons=Survey::selectRaw(
                    'YEAR(created_at) year,
                    MONTHNAME(created_at) month, 
                    count(*) total')
            ->groupBy('month', 'year')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->take(4)
            ->toArray();
            //return $counttwons;
            $now = Carbon::now();
           // $allStatuses = survey::currentStatus('Not Fixed');

            $infrastructure=survey::infrastructure()
                    ->whereMonth('created_at', $now->month)->get();
            $finance=survey::finance()
                    ->whereMonth('created_at', $now->month)->get();
            $quantity=survey::where('quantity', '1')
                    ->whereMonth('created_at', $now->month)->get();
            $health=survey::where('health', '1')
                    ->whereMonth('created_at', $now->month)->get();
            $violence=survey::where('violence', '1')
                    ->whereMonth('created_at', $now->month)->get();
            $access=survey::where('access', '1')
                    ->whereMonth('created_at', $now->month)->get();
                //return $surveys;
            return view('home', compact('allStatuses','surveys', 'counttwons',
                            'infrastructure','quantity','finance',
                            'health', 'violence', 'access'));
    }

    public function fixed($Request)
    {
        
    }

    public function show($survey){


        $survey = survey::findOrFail($survey);

        return view('show', compact('survey'));

        //return $survey;

    }

   
}
