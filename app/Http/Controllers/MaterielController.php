<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materiel;

class MaterielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiels = Materiel::all();
        return view('materiels.index', compact('materiels'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required'
        ]);

        $materiel = new Materiel([
            'nom_materiel' => $request->get('nom_materiel'),
            'caracteristique' => $request->get('caracteristique'),
            'type' => $request->get('type'),
            'marque' => $request->get('marque'),

        ]);
        $materiel->save();
        return redirect('/materiels')->with('success', 'Le materiel a été enregistré!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materiel = Materiel::find($id);
        return view('materiels.edit', compact('materiel'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required'
        ]);
        $materiel = Materiel::find($id);
        $materiel->nom_materiel = $request->get('nom_materiel');
        $materiel->caracteristique = $request->get('caracteristique');
        $materiel->type = $request->get('type');
        $materiel->marque = $request->get('marque');
        $materiel->save();
        return redirect('/materiels')->with('success', 'Le materiel a été modifié!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materiel = Materiel::find($id);
        $materiel->delete();
        return redirect('/materiels')->with('success', 'Le materiel a été supprimé!');
    }
}
