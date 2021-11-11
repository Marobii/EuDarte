<?php

namespace App\Http\Controllers;

use App\Qas;
use Illuminate\Http\Request;

class FqaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $qas = Qas::get();

        return view('/qas',compact('qas'));
    }
}
