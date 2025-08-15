<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipeRequest;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipe = User::where('role', 'admin')->get();

        return view('equipe.index', [
            "equipe" => $equipe,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("equipe.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipeRequest $request)
    {
        $dados = $request->validated();
        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->store('noticias', 'public');
            $dados['imagem'] = $caminhoImagem;
        }
        Equipe::create($dados);
        return redirect()-> route('equipe.index');
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
        $equipe = Equipe::findOrFail($id);
        return view('equipe.create', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipeRequest $request, string $id)
    {
        $equipe = Equipe::findOrFail($id);

        $dados = $request->validated();

        // Se o usuário enviou uma nova imagem
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $caminhoImagem = $imagem->store('noticias', 'public');
            $dados['imagem'] = $caminhoImagem;
        }

        $equipe->update($dados);

        return redirect()->route('equipe.index')->with('success', 'Equipe atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipe $equipe)
    {
        $equipe->delete();
        return redirect()->route('equipe.index');
    }

    public function mudarDescricao(EquipeRequest $request, $id)
    {
        $request->validated();
        $membro = Equipe::find($id);

        $membro->descricao = $request->descricao;
        $membro->save();

        return redirect()->route('equipe.index');
    }
}
