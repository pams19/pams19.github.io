<?php
//session_start();
include_once('DBConnection.php');
if(isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Martha Arias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <section >
                <h4>Bienvenido <?php echo $username; ?> </h4>
            </section>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="searchForUser.php" class="nav-link">Users</a></li>
                <li class="nav-item"><a href="services.php" class="nav-link">Servicios &amp; Precios</a></li>
                <li class="nav-item"><a href="gallery.php" class="nav-link">Galeria</a></li>
                <li class="nav-item"><a href="cotizacion.php" class="nav-link">Cotizaciones</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contacto</a></li>
                <section class="right">
                    <form id = "logout"  method="post" action="logout.php">
                        <button type="submit" value="Logout" name="logOutButton" class="btn"> Cerrar sesión <br>
                    </form>
                </section>

            </ul>
        </div>
    </div>
</nav>
</body>
</html>