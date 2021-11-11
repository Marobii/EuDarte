<?php

namespace App\Http\Controllers;

use App\Emails;
use DB;
use Illuminate\Http\Request;

class EmailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $emails = Emails::get();

        return view('backoffice.Email.index',compact('emails'));
    }


    //Store
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'assunto' => 'required',
            'mensagem' => 'required'
        ]);
        //

        Emails::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'assunto' => $request->assunto,
            'mensagem' => $request->mensagem

        ]);
        return redirect('/contacto')->with('success','Email enviado.');
    }


    //Show
    public function show($id)
    {
        //
        $email = Emails::find($id);
        return view('backoffice.Email.show',compact('email'));
    }

    public function destroy($id)
    {

        //Recebe o id e elimina
        DB::table('emails')->where('id', $id)->delete();

        return redirect('/backoffice/Email/index')->with('success','Email apagado com sucesso.');

    }
}
