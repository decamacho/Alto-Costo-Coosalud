<?php
    require 'models/Persona.php';
    require 'models/Paciente.php';
    require 'models/Municipio.php';
    require 'models/Diagnostico.php';
    require 'models/Usuario.php';

    class PersonaController
    {
        private $model;
        private $paciente;
        private $municipio;
        private $diagnostico;
        private $usuario;

        public function __construct(){
            $this->model       = new Persona;
            $this->paciente    = new Paciente;
            $this->municipio   = new Municipio;
            $this->diagnostico = new Diagnostico;
            $this->usuario     = new Usuario;
        }

        public function all(){
            if(isset($_REQUEST['paciente'])){
                $id= $_REQUEST['paciente'];

                require 'views/dashboard_up.php';
                $afiliados    = $this->model->getAll($id);
                $more         = $this->paciente->getById($id);
                $documentos   = $this->model->getDocumento();
                $regimenes    = $this->model->getRegimen();
                $municipios   = $this->municipio->getAll();
                $pacientes    = $this->paciente->getAll();
                $diagnosticos = $this->diagnostico->getAll();
                $gestores     = $this->model->getGestor();
                require 'views/persona/lista.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }

        public function save(){

            $duplicado_d= $this->model->getDuplicadoD($_POST['documento']);
            $duplicado_d = json_decode(json_encode($duplicado_d), true);

            $dataUsuario=[
                'email'  => $_POST['email'],
                'id_rol' => 3
            ];

            $this->usuario->newUsuario($dataUsuario);

            $id_usuario= $this->usuario->getLastUsuario();

            $dataPersona=[
                'nombre'            => $_POST['nombre'],
                'apellido'          => $_POST['apellido'],
                'documento'         => $_POST['documento'],
                'telefono'          => $_POST['telefono'],
                'direccion'         => $_POST['direccion'],
                'fecha_nacimiento'  => $_POST['fecha_nacimiento'],
                'sexo'              => $_POST['sexo'],
                'id_tipo_documento' => $_POST['id_tipo_documento'],
                'rh'                => $_POST['rh'],
                'edad'              => 1,
                'id_regimen'        => $_POST['id_regimen'],
                'id_municipio'      => $_POST['id_municipio'],
                'id_estado'         => 1,
                'id_usuario'        => $id_usuario[0]->usuario
            ];

            $arrayPrograma= isset($_POST['programa']) ? $_POST['programa'] : [];

            if(!empty($arrayPrograma) && isset($_POST['nombre'])){

                $respPer   = $this->model->newPersona($dataPersona);
                $ultimaPer = $this->model->getLastPersona();
                $respPro   = $this->model->saveProgramaPer($arrayPrograma, $ultimaPer[0]->persona);
                
                $idPer     = $ultimaPer[0]->persona;
                $programaP = $this->paciente->getProgramaP($idPer);

                $programaP = json_decode(json_encode($programaP), true);
                
                $dataProgramacion= $this->model->insertCitas($programaP);
            }else{
                $resoPer   = false;
                $ultimaPer = false;
                $respPro   = false;
            }
            $arrayResp = [];
            if($respPro == true && $respPer == true){
                $arrayResp= [
                    'success' => true,
                    'message' => "Persona Creada"
                ];
            }elseif($_POST['nombre'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Nombre es obligatorio"
                ];
            }elseif($_POST['apellido'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Apellido es obligatorio"
                ];
            }elseif($_POST['documento'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Documento es obligatorio"
                ];
            }elseif($duplicado_d[0]['count'] == '1'){
                $arrayError= [
                    'error'   => false,
                    'message' => "El Documento Ya existe"
                ];
            }elseif($_POST['id_tipo_documento'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Tipo de Documento es obligatorio"
                ];
            }elseif($_POST['email'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Correo es obligatorio"
                ];
            }elseif($_POST['telefono'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Teléfono es obligatorio"
                ];
            }elseif($_POST['direccion'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Direccion es obligatorio"
                ];
            }elseif($_POST['fecha_nacimiento'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "La Fecha de Nacimiento es obligatorio"
                ];
            }elseif($_POST['sexo'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Sexo es obligatorio"
                ];
            }elseif($_POST['rh'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo RH es obligatorio"
                ];
            }elseif($_POST['id_municipio'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "Selecciona un Minicipio"
                ];
            }elseif($_POST['id_regimen'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Régimen es obligatorio"
                ];
            }elseif($_POST['programa'] == ''){
                $arrayResp= [
                    'error'   => false,
                    'message' => "El campo Documento es obligatorio"
                ];
            }else{
                $arrayResp= [
                    'error'   => false,
                    'message' => "Error, no se puede crear"
                ];
            }
            echo json_encode($arrayResp);
            return;

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
        public function cita(){
            if(isset($_REQUEST['tp'])){
                $paciente = $_REQUEST['tp'];
                $id       = $_REQUEST['per'];
                require 'views/dashboard_up.php';
                $citas = $this->model->getProgramacion($paciente, $id);
                require 'views/persona/programacion.php';
                require 'views/dashboard_down.php';
            }else{
                echo "Error";
            }
        }
        public function afiliado(){

            require 'views/dashboard_up.php';
            $afiliados = $this->model->getAfiliado();
            $documentos   = $this->model->getDocumento();
            $municipios   = $this->municipio->getAll();
            $regimenes    = $this->model->getRegimen();
            $pacientes    = $this->paciente->getAll();
            $diagnosticos = $this->diagnostico->getAll();
            $gestores     = $this->model->getGestor();
            require 'views/usuario/afiliado.php';
            require 'views/dashboard_down.php';

        }
        public function detail(){
            if(isset($_REQUEST['program'])){

                $persona= $_REQUEST['program'];

                require 'views/dashboard_up.php';
                $detalles = $this->model->getInfoProgram($persona);
                require 'views/persona/detalle.php';
                require 'views/dashboard_down.php';
            }else{
                echo 'no se peude realizar la acción';
            }

        }
    }