<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{

     public function create()
    {
        $users = User::all();
        $technologies = Technology::all();

        return view('projects.create', compact('users', 'technologies'));
    }

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        $project->technologies()->attach($request->technologies);

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        $users = User::all();
        $technologies = Technology
    }
}