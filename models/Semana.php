<?php
    class Semana
    {
        private $id_semana;
        private $numero_semana;
        private $fecha_inicio;
        private $fecha_final;
        private $id_anual;

        public function __construct(){
            try{
                $this->pdo= new database;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getAll(){
            try{
                $strSql= "SELECT * FROM semana s INNER JOIN anualidad a ON a.id_anual=s.id_anual ORDER BY s.id_semana DESC";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDate($id){
            try{
                $strSql= "SELECT * FROM semana WHERE id_semana=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getPacienteSemana($fecha_inicio, $fecha_final){
            try{
                $strSql= "SELECT DISTINCT pe.id_persona, pe.nombre, pe.apellido, pe.documento, td.abreviado_tipo abreviado, td.tipo tipo, pe.telefono, pe.id_tipo_documento, p.id_estado FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN tipodocumento td ON td.id_tipo=pe.id_tipo_documento INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' AND pe.id_estado=1 AND p.id_estado=3";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getPacienteGestion($fecha_inicio, $fecha_final){
            try{
                $strSql= "SELECT DISTINCT pe.id_persona, pe.nombre, pe.apellido, pe.documento, td.abreviado_tipo abreviado, td.tipo tipo, pe.telefono, pe.id_tipo_documento, p.id_estado FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN tipodocumento td ON td.id_tipo=pe.id_tipo_documento INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' AND pe.id_estado=1 AND p.id_estado=6";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getPacienteHecho($fecha_inicio, $fecha_final){
            try{
                $strSql= "SELECT DISTINCT pe.id_persona, pe.nombre, pe.apellido, pe.documento, td.abreviado_tipo abreviado, td.tipo tipo, pe.telefono, pe.id_tipo_documento, p.id_estado FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN tipodocumento td ON td.id_tipo=pe.id_tipo_documento INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$fecha_inicio."' AND '".$fecha_final."' AND pe.id_estado=1 AND p.id_estado=4";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getActividadU($inicio, $final, $id, $val){
            try{
                if($val == 1){
                    $strSql= "SELECT pe.id_persona, pe.nombre, pe.apellido, pe.documento, pe.telefono, pe.id_municipio, p.id_estado, a.actividad, p.id_programacion, p.fecha_cita, p.id_estado, e.estado, tp.nombre paciente FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN procedimiento pr ON pr.id_procedimiento=p.id_procedimiento INNER JOIN tipopaciente tp ON tp.id_paciente=pr.id_paciente INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$inicio."' AND '".$final."' AND pe.id_estado=1 AND p.id_estado=3 AND pe.id_persona=".$id;
                    $query= $this->pdo->select($strSql);
                    return $query;
                }elseif($val == 2){
                    $strSql= "SELECT pe.id_persona, pe.nombre, pe.apellido, pe.documento, pe.telefono, pe.id_municipio, p.id_estado, a.actividad, p.id_programacion, p.fecha_cita, p.id_estado, p.comentario, p.fecha_asiste, e.estado, tp.nombre paciente, i.ips, i.id_ips FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN procedimiento pr ON pr.id_procedimiento=p.id_procedimiento INNER JOIN tipopaciente tp ON tp.id_paciente=pr.id_paciente INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN estado e ON e.id_estado=p.id_estado INNER JOIN ips i ON i.id_ips=p.id_ips WHERE p.fecha_cita BETWEEN '".$inicio."' AND '".$final."' AND pe.id_estado=1 AND p.id_estado=6 AND pe.id_persona=".$id;
                    $query= $this->pdo->select($strSql);
                    return $query;
                }else{
                    $strSql= "SELECT pe.id_persona, pe.nombre, pe.apellido, pe.documento, pe.telefono, pe.id_municipio, p.id_estado, a.actividad, p.id_programacion, p.fecha_cita, p.id_estado, p.comentario, p.fecha_asiste, e.estado, tp.nombre paciente, i.ips FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN procedimiento pr ON pr.id_procedimiento=p.id_procedimiento INNER JOIN tipopaciente tp ON tp.id_paciente=pr.id_paciente INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN estado e ON e.id_estado=p.id_estado INNER JOIN ips i ON i.id_ips=p.id_ips WHERE p.fecha_cita BETWEEN '".$inicio."' AND '".$final."' AND pe.id_estado=1 AND p.id_estado=4 AND pe.id_persona=".$id;
                    $query= $this->pdo->select($strSql);
                    return $query;
                }
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function countEstado($inicio, $final, $id, $val){
            try{
                if($val == 1){
                    $strSql= "SELECT COUNT(p.id_estado) count FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN procedimiento pr ON pr.id_procedimiento=p.id_procedimiento INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$inicio."' AND '".$final."' AND pe.id_estado=1 AND p.id_estado=3 AND pe.id_persona=".$id;
                    $query= $this->pdo->select($strSql);
                    return $query;
                }elseif($val == 2){
                    $strSql= "SELECT COUNT(p.id_estado) count FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN procedimiento pr ON pr.id_procedimiento=p.id_procedimiento INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$inicio."' AND '".$final."' AND pe.id_estado=1 AND p.id_estado=6 AND pe.id_persona=".$id;
                    $query= $this->pdo->select($strSql);
                    return $query;
                }else{
                    $strSql= "SELECT COUNT(p.id_estado) count FROM programacion p INNER JOIN programapersona pp ON pp.id_detalle=p.id_programa INNER JOIN procedimiento pr ON pr.id_procedimiento=p.id_procedimiento INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN persona pe ON pe.id_persona=pp.id_persona INNER JOIN estado e ON e.id_estado=p.id_estado WHERE p.fecha_cita BETWEEN '".$inicio."' AND '".$final."' AND pe.id_estado=1 AND p.id_estado=4 AND pe.id_persona=".$id;
                    $query= $this->pdo->select($strSql);
                    return $query;
                }
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getLastAnual(){
            try{
                $strSql= "SELECT MAX(id_anual) id FROM anualidad";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getLastSemana(){
            try{
                $strSql= "SELECT MAX(id_semana) id FROM semana";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getEstado(){
            try{
                $strSql= "SELECT * FROM estado e WHERE e.categoria=2";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newSemana($data){
            try{
                $this->pdo->insert('semana', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function newPlanSemana($data){
            try{
                $this->pdo->insert('plansemana', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updateGestion($data){
            try{
                $strWhere= 'id_programacion='.$data['id_programacion'];
                $this->pdo->update('programacion', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }