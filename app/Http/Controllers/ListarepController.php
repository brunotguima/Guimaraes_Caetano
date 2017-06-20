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
       $listareps = Listarep::all();
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
        $listareps->filme()->sync($request->filmes, false);
        return redirect()->route('listareps.show', $listareps->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function show($listarep) {
        $listarep = Listarep::find($listarep);
        return view('listareps.show')->withListarep($listarep);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function edit(Listarep $listarep) {
        $listareps = Listarep::find($listarep);
        $listarepss = Listarep::all();
        $filmes = Filme::all();
        $filmes2 = array();
        foreach ($filmes as $filme){
            $filmes2[$filme->id] = $filme->titulo;
        }
        return view('listareps.edit', compact('listareps','filmes2','listarepss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listarep  $listarep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listarep $listarep) {
$listareps = Listarep::find($listarep);
        $listareps->nome = $request->input('nome');
        $listareps->descricao = $request->input('descricao');
        $listareps->creator = $request->input('creator');
        $listareps->save();
        if (isset($request->filme)){
$listareps->filme()->sync($request->filmes);
        }else{
            $listareps->filme()->sync(array());
        }
        return redirect()->route('listareps.show', $listareps->id);
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
