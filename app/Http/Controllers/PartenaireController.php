<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaire = Partenaire::all();
        //  dd($partenaire);
        return view('partenaire.partenaire', compact('partenaire'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partenaire.create_partenaire');
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
            'name' => 'string|required',
            'text' => 'string|required'
        ]);

            $partenaire = new Partenaire();
            $partenaire->name = $request->name;
            $partenaire->text = $request->text;


            $partenaire->save();
        return redirect()->action([PartenaireController::class, 'index'])->with('message', 'Partenaire Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view('partenaire.show_partenaire', compact('partenaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partenaire = Partenaire::findOrFail($id);

        return view('partenaire.edit_partenaire', compact('partenaire'));
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
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->name = $request->name;
        $partenaire->text = $request->text;

        $partenaire->save();
         return redirect()->action(
             [PartenaireController::class, 'index']
         )->with('message', 'partenaire update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->delete();
        return redirect()->action(
       [PartenaireController::class, 'index']
        )->with('message', 'partenaire delete successfully!');
    }
}
