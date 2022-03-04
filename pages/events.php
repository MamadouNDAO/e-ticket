<?php
    require("fonction/traitement.php");
    $events = getEvents();
    
?>
<div class="events">
    <h4>Liste des événements encours...</h4>
    <br>
    <div class="container row d-flex justify-content-center align-items-center my-content">
        <?php foreach($events as $event): ?>
            
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="./assets/images/bg1.jpg" alt="Card image cap">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                        <h3 class="card-title text-center"><?= $event['nom'] ?></h3>
                        </div>
                        <div class="col-6 text-center">
                            <h3><?= $event['lieu'] ?></h3>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-7 text-left vip">
                            <p class="text-left">VIP RESTANT: <strong><?= (int)$event['vip']-(int)$event['ticket_vip'] ?></strong></p>
                        </div>
                        <div class="col-5 text-left vip">
                            <p>PRIX: <strong><?= $event['prix_vip'] ?>F CFA</strong></p>
                        </div>
                        <div class="col-7 text-left simple">
                            <p>SIMPLE RESTANT: <strong><?= (int)$event['simple']-(int)$event['ticket_simple'] ?></strong></p>
                        </div>
                        <div class="col-5 text-left simple">
                            <p>PRIX: <strong><?= $event['prix_simple'] ?>F CFA</strong></p>
                        </div>
                        <small class="text-center" style="color: grey;"><?= date("d-m-Y", strtotime($event['date'])) ?></small>
                    </div>
                    <br>
                    <div class="row justify-content-around">
                        <a href="./?page=achat&type=vip&id=<?= $event['id_event'] ?>" class="col-5 btn btn-primary">VIP</a>
                        <a href="./?page=achat&type=simple" class="col-5 btn btn-secondary">Simple</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>