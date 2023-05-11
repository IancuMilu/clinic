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
    h1 {
        color: #E58100;
        display: flex;
        justify-content: center;
        padding-top: 20px;
        padding-bottom: 50px;
    }
</style>

<h1><u>DESPRE NOI</u></h1>

<div class="container">
    <p class="despre-noi-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque distinctio doloremque doloribus ducimus
        eligendi eveniet, fugit id impedit, mollitia, nam quae quasi quia rem sequi soluta vel. Labore, reiciendis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate deleniti distinctio dolorem dolores eius
        esse in ipsum iste, molestiae nulla placeat possimus quas quisquam sint veritatis voluptatem voluptatibus.
        Reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque distinctio doloremque doloribus ducimus
        eligendi eveniet, fugit id impedit, mollitia, nam quae quasi quia rem sequi soluta vel. Labore, reiciendis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate deleniti distinctio dolorem dolores eius
        esse in ipsum iste, molestiae nulla placeat possimus quas quisquam sint veritatis voluptatem voluptatibus.
        Reiciendis.</p>
</div>

<div class="img-lab">
    <img src=<?php echo ROOT_PATH . 'assets/images/lab.png'; ?>>
</div>

<h1><u>ECHIPA NOASTRA</u></h1>

<div class="container staff">
    <div class="row">
        <div class="col-lg-3 col-12 img-angj">
            <img src=<?php echo ROOT_PATH . 'assets/images/angj1.png'; ?>>
            <p>Nume Prenume</p>
        </div>

        <div class="col-lg-3 col-12 img-angj">
            <img src=<?php echo ROOT_PATH . 'assets/images/angj2.png'; ?>>
            <p>Nume Prenume</p>
        </div>

        <div class="col-lg-3 col-12 img-angj">
            <img src=<?php echo ROOT_PATH . 'assets/images/angj3.png'; ?>>
            <p>Nume Prenume</p>
        </div>

        <div class="col-lg-3 col-12 img-angj">
            <img src=<?php echo ROOT_PATH . 'assets/images/angj4.png'; ?>>
            <p>Nume Prenume</p>
        </div>
    </div>
</div>

<div class="container">
    <p class="despre-noi-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque distinctio doloremque doloribus ducimus
        eligendi eveniet, fugit id impedit, mollitia, nam quae quasi quia rem sequi soluta vel. Labore, reiciendis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate deleniti distinctio dolorem dolores eius
        esse in ipsum iste, molestiae nulla placeat possimus quas quisquam sint veritatis voluptatem voluptatibus.
        Reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque distinctio doloremque doloribus ducimus
        eligendi eveniet, fugit id impedit, mollitia, nam quae quasi quia rem sequi soluta vel. Labore, reiciendis.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate deleniti distinctio dolorem dolores eius
        esse in ipsum iste, molestiae nulla placeat possimus quas quisquam sint veritatis voluptatem voluptatibus.
        Reiciendis.</p>
</div>

<?php
require_once '../include/footer.php';
?>

</html>