<style>
    i{
        color: red;
        font-size: 50px;
    }
    .btn-exit{
        background: #333;
        //width: 50px;
        color: #fff;
        text-align: center;
    }
    .btn-exit:hover{
        background: var(--first-color);
    }
    /****MODAL*******/

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    .modal-content {
        background-color: #fff;
        margin: 5% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 25%; /* Could be more or less, depending on screen size */
    }
</style>
<?php
    session_start();
    require("fonction/traitement.php");
    if(isset($_POST['submit'])){
        //On met les données récupérées dans des variables
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $phone = $_POST['phone'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //Pour cripter le mot de passe
        
        //On vérifie si le numéro de téléphone n'existe pas déjà dans la base de données
        $result = verifPhone($phone);
        if($result){
            //Si le numéro existe déjà, on bloque l'inscription
            echo "<div id='myModal' class='modal'>
                <div class='modal-content justify-content-center align-items-center text-center'>
                    <i class='uil uil-exclamation-circle'></i>
                    <h5 style='color: red'>Le numéro de téléphone existe déjà!</h5>
                    <button id='btn_close' class='btn btn-exit'>Fermer</button>
                </div>
               </div>";

            
        }else{
            ajoutUser($prenom, $nom, $phone, $password);
            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom'] = $nom;
            $_SESSION['telephone'] = $phone;
            header('Location: index.php?page=admin');
        }

        echo "<script type='text/javascript'>
                var modal = document.getElementById('myModal');
                var btn = document.getElementById('btn_close');
                function showModal(){
                    modal.style.display = 'block';
                }
                btn.onclick = function() {
                    modal.style.display = 'none';
                }
                showModal();
            </script>";
    }
?>

<div class="my-contain d-flex justify-content-center align-items-center">
    <form action="#" method="post" class="formulaire needs-validation" novalidate>
        <h1>E-TICKET</h1>
        <div class="form-group">
            <label for="login">Prénom</label>
            <input type="text" value="<?= $prenom ?>" name="prenom" class="form-control form-control-lg" id="prenom" placeholder="Votre prénom" required>
        </div>

        <div class="form-group">
            <label for="login">Nom</label>
            <input type="text" value="<?= $nom ?>" name="nom" class="form-control form-control-lg" id="nom" placeholder="Votre nom" required>
        </div>

        <div class="form-group">
            <label for="login">Télépone</label>
            <input type="tel" value="<?= $phone ?>" pattern="(70|75|76|77|78)[0-9]{7}" name="phone" class="form-control form-control-lg" id="phone" placeholder="771234567" required>
        </div>
        

        <div class="form-group">
            <label for="passw">Mot de passe</label>
            <input type="password" name="password" class="form-control form-control-lg" id="passw" placeholder="Mot de passe" required>
        </div>
        <div class="invalid-feedback">
            Please choose a password.
        </div>
        <div class="bloc1">
            <span>Vous avez déjà un compte? <a href="index.php">Se connecter</a></span>
            <button class="btn" name="submit" type="submit">S'incrire</button>
        </div>

    </form>


</div>


<script>
    
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

    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    function showModal(){
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

</script>