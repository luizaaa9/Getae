<?php

namespace App\Http\Controllers;

use App\Http\Requests\SobreRequest;
use App\Models\Sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sobreinfo = Sobre::all();

        return view('sobre.index', [
            'informacao' => $sobreinfo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sobre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SobreRequest $request)
    {
        $informacoes = $request->validated();
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->store('sobre', 'public');
            $informacoes['imagem'] = $caminhoImagem;
        }
        Sobre::create($informacoes);
        return redirect()-> route('sobre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sobre $sobre)
    {
        $sobre->delete();
        return redirect()->route('sobre.index');
    }
}
