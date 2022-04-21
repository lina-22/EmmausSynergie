<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;
use Image;

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
            'idActivites' => 'integer',
            'dateAction' => 'date',
            'title' => 'string',
            'address' => 'string|nullable',
            'image' => 'image',
            'content' => 'string'
        ]);


        $file = $request->file('image');
        // $extension = $file->getClientOriginalExtension();//
        $extension = $file->getClientOriginalExtension();
        $image_name = 'Action_'.time().'.'.$extension;
        Image::make($file)->save(public_path()."/uploads/".$image_name);

            $action = new Action();
            $action->idActivites = $request->idActivites;
            // dd($request->idActivites);
            $action->dateAction = $request->dateAction;
            $action->title = $request->title;
            $action->address = $request->address;
            $action->image = $image_name;
            $action->content = $request->content;

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
        $action->address = $request->address;
        $action->title = $request->title;
        $action->content = $request->content;
        // $action->image = $image_name;
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
