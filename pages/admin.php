<?php
    session_start();
    //echo $_SESSION['prenom']." ".$_SESSION['nom'];

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

            <div class="sidebar">
                <a href="#" class="active">
                    <i class="uil uil-apps"></i>
                    <h3>Dashbord</h3>
                </a>
                <a href="#" >
                    <i class="uil uil-users-alt"></i>
                    <h3>Utilisateurs</h3>
                </a>
                <a href="#">
                    <i class="uil uil-calendar-alt"></i>
                    <h3>Evenements</h3>
                </a>
                <a href="#">
                    <i class="uil uil-postcard"></i>
                    <h3>Ticket</h3>
                </a>
                <a href="#">
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
            <h1>Dashbord</h1>

            <div class="date">
                <input type="date" name="date" id="">
            </div>

            <div class="insights">
                <div class="sales">
                    <i class="uil uil-analytics"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Evénements</h3>
                            <h1>275</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Dernières 24H</small>
                </div>
                <!------Fin Sales------>

                <div class="income">
                    <i class="uil uil-analytics"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Evénements</h3>
                            <h1>275</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Dernières 24H</small>
                </div>
                <!------Fin Sales------>

                <div class="expenses">
                    <i class="uil uil-analytics"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Evénements</h3>
                            <h1>275</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Dernières 24H</small>
                </div>
                <!------Fin Sales------>
            </div>
            <!------Fin INSIGHTS------>

            <div class="recent-orders">
                <h2>Evénements récents</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Evénement</th>
                            <th>Date</th>
                            <th>Total tickets</th>
                            <th>Tickets VIP</th>
                            <th>Tickets simples</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bercy Youssou Ndour</td>
                            <td class="warning">31-12-2021</td>
                            <td>100</td>
                            <td>25</td>
                            <td>75</td>
                            <td class="primary">Détail</td>
                        </tr>
                        <tr>
                            <td>Bercy Youssou Ndour</td>
                            <td class="warning">31-12-2021</td>
                            <td>100</td>
                            <td>25</td>
                            <td>75</td>
                            <td class="primary" >Détail</td>
                        </tr>
                        <tr>
                            <td>Bercy Youssou Ndour</td>
                            <td class="warning">31-12-2021</td>
                            <td>100</td>
                            <td>25</td>
                            <td>75</td>
                            <td class="primary" >Détail</td>
                        </tr>
                        <tr>
                            <td>Bercy Youssou Ndour</td>
                            <td class="warning">31-12-2021</td>
                            <td>100</td>
                            <td>25</td>
                            <td>75</td>
                            <td class="primary" >Détail</td>
                        </tr>
                        <tr>
                            <td>Bercy Youssou Ndour</td>
                            <td class="warning">31-12-2021</td>
                            <td>100</td>
                            <td>25</td>
                            <td>75</td>
                            <td class="primary" >Détail</td>
                        </tr>
                        <tr>
                            <td>Bercy Youssou Ndour</td>
                            <td class="warning">31-12-2021</td>
                            <td>100</td>
                            <td>25</td>
                            <td>75</td>
                            <td class="primary" >Détail</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Voir tout</a>
            </div>
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
</body>
</html>