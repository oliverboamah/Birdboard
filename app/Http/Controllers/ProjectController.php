<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        $attributes = request()->validate(
            array(
                'title' => 'required',
                'description' => 'required',
            )
        );

        Project::create($attributes);
        return redirect('/projects');
    }
}
