<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->input('search');
        //ricerca solo del titolo
        /*  $projects = Project::where('title', 'like', "%$search%")->orderBy('position', 'ASC')->get(); */

        //ricerca del titolo e dell'url
        $projects = Project::where(function ($query) use ($search) {
            $query->where('title', 'like', "%$search%")
                ->orWhere('url', 'like', "%$search%");
        })->orderBy('position', 'ASC')->get();

 
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* return view('admin.projects.create'); */
    }

    public function show($id)
    {
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

        return redirect()->route('admin.projects.index')->with('message', 'Contenuto aggiunto');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->user_id == Auth::id()) {
            return view('admin.projects.edit', compact('project'));
        } else {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        try {

            if ($project->user_id == Auth::id()) {
                //UPDATE DELL'IMMAGINE MA SE NON CARICO UN ALTRA IMMAGINE ELIMINA L'IMMAGINE ESISTENTE E METTE IL PLACEHOLDER
                if ($request->hasfile('img_url')) {
                    Storage::delete($project->img_url);

                    $url_file = Storage::put('/project_imgs', $request->file('img_url'));
                    $project->img_url = $url_file;
                }
            } else {
                return abort(404);
            }

            $project->update($request->all());
            return redirect()->route('admin.projects.index')->with('message', 'Contenuto aggiornato');
        } catch (Exception $e) {
            return redirect()->route('admin.projects.index')->with('message', 'Qualcosa è andato storto');
        }
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

        return back()->with('message', 'Contenuto eliminato');
    }

    public function updatePosition(Request $request, Project $project)
    {
        //FUNZIONANTE
        // Controlla se il nuovo numero di posizione è diverso da quello attuale
        if ($project->position != $request->position) {
            // Calcola la differenza di posizione
            $differenzaPosizione = $request->position - $project->position;

            // Se la nuova posizione è maggiore, sposta gli altri elementi verso l'alto
            if ($differenzaPosizione > 0) {
                Project::where('user_id', '=', Auth::id())->where('position', '>', $project->position)
                    ->where('position', '<=', $request->position)
                    ->decrement('position');
            }

            // Se la nuova posizione è minore, sposta gli altri elementi verso il basso
            elseif ($differenzaPosizione < 0) {
                Project::where('user_id', '=', Auth::id())->where('position', '>=', $request->position)
                    ->where('position', '<', $project->position)
                    ->increment('position');
            }

            // Aggiorna la posizione dell'elemento corrente
            $project->position = $request->position;
            $project->save();
        }

        return redirect()->back()->with('message', "$project->name_category spostato nella posizione $project->position");
    }
}
