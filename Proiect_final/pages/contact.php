<?php
require_once '../include/config.inc.php';
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
require_once '../include/header.php';
?>

<style>
    h1{
        color: #E58100;
        display: flex;
        justify-content: center;
        padding-top:20px;
        padding-bottom: 50px;
    }
</style>

<h1><u>CONTACT</u></h1>

<div class="container contact-page">
    <div class="row">
        <div class="col-lg-6 col-12 contact-form">
            <h2 id="form-h2">FORMULAR DE CONTACT</h2>
            <form class="form-design" action="">

                <label for="nume">Nume</label>
                <input type="text" id="fname" name="nume" placeholder="Numele tau">

                <label for="prenume">Prenume</label>
                <input type="text" id="lname" name="prenume" placeholder="Prenume tau">

                <label for="email">Email</label>
                <input type="text" id="lemail" name="email" placeholder="Adresa de email">

                <label for="telefon">Telefon</label>
                <input type="text" id="ltelefon" name="telefon" placeholder="Numarul de telefon">

                <label for="subiect">Subiect</label>
                <textarea id="subiect" name="subiect" placeholder="Scrie mesajul tau aici"
                          style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
        <div class="col-lg-6 col-12 map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43907.707330564415!2d24.552597949999996!3d46.543103050000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474bb64a553e9177%3A0xb1573a839869d90d!2zVMOicmd1IE11cmXImQ!5e0!3m2!1sen!2sro!4v1670843685305!5m2!1sen!2sro"
                    width="600" height="600" style="border:2px solid #8181C1;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


<?php
require_once '../include/footer.php';
?>

</html>