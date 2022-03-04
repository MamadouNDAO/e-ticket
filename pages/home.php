<?php
    session_start();
?>
<div class="home d-flex justify-content-center ">

            
    <div class="container row cadre justify-content-around">
    <div class="titre d-flex justify-content-center align-items-center">
                <h1>Bienvenu dans E-TICKET</h1>
            </div>
            <div class="col-1"></div>
            <a href="./?page=login" class="col-3">
                <button class="btn btn-primary" style="width: 100%;">
                <i class="uil uil-sign-out-alt"></i>
                    Se connecter
                <br>
                <span>Pour acheter un ticket</span>
                </button>
            </a>
            

            <a href="./admin/login.php" class="col-3">
                <button class="btn btn-warning" style="width: 100%;">
                <i class="uil uil-setting"></i>
                    Gestion E-ticket
                <br>
                <span>Si vous êtes un admin</span>
                </button>
            </a>
            <div class="col-1"></div>
    </div>
</div>