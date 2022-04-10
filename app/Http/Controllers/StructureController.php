<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $structure = Structure::all();
        //  dd($structure);
        return view('structure.structure', compact('structure'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('structure.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|required',
            'type' => 'string|required'
        ]);
        if ($validator->fails()) {
            $res['message'] = $validator->errors()->first();
        } else {
            $structure = new Structure();
            $structure->name = $request->name;
            $structure->type = $request->type;

            $structure->save();
        }
        return redirect()->action([StructureController::class, 'index'])->with('message', 'Structure Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $structure = Structure::findOrFail($id);
        return view('show_structure', compact('structure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $structure = Structure::findOrFail($id);

        return view('structure.edit_structure', compact('structure'));
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
        $role = Structure::findOrFail($id);
        $role->name = $request->name;
        $role->save();
        return redirect()->action(
            [RoleController::class, 'index']
        )->with('message', 'structure update succefully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Structure::findOrFail($id);
        $role->delete();
        return redirect()->action(
       [RoleController::class, 'index']
        )->with('message', 'structure delete succefully!');
    }

}
