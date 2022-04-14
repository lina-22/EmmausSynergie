<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $action = Action::all();
        //  dd($action);
        return view('action.action', compact('action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('action.create_action');
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
            'type' => 'string|required'
        ]);

            $action = new Action();
            $action->name = $request->name;
            $action->type = $request->type;

            $action->save();
        return redirect()->action([ActionController::class, 'index'])->with('message', 'Action Add Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = Action::findOrFail($id);
        return view('action.show_action', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = Action::findOrFail($id);

        return view('action.edit_action', compact('action'));
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
        $action = Action::findOrFail($id);
        $action->name = $request->name;
        $action->type = $request->type;
        $action->save();
         return redirect()->action(
             [ActionController::class, 'index']
         )->with('message', 'action update succefully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action = Action::findOrFail($id);
        $action->delete();
        return redirect()->action(
       [ActionController::class, 'index']
        )->with('message', 'action delete successfully!');
    }
}
