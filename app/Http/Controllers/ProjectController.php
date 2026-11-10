<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the projects.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'due_date' => ['nullable', 'date'],
            'status' => [
                'sometimes',
                'required',
                Rule::in(['pending', 'in_progress', 'completed']),
            ],
        ]);

        $validated['user_id'] = auth()->id();

        $project = Project::create($validated);

        return redirect()
            ->route('projects.show', $project)
            ->with('success', 'Proyecto creado correctamente.');
    }

    /**
     * Display the specified project.
     */
    public function show(Project $project)
    {
        $this->authorizeProject($project);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit(Project $project)
    {
        $this->authorizeProject($project);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, Project $project)
    {
        $this->authorizeProject($project);

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'due_date' => ['nullable', 'date'],
            'status' => [
                'required',
                Rule::in(['pending', 'in_progress', 'completed']),
            ],
        ]);

        $project->update($validated);

        return redirect()
            ->route('projects.show', $project)
            ->with('success', 'Proyecto actualizado correctamente.');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy(Project $project)
    {
        $this->authorizeProject($project);

        $project->delete();

        return redirect()
            ->route('projects.index')
            ->with('success', 'Proyecto eliminado correctamente.');
    }

    /**
     * Check if the authenticated user owns the project.
     */
    private function authorizeProject(Project $project): void
    {
       abort_unless(
            $project->user_id === auth()->id(),
            403,
            'No tienes permiso para acceder a este proyecto.'
        );
    }
}
