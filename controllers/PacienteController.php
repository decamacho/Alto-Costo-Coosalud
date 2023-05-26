<?php
    require 'models/Paciente.php';
    require 'models/Programa.php';
    require 'models/Actividad.php';
    require 'models/Diagnostico.php';

    class PacienteController
    {
        private $model;
        private $programa;
        private $actividad;
        private $diagnostico;

        public function __construct(){
            $this->model= new Paciente;
            $this->programa= new Programa;
            $this->actividad= new Actividad;
            $this->diagnostico= new Diagnostico;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $pacientes   = $this->model->getAll();
            $riesgos     = $this->model->getRiesgo();
            $programas   = $this->programa->getAll();
            $actividades = $this->actividad->getAll();
            $frecuencias = $this->model->getFrecuencia();
            $valid= 1;
            require 'views/paciente/lista.php';
            require 'views/dashboard_down.php';
        }
        public function more(){
            if(isset($_REQUEST['id'])){

                $id= $_REQUEST['id'];

                require 'views/dashboard_up.php';
                $pacientes   = $this->model->getTo($id);
                $riesgos     = $this->model->getRiesgo();
                $programas   = $this->programa->getOnly($id);
                $frecuencias = $this->model->getFrecuencia();
                $actividades = $this->actividad->getAll();
                $valid= 2;
                require 'views/paciente/lista.php';
                require 'views/dashboard_down.php';

            }else{
                echo "Error";
            }
        }
        public function complete(){
            if(isset($_REQUEST['id'])){

                $id= $_REQUEST['id'];

                $detalles= $this->model->detalleProcedimiento($id);

                require 'views/dashboard_up.php';
                require 'views/paciente/detalle.php';
                require 'views/dashboard_down.php';

            }else{
                echo "No se puede hacer este tramite";
            }
        }
        public function save(){
            
            $duplicado= $this->model->getDuplicado($_POST['nombre']);

            
            $dataPaciente=[
                'nombre'      => ucwords(strtolower($_POST['nombre'])),
                'descripcion' => $_POST['descripcion'],
                'id_riesgo'   => $_POST['id_riesgo'],
                'id_programa' => $_POST['id_programa'],
                'estado'      => "activo"
            ];
            
            $arrayP= isset($_POST['actividad']) ? $_POST['actividad'] : [];
            if(!empty($arrayP) && isset($_POST['nombre'])){    
                
                $respPaciente = $this->model->newTipo($dataPaciente);
                
                $lastPaciente = $this->model->getLastPaciente();
                $respPro      = $this->model->saveProcedimiento($arrayP, $lastPaciente[0]->paciente);
                
            }else{
                $respPaciente = false;
                $lastPaciente = false;
                $respPro      = false;
            }

            $arrayError= [];

            if($respPro == true && $respPaciente == true){
                $arrayError= [
                    'success'   => true,
                    'message' => "Creado"
                ];
            }elseif($_POST['nombre'] == ''){
                $arrayError= [
                    'error'   => false,
                    'message' => "El campo Nombre es obligatorio"
                ];
            }elseif($duplicado[0]->count == "1"){
                $arrayError= [
                    'error'   => false,
                    'message' => "El Tipo Paciente Ya existe"
                ];
            }elseif($_POST['id_riesgo'] == ''){
                $arrayError= [
                    'error'   => false,
                    'message' => "El campo Riesgo es obligatorio"
                ];
            }elseif($_POST['descripcion'] == ''){
                $arrayError= [
                    'error'   => false,
                    'message' => "El campo Descripción es obligatorio"
                ];
            }elseif($_POST['id_programa'] == ''){
                $arrayError= [
                    'error'   => false,
                    'message' => "El campo Programa es obligatorio"
                ];
            }elseif($_POST['actividad'] == ''){
                $arrayError= [
                    'error'   => false,
                    'message' => "Verifica los procedimientos del Tipo Paciente"
                ];
            }else{
                $arrayError= [
                    'error'   => false,
                    'message' => "Verifica la informacion solicitada"
                ];
            }
            echo json_encode($arrayError);
            return;

        }
        public function view(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $data= $this->model->getById($id);
                $riesgos= $this->model->getRiesgo();
                $programas= $this->programa->getDetails($id);
                require 'views/dashboard_up.php';
                require 'views/paciente/editar.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST['id_paciente'])){
                $id_programa= $_POST['id_programa'];
                $data=[
                    'id_paciente' => $_POST['id_paciente'],
                    'nombre'      => $_POST['nombre'],
                    'descripcion' => $_POST['descripcion'],
                    'id_riesgo'   => $_POST['id_riesgo'],
                    'id_programa' => $_POST['id_programa'],
                    'estado'      => "activo"
                ];

                var_dump($data);

                $this->model->updateTipo($data);
                header ('Location: ?controller=paciente&method=more&id='.$id_programa);
            }else{
                echo 'Error';
            }
        }
        public function diagnostico(){
            if(isset($_REQUEST['id'])){
                $id= $_REQUEST['id'];

                $datos= $this->diagnostico->getDiagnostico($id);
                require 'views/dashboard_up.php';
                require 'views/diagnostico/diagnostico.php';
                require 'views/dashboard_down.php';

            }else{
                echo "Error";
            }
        }
    }