<?php
    session_start();
?>
<div class="home d-flex justify-content-center ">

            
    <div class="container row cadre justify-content-around">
    <div class="titre d-flex justify-content-center align-items-center">
                <h1>Bienvenu <?=  $_SESSION['prenom'] ?> dans E-TICKET</h1>
            </div>
            <div class="col-1"></div>
            <a href="./?page=events" class="col-3">
                <button class="btn btn-primary" style="width: 100%;">
                <i class="uil uil-music"></i>
                Evénements
                <br>
                <span>Pour acheter un ticket</span>
                </button>
            </a>
            <a href="#" class="col-3">
                <button class="btn btn-secondary" style="width: 100%;">
                <i class="uil uil-shopping-cart-alt"></i>
                Mes tickets
                <br>
                <span>Historique de vos achats</span>
                </button>
            </a>

            <a href="./?page=exit" class="col-3">
                <button class="btn btn-warning" style="width: 100%;">
                <i class="uil uil-sign-in-alt"></i>
                Se déconnecter
                <br>
                <span>Pour arréter votre session</span>
                </button>
            </a>
            <div class="col-1"></div>
    </div>
</div>