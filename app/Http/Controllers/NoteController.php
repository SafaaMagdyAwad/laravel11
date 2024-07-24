<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes=Note::query()->orderBy('created_at','desc')->get();
        return view('notes',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('createNote'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Note::create([
            'user_id'=>$request->user_id,
            'note'=>$request->note,
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note=Note::findOrFail($id);
        // dd($note);
        return view('note',compact('note')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note=Note::findOrFail($id);
        return view('editNote',compact('note')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $note=Note::findOrFail($id);
        $note->update([
            'note'=> $request->note
        ]);

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note=Note::findOrFail($id);
        $note->delete();
        return $this->index();
    }
}
