<?php
    require 'models/Departamento.php';

    class DepartamentoController
    {
        private $model;

        public function __construct(){
            $this->model= new Departamento;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $departamentos= $this->model->getAll();
            $municipios    = $this->model->getAllM();
            require 'views/departamento/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            $data=[
                'departamento' => $_POST['departamento'],
                'codigo_dane'  => $_POST['codigo_dane'],
                'estado'       => "activo"
            ];

            $this->model->newDepartamento($data);
            header ('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        public function view(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $data= $this->model->getById($id);
                
                require 'views/dashboard_up.php';
                require 'views/departamento/editar.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST)){
                $data=[
                    'id_departamento' => $_POST['id_departamento'],
                    'departamento'    => $_POST['departamento'],
                    'codigo_dane'     => $_POST['codigo_dane']
                ];

                $this->model->updateDepartamento($data);
                header ('Location: ?controller=departamento');
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
                    
                    echo '<br>';
                    var_dump($lineas);
                    echo '<br>';

                    foreach($lineas as $linea_num => $linea){
                        $datos= explode(';',$linea);

                        /*echo '<br>';
                        var_dump($datos);
                        echo '<br>';*/

                        $valores= [
                            'departamento' => $datos[0],
                            'codigo_dane'  => $datos[1],
                            'estado'       => "activo"
                        ];

                        $cargue= $this->model->newDepartamento($valores);

                        header ('Location: ' . $_SERVER['HTTP_REFERER']);
                    }

                    if($cargue=true){
                        echo "se realizo correctamente";
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
        public function masiveM(){
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
                            'municipio'       => $datos[0],
                            'codigo_dane'     => $datos[1],
                            'id_departamento' => $datos[2],
                            'estado'          => "activo"
                        ];

                        $cargue= $this->model->newMunicipio($valores);

                        header ('Location: ?controller=departamento');
                    }

                    if($cargue=true){
                        echo "se realizo correctamente";
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