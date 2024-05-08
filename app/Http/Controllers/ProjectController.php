<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ServiceOrder;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerProjects = ServiceOrder::where('user_id', '3')->paginate(6);
        return view('customer.CustomerProjectListPage', [
            'TabTitle' => 'Your Projects',
            'customerProjects' => $customerProjects,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $choseProject = ServiceOrder::findOrFail($id);
        $project = $choseProject->Projects;
        $urlPhoto = $project->PhotoResults->first()->url;
        $urlVideo = $project->VideoResults->first()->url;
        return view('customer.CustomerProjectDetailPage', [
            'urlPhoto' => $urlPhoto,
            'urlVideo' => $urlVideo,
            'choseProject' => $choseProject,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
