<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* return view('admin.projects.create'); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->user_id = Auth::id();
        $project->url = $request->url;

        if (array_key_exists('img_url', $request->all())) {
            $url_file = Storage::put('/project_imgs', $request['img_url']);
            $project->img_url = $url_file;
        }

        $project->save();


        return redirect()->route('admin.projects.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        //UPDATE DELL'IMMAGINE MA SE NON CARICO UN ALTRA IMMAGINE ELIMINA L'IMMAGINE ESISTENTE E METTE IL PLACEHOLDER
        if ($request->hasfile('img_url')) {
            Storage::delete($project->img_url);

            $url_file = Storage::put('/project_imgs', $request->file('img_url'));
            $project->img_url = $url_file;
        } /* else {
            if ($project->img_url) {
                $project->img_url = null;
            }
        } */


        $project->update($request->all());

        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->img_url) {
            Storage::delete($project->img_url);
        }

        $project->delete();

        return back();
    }
}
