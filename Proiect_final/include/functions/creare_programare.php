<?php

include '../config.inc.php';

$dbhost = "localhost";
$dbuser = "2022.milu.iancu.virgil";
$dbpass = "fs94PpgnIOwswk6c";
$db = "2022.milu.iancu.virgil";

if(isset($_POST['buton'])){

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass ,$db);

    if (!$conn){
        die(); //terminates the current script
    }

    $nume = mysqli_real_escape_string($conn, $_POST['nume']);
    $prenume = mysqli_real_escape_string($conn, $_POST['prenume']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefon = mysqli_real_escape_string($conn, $_POST['telefon']);
    $data = mysqli_real_escape_string($conn, $_POST['data']);
}

$query = "SELECT * FROM programari WHERE data = '$data'";

$result = $conn->query($query); // is a method that sends the SQL query to the database and returns the result set as a PDOStatement object.


if ($result->num_rows > 0) {
    header("location:".ROOT_PATH . 'pages/programare.php?message=fail');

} else {
    $query2 = "INSERT INTO programari (nume, prenume, email, telefon, data) VALUES (?, ?, ?, ? ,?)";

    $executing_query = $conn->prepare($query2); // A prepared statement is a pre-compiled SQL statement that can be executed multiple times with different parameters.
    $executing_query->bind_param("sssss", $nume,$prenume,$email,$telefon,$data); //s -> str, i -> int
    // Once a prepared statement is created, you can bind values to its placeholders and execute it multiple times with different parameter values.

    if ($executing_query->execute()){
        header("location:".ROOT_PATH . 'pages/programare.php?message=success');
    }
}

?>