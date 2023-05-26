<?php
    require 'models/Semana.php';
    require 'models/Paciente.php';
    require 'models/Ips.php';

    class SemanaController
    {
        private $model;
        private $paciente;
        private $ips;

        public function __construct(){
            $this->model    = new Semana;
            $this->paciente = new Paciente;
            $this->ips      = new Ips;
        }

        public function index(){
            require 'views/dashboard_up.php';
            $semanas= $this->model->getAll();
            require 'views/semana/lista.php';
            require 'views/dashboard_down.php';
        }

        public function save(){
            if(isset($_POST['numero_semana'])){

                $ultimoAnual= $this->model->getLastAnual();
                
                $dataSemana= [
                    'numero_semana' => "Semana"." ".$_POST['numero_semana'],
                    'fecha_inicio'  => $_POST['fecha_inicio'],
                    'fecha_final'   => $_POST['fecha_final'],
                    'id_anual'      => intval($ultimoAnual[0]->id)
                ];

                $this->model->newSemana($dataSemana); 

                $ultimaSemana = $this->model->getLastSemana();
                $pacientes    = $this->paciente->getAll();

                foreach($pacientes as $paciente){

                    $data= [
                        'id_paciente' => $paciente->id_paciente,
                        'id_semana'   => intval($ultimaSemana[0]->id)
                    ];

                    $this->model->newPlanSemana($data);

                }
                
                header ('Location: ' . $_SERVER['HTTP_REFERER']);

            }else{
                echo "No se puede realizar esta acción";
            }
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
        public function more(){
            if(isset($_REQUEST['week'])){
                $id= $_REQUEST['week'];

                $semana   = $this->model->getDate($id);
                $detalles = $this->model->getPacienteSemana($semana[0]->fecha_inicio, $semana[0]->fecha_final);
                $gestion  = $this->model->getPacienteGestion($semana[0]->fecha_inicio, $semana[0]->fecha_final);
                $hecho    = $this->model->getPacienteHecho($semana[0]->fecha_inicio, $semana[0]->fecha_final);

                require 'views/dashboard_up.php';
                require 'views/semana/semana.php';
                require 'views/dashboard_down.php';

            }else{
                echo "Error";
            }
        }
        public function details(){
            if(isset($_REQUEST['user'])){

                $id   = $_REQUEST['week'];
                $user = $_REQUEST['user'];
                $val  = [1, 2, 3];

                $semana     = $this->model->getDate($id);
                $pendientes = $this->model->getActividadU($semana[0]->fecha_inicio, $semana[0]->fecha_final, $user, $val[0]);
                $uno        = $this->model->getActividadU($semana[0]->fecha_inicio, $semana[0]->fecha_final, $user, $val[1]);
                $hecho      = $this->model->getActividadU($semana[0]->fecha_inicio, $semana[0]->fecha_final, $user, $val[2]);

                if($uno != NULL){
                    $municipio  = $uno[0]->id_municipio;
                    $centros    = $this->ips->getIps($municipio);
                }elseif($hecho != NULL){
                    $municipio  = $hecho[0]->id_municipio;
                    $centros    = $this->ips->getIps($municipio);
                }elseif($pendientes != NULL){
                    $municipio  = $pendientes[0]->id_municipio;
                    $centros    = $this->ips->getIps($municipio);
                }

                $countP  = $this->model->countEstado($semana[0]->fecha_inicio, $semana[0]->fecha_final, $user, $val[0]);
                $countU  = $this->model->countEstado($semana[0]->fecha_inicio, $semana[0]->fecha_final, $user, $val[1]);
                $countH  = $this->model->countEstado($semana[0]->fecha_inicio, $semana[0]->fecha_final, $user, $val[2]);
                $estados = $this->model->getEstado();

                require 'views/dashboard_up.php';
                require 'views/semana/gestion.php';
                require 'views/dashboard_down.php';

            }else{
                echo "Error";
            }
        }
        public function update(){
            if(isset($_POST)){
                $id_programacion = $_REQUEST['id'];
                $week            = $_REQUEST['week'];
                $user            = $_REQUEST['user'];

                $data=[
                    'id_programacion' => $id_programacion,
                    'fecha_asiste'    => $_POST['fecha_cita'],
                    'fecha_gestion'   => date('Y-m-d'),
                    'id_ips'          => $_POST['id_ips'],
                    'comentario'      => $_POST['comentario'],
                    'id_estado'       => $_POST['id_estado']
                ];

                $this->model->updateGestion($data);
                header ('Location: ?controller=semana&method=details&week='.$week.'&user='.$user);

            }else{
                echo 'Error';
            }
        }
    }