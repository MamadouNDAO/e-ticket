<?php
    session_start();
    require('traitement.php');
    function isAjax(){
        return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    if(isAjax()){
        $libelle = $_POST['libelle'];
        $artiste = $_POST['artiste'];
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $lieu = $_POST['lieu'];
        $place = $_POST['place'];
        $nb_vip = $_POST['vip'];
        $prix_vip = $_POST['prix_vip'];
        $prix_simple = $_POST['prix_simple'];

        if((int)$nb_vip > $place){
            echo 'err';
        }else{
            $nb_simple = (int)$place - (int)$nb_vip;
            if(isset($_FILES['poster'])){
            $poster = rand(1, 9000).strtolower($_FILES['poster']['name']);
            $chemin = "../assets/images/poster/".$poster;
            move_uploaded_file($_FILES['poster']['tmp_name'], $chemin);
            }
            $result = create_event($libelle, $artiste, $date, $heure, $lieu, $poster, $place, $nb_vip, $nb_simple, $prix_vip, $prix_simple);
            echo json_encode('success');
        }
    }