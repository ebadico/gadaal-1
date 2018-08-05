<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    //  {
    //      $this->middleware('auth');
    //  }

    //   public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }
    public function index()
    {
            
            return response()->json(survey::get(), 200);

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey = survey::create($request->all());
        $survey->setStatus('Not Fixed', 'Waa meesha wax ka bilowdaan');
        return response()
                ->json(['Success' => 'Waa la diiwaan Gashay']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $survey)
    {
        //
        return response()->json(survey::findorFail($survey), 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $survey)
    {   
                    dd(Request()->all());

        $survey->setStatus('it has been fixed', 'Waa meesha wax ka bilowdaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $survey)
    {
        //
    }
}
