<?php


    class Etudiant{
        
        private $db;
        private $db_table = "etudiant";

        public $id;
        public $name;
        public $email;
        public $password;
        public $age;

        public $result;

        // Creer un constructeur qui prend en parametre un object de connection de la Base de donnees

        public function __construct($db)
        {
            $this->db = $db;
        }
        

        // function to Get all Etudiant in Database;
        public function getAllEtudiant()
        {   
            $sql = "select * from ".$this->db_table;
          
            $this->result = $this->db->query($sql);

            return $this->result;
        }


        // Create new Student

        public function createNewStudent()
        {
            $this->name = htmlentities(strip_tags($this->name));
            $this->age = htmlentities(strip_tags($this->age));
            $this->email = htmlentities(strip_tags($this->email));
            $this->password = htmlentities(strip_tags($this->password));


            // insert Single Etudiant
            $sql = "INSERT INTO ".$this->db_table."(name,age,email,password) values
                    (".$this->name .",".$this->age.",".$this->email.",".$this->password.")
            ";
                
            // Execute resquest
            $this->result = $this->db->exec($sql);

            if($this->result->rowCount() >  0) 
            {
                return true;
            }else 
            {
               return false;
            }
            
        }   

        // Get single Etudiant
        public function getSingleStudent()
        {
            // Select sigle student in database
            $sql = "select * from ".$this->db_table ."where id=".$this->id;
            
            // Execute resquest
            $record = $this->db->query($sql);
            // fetch data on table
            $data = $record->fetch_assoc();  

            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->age = $data['age'];
            $this->password = $data['password'];
            
           
           
        }
          

        // Update Single Student on Database
        
        public function updateSingleStudent(){
            
            $this->name = htmlentities(strip_tags($this->name));
            $this->age = htmlentities(strip_tags($this->age));
            $this->email = htmlentities(strip_tags($this->email));
            $this->password = htmlentities(strip_tags($this->password));

            $sql = "update ".$this->db_table."set name=".$this->name.", age=".$this->age.", email=".$this->email.",password=".$this->password." where id=".$this->id;
            $this->result = $this->db->exec($sql);

            if($this->result->rowCount() >  0) 
            {
                return true;
            }else 
            {
               return false;
            }
            
            
        }

        // Delete Single Student in Database

        public function deleteSingleStudent()
        {
            $sql = "delete from " .$this->db_table." where id=".$this->id;
            
            $this->result = $this->db->exec($sql);

            if($this->result->rowCount() >  0) 
            {
                return true;
            }else 
            {
               return false;
            }  
        }

    }