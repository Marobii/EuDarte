<?php

namespace App\Http\Controllers;

use App\Qas;
use DB;
use Illuminate\Http\Request;

class QasController extends Controller
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

            $qas = Qas::get();
            return view('backoffice.Qa.index',compact('qas'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backoffice.Qa.create');
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
            'pergunta' => 'required',
            'resposta' => 'required',
        ]);

        Qas::create([
            'pergunta' => $request->pergunta,
            'resposta' => $request->resposta
        ]);
        return redirect('/backoffice/Qa/index')->with('success','QA adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qa  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $qa = Qas::find($id);
        return view('backoffice.Qa.show',compact('qa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Qa  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $qa = Qas::find($id);
        return view('backoffice.Qa.edit',compact('qa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qa  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Valida o input
        $request->validate([
            'pergunta' => 'required',
            'resposta' => 'required',
        ]);
        $qa = Qas::find($id);

        if($request->hasFile('image')) {
            $qa->pergunta = $request->pergunta;
            $qa->resposta = $request->resposta;
            $qa->save();
        } else {
            $qa->pergunta = $request->pergunta;
            $qa->resposta = $request->resposta;
            $qa->save();
        }

        return redirect('/backoffice/Qa/index')->with('success','QA atualizado com sucesso.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QA  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('qas')->where('id', $id)->delete();

        return redirect('/backoffice/Qa/index')->with('success','QA apagado com sucesso.');

    }

}
