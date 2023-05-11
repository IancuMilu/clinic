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
</style>

<h1><u>ANALIZE</u></h1>

<div class="container pag-analize">
    <table class="table tabel-analize table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Analize</th>
            <th scope="col">Pret</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>TSH (hormon hipofizar tireostimulator bazal)</td>
            <td>35 lei</td>
        </tr>
        <tr>
            <td>Hemoleucograma</td>
            <td>25 lei</td>
        </tr>
        <tr>
            <td>Urocultură</td>
            <td>47 lei</td>
        </tr>
        <tr>
            <td>TGP / ALT</td>
            <td>55 lei</td>
        </tr>
        <tr>
            <td>Trigliceride serice</td>
            <td>39 lei</td>
        </tr>
        <tr>
            <td>VSH</td>
            <td>40 lei</td>
        </tr>
        <tr>
            <td>Creatinină serică</td>
            <td>25 lei</td>
        </tr>
        <tr>
            <td>TGO / AST</td>
            <td>33 lei</td>
        </tr>
        <tr>
            <td>Colesterol seric total</td>
            <td>17 lei</td>
        </tr>
        <tr>
            <td>Glicemie</td>
            <td>20 lei</td>
        </tr>
        <tr>
            <td>Ureea serică</td>
            <td>22 lei</td>
        </tr>
        <tr>
            <td>Fosfatază alcalină</td>
            <td>45 lei</td>
        </tr>
        <tr>
            <td>Anticorpi anti SARS-CoV-2 IgM (COVID-19)</td>
            <td>99 lei</td>
        </tr>
        <tr>
            <td>Anticorpi anti virus Zika IgG</td>
            <td>115 lei</td>
        </tr>
        <tr>
            <td>Anticorpi anti virus Zika IgM</td>
            <td>112 lei</td>
        </tr>
        <tr>
            <td>Antigen virus hepatic Delta (HDV)</td>
            <td>45 lei</td>
        </tr>
        <tr>
            <td>Amilaza serica</td>
            <td>18 lei</td>
        </tr>
        <tr>
            <td>Anti-HCV</td>
            <td>79 lei</td>
        </tr>
        <tr>
            <td>Gama – glutamiltransferază (Glutamiltranspeptidază)</td>
            <td>15 lei</td>
        </tr>
        <tr>
            <td>Trigliceride</td>
            <td>16 lei</td>
        </tr>
        <tr>
            <td>Magneziu seric</td>
            <td>16 lei</td>
        </tr>
        <tr>
            <td>Anticorpi anti-HCV</td>
            <td>44 lei</td>
        </tr>
        <tr>
            <td>Epstein Barr: anti-EA IgG</td>
            <td>256 lei</td>
        </tr>
        <tr>
            <td>Examen citologic secretii diverse</td>
            <td>65 lei</td>
        </tr>
        <tr>
            <td>Examen microscopic din secretie vaginala</td>
            <td>55 lei</td>
        </tr>
        <tr>
            <td>Magneziu seric</td>
            <td>16 lei</td>
        </tr>
        <tr>
            <td>Factor IX (activitate)</td>
            <td>99 lei</td>
        </tr>
        <tr>
            <td>Hemopexina</td>
            <td>96 lei</td>
        </tr>
        </tbody>
    </table>
</div>

<?php
require_once '../include/footer.php';
?>

</html>