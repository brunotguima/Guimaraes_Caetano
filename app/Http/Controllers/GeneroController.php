<?php

namespace App\Http\Controllers;

use App\Genero;
use App\Filme;
use App\Listarep;
use Illuminate\Http\Request;

class GeneroController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $generos = Genero::all();
        return view('generos.index', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, array(
    'nome' =>'required|max:255'
));
        $genero = new Genero();
        $genero->nome = $request->nome;
        $genero->save();
        return redirect('/generos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero $genero) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $genero) {
        $genero->delete();
        return redirect('generos');
    }

}
