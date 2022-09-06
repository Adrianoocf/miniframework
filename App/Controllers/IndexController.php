<?php
    namespace App\Controllers;

    class IndexController
    {
        public function render($view, $dados)
        {
            require_once '../App/Views/Index/' .$view. '.phtml' ;
        }
        
        public function index()
        {
            $dados = array('Casa','Sofa','Cama');
            $this->render('index',$dados);
        }

        public function sobreNos()
        {
            $dados = array('Celular','Notebook');
            $this->render('sobreNos',$dados);
        }
    }
?>