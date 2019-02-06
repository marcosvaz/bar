<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;

class ImagesController extends Controller
{
    // Página Inicial
    public function index()
    {
        $imagens = Image::all();
        return view('index');
    }

    public function itaim()
    {
        $imagens = Image::all();
        return view('itaim', compact('imagens'));
    }

    public function vilamadalena()
    {
        $imagens = Image::all();
        return view('vilamadalena', compact('imagens'));
    }

    // Página Inicial
    public function testes()
    {
        $imagens = Image::all();
        return view('/testes', compact('imagens'));
    }

    // Login
    public function login(Request $req)
    {
        $user = $req->user;
        $pass = $req->pass;
        if($user == 'admin' && $pass == 'admin'){
            return view('admin.index');
        }
        else{
            $erro = "Usuário / Senha Inválidos!";
            return view('admin.login', compact('erro'));
        }
    }

    // Mostrar
    public function mostrar($id)
    {
        $secao = $id;
        $imagens = Image::all();
        return view('admin.edicao', compact('secao', 'imagens'));
    }

    // Adicionar
    public function adicionar($id, Request $req)
    {
        $dados = $req->all();

        if($req->hasFile('url')){
            $imagem = $req->file('url');
            $num = rand(1111, 9999);
            $dir = 'images/';
            $ex = $imagem->guessClientExtension();
            $nomeImagem = 'img'.$num.'.'.$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['url'] = $dir.$nomeImagem;
        }

        Image::create($dados);
        $secao = $id;
        return redirect()->route('admin.edicao', compact('secao'));
    }

    // Editar
    public function editar($id)
    {
        $registro = Image::find($id);
        $id = $registro->id;
        return view('admin.alterar', compact('registro', 'id'));
    }
    public function alterar(Request $req, $id)
    {
        $dados = $req->all();

        if($req->hasFile('url')){
            $imagem = $req->file('url');
            $num = rand(1111, 9999);
            $dir = 'images/';
            $ex = $imagem->guessClientExtension();
            $nomeImagem = 'img'.$num.'.'.$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['url'] = $dir.$nomeImagem;
        } else {
            $dados['url'] = $dados['url-atual'];
        }

        Image::find($id)->delete();
        Image::create($dados);
        $secao = $req->secao;
        return redirect()->route('admin.edicao', compact('secao'));
    }

    // Deletar
    public function deletar($section, $id)
    {
        Image::find($id)->delete();
        $secao = $section;
        return redirect()->route('admin.edicao', compact('secao'));
    }
}
