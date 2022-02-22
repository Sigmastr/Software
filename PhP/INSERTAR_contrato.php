<?php
include('../Conexion/conexion.php');

$folio = $_POST['folio'];
$Femision = $_POST['Femision'];
$cliente = $_POST['cliente'];
$Finicio = $_POST['Finicio'];
$tcontrato = $_POST['tcontrato'];
$Email = $_POST['Email'];
$tinstalacion = $_POST['tinstalacion'];
$NameInst = $_POST['NameInst'];
//falta los Tipoarea[] y Cant[]
$listservicio = $_POST['listservicio'];
$listservicioV = $_POST['listservicioV'];
$RangoP = $_POST['RangoP'];
$Periodo = $_POST['Periodo'];
$Fincial = $_POST['Fincial'];
$Observ = $_POST['Observ'];
$tparea = $_POST['Tipoarea'];
$cantidad = $_POST['Cant'];

if ($tparea) {
    for ($i = 0; $i < count($tparea); $i++) {


        $sql = "INSERT INTO contrato (folio,Femision,id_cliente ,Finicio,tcontrato,Email,tinstalacion,NameInst,tipoarea,listservicio ,listservicioV,RangoP,Periodo,
        Fincial, observacion) VALUES ('$folio','$Femision','$cliente','$Finicio','$tcontrato','$Email','$tinstalacion',
                '$NameInst','$tparea[$i]','$listservicio','$cantidad[$i]',
                '$RangoP','$Periodo','$Fincial','$Observ')";
        $resultado = mysqli_query($conn, $sql);
    }
}

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/Contrato.php');
    die;
}
