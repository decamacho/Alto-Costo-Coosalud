<?php
    class Paciente
    {
        private $id_paciente;
        private $nombre;
        private $descripcion;
        private $id_riesgo;
        private $id_programa;
        private $estado;

        public function __construct(){
            try{
                $this->pdo= new database;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getAll(){
            try{
                $strSql= "SELECT tp.*, r.riesgo riesgo, p.programa programa FROM tipopaciente tp INNER JOIN riesgo r ON r.id_riesgo=tp.id_riesgo INNER JOIN programa p ON p.id_programa=tp.id_programa WHERE tp.nombre!= '' GROUP BY tp.id_paciente";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getTo($id){
            try{
                $strSql= "SELECT tp.*, r.riesgo riesgo, p.programa programa FROM tipopaciente tp INNER JOIN riesgo r ON r.id_riesgo=tp.id_riesgo INNER JOIN programa p ON p.id_programa=tp.id_programa WHERE tp.id_programa=".$id." AND tp.nombre!=''  GROUP BY tp.id_paciente";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getRiesgo(){
            try{
                $strSql= "SELECT * FROM riesgo";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getFrecuencia(){
            try{
                $strSql= "SELECT * FROM frecuencia";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function detalleProcedimiento($id){
            try{
                $strSql= "SELECT tp.id_paciente, tp.nombre, p.programa, f.frecuencia, a.actividad,a.codigo_maestro, p.id_programa, tp.descripcion FROM tipopaciente tp INNER JOIN programa p ON p.id_programa=tp.id_programa INNER JOIN procedimiento pr ON pr.id_paciente=tp.id_paciente INNER JOIN actividad a ON a.id_actividad=pr.id_actividad INNER JOIN frecuencia f ON f.id_frecuencia=pr.id_frecuencia WHERE tp.id_paciente=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newTipo($data){
            try{
                $this->pdo->insert('tipopaciente', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function saveProcedimiento($array, $last){
            try{
                foreach ($array as $procedimiento) {
                    $data = [
                        'id_actividad'  => $procedimiento['id_actividad'],
                        'id_frecuencia' => $procedimiento['id_frecuencia'],
                        'id_paciente'   => $last
                    ];
                    $this->pdo->insert('procedimiento', $data);

                }
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updateTipo($data){
            try{
                $strWhere= 'id_paciente='.$data['id_paciente'];
                $this->pdo->update('tipopaciente', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getById($id){
            try{
                $strSql= "SELECT tp.*, p.programa FROM tipopaciente tp INNER JOIN programa p ON p.id_programa=tp.id_programa WHERE id_paciente=".$id[0];
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getLastPaciente(){
            try{
                $strSql= "SELECT MAX(id_paciente) as paciente FROM tipopaciente";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDetail($id){
            try{
                $strSql= "SELECT tp.nombre, p.id_paciente, p.id_procedimiento, a.id_actividad, a.actividad, f.id_frecuencia, f.frecuencia FROM procedimiento p INNER JOIN actividad a ON a.id_actividad=p.id_actividad INNER JOIN frecuencia f ON f.id_frecuencia=p.id_frecuencia INNER JOIN tipopaciente tp ON tp.id_paciente=p.id_paciente WHERE p.id_paciente=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getProgramaP($id){
            try{
                $strSql= "SELECT * FROM programapersona pp WHERE pp.id_persona=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDuplicado($nombre){
            try{
                $strSql= "SELECT count(id_paciente) count FROM tipopaciente WHERE nombre='$nombre'";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }