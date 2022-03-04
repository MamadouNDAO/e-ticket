<?php
    session_start();
    require("fonction/traitement.php");
    if(isset($_GET['id'])){
        $event = getOneEvent($_GET['id'])[0];
        if($_GET['type'] == 'vip'){
            $prix = $event['prix_vip'];
            $label = 'VIP';
            $place = (int)$event['vip']-(int)$event['ticket_vip'];
        }else{
            $prix = $event['prix_simple'];
            $label = 'SIMPLE';
            $place = (int)$event['simple']-(int)$event['ticket_simple'];
        }
    }

    if(isset($_POST['submit'])){
        /*var_dump(uniqid());
        die();*/
        $nbrp = (int)$_POST['nbplace'];
        for($i == 1; $i <= $nbrp; $i++){
            $numeroTicket = uniqid();
            if($_GET['type'] == 'vip'){
                $nbType = (int)$event['ticket_vip'] + 1;
                $types = 'vip';
            }else{
                $nbType = (int)$event['ticket_simple'] + 1;
                $types = 'simple';
            }
            $vendu = $event['ticket_vendu'] + 1;
            updateEvent($vendu, $nbType, $event['id_event'], $types);
            setTicket($numeroTicket, $event['id_event'], $_SESSION['id_client']);
        }
        header('Location: index.php?page=ticket');
    }
?>

<div class="events">
    <h4>Réservation de ticket</h4>
    <br>

    <div class="container my-content">
        <form action="#" method="post" class="achat needs-validation" novalidate>
            <div class="row">
                <div class="form-group col">
                    <label for="login">Artiste</label>
                    <input type="text"   value="<?= $event['nom'] ?>" readonly class="form-control form-control-lg" >
                </div>

                <div class="form-group col">
                    <label for="passw">Lieu</label>
                    <input type="text" value="<?= $event['lieu'] ?>" readonly class="form-control form-control-lg" >
                </div>

            </div>

            <div class="row">
                <div class="form-group col">
                    <label for="login">Date</label>
                    <input type="text"   value="<?= date("d-m-Y", strtotime($event['date'])) ?>" readonly class="form-control form-control-lg" >
                </div>

                <div class="form-group col">
                    <label for="passw">Heure</label>
                    <input type="text" value="A partir de <?= $event['heure'] ?>" readonly class="form-control form-control-lg" >
                </div>

            </div>

            <div class="row">
                <div class="form-group col">
                    <label for="login">PRIX <?= $label ?></label>
                    <input type="text"   value="<?= $prix ?> F CFA" readonly class="form-control form-control-lg" >
                </div>

                <div class="form-group col">
                    <label for="passw">Nombre ticket</label>
                    <input type="number" min="1" max="<?= $place ?>" value="1" name="nbplace"  class="form-control form-control-lg" required>
                </div>

            </div>

            <div class="row">
                <a href="" class="col">
                    <button style="width: 100%;" class="btn btn-danger">Annuler</button>
                </a>
                <div class="col"></div>
                <div class="col"></div>
                <a  class="col">
                    <button style="width: 100%;" type="submit" name="submit" class="btn btn-primary">Valider</button>
                </a>

            </div>
            <br>
        </form>
    </div>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>