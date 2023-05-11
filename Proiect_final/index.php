<?php

require_once 'include/config.inc.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH . 'assets/main.css'; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CLINICA ANALIZE</title>
</head>

<?php
include 'include/header.php';
?>

<div class="main-wallpaper">
    <img src="assets/images/wallpaper.jpg" alt="wall">

    <div class="row planificare">
        <button onclick="window.location.href='<?php echo ROOT_PATH . 'pages/programare.php'; ?>';">
            <div id="prog">Fa o programare</div>
        </button>
    </div>
</div>

<div>

</div>

<div class="container">
    <div class="row main-bl">
        <div class="col second-bl">
            <a href="https://goo.gl/maps/exrBdVNFf9k7rqzdA" target="_blank">
                <img src="assets/images/location.svg" alt="loc">
            </a>
            <p class="n-mod">ADRESA</p>
            <p class="mod-p">Strada Abc, Numarul x</p>
            <p class="mod-p">Targu Mures, Judet Mures</p>
        </div>
        <div class="col second-bl">
            <img src="assets/images/clock.svg" alt="loc">
            <p class="n-mod">PROGRAM</p>
            <p class="mod-p">L-V: 7:00 - 18:00</p>
            <p class="mod-p">S: 08:00 - 14:00</p>
        </div>
        <div class="col second-bl">
            <a href="tel:+0757062240">
                <img src="assets/images/phone.svg" alt="loc">
            </a>
            <p class="n-mod">TELEFON</p>
            <p class="mod-p">0757062240</p>
        </div>
        <div class="col second-bl">
            <a href="mailto:clinica@gmail.com">
                <img src="assets/images/email.svg" alt="loc">
            </a>
            <p class="mod-p">clinica@gmail.com</p>
        </div>
    </div>
</div>

<div class="container front-page-info">
    <div class="row">
        <div class="col-lg-6 col-12 page-info-img">
            <img src=<?php echo ROOT_PATH . 'assets/images/laboratory.png'; ?>>
        </div>
        <div class="col-lg-6 col-12 page-info-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut dolor dolorum error excepturi
                exercitationem, fugiat harum id inventore, iure nulla odit praesentium ratione recusandae repellendus
                sint voluptatem voluptates! Veritatis! Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium blanditiis cumque, delectus doloremque eaque facere iste maxime minus modi natus perferendis
                quae quia quo quos similique sit ullam unde voluptas?</p>
        </div>
    </div>
</div>

<script src="include/hover-color.js"></script>

<?php
include 'include/footer.php';
?>
</html>