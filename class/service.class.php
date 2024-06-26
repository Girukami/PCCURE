<?php
    include_once 'database.php';

    class Service{
        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function saveNewService($image, $name, $price, $description, $worker){
            $sql = 'INSERT INTO service (image, name, price, description, worker) 
                    VALUES (:image, :name, :price, :description, :worker);';

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':image', $image);
            $query->bindParam(':name', $name);
            $query->bindParam(':price', $price);
            $query->bindParam(':description', $description);
            $query->bindParam(':worker', $worker);

            if($query->execute()){
                return true;
            }

            return false;
        }

        function saveEdit($service_id, $image, $name, $price, $description, $worker){
            if($image === 'empty'){
                $sql = 'UPDATE service SET name = :name, price = :price, description = :description, worker = :worker 
                        WHERE service_id = :service_id;';

                $query = $this->db->connect()->prepare($sql);
            }
            else{
                $sql = 'UPDATE service SET image = :image, name = :name, price = :price, 
                        description = :description, worker = :worker WHERE service_id = :service_id;';

                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':image', $image);
            }

            $query->bindParam(':service_id', $service_id);
            $query->bindParam(':name', $name);
            $query->bindParam(':price', $price);
            $query->bindParam(':description', $description);
            $query->bindParam(':worker', $worker);

            if($query->execute()){
                return true;
            }

            return false;
        }

        function deleteservice($service_id){
            try {
                $db = $this->db->connect();
                var_dump("IM HERE 1");
                if (!$db) {
                    throw new PDOException("Failed to connect to the database.");
                }
                var_dump("IM HERE 2");
        
                $sql = 'DELETE FROM service WHERE service_id = :service_id;';
                $query = $db->prepare($sql);
                var_dump("IM HERE 3");
                if (!$query) {
                    throw new PDOException("Failed to prepare the SQL statement.");
                }
                var_dump("IM HERE 4");
        
                $query->bindParam(':service_id', $service_id);
                var_dump("IM HERE 5");
                $result = $query->execute();
                var_dump("IM HERE 6");
                if ($result) {
                    return true;
                } else {
                    error_log("Error deleting service: " . implode(' - ', $query->errorInfo()));
                    return false;
                }
            } catch (PDOException $e) {
                error_log("PDOException in deleteservice(): " . $e->getMessage());
                return false;
            }
        }               

        function getAll(){
            $sql = 'SELECT * FROM service ORDER BY name DESC;';

            $query = $this->db->connect()->prepare($sql);
            
            if($query->execute()){
                if($query->rowCount() < 1){
                    $data = 'empty';
                }
                else{
                    $data = $query->fetchAll();
                }
            }

            return $data;
        }

        function getOne($service_id){
            $sql ='SELECT * FROM service WHERE service_id = :service_id;';

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':service_id', $service_id);

            if($query->execute()){
                $data = $query->fetch();
            }

            return $data;
        }
    }
?>