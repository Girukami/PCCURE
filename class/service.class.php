<?php
    include_once 'database.php';

    class Service{
        protected $db;

        function __construct(){
            $this->db = new Database;
        }

        function saveNewService($image, $name, $price, $description, $specreq, $set_date){
            $sql = 'INSERT INTO service (image, name, price, description, specreq, set_date) 
                    VALUES (:image, :name, :price, :description, :specreq, :set_date);';

            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':image', $image);
            $query->bindParam(':name', $name);
            $query->bindParam(':price', $price);
            $query->bindParam(':description', $description);
            $query->bindParam(':specreq', $specreq);
            $query->bindParam(':set_date', $set_date);

            if($query->execute()){
                return true;
            }

            return false;
        }

        function saveEdit($service_id, $image, $name, $price, $description){
            if($image === 'empty'){
                $sql = 'UPDATE service SET name = :name, price = :price, description = :description 
                        WHERE service_id = :service_id;';

                $query = $this->db->connect()->prepare($sql);
            }
            else{
                $sql = 'UPDATE service SET image = :image, name = :name, price = :price, 
                        description = :description WHERE service_id = :service_id;';

                $query = $this->db->connect()->prepare($sql);
                $query->bindParam(':image', $image);
            }

            $query->bindParam(':service_id', $service_id);
            $query->bindParam(':name', $name);
            $query->bindParam(':price', $price);
            $query->bindParam(':description', $description);

            if($query->execute()){
                return true;
            }

            return false;
        }

        function deleteservice($service_id){
            try {
                $db = $this->db->connect();
        
                $sql = 'DELETE FROM service WHERE service_id = :service_id;';
                $query = $db->prepare($sql);
        
                $query->bindParam(':service_id', $service_id);
        
                if ($query->execute()) {
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