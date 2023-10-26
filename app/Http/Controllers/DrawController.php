<?php

namespace App\Http\Controllers;

use App\Models\Draw;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DrawController extends Controller
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
        $draws = Draw::where(function ($query) use ($search) {
            $query->where('title', 'like', "%$search%")
                ->orWhere('url', 'like', "%$search%");
        })->orderBy('id', 'ASC')->get();


        return view('admin.draws.index', compact('draws'));
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
    public function store(Request $request)
    {
        $draw = new Draw();
        $draw->title = $request->title;
        $draw->user_id = Auth::id();
        $draw->url = $request->url;

        if (array_key_exists('img_url', $request->all())) {
            $url_file = Storage::put('/draw_imgs', $request['img_url']);
            $draw->img_url = $url_file;
        }

        $draw->save();

        return redirect()->route('admin.draws.index')->with('message', 'Contenuto aggiunto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Draw $draw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Draw $draw)
    {

        if ($draw->user_id == Auth::id()) {
            return view('admin.draws.edit', compact('draw'));
        } else {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Draw $draw)
    {
        

        try {

            if ($draw->user_id == Auth::id()) {
                //UPDATE DELL'IMMAGINE MA SE NON CARICO UN ALTRA IMMAGINE ELIMINA L'IMMAGINE ESISTENTE E METTE IL PLACEHOLDER
                if ($request->hasfile('img_url')) {
                    Storage::delete($draw->img_url);

                    $url_file = Storage::put('/draw_imgs', $request->file('img_url'));
                    $draw->img_url = $url_file;
                }
            } else {
                return abort(404);
            }

            $draw->update($request->all());
            return redirect()->route('admin.draws.index')->with('message', 'Contenuto aggiornato');
        } catch (Exception $e) {
            return redirect()->route('admin.draws.index')->with('message', 'Qualcosa è andato storto');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Draw $draw)
    {
 
        if ($draw->img_url) {
            Storage::delete($draw->img_url);
        }

        $draw->delete();

        return back()->with('message', 'Contenuto eliminato');
    }
}
