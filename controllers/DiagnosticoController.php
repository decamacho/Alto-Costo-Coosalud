<?php
    require 'models/Diagnostico.php';
    require 'models/Paciente.php';

    class DiagnosticoController
    {
        private $model;
        private $paciente;

        public function __construct(){
            $this->model= new Diagnostico;
            $this->paciente= new Paciente;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $diagnosticos= $this->model->getAll();
            $pacientes= $this->paciente->getAll();
            require 'views/diagnostico/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            $data=[
                'cie_10'      => $_POST['cie_10'],
                'descripcion' => $_POST['descripcion'],
                'id_paciente' => $_POST['id_paciente'],
                'estado'      => "activo"
            ];

            $this->model->newDiagnostico($data);
            header ('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        public function view(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $data= $this->model->getById($id);
                $pacientes= $this->paciente->getAll();

                require 'views/dashboard_up.php';
                require 'views/diagnostico/editar.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST)){
                $data=[
                    'id_diagnostico' => $_POST['id_diagnostico'],
                    'cie_10'         => $_POST['cie_10'],
                    'descripcion'    => $_POST['descripcion'],
                    'id_paciente'    => $_POST['id_paciente'],
                    'estado'         => "activo"
                ];

                $this->model->updateDiagnostico($data);
                header ('Location: ?controller=diagnostico');
            }else{
                echo 'Error';
            }
        }
        public function masive(){
            if (isset($_POST['masive'])){
                $fname = $_FILES['masive']['name'];
                //echo 'Cargando nombre del archivo: '.$fname.' <br>';
                $chk_ext = explode(".",$fname);

                if(strtolower(end($chk_ext)) == "csv"){
                    $filename = $_FILES['masive']['tmp_name'];
                    $lineas = file($filename);
                    unset($lineas[0]);

                    foreach($lineas as $linea_num => $linea){
                        $datos= explode(';',$linea);

                        /*echo '<br>';
                        var_dump($datos);
                        echo '<br>';*/

                        $valores= [
                            'cie_10'      => $datos[0],
                            'descripcion' => $datos[1],
                            'id_paciente' => $datos[2],
                            'estado'      => "activo"
                        ];

                        $cargue= $this->model->newDiagnostico($valores);

                        header ('Location: ?controller=diagnostico');
                    }

                    if($cargue=true){
                        header ('Location: ?controller=diagnostico');
                    }else{
                        echo "f";
                    }

                }elseif($_POST['masive'] == ""){
                    echo "Archivo Vacio";
                }else{
                    echo "Archivo no valido";
                }
            }else{
                echo 'No se cargo archivo :(';
            }
        }
    }