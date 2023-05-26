<?php
    class Usuario
    {
        private $id_usuario;
        private $email;
        private $clave;
        private $id_rol;

        public function __construct(){
            try{
                $this->pdo= new database;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getLastUsuario(){
            try{
                $strSql= "SELECT MAX(id_usuario) as usuario FROM usuariopersona";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getAll(){
            try{
                $strSql= "SELECT p.*, u.email, r.rol, e.estado FROM persona p INNER JOIN usuariopersona u ON u.id_usuario=p.id_usuario INNER JOIN rolpersona r ON r.id_rol=u.id_rol INNER JOIN estado e ON e.id_estado=p.id_estado WHERE r.id_rol<3 ";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getRol(){
            try{
                $strSql= "SELECT * FROM rolpersona WHERE id_rol<3";
                $query= $this->pdo->select($strSql);
                return $query;
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function newUsuario($data){
            try{
                $this->pdo->insert('usuariopersona', $data);
                return true;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }