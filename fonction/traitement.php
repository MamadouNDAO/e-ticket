<?php
require ("bdd.php");

    function connexion($login){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM client WHERE telephone = ?");
            $query->execute([$login]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }

    function connexionAdmin($login){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM user WHERE telephone = ?");
            $query->execute([$login]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }

    function verifPhone($phone, $table){
        if(require("bdd.php")){
            $tb = $table == 'admin' ? 'user' : 'client'; 
            $query = $conn->prepare("SELECT * FROM $tb WHERE telephone = ?");
            $query->execute([$phone]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }

    function getProfil($phone){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM client WHERE telephone = ?");
            $query->execute([$phone]);
            $user = $query->fetch();
            return $user;
            $query->closeCursor();
        }
    }


    function ajoutUser($prenom, $nom, $phone, $password, $table){
        if(require("bdd.php")){
            $tb = $table == 'admin' ? 'user' : 'client';
            $query = $conn->prepare("INSERT INTO $tb (prenom, nom, telephone, password) VALUES (?, ?, ?, ?)");
            $query->execute([$prenom, $nom, $phone, $password]);
            $query->closeCursor();
        }
    }

    function create_event($libelle, $artiste, $date, $heure, $lieu, $poster, $place, $nb_vip, $nb_simple, $prix_vip, $prix_simple){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO event (libelle, artiste_id, date, heure, lieu, poster, place, vip, simple, prix_vip, prix_simple) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $query->execute([$libelle, $artiste, $date, $heure, $lieu, $poster, $place, $nb_vip, $nb_simple, $prix_vip, $prix_simple]);
            if($query){
                return 'ok';
            }
            $query->closeCursor();
        }
    }

    function getEvent(){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM event");
            $query->execute();
            $events = $query->fetchAll();
            return $events;
            $query->closeCursor();
        }
    }

    function getOneEvent($id){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM event INNER JOIN artiste ON event.artiste_id = artiste.id WHERE id_event = ?");
            $query->execute([$id]);
            $event = $query->fetchAll();
            return $event;
            $query->closeCursor();
        }
    }

    function getEvents(){
        if(require("bdd.php")){
            $date = date("Y-m-d");
            $query = $conn->prepare("SELECT * FROM event INNER JOIN artiste ON event.artiste_id = artiste.id WHERE date >= ? ORDER BY date DESC");
            $query->execute([$date]);
            $events = $query->fetchAll();
            return $events;
            $query->closeCursor();
        }
    }

    function updateEvent($vendu, $nbType, $id, $types,){
        if(require("bdd.php")){
            $type = $types == 'vip' ? 'ticket_vip' : 'ticket_simple';
            $query = $conn->prepare("UPDATE event set ticket_vendu = ?, $type = ? WHERE id_event = ?");
            $query->execute([$vendu, $nbType, $id]);
            $query->closeCursor();
        }
    }

    function setTicket($numero, $event, $client){
        if(require("bdd.php")){
            $query = $conn->prepare("INSERT INTO ticket (numero, id_event, id_client) VALUES (?, ?, ?)");
            $query->execute([$numero, $event, $client]);
            $query->closeCursor();
        }
    }

    function getTicket($id){
        if(require("bdd.php")){
            $query = $conn->prepare("SELECT * FROM ticket WHERE id_client = ?");
            $query->execute([$id]);
            $tickets = $query->fetchAll();
            return $tickets;
            $query->closeCursor();
        }
    }

?>