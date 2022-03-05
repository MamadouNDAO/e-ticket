<?php
    //session_start();
    require("../fonction/traitement.php");
    $_SESSION['events'] = getEvent();
    $artistes = getArtiste();

?>

<style>
    /*===========Portion Bootstrap==========*/
    .was-validated .form-control:invalid, .form-control.is-invalid {
    border-color: #dc3545;
    padding-right: calc(1.5em + 0.75rem);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right calc(0.375em + 0.1875rem) center;
    background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }
    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }

    .was-validated .form-control:valid, .form-control.is-valid {
  border-color: #198754;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754;
}

.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545;
}

.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}


    #formAjout{
        display: none;
        background: var(--color-white);
        margin-top: 1rem;
        padding: 1rem var(--card-padding);
        border-radius: var(--border-radius-3);
        box-shadow: var(--box-shadow);
        transition: all 300ms ease;
    }

    .myFormm{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .form-group{
        /*display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;*/
        
        
    }
    .form-group input, select{
        border-bottom: solid 1px var(--color-info-dark);
        //border-radius: 2rem;
        padding: 15px;
        width: 100%;
        //background: transparent;
    }

    .theForm button{
        margin: 15px 0 15px;
        padding: 10px;
        width: 100px;
        background: var(--color-primary);
        border-radius: 2rem;
        color: var(--color-white);
        cursor: pointer;
    }

    .theForm .btn-annul{
        background: transparent;
        border: none;
        color: var(--color-danger);
        cursor: pointer;
    }
    .theBottom{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
    /*.myHead{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    }*/

    .item i{
        font-size: 25px;
    }
    .item{
    background: var(--color-white);
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 0.7rem;
    padding: 0.5rem var(--card-padding);
    border-radius: var(--border-radius-3);
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
    cursor: pointer;
    }
    .add-user{
    background-color: transparent;
    border: 2px dashed var(--color-primary);
    color: var(--color-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    }

    .add-user div{
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }

    .add-user div h3{
        font-weight: 600;
    }
</style>
<section class="sect" id="event">
<h1>Evénements</h1>

<div class="date">
    <input type="date" name="date" id="">
</div>



<div class="recent-orders" id="corp">

    <div class="myHeads">
        <h2>Historique des événements</h2>
    </div>
    <div class="item add-user" id="addEv" >
        <div>
            <i class="uil uil-plus"></i>
            <h3>Ajouter un événement</h3>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Evénement</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>tickets vendus</th>
                <th>VIP</th>
                <th>Simples</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['events'] as $event): ?>
                <tr>
                    <td><?= $event['libelle'] ?></td>
                    <td><?= $event['lieu'] ?></td>
                    <td class="warning"><?= $event['date'] ?></td>
                    <td><?= $event['ticket_vendu'] ?></td>
                    <td><?= $event['ticket_vip'] ?></td>
                    <td><?= $event['ticket_simple'] ?></td>
                    <td class="primary">Détail</td>
                </tr>
            <?php endforeach ?>
            
        </tbody>
    </table>
    
</div>

<div id="formAjout">
    <h2>Créer un nouveau événement</h2>
    <form action="#" method="post" id="formId" class="theForm needs-validation" novalidate>
        <div class="myFormm">
            <div class="form-group">
                <input type="text" name="libelle" id="ev" class="form-control" placeholder="Evenement" required>
            </div>

            <div class="form-group">
                <select name="artiste"  class="form-select" aria-label="Default select example" required>
                    <option disabled selected value><small class="text-muted">-----Choisir un artiste-----</small></option>
                    <?php foreach($artistes as $artiste): ?>
                    <option value="<?= $artiste['id'] ?>"><?= $artiste['nom'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <select name="lieu" id="lieu" class="form-select" aria-label="Default select example" required>
                <option disabled selected value><small class="text-muted">-----Choisir un lieu-----</small></option>
                <option value="Sorano">Sorano</option>
                <option value="Aréna">Dakar Aréna</option>
                <option value="Baramundi">Baramundi</option>
            </select>

            <div class="form-group">
                <input type="number" name="place" class="form-control" id="a" placeholder="Nombre de places" required>
            </div>
            <div class="form-group">
                <input type="number" name="vip" class="form-control" id="b" placeholder="Nombre de places vip" required>
            </div>
            <div class="form-group">
                <input type="number" name="prix_vip" class="form-control" id="c" placeholder="Prix ticket vip" required>
            </div>

            <div class="form-group">
                <input type="number" name="prix_simple" class="form-control" id="e" placeholder="Prix ticket simple" required>
            </div>
            <div class="form-group">
                <input type="file" name="poster" class="form-control inputfile" id="f">
            </div>
            <div class="date">
                <input type="date" class="form-control" name="date" id="d" required>
            </div>
            <div class="date">
                <input type="time" class="form-control" name="heure" id="" required>
            </div>
        </div>
        <div class="theBottom">
            <button class="btn-annul" id="btn-annul" type="Reset">
                <i class="uil uil-arrow-left"></i>
                Annuller
            </button>
            <button type="submit">Enregistrer</button>
        </div>
        
    </form>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    /**=========Validation Formulaire==========**/
    // Example starter JavaScript for disabling form submissions if there are invalid fields
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
    var formulaire = document.getElementById('formId');
    formulaire.addEventListener('submit', function(e) {
        e.preventDefault()
        var data = new FormData(formulaire);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4){
                var repon = JSON.parse(xhr.responseText)
                if(repon == 'success'){
                    window.location.replace("/e-ticket/admin/?p=events");
                }
                
            }
        }
        xhr.open('POST', '../fonction/traitement_event.php', true)
        xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest')
        xhr.send(data)
    })




    //var corp = document.getElementById('corp');
    var btnAdd = document.getElementById('addEv');
    var formAdd = document.getElementById('formAjout');
    var btnAnnul = document.getElementById('btn-annul');
    //var formId = document.getElementById('ev');
    //var sauv = formId;

    btnAdd.onclick = function() {
        corp.style.display = 'none';
        formAdd.style.display = 'block';
    };

    btnAnnul.onclick = function() {
        formAdd.style.display = 'none';
        corp.style.display = 'block';
    };
</script>