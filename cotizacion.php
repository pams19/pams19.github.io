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
<!--This PHP IF logic is using a choosing a different header depending if the user is logged in or not -->

<?php

session_start();
require "HeaderLoggedin.php";

?>

<main class="profilebakground">
<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-6 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 mt-5 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Cotizacion</h1>
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Inicio</a></span> </p>
            </div>
        </div>
    </div>
</div>

    <div>
        <form name="UploadCot" method="post" action="UploadCot.php" enctype="multipart/form-data">
            <h2>Crear Cotización</h2>
            <label for="name">Nombre:</label><br>
            <Input type="text" placeholder="Nombre" name="c_name" class="inputbox" required><br>
            <label for="lastname">Apellido:</label><br>
            <Input type="text" placeholder="Descripción servicio" name="c_description" class="inputbox" ><br>
            <label for="mail">Mail:</label><br>
            <input type="email" placeholder="Mail contacto" name="c_mail" class="inputbox" ><br>

            <div  id="dropBoxImg">
                <label for="imgUpload">Cargar imagen del estado actual :</label><br>
            </div>
            <input type="file" name="file" class="inputbox" id="imgInput" />
            <!-- Main Section End  <input type="submit" name="submit" value="Upload"/> -->
            <br><br>
            <div class="profilebtn">
                <button type="submit" value="updateImg" name="CotButton" class="btn">Enviar cotización</button><br>
                <button type="submit" value="cancelImg" name="cancelButton" class="btn">Cancelar</button></div>
        </form>
    </div>

</main>


<?php


require "Footer.php";


?>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>