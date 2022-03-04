<?php
    session_start();
    //echo ." ".$_SESSION['nom'];
    /*$dash = 'active';
    $evnt = '';
    $tik = '';
    $us = '';*/
    $_SESSION['page'] = 'dash';
   // $dash = ''; $evnt = ''; $tik = ''; 
   if(!isset($_GET['p'])){
       $dashLink = 'active'; $eventLink = ''; $userLink = ''; $ticketLink ='';
       $toShow = "./dashbord.php";
   }

   if(isset($_GET['p'])){
    if($_GET['p'] == 'events'){
        $toShow = "./events.php";
        $eventLink = 'active';
    }else if($_GET['p'] == 'dashbord'){
        $toShow = "./dashbord.php";
        $dashLink = 'active';
    }else if($_GET['p'] == 'users'){
        $toShow = "./users.php";
        $userLink = 'active';
    }else if($_GET['p'] == 'ticket'){
        $toShow = "./ticket.php";
        $ticketLink = 'active';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TICKET ADMIN</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <div class="container">
        <!------Début Aside------>
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>E-TICKET</h2>
                </div>
                <div class="close" id="close-btn">
                    <i class="uil uil-times"></i>
                </div>
            </div>

            <div class="sidebar" id="mySide">
                <a href="./"  class="alink <?= $dashLink ?>">
                    <i class="uil uil-apps"></i>
                    <h3>Dashbord</h3>
                </a>
                <a  href="./?p=users" class="alink <?= $userLink ?>">
                    <i class="uil uil-users-alt"></i>
                    <h3>Utilisateurs</h3>
                </a>
                <a  href="./?p=events" id="evnt"  class="alink <?= $eventLink ?>">
                    <i class="uil uil-calendar-alt"></i>
                    <h3>Evenements</h3>
                </a>
                <a href="./?p=ticket"  class="alink <?= $ticketLink ?>">
                    <i class="uil uil-postcard"></i>
                    <h3>Ticket</h3>
                </a>
                <a href="#" class="alink">
                    <i class="uil uil-graph-bar"></i>
                    <h3>Stats</h3>
                </a>
                <a href="#">
                    <i class="uil uil-signout"></i>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        <!------Fin Aside------>

        <main>
            <?php
                require($toShow);
                
            ?>
        </main>

        <!------Fin MAIN------>

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <i class="uil uil-bars"></i>
                </button>
                <div class="theme-toggler">
                    <i class="uil uil-sun active"></i>
                    <i class="uil uil-moon"></i>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Bonjour, <b>Mamadou</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profil-photo">
                        <img src="../assets/images/profil/ndao.jpg" alt="" srcset="">
                    </div>
                </div>
            </div>
            <!------Fin TOP------>

            <div class="recent-updates">
                <h2>Actualités récentes</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profil-photo">
                            <img src="../assets/images/profil/ndao.jpg" alt="" srcset="">
                        </div>
                        <div class="message">
                            <p><b>Bercy Y. Ndour</b> Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                            <small class="text-muted">Le 15 mars 2021</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profil-photo">
                            <img src="../assets/images/profil/ndao.jpg" alt="" srcset="">
                        </div>
                        <div class="message">
                            <p><b>Bercy Y. Ndour</b> Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                            <small class="text-muted">Le 15 mars 2021</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profil-photo">
                            <img src="../assets/images/profil/ndao.jpg" alt="" srcset="">
                        </div>
                        <div class="message">
                            <p><b>Bercy Y. Ndour</b> Lorem ipsum dolor sit amet consectetur adipisicing?</p>
                            <small class="text-muted">Le 15 mars 2021</small>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!------Fin RECENT UPDATES------>

            <div class="sales-analytics">
                <h2>Gestion Tickets</h2>
                <div class="item online">
                    <div class="icon"><i class="uil uil-shopping-cart-alt"></i></div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDER</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3265</h3>
                    </div>
                </div>

                <div class="item offline">
                    <div class="icon"><i class="uil uil-shopping-cart-alt"></i></div>
                    <div class="right">
                        <div class="info">
                            <h3>ONLINE ORDER</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3265</h3>
                    </div>
                </div>

                <div class="item customers">
                    <div class="icon"><i class="uil uil-shopping-cart-alt"></i></div>
                    <div class="right">
                        <div class="info">
                            <h3>Nombre d'utilisateurs</h3>
                            <small class="text-muted">Last 24 hours</small>
                        </div>
                        <h5 class="success">+39%</h5>
                        <h3>3265</h3>
                    </div>
                </div>

                <div class="item add-user">
                    <div>
                        <i class="uil uil-shopping-cart-alt"></i>
                        <h3>Ajout utilisateur</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
       /* myReady();
        function myReady(){
            var sects = document.getElementsByClassName("sect");
            for (var i = 0; i < sects.length; i++) {
                sects[i].style.display = "none";
            }
            document.getElementById('<?php echo $_SESSION['page'] ?>').style.display = "block";
        }*/
    </script>
    <script src="../js/script.js"></script>
</body>
</html>