<?php
    // https://github.com/LABS-EU3/hackton-frontend
    // https://github.com/hackjunction/JunctionAppcd ..
    
    class Database{
        public $db;
        

        // Fontion de connexion a la Base de donnee

        public function getConnection() : PDO
        {
            
            $this->db =null;
          
            
            // DSN (Chemin vers la connexion a la Base de donnee)
            $connexion = "mysql:host=127.0.0.1;port:3306;dbname=apiPHP";
            
            // Username
            $username = "franck"; 

            // Password
            $password = "Njie09.";
            
            try {
                
                $this->db = new PDO($connexion,$username,$password);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo("connexion reussi"); 
            } catch (PDOException $th) 
            {
                echo $th->getMessage();
            }

            return $this->db;
        }
    }