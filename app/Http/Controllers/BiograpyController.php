<?php

namespace App\Http\Controllers;

use App\Models\Biograpy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiograpyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biograpies = Biograpy::all();
        return view('admin.biograpies.index', compact('biograpies'));
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
        $biograpy = new Biograpy();
        $biograpy->description = $request->description;
        $biograpy->user_id =  Auth::id();
        $biograpy->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Biograpy $biograpy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biograpy $biograpy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biograpy $biograpy)
    {
         $biograpy->update([
            'description' => $request->description,
        ]);

        return redirect()->route('admin.biograpies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biograpy $biograpy)
    {
        //
    }
}
