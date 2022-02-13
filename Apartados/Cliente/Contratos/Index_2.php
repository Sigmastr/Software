<?php
include('../../../Conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="iewedge">
    <link rel="stylesheet" href="EstilosCont1.css">

    <title>SegProject | Contratos</title>

</head>

<body>
    <form class="FormBasic" method="POST" action="../../../PhP/INSERTAR_contrato.php">
        <!-- Asignando datos del formulario anterior -->
        <input hidden name="Cliente" value="<?php echo $_POST["Cliente"]; ?>">
        <input hidden name="FechaContrato" value="<?php echo $_POST["FechaContrato"]; ?>">
        <input hidden name="TipoContrato" value="<?php echo $_POST["TipoContrato"]; ?>">
        <input hidden name="Tipo_de_instalacion" value="<?php echo $_POST["Tipo_de_instalacion"]; ?>">
        <input hidden name="AreasContratadas" value="<?php echo $_POST["AreasContratadas"]; ?>">
        <input hidden name="CantidadEmpleados" value="<?php echo $_POST["CantidadEmpleados"]; ?>">
        <input hidden name="AreasContratadas2" value="<?php echo $_POST["AreasContratadas2"]; ?>">
        <input hidden name="CantidadEmpleados2" value="<?php echo $_POST["CantidadEmpleados2"]; ?>">
        <input hidden name="AreasContratadas3" value="<?php echo $_POST["AreasContratadas3"]; ?>">
        <input hidden name="CantidadEmpleados3" value="<?php echo $_POST["CantidadEmpleados3"]; ?>">
        <input hidden name="proyecto" value="<?php echo $_POST["proyecto"]; ?>">
        <!-- ----------------------------------------------------------------------------- -->
        <h2 style="font-family: sans-serif;">SERVICIOS CONTRATADOS</h2>
        <h4>Servicio: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Fecha Inicial: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Rango Periodo: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Periodo:</h4>
        <select class="Select" name="listaservicio">
            <?php
            $sql = ("SELECT * FROM listaservicio");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['ID_lista'] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles" type="date" name="FechaInicial" placeholder="Fecha Inicial">
        <input class="Controles2" type="number" name="RangoPeriodo" placeholder="1,2,3,4,...,etc">
        <input class="Controles2" type="text" name="Periodo" placeholder="trimestral, semanal, anual">
        <br>
        <select class="Select2" name="Piping">
            <!-- ALTER TABLE listaserviciopiping ADD FOREIGN KEY (id_ListaServicio) REFERENCES listaservicio (ID_lista); -->
            <?php


            $sql = ("SELECT * FROM listaserviciopiping");

            $query = $conn->query($sql);

            while ($valores = mysqli_fetch_array($query)) {
                $var = $valores['id_ListaServicio'];
                $sql2 = ("SELECT * FROM listaservicio WHERE ID_lista='$var'");
                $query2 = ($conn->query($sql2));
                $valor = mysqli_fetch_array($query2);
                if ($valores['id_ListaServicio'] == $valor['ID_lista'])
                    echo '<option value="' . $valores['id_ListaServicio'] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles3" type="text" name="ObservacionesSer" placeholder="Alguna Observación">
        <h4>Servicio: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Fecha Inicial: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Rango Periodo: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Periodo:</h4>
        <select class="Select" name="listaservicio2">
            <?php
            $sql = ("SELECT * FROM listaservicio");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['ID_lista '] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles" type="date" name="FechaInicial2" placeholder="Fecha Inicial">
        <input class="Controles2" type="text" name="RangoPeriodo2" placeholder="1,2,3,4,...,etc">
        <input class="Controles2" type="number" name="Periodo2" placeholder="trimestral, semanal, anual">
        <br>
        <select class="Select2" name="Piping2">
            <?php
            $sql = ("SELECT * FROM listaserviciopiping");

            $query = $conn->query($sql);

            while ($valores = mysqli_fetch_array($query)) {
                $var = $valores['id_ListaServicio'];
                $sql2 = ("SELECT * FROM listaservicio WHERE ID_lista='$var'");
                $query2 = ($conn->query($sql2));
                $valor = mysqli_fetch_array($query2);
                if ($valores['id_ListaServicio'] == $valor['ID_lista'])
                    echo '<option value="' . $valores['id_ListaServicio'] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles3" type="text" name="ObservacionesSer2" placeholder="Alguna Observación">
        <h4>Servicio: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Fecha Inicial: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Rango Periodo: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            Periodo:</h4>
        <select class="Select" name="listaservicio3">
            <?php
            $sql = ("SELECT * FROM listaservicio");
            $query = $conn->query($sql);
            while ($valores = mysqli_fetch_array($query)) {
                echo '<option value="' . $valores['ID_lista '] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles" type="date" name="FechaInicial3" placeholder="Fecha Inicial">
        <input class="Controles2" type="text" name="RangoPeriodo3" placeholder="1,2,3,4,...,etc">
        <input class="Controles2" type="number" name="Periodo3" placeholder="trimestral, semanal, anual">
        <br>
        <select class="Select2" name="Piping3">
            <?php
            $sql = ("SELECT * FROM listaserviciopiping");

            $query = $conn->query($sql);

            while ($valores = mysqli_fetch_array($query)) {
                $var = $valores['id_ListaServicio'];
                $sql2 = ("SELECT * FROM listaservicio WHERE ID_lista='$var'");
                $query2 = ($conn->query($sql2));
                $valor = mysqli_fetch_array($query2);
                if ($valores['id_ListaServicio'] == $valor['ID_lista'])
                    echo '<option value="' . $valores['id_ListaServicio'] . '">' . $valores['Nombre'] . '</option>';
            }
            ?>
        </select>
        <input class="Controles3" type="text" name="ObservacionesSer3" placeholder="Alguna Observación">
        <br>
        <input class="Boton" type="submit" value="Generar Contrato" href="../FichaCliente.php">
    </form>
</body>

</html>