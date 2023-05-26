<?php
    require 'models/Programa.php';

    class ProgramaController
    {
        private $model;

        public function __construct(){
            $this->model= new Programa;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $programas= $this->model->getAll();
            require 'views/programa/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            $data=[
                'programa'    => $_POST['programa'],
                'descripcion' => $_POST['descripcion'],
                'estado'      => "activo"
            ];

            $this->model->newPrograma($data);
            header ('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        public function view(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $data= $this->model->getById($id);
                
                require 'views/dashboard_up.php';
                require 'views/programa/editar.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST)){
                $data=[
                    'id_programa' => $_POST['id_programa'],
                    'programa'    => $_POST['programa'],
                    'descripcion' => $_POST['descripcion'],
                    'estado'      => "activo"
                ];

                $this->model->updatePrograma($data);
                header ('Location: ?controller=programa');
            }else{
                echo 'Error';
            }
        }
    }