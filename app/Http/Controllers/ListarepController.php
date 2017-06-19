<?php

namespace App\Http\Controllers;

use App\Filme;
use App\Listarep;
use Illuminate\Http\Request;

class ListarepController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $listareps = Listarep::all(); //with(['filme'])->get();
        return view('listareps.index', compact('listareps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $filmes = Filme::all();
        return view('listareps.create', compact('filmes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $listareps = new Listarep();
        $listareps->nome = $request->nome;
        $listareps->descricao = $request->descricao;
        $listareps->creator = $request->creator;
        $listareps->save();
        return redirect('listareps');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function show(Listarep $listareps) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function edit(Listarep $listareps) {
        return view('listareps.edit', compact('listareps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listarep $listareps) {
        $listareps->nome = $request->nome;
        $listareps->descricao = $request->descricao;
        $listareps->creator = $request->creator;
        $listareps->save();
        return redirect('listareps');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listarep $listarep) {
        $listarep->delete();
        return redirect('listareps');
    }

}
