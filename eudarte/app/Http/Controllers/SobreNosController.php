<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teams = Teams::get();

        return view('/sobrenos',compact('teams'));
    }
}
