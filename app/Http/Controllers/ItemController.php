<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    public function proyek() {
        return view('layouts.home');
    }


    public function index()
    {
        $projects = DB::table('projects')->get();
        return view('layouts.index', compact('projects'));
    }

    public function create()
    {
        return view('layouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $project = DB::table('projects')->insert([
            'name' => $request['name'],
            'description' => $request['desccription'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date']
        ]);

        return redirect('/proyek')->with('status', 'Add data success!');
    }

    public function show($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        return view('layouts.show', compact('project'));
    }

    public function edit($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        return view('layouts.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $project = DB::table('projects')
              ->where('id', $id)
              ->update([
                'name' => $request['name'],
                'description' => $request['desccription'],
                'start_date' => $request['start_date'],
                'end_date' => $request['end_date']
                ]);
        
        return redirect('/proyek')->with('status', 'Update project success!');
    }
}
