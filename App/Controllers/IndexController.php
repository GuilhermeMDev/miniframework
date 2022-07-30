<?php
namespace App\Controllers;

//recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action {
//aqui apenas metodos que sejam requisitos funcionais, estruturais estao no MF/Controller/

    public function index(){
        $produto = Container::getModel('produto');

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos(){

        $info = Container::getModel('info');

        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;
        $this->render('sobreNos', 'layout2');
    }


}