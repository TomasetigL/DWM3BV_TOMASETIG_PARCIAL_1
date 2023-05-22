<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $dudas = $_POST['dudas'];



 
    $resumen = "Resumen de los datos enviados:<br>";
    $resumen .= "Email: " . $email . "<br>";
    $resumen .= "Dudas: " . $dudas;

 
    echo "<h2>Resumen de los datos enviados:</h2>";
    echo "<pre>" . $resumen . "</pre>";
}
?>
