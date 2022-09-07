<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action
    {
        public function index()
        {
            $produto = Container::getModel('produto');
            $produtos = $produto->getProduto();
            $this->view->dados = $produtos;
            $this->render('index','layout1');
        }

        public function sobreNos()
        {
            $info = Container::getModel('info');
            $infos = $info->getInfo();
            $this->view->dados = $infos;
            $this->render('sobreNos','layout2');
        }

    }
?>