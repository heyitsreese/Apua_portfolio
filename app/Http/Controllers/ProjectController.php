<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function create() {
        return view('project_create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'tech_stack' => 'required'
        ]);

        Project::create($validated);

        return redirect()->route('projects.index')
                         ->with('success', 'Project created successfully');
    }

    public function edit(Project $project) {
        return view('project_edit', compact('project'));
    }

    public function update(Request $request, Project $project) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'tech_stack' => 'required'
        ]);

        $project->update($validated);

        return redirect()->route('projects.index')
                         ->with('success', 'Project updated successfully');
    }
}