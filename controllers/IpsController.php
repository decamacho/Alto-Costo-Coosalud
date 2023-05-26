<?php
    require 'models/Ips.php';
    require 'models/Municipio.php';

    class IpsController
    {
        private $model;
        private $municipio;

        public function __construct(){
            $this->model     = new Ips;
            $this->municipio = new Municipio;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $centros    = $this->model->getAll();
            $municipios = $this->municipio->getAll();
            require 'views/ips/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            $data=[
                'ips'          => $_POST['ips'],
                'nit'          => $_POST['nit'],
                'red'          => $_POST['red'],
                'id_municipio' => $_POST['id_municipio'],
                'estado'       => "activo"
            ];

            $this->model->newIps($data);
            header ('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        public function view(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $data= $this->model->getById($id);
                
                require 'views/dashboard_up.php';
                require 'views/municipio/editar.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST)){
                $data=[
                    'id_municipio' => $_POST['id_municipio'],
                    'municipio'    => $_POST['municipio'],
                    'codigo_dane'  => $_POST['codigo_dane'],
                    'estado'       => $_POST['estado']
                ];

                $this->model->updateMunicipio($data);
                header ('Location: ?controller=municipio');
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

                        $valores= [
                            'ips'          => $datos[0],
                            'nit'          => $datos[1],
                            'red'          => $datos[2],
                            'id_municipio' => $datos[3],
                            'estado'       => "activo"
                        ];

                        $cargue= $this->model->newIps($valores);

                        header ('Location: ?controller=ips');
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