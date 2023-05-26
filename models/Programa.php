<?php
    class Programa
    {
        private $id_programa;
        private $programa;
        private $descripcion;
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
                $strSql= "SELECT * FROM programa";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getOnly($id){
            try{
                $strSql= "SELECT * FROM programa WHERE id_programa=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getDetails($id){
            try{
                $strSql= "SELECT p.id_programa programa, p.programa nombre FROM programa p INNER JOIN tipopaciente tp ON tp.id_programa=p.id_programa WHERE tp.id_paciente=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newPrograma($data){
            try{
                $this->pdo->insert('programa', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updatePrograma($data){
            try{
                $strWhere= 'id_programa='.$data['id_programa'];
                $this->pdo->update('programa', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getById($id){
            try{
                $strSql= "SELECT * FROM programa WHERE id_programa=".$id[0];
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
    }