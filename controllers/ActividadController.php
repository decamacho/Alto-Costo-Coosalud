<?php
    require 'models/Actividad.php';

    class ActividadController
    {
        private $model;

        public function __construct(){
            $this->model= new Actividad;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $actividades= $this->model->getAll();
            require 'views/actividad/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            $data=[
                'actividad'      => $_POST['actividad'],
                'descripcion'    => $_POST['descripcion'],
                'codigo_maestro' => $_POST['codigo_maestro'],
                'prioridad'      => $_POST['prioridad'],
                'estado'         => "activo"
            ];

            $this->model->newActividad($data);
            header ('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        public function view(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $data= $this->model->getById($id);
                
                require 'views/dashboard_up.php';
                require 'views/actividad/editar.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST)){
                $data=[
                    'id_actividad'   => $_POST['id_actividad'],
                    'actividad'      => $_POST['actividad'],
                    'descripcion'    => $_POST['descripcion'],
                    'codigo_maestro' => $_POST['codigo_maestro'],
                    'prioridad'      => $_POST['prioridad']
                ];

                $this->model->updateActividad($data);
                header ('Location: ?controller=actividad');
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
                            'actividad'     => $datos[0],
                            'descripcion'   => $datos[1],
                            'codigo_maestro' => $datos[2],
                            'prioridad'     => $datos[3],
                            'estado'        => "activo"
                        ];

                        $cargue= $this->model->newActividad($valores);

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
    }