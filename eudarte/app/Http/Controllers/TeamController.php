<?php

namespace App\Http\Controllers;

use App\Teams;
use DB;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()) {
            $teams = Teams::get();
            return view('backoffice.Team.index',compact('teams'));
        } else {
            return redirect('/backoffice');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backoffice.Team.create');
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
            'name' => 'required',
            'desc' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        //
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $imageName);
        } else {
            $imageName = null;
        }

        Teams::create([
            'img' => $imageName,
            'name' => $request->name,
            'desc' => $request->desc

        ]);
        return redirect('/backoffice/Team/index')->with('success','Membro adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $team = Teams::find($id);
        return view('backoffice.Team.show',compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $team = Teams::find($id);
        return view('backoffice.Team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Valida o input
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $team = Teams::find($id);

        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'), $imageName);
            $team->img = $imageName;
            $team->name = $request->name;
            $team->desc = $request->desc;
            $team->save();
        } else {
            $team->name = $request->name;
            $team->desc = $request->desc;
            $team->save();
        }

        return redirect('/backoffice/Team/index')->with('success','Membro atualizado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Recebe o id e elimina
        DB::table('teams')->where('id', $id)->delete();

        return redirect('/backoffice/Team/index')->with('success','Membro apagado com sucesso.');

    }
}
