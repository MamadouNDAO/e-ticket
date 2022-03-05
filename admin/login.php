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

    /* Modal Content/Box */
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
    require ("../fonction/traitement.php");
    $tel = "";
    $password = "";
    if(isset($_POST['submit'])){
        $tel = $_POST['username'];
        $password = $_POST['password'];
        $admin = connexionAdmin($tel);
        if($admin){
            $passwordHash = $admin['password'];
            if(password_verify($password, $passwordHash)){
                $_SESSION['aprenom'] = $admin['prenom'];
                $_SESSION['anom'] = $admin['nom'];
                $_SESSION['atelephone'] = $admin['telephone'];
                $_SESSION['id_admin'] = $admin['id_user'];
                header('Location: index.php?page=home');
            }else{
                echo "<div id='myModal' class='modal'>
                <div class='modal-content justify-content-center align-items-center text-center'>
                    <i class='uil uil-exclamation-circle'></i>
                    <h5 style='color: red'>Mot de passe incorrect!</h5>
                    <button id='btn_close' class='btn btn-exit'>Fermer</button>
                </div>
               </div>";
            }
            
        }else{
            echo "<div id='myModal' class='modal'>
            <div class='modal-content justify-content-center align-items-center text-center'>
                <i class='uil uil-exclamation-circle'></i>
                <h5 style='color: red'>Login ou mot de passe incorrect!</h5>
                <button id='btn_close' class='btn btn-exit'>Fermer</button>
            </div>
           </div>";
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Style CSS-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>E-Ticket</title>
</head>
<body>
<div class="my-contain d-flex justify-content-center align-items-center">
    <form action="#" method="post" class="formulaire needs-validation" novalidate>
        <h3>ADMIN E-TICKET</h3>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="tel" pattern="(70|75|76|77|78)[0-9]{7}" name="username" value="<?= $tel ?>" class="form-control form-control-lg" id="login" placeholder="771234567" required>
        </div>
        <div class="invalid-feedback">
            Please choose a username.
        </div>

        <div class="form-group">
            <label for="passw">Mot de passe</label>
            <input type="password" name="password" class="form-control form-control-lg" id="passw" placeholder="Mot de passe" required>
        </div>
        <div class="invalid-feedback">
            Please choose a password.
        </div>
        <div class="bloc1">
            <span>Vous n'avez pas de compte? <a href="./inscription.php">S'inscrire</a></span>
            <button class="btn" name="submit" type="submit">Se connecter</button>
        </div>

    </form>


</div>


<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Some text in the Modal..</p>
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

    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    function showModal(){
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }

</script>
</body>
</html>