<?php

namespace App\Http\Controllers;

use App\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTownsRequest;
use App\Http\Requests\Admin\UpdateTownsRequest;

class TownsController extends Controller
{
    /**
     * Display a listing of Town.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('town_access')) {
            return abort(401);
        }

        


        if (request('show_deleted') == 1) {
            if (! Gate::allows('town_delete')) {
                return abort(401);
            }
            $towns = Town::onlyTrashed()->get();
        } else {
            $towns = Town::all();
        }

        return view('admin.towns.index', compact('towns'));
    }

    /**
     * Show the form for creating new Town.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('town_create')) {
            return abort(401);
        }
        return view('admin.towns.create');
    }

    /**
     * Store a newly created Town in storage.
     *
     * @param  \App\Http\Requests\StoreTownsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTownsRequest $request)
    {
        if (! Gate::allows('town_create')) {
            return abort(401);
        }
        $town = Town::create($request->all());



        return redirect()->route('admin.towns.index');
    }


    /**
     * Show the form for editing Town.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('town_edit')) {
            return abort(401);
        }
        $town = Town::findOrFail($id);

        return view('admin.towns.edit', compact('town'));
    }

    /**
     * Update Town in storage.
     *
     * @param  \App\Http\Requests\UpdateTownsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTownsRequest $request, $id)
    {
        if (! Gate::allows('town_edit')) {
            return abort(401);
        }
        $town = Town::findOrFail($id);
        $town->update($request->all());



        return redirect()->route('admin.towns.index');
    }


    /**
     * Display Town.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('town_view')) {
            return abort(401);
        }
        $surveys = \App\Survey::where('town_id', $id)->get();

        $town = Town::findOrFail($id);

        return view('admin.towns.show', compact('town', 'surveys'));
    }


    /**
     * Remove Town from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('town_delete')) {
            return abort(401);
        }
        $town = Town::findOrFail($id);
        $town->delete();

        return redirect()->route('admin.towns.index');
    }

    /**
     * Delete all selected Town at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('town_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Town::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Town from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('town_delete')) {
            return abort(401);
        }
        $town = Town::onlyTrashed()->findOrFail($id);
        $town->restore();

        return redirect()->route('admin.towns.index');
    }

    /**
     * Permanently delete Town from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('town_delete')) {
            return abort(401);
        }
        $town = Town::onlyTrashed()->findOrFail($id);
        $town->forceDelete();

        return redirect()->route('admin.towns.index');
    }
}
