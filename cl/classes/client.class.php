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

        public function createClient($nom,$cin,$date,$tel,$login,$pwd)
        {
            try {
                $sql = "INSERT INTO `client` (`Cin_Client`, `Nom_Client`, `DateNaiss_Client`, `Tel_Client`, `Coins`, `login`, `pwd`) VALUES ('$cin', '$nom', '$date', '$tel', '0', '$login', '$pwd');";
                $result = $this->execReq($sql);
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
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
        public function deconnect()
        {
            unset($this->cnct);
        }

    }
