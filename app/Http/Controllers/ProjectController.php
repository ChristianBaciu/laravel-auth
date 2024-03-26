<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        // la funzione 'compact' crea un array in cui la chiave è 'projects'
        return view('pages.project.index', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        // sostituire false con true nel file 'StoreProjectRequest'
        // public function authorize(): bool
        // {
        //     return true;
        // }

        // dd($request);

        $val_data = $request->validated();
        // dd($val_data);

        $new_project = Project::create($val_data);
        return redirect()->route('dashboard.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('pages.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        // sostituire false con true nel file 'UpdateProjectRequest'
        // public function authorize(): bool
        // {
        //     return true;
        // }
        $val_data = $request->validated();

        $project->update($val_data);
        return redirect()->route('dashboard.projects.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        // una volta eliminata la colonna desiderata, torneremo nella rotta 'dashboard.projects.index'
        return redirect()->route('dashboard.projects.index');
    }
}
