<?php
    namespace App\Controllers;

    class IndexController
    {
        private $view;

        public function __construct()
        {
            $this->view = new \stdClass();            
        }
        
        public function render($view)
        {
            $classAtual = get_class($this);
            $classAtual = str_replace('App\\Controllers\\' ,'', $classAtual);
            $classAtual = str_replace('Controller' ,'', $classAtual);
            echo $classAtual;
            require_once '../App/Views/' .$classAtual. '/' .$view. '.phtml';
        }
        
        public function index()
        {
            $this->view->dados = array('Casa','Sofa','Cama');
            $this->render('index');
        }

        public function sobreNos()
        {
            $this->view->dados = array('Celular','Notebook');
            $this->render('sobreNos');
        }
    }
?>