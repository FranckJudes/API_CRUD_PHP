<?php 

        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        include_once '../database.php';
        include_once '../etudiant.php';

        $database =  new Database();
        
        // Connexion  a la BD
        $db =  $database->getConnection();
        
        $items = new Etudiant($db); 

        // Recuperer tous les Etudiants 
        
         $records = $items->getAllEtudiant();
        
        // $itemCount = $records->num_rows;

        // echo json_encode($itemCount);
        