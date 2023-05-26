<?php
    class Diagnostico
    {
        private $id_diagnostico;
        private $cie_10;
        private $descripcion;
        private $id_paciente;
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
                $strSql= "SELECT d.*, tp.nombre paciente FROM diagnostico d INNER JOIN tipopaciente tp ON tp.id_paciente=d.id_paciente";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newDiagnostico($data){
            try{
                $this->pdo->insert('diagnostico', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updateDiagnostico($data){
            try{
                $strWhere= 'id_diagnostico='.$data['id_diagnostico'];
                $this->pdo->update('diagnostico', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getById($id){
            try{
                $strSql= "SELECT * FROM diagnostico WHERE id_diagnostico=".$id[0];
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDiagnostico($id){
            try{
                $strSql= "SELECT d.id_diagnostico, d.cie_10, d.descripcion, d.estado , tp.id_paciente, tp.nombre, tp.descripcion descripciont, tp.id_programa, tp.estado estadot FROM diagnostico d INNER JOIN tipopaciente tp ON  tp.id_paciente=d.id_paciente WHERE d.estado='activo' and tp.id_paciente=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }