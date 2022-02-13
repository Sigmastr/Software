<?php
include('../Conexion/conexion.php');
$Cliente = $_POST['Cliente'];
$FechaContrato = $_POST['FechaContrato'];
$TipoContrato = $_POST['TipoContrato'];
$Tipo_de_instalacion = $_POST['Tipo_de_instalacion'];
$RangoPeriodo = $_POST['RangoPeriodo'];
$Periodo = $_POST['Periodo'];
$AreasContratadas = $_POST['AreasContratadas'];
$CantidadEmpleados = $_POST['CantidadEmpleados'];
$AreasContratadas2 = $_POST['AreasContratadas2'];
$CantidadEmpleados2 = $_POST['CantidadEmpleados2'];
$AreasContratadas3 = $_POST['AreasContratadas3'];
$CantidadEmpleados3 = $_POST['CantidadEmpleados3'];
$listaservicio = $_POST['listaservicio'];
$proyecto = $_POST['proyecto'];
$listaservicio2 = $_POST['listaservicio2'];
$listaservicio3 = $_POST['listaservicio3'];
$Piping = $_POST['Piping'];
$ObservacionesSer = $_POST['ObservacionesSer'];
$FechaInicial2 = $_POST['FechaInicial2'];
$RangoPeriodo2 = $_POST['RangoPeriodo2'];
$Periodo2 = $_POST['Periodo2'];

if (!empty($AreasContratadas)) {
    $insertar = "INSERT INTO contrato(Fecha_contrato,
    id_tipocontrato,id_tipoinstalacion ,id_cliente ,id_ListaServicio,id_proyecto,id_area,cantidad_empleados,Rango_periodo,periodo) 
    VALUES ( '$FechaContrato','$TipoContrato','$Tipo_de_instalacion','$Cliente'
    ,'$listaservicio','$proyecto','$AreasContratadas','$CantidadEmpleados','$RangoPeriodo','$Periodo')";

    $resultado = mysqli_query($conn, $insertar);
}


if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaCliente.php');
    die;
}
