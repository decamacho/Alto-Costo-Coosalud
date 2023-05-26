<?php
    class Persona
    {
        private $id_pesona;
        private $nombre;
        private $Apellido;
        private $documento;
        private $telefono;
        private $direccion;
        private $fecha_nacimiento;
        private $edad;
        private $rh;
        private $sexo;
        private $adjunto;
        private $id_tipo_documento;
        private $id_municipio;
        private $id_usuario;
        private $id_estado;
        private $id_pertenencia_etnica;
        private $id_grupo_poblacional;
        private $id_ips;

        public function __construct(){
            try{
                $this->pdo= new database;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getAll($id){
            try{
                $strSql= "SELECT p.*, YEAR(CURDATE())-YEAR(p.fecha_nacimiento) AS edad, u.email, e.estado, tp.id_paciente, tp.nombre paciente, pg.id_programa, pg.programa, d.cie_10, d.descripcion, pp.id_asignado FROM persona p INNER JOIN programapersona pp ON pp.id_persona=p.id_persona INNER JOIN tipopaciente tp ON tp.id_paciente=pp.id_paciente INNER JOIN programa pg ON pg.id_programa=tp.id_programa INNER JOIN diagnostico d ON d.id_diagnostico=pp.id_diagnostico INNER JOIN usuariopersona u ON u.id_usuario=p.id_usuario INNER JOIN estado E ON E.id_estado=P.id_estado WHERE p.id_estado=1 and tp.id_paciente=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDocumento(){
            try{
                $strSql= "SELECT * FROM tipodocumento";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newPersona($data){
            try{
                $this->pdo->insert('persona', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function saveProgramaPer($arrayPrograma, $ultimoId){
            try{
                foreach ($arrayPrograma as $programa) {
                    $data= [
                        'id_persona'        => $ultimoId,
                        'id_paciente'       => $programa['id_paciente'],
                        'fecha_diagnostico' => $programa['fecha_diagnostico'],
                        'fecha_ingreso'     => $programa['fecha_ingreso'],
                        'id_diagnostico'    => $programa['id_diagnostico'],
                        'id_asignado'       => $programa['id_asignado'],
                        'id_estado'         => 1
                    ];

                    $this->pdo->insert('programapersona', $data);
                }
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function insertCitas($programacion){
            try{
                //var_dump($programacion);
                
                foreach ($programacion as $programa) {
                    
                    $idP= $programa['id_paciente'];
                    $strSql= "SELECT tp.nombre, p.id_paciente, p.id_procedimiento, a.id_actividad, a.actividad, f.id_frecuencia, f.frecuencia FROM procedimiento p INNER JOIN actividad a ON a.id_actividad=p.id_actividad INNER JOIN frecuencia f ON f.id_frecuencia=p.id_frecuencia INNER JOIN tipopaciente tp ON tp.id_paciente=p.id_paciente WHERE p.id_paciente=".$idP;
                    $query= $this->pdo->select($strSql);
                    $procedimiento = json_decode(json_encode($query), true);

                    //var_dump($procedimiento);
                    
                    foreach ($procedimiento as $cita) {
                        //var_dump($cita);
                        $fecha_vencimiento= $programa['fecha_ingreso'];  
                        
                        //var_dump($frecuencia);
                        for($i=0; $i < $cita['id_frecuencia']; $i++){
                            
                            $frecuencia= 12/$cita['id_frecuencia'];
                            //var_dump($frecuencia);
                            $frecuencia= round($frecuencia);
                            $fecha_vencimiento= date("d-m-Y",strtotime($fecha_vencimiento."+ ".$frecuencia." month"));

                            $citas= [
                                'id_programa'      =>$programa['id_detalle'],
                                'id_procedimiento' =>$cita['id_procedimiento'],
                                'fecha_cita'       =>date("Y-m-d", strtotime($fecha_vencimiento)),
                                'fecha_gestion'    =>'0000-00-00',
                                'id_anual'         => 1,
                                'id_estado'        => 3
                            ];
                            //var_dump($citas);

                            $dataProgramacion= $this->pdo->insert("programacion", $citas);

                        }

                    }      
                    
                }
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function getLastPersona(){
            try{
                $strSql= "SELECT MAX(id_persona) as persona FROM persona";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getGestor(){
            try{
                $strSql= "SELECT p.nombre, p.apellido, p.id_persona, u.id_rol FROM persona p INNER JOIN usuariopersona u ON u.id_usuario=p.id_usuario WHERE u.id_rol=2 and p.id_estado=1";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getRegimen(){
            try{
                $strSql= "SELECT * FROM regimen";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getProgramacion($paciente, $id){
            try{
                $strSql= "SELECT pe.nombre, pe.apellido, pe.documento, td.tipo, a.actividad, a.codigo_maestro, f.frecuencia, tp.nombre paciente, p.fecha_cita, tp.id_paciente, tp.id_programa FROM programacion p INNER JOIN procedimiento pc ON pc.id_procedimiento=p.id_procedimiento INNER JOIN actividad a ON a.id_actividad=pc.id_actividad INNER JOIN frecuencia f ON f.id_frecuencia=pc.id_frecuencia INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN tipopaciente tp ON tp.id_paciente=pc.id_paciente INNER JOIN tipodocumento td ON td.id_tipo=pe.id_tipo_documento WHERE pe.id_persona='".$id."' AND tp.id_paciente='".$paciente."' ORDER BY p.fecha_cita ASC";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDuplicadoD($nombre){
            try{
                $strSql= "SELECT COUNT(id_persona) count from persona p WHERE p.documento='$nombre'";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getAfiliado(){
            try{
                $strSql= "SELECT p.*, YEAR(CURDATE())-YEAR(p.fecha_nacimiento) edad, td.abreviado_tipo tipod, u.email, e.estado FROM persona p INNER JOIN usuariopersona u ON u.id_usuario=p.id_usuario INNER JOIN tipodocumento td ON td.id_tipo=p.id_tipo_documento INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.id_estado=1 AND u.id_rol=3";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getInfoProgram($id){
            try{
                $strSql= "SELECT p.id_persona, p.nombre, p.apellido, p.documento, pp.id_paciente, pp.id_estado, tp.id_paciente, tp.nombre paciente, pr.id_programa, pr.programa FROM persona p INNER JOIN programapersona pp ON pp.id_persona=p.id_persona INNER JOIN tipopaciente tp ON tp.id_paciente=pp.id_paciente INNER JOIN programa pr ON pr.id_programa=tp.id_programa WHERE pp.id_estado=1 and p.id_persona=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }