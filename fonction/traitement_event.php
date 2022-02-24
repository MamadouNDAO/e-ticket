<?php
    require("fonction/traitement.php");
    if(isset($_POST['submit'])){
        $libelle = $_POST['libelle'];
        $date = $_POST['date'];
        $heure = $_POST['heure'];
        $lieu = $_POST['lieu'];
        $artiste = $_POST['artiste'];
        $poster = rand(1, 200).strtolower($_FILES['poster']['name']);
		$chemin = "../assets/images/poster/".$photo;
        move_uploaded_file($_FILES['poster']['tmp_name'], $chemin);
        create_event($libelle, $date, $heure, $lieu, $artiste, $poster,);
    }