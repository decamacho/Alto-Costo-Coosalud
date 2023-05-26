<?php

    require 'models/Usuario.php';
    require 'models/Municipio.php';
    require 'models/Persona.php';

    class UsuarioController
    {
        private $model;
        private $municipio;
        private $persona;

        public function __construct(){

            $this->model     = new Usuario;
            $this->municipio = new Municipio;
            $this->persona   = new Persona;
        }

        public function index(){

            require 'views/dashboard_up.php';
            $usuarios   = $this->model->getAll();
            $documentos = $this->persona->getDocumento();
            $municipios = $this->municipio->getAll();
            $regimenes  = $this->persona->getRegimen();
            $roles      = $this->model->getRol();
            require 'views/usuario/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            if(isset($_POST)){

                $dataUsuario=[
                    'email'  => $_POST['email'],
                    'clave'  => $_POST['documento'].random_int(100, 999),
                    'id_rol' => 2
                ];
    
                $this->model->newUsuario($dataUsuario);
    
                $id_usuario= $this->model->getLastUsuario();
    
                $dataPersona=[
                    'nombre'            => $_POST['nombre'],
                    'apellido'          => $_POST['apellido'],
                    'documento'         => $_POST['documento'],
                    'telefono'          => $_POST['telefono'],
                    'direccion'         => $_POST['direccion'],
                    'fecha_nacimiento'  => $_POST['fecha_nacimiento'],
                    'sexo'              => $_POST['sexo'],
                    'id_tipo_documento' => $_POST['id_documento'],
                    'rh'                => $_POST['rh'],
                    'edad'              => 00,
                    'id_municipio'      => $_POST['id_municipio'],
                    'id_estado'         => 1,
                    'id_usuario'        => $id_usuario[0]->usuario
                ];
    
                $this->persona->newPersona($dataPersona);

                header ('Location: ?controller=usuario');
            }else{
                echo "Error, por favor Verifique el Código no se hp";
            }

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