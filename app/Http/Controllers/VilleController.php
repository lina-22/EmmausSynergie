<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ville = Ville::all();
        //  dd($ville);
        return view('ville.ville', compact('ville'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ville.create_ville');
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
        ]);

            $ville = new Ville();
            $ville->name = $request->name;


            $ville->save();
        return redirect()->action([VilleController::class, 'index'])->with('message', 'Ville Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ville = Ville::findOrFail($id);
        return view('ville.show_ville', compact('ville'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ville = Ville::findOrFail($id);

        return view('ville.edit_ville', compact('ville'));
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
        $ville = Ville::findOrFail($id);
        $ville->name = $request->name;

        $ville->save();
         return redirect()->action(
             [VilleController::class, 'index']
         )->with('message', 'ville update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    $ville = Ville::findOrFail($id);
        $ville->delete();
        return redirect()->action(
       [VilleController::class, 'index']
        )->with('message', 'ville delete successfully!');
        //
    }
}
