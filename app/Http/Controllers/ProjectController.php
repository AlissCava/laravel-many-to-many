<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    $projects = Project::with('technologies')->get();

    return view('projects.index', compact('projects'));
}
