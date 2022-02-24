<?php
require ("bdd.php");

    function connexion($login){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM user WHERE telephone = ?");
            $query->execute([$login]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }

    function verifPhone($phone){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM user WHERE telephone = ?");
            $query->execute([$phone]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }

    function getProfil($id){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM user WHERE id = ?");
            $query->execute([$id]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }


    function ajoutUser($prenom, $nom, $phone, $password){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO user (prenom, nom, telephone, password) VALUES (?, ?, ?, ?)");
            $query->execute([$prenom, $nom, $phone, $password]);
            $query->closeCursor();
        }
    }

    function create_event($libelle, $date, $heure, $lieu, $artiste, $poster){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO event (libelle, date, heure, lieu, artiste_id, poster) VALUES (?, ?, ?, ?, ?, ?)");
            $query->execute([$libelle, $date, $heure, $lieu, $artiste, $poster]);
            $query->closeCursor();
        }
    }

?>