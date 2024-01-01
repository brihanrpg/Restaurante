<?php


namespace Controllers;
use Core\Controller;
use Core\View;
use Models\Produto;

class Produtos extends Controller{
    public function index()
    {
        $view = new View('produtos.lista');
        $produtosModel = new Produto();
        $view->produtos = $produtosModel->all();
        $view->setTitle('Cadastro de Produtos')->show();

       
    }

    public function produto($id = 0, $nome = 'joaquim'){
        $view = new View('produtos.item');
        $view->nome = $nome;
        $view->valor = 22.39;
        $view->id = $id;
        $view->show();
    }

}