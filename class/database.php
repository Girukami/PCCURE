<?php
    class Database{
        private $host = 'localhost';
        private $username = 'u563903406_pccure';
        private $password = 'Wecurepc101'; #password = Wecurepc101
        private $database = 'u563903406_pc_repair';
        // private $username = 'root';
        // private $password = '';
        // private $database = 'pc_repair';

        protected $connection;

        function connect(){
            try{
                $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database",
                                            $this->username, $this->password);
            }
            catch(PDOException $e){
                echo 'Connection Error ' . $e->getMessage();
            }

            return $this->connection;
        }
    }
?>