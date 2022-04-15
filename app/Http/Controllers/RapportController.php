<?php

namespace App\Http\Controllers;

use App\Models\Rapport;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapport = Rapport::all();
        //  dd($rapport);
        return view('rapport.rapport', compact('rapport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rapport.create_rapport');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'annee' => 'integer|required',
            'fichier' => 'string|required'
        ]);

            $rapport = new Rapport();
            $rapport->annee = $request->annee;
            $rapport->fichier = $request->fichier;


            $rapport->save();
        return redirect()->action([RapportController::class, 'index'])->with('message', 'Rapport Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rapport = Rapport::findOrFail($id);
        return view('rapport.show_rapport', compact('rapport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rapport = Rapport::findOrFail($id);

        return view('rapport.edit_rapport', compact('rapport'));
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
        $rapport = Rapport::findOrFail($id);
        $rapport->annee = $request->annee;
        $rapport->fichier = $request->fichier;

        $rapport->save();
         return redirect()->action(
             [RapportController::class, 'index']
         )->with('message', 'rapport update succefully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rapport = Rapport::findOrFail($id);
        $rapport->delete();
        return redirect()->action(
       [RapportController::class, 'index']
        )->with('message', 'rapport delete successfully!');
    }
}
