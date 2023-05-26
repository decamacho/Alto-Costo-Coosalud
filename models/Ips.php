<?php
    class Ips
    {
        
        private $id_ips;
        private $ips;
        private $id_municipio;
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
                $strSql= "SELECT i.id_ips, i.ips, i.nit, i.red, i.estado, m.id_municipio, m.municipio, m.id_departamento FROM ips i INNER JOIN municipio m ON m.id_municipio=i.id_municipio WHERE i.estado='activo'";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getIps($id){
            try{
                $strSql= "SELECT i.id_ips, i.ips, i.nit, i.red, i.estado, m.id_municipio, m.municipio, m.id_departamento FROM ips i INNER JOIN municipio m ON m.id_municipio=i.id_municipio WHERE i.estado='activo' and i.id_municipio=".$id;
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newIps($data){
            try{
                $this->pdo->insert('ips', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
        public function updateIps($data){
            try{
                $strWhere= 'id_municipio='.$data['id_municipio'];
                $this->pdo->update('municipio', $data, $strWhere);
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getById($id){
            try{
                $strSql= "SELECT * FROM municipio WHERE id_municipio=:id";
                $array = ['id' => $id];
                $query= $this->pdo->select($strSql, $array);
                return $query;
            }catch(PDOEXception $e){
                die($e->getMessage());
            }
        }
    }