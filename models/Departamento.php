<?php
    class Departamento
    {
        
        private $id_departamento;
        private $departamento;
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
                $strSql= "SELECT * FROM departamento";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getAllM(){
            try{
                $strSql= "SELECT m.id_municipio, m.municipio, m.codigo_dane, m.estado, d.departamento FROM municipio m INNER JOIN departamento d ON d.id_departamento=m.id_departamento";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newDepartamento($data){
            try{
                $this->pdo->insert('departamento', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function newMunicipio($data){
            try{
                $this->pdo->insert('municipio', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updateDepartamento($data){
            try{
                $strWhere= 'id_departamento='.$data['id_departamento'];
                $this->pdo->update('departamento', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getById($id){
            try{
                $strSql= "SELECT * FROM departamento WHERE id_departamento=:id";
                $array = ['id' => $id];
                $query= $this->pdo->select($strSql, $array);
                return $query;
            }catch(PDOEXception $e){
                die($e->getMessage());
            }
        }
    }