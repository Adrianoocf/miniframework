<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;
    use App\Models\Info;

    class IndexController extends Action
    {
        public function index()
        {
            // $this->view->dados = array('Casa','Sofa','Cama');
            $conn = Connection::getDb();
            $produto = new Produto($conn);
            $produtos = $produto->getProduto();
            $this->view->dados = $produtos;
            $this->render('index','layout1');
        }

        public function sobreNos()
        {
            // $this->view->dados = array('Celular','Notebook');
            $conn = Connection::getDb();
            $info = new Info($conn);
            $infos = $info->getInfo();
            $this->view->dados = $infos;
            $this->render('sobreNos','layout2');
        }

    }
?>