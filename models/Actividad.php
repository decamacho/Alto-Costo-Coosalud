<?php
    class Actividad
    {
        private $id_actividad;
        private $actividad;
        private $descripcion;
        private $codigo_maestro;
        private $prioridad;
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
                $strSql= "SELECT * FROM actividad";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newActividad($data){
            try{
                $this->pdo->insert('actividad', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updateActividad($data){
            try{
                $strWhere= 'id_actividad='.$data['id_actividad'];
                $this->pdo->update('actividad', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getById($id){
            try{
                $strSql= "SELECT * FROM actividad WHERE id_actividad=".$id[0];
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }