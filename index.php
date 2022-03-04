<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Style CSS-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    
    <!--SweetAlert-->

    <title>E-ticket</title>
</head>
<body>
    <?php
        if(isset($_GET['page'])){
            if($_GET['page'] == 'insc'){
                require_once ("./pages/inscription.php");
            }else if($_GET['page'] == 'admin'){
                require_once ("./pages/admin.php");
            }else if($_GET['page'] == 'client'){
                require_once ("./pages/client.php");
            }else if($_GET['page'] == 'login'){
                require_once ("./pages/login.php");
            }else if($_GET['page'] == 'exit'){
                require_once ("./pages/deconnexion.php");
            }else if($_GET['page'] == 'events'){
                require_once ("./pages/events.php");
            }else if($_GET['page'] == 'achat'){
                require_once ("./pages/achat.php");
            }else if($_GET['page'] == 'ticket'){
                require_once ("./pages/mestickets.php");
            }
        }else{
            require_once ("./pages/home.php");
        }
    ?>


    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>