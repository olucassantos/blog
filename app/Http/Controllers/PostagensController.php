<?php

namespace App\Http\Controllers;

use App\Models\Postagem;
use Illuminate\Http\Request;

class PostagensController extends Controller
{
    public function index()
    {
        $postagens = Postagem::all();

        return view('index', compact('postagens'));
    }

    public function show($id)
    {
        $postagem = Postagem::findOrFail($id);
        return view('show', compact('postagem'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $requisicao)
    {
        // echo $requisicao->titulo;
        // echo "<br>";
        // echo $requisicao->descricao;
        $dados = $requisicao->except('_token');
        Postagem::create($dados);

        return redirect()->route('postagens.index');
    }
}
