<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM materialoproducto where CodigoMP ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
