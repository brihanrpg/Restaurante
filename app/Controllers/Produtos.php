<?php

namespace Controllers;

use Components\ToastsAlert;
use Core\Controller;
use Core\View;
use Models\Produto;
use Core\Request;

class Produtos extends Controller
{
    public function index()
    {
        $view = new View('produtos.lista');
        $produtosModel = new Produto();
        $view->produtos = $produtosModel->all();
        $view->setTitle('Cadastro de Produtos')->show();
    }

    public function disponivel(Request $request)
    {
        $produto = new Produto($request->id);
        $produto->disponivel = !$produto->disponivel;
        $produto->save();
        ToastsAlert::addAlertSuccess('Produto alterado com sucesso!');
        $this->redirect();
    }

    public function update(Request $request)
    {
        $produto = new Produto($request->id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->valor_un = $request->valor_un;
        $produto->unidade_medida = $request->unidade_medida;
        $produto->disponivel = (isset($request->disponivel))?1:0;
        $produto->save();
        ToastsAlert::addAlertSuccess("{$produto->nome} Salvo com sucesso!");
        $this->redirect();
    }

    public function novo()
    {
        $view = new View('produtos.item');
        $view->setTitle('Novo Produto')->show();
    }

    public function edit($id)
    {
        $produto = new Produto($id);
        if(!$produto->isStorange()){ 
            ToastsAlert::addAlertError('Requisição inválida');
            $this->redirect();
        }
        $view = new View('produtos.item');
        $view->setTitle("Produto {$produto->nome}")->show($produto->getData());
    }
}
