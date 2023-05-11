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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

    #notification{
        display: none;
    }
</style>

<h1><u>PROGRAMARE</u></h1>

<div class="container programare-page">
    <h2 id="form-h2">CREAZA O PROGRAMARE</h2>
    <div class="row">
        <div class="col-lg-8 col-12">
            <form class="programare-design" action="../include/functions/creare_programare.php" method="post">
                <label for="nume">Nume</label>
                <input type="text" id="fname" name="nume" placeholder="Numele tau" onchange="fNameUpperCase()">

                <label for="prenume">Prenume</label>
                <input type="text" id="lname" name="prenume" placeholder="Prenume tau" onchange="lNameUpperCase()">

                <label for="email">Email</label>
                <input type="text" id="lemail" name="email" placeholder="Adresa de email">

                <label for="telefon">Telefon</label>
                <input type="text" id="ltelefon" name="telefon" placeholder="Numarul de telefon">

                <label for="data">Data</label>
                <br>
                <input id="data" name="data" type='datetime-local' />

                <br><br>
                <input type="submit" value="PROGRAMEAZA-MA" name="buton">

                <div class="message-response">
                    <?php
                    if (isset($_GET['message'])) { //<--- Read the message passed to page
                        if ( $_GET['message'] === 'success') //<-- Was it successful? If so, display success
                            echo "Programarea a fost facuta cu success!";

                        else if( $_GET['message'] === 'fail') { //<-- Was it successful? If so, display success
                            echo "Programarea NU a fost facuta, ora si data NU sunt disponibile!";
                            }
                    }
                    ?>
                </div>

            </form>
        </div>

        <div class="col-lg-4 col-12 prog-img">
            <img src=<?php echo ROOT_PATH . 'assets/images/booking.png'; ?>>
        </div>
    </div>
</div>

<script>
    function fNameUpperCase() {
        const x = document.getElementById("fname");
        x.value = x.value.toUpperCase();
    }

    function lNameUpperCase() {
        const x = document.getElementById("lname");
        x.value = x.value.toUpperCase();
    }
</script>

<?php
require_once '../include/footer.php';
?>

</html>