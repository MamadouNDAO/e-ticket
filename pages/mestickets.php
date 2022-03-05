<?php
    session_start();
    require("fonction/traitement.php");
    $tickets = getTicket($_SESSION['id_client']);
?>

<div class="events">
    <nav class="navbar navbar-dark bg-dark">
        <a style="margin-left: 15px;" href="./?page=client" class="btn btn-outline-warning">
            <i class="uil uil-arrow-left"></i>    
            Retour
        </a>
    </nav>
    <h4>Voici la liste de vos tickets <?=  $_SESSION['prenom'] ?></h4>
    <br>
    <div class="container row my-content">
    <table>
        <thead>
            <tr>
                <th>N° Ticket</th>
                <th>Date Réservation</th>
                <th>Prix</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tickets as $ticket): ?>
                <tr>
                    <td><?= $ticket['id_ticket'] ?></td>
                    <td><?= date("d-m-Y", strtotime($ticket['date'])) ?></td>
                    <td><?= $ticket['prix'] ?> F CFA</td>
                    <td><?= $ticket['type'] ?></td>
                </tr>
            <?php endforeach ?>
            
        </tbody>
    </table>
    
    </div>
</div>