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

    public function update(Request $request){
        $produto = new Produto($request->id);
        $produto->nome = $request->nome;
        if (isset($request->descricao) && $request->descricao !== null) {
            $produto->descricao = $request->descricao;
        } else {
            ToastsAlert::addAlertError('A descrição do produto não pode ser nula.');
            $this->redirect();
        }
        $produto->valor_un = $request->valor_un;
        $produto->unidade_medida = $request->unidade_medida;
        $produto->disponivel = (isset($request->disponivel)) ? 1 : 0;
        $produto->save();
        ToastsAlert::addAlertSuccess("{$produto->nome} salvo com sucesso!");
        $this->redirect();
    }
    

    public function novo()
    {
        $view = new View('produtos.item');
        $view->setTitle('Novo Produto')->show();
    }

    public function edit($id){
        $produto = new Produto($id);
        if(!$produto->isStorage()){ 
            ToastsAlert::addAlertError('Requisição inválida');
            $this->redirect();
        }
        $view = new View('produtos.item');
        $view->setTitle("Produto {$produto->nome}")->show($produto->getData());
    }

    public function delete(Request $request){
        $produto = new Produto($request->id);
        if ($produto->isStorage()) {
            ToastsAlert::addAlertSuccess("{$produto->nome} Excluido com sucesso!");
            $produto->delete();
            $this->redirect();
        }
        ToastsAlert::addAlertError('Produto nao existe');
        $this->redirect();
    }
        
        
}
