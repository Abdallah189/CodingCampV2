<?php
    require_once 'dbconnect.class.php';
    
    class client
    {
        private $cnct;

        public function __construct()
        {
            $db = new Database;
            $connect = $db->connectDB();
            $this->cnct = $connect;
        }

        private function execReq($sql)
        {
            $stmt = $this->cnct->prepare($sql);
            return $stmt;
        }
        public function readAllsevice()
        {
            try {
                $sql = 'SELECT * FROM services ';
                $result = $this->execReq($sql);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }


        public function readAllclient()
        {
            try {
                $sql = 'SELECT * FROM client ';
                $result = $this->execReq($sql);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function readSpecificclient($id)
        {
            try {
                $sql = 'SELECT * FROM client WHERE id = :cin';
                $req = $this->execReq($sql);
                $req->bindparam(":cin", $id);
                $req->execute();
                return $req;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateclient($num_carte,$cin,$prenom,$nom,$tel,$mdp,$email)
        {
            try {
                $sql = 'UPDATE client SET num_carte = :_num_carte ,cin= :_cin,prenom = _prenom,nom = :_nom,tel = :_tel,mdp=_mdp,email=_email WHERE cin= :_cin';
                $result = $this->execReq($sql);
                $result->bindparam(":_num_carte", $num_carte);
                $result->bindparam(":_cin", $cin);
                $result->bindparam(":_prenom", $prenom);
                $result->bindparam(":_nom", $nom);
                $result->bindparam(":_tel", $tel);
                $result->bindparam(":_mdp", $mdp);
                $result->bindparam(":_email", $email);

                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function deleteclient($id)
        {
            try {
                $sql = 'DELETE FROM client WHERE cin= :_cin';
                $result = $this->execReq($sql);
                $result->bindparam(":_cin", $id);
                $result->execute();
                return $result;
                
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function deconnect()
        {
            unset($this->cnct);
        }

    }
