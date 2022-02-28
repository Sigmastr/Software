<?php
include('../../Conexion/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Bodega</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->






                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../../recursos/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
                <span class="brand-text font-weight-light">SegProject</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- foto de usuario -->
                        <img src="../../recursos/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">UserName</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> ícono descriptivo -->
                                <p>
                                    Administrador
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../MenuAdministrador/administrador.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inicio</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Empleado/ConfiguracionEmpleado.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Configuración</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Maestro/Maestro.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maestros</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
                                <p>
                                    Adquisiciones
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Adquisiciones/FichaProveedor.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ficha Proveedor</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Requerimiento Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Orden de Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../Adquisiciones/IngresarCompra.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ingresar Compra</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes Específico</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuadro Mando</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <!-- <i class="nav-icon fas fa-tree"></i> -->
                                <p>
                                    Bodega
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Bodega/Bodega.php" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ficha Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>F-02 Devolución Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>F-03 Solicitud de Bodega</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>F-04 Otras Salidas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>F-05 Otros ingresos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes Inventario</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes Kardex</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-table"></i> -->
                                <p>
                                    Supervisor
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Estado ST - SM - SD - SP
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Conformación Servicio ST - SM - SD - SP
                                        </p>
                                    </a>
                                </li>
                                <!-- <li class="nav-header">Servicio Tecnico</li> -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitud de ST
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Check List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Actas de Cierre
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Guía de Servicio
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informe Técnico
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitud de Materiales
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Presupuesto
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cotización
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Conformación Servicio
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes especificos
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuadros de mando Soporte Técnico
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Correos Informativos y Alertas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-header">Servicio Mantención</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Conformación Servicio
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes especificos
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Check List
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Actas de Cierre
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Informe Técnico
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Solicitud de Materiales
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Presupuesto
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cotización
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Conformación Servicio
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes especificos
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuadros de mando Soporte Mantención
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Correos Informativos y Alertas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-table"></i> -->
                                <p>
                                    Cliente
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Cliente/FichaCliente.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ficha Cliente
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reportes especificos
                                        </p>
                                    </a>
                                </li>
                                <!-- <li class="nav-header">Servicio Tecnico</li> -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuadro de Mando
                                        </p>
                                    </a>
                                </li>




                            </ul>
                        </li>


                        </li>






                    </ul>
                    </li>









                    </ul>
                </nav>

                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Sección Bodega</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">


                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../MenuAdministrador/administrador.php">Inicio</a></li>

                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="botones" style="margin-bottom:1%">
                <!-- Crear modal a todos los botones -->


            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <!-- Aquí poner los botones -->
                                    <!-- Button trigger modal -->
                                    <div class="botones" style="margin-bottom:1%; margin-top:1%">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarBodega">
                                            Agregar Bodega
                                        </button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TipoModelo">
                                            Agregar Tipo de modelo
                                        </button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoria">
                                            Agregar Categoría
                                        </button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#subcategoria">
                                            Agregar Subcategoría
                                        </button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarMaterialOProducto">
                                            Agregar Producto
                                        </button>


                                    </div>

                                    <!-- Modal -->


                                    <div class="modal fade" id="AgregarBodega" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#3f668d">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Bodega</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form method="POST" action="../../PhP/INSERTAR_Bodega.php">
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos de Bodega</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Nombre de Bodega</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="NombreBodega" id="NombreBodega" placeholder="Ingrese nombre de la bodega">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputDireccion">Dirección</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese la dirección">
                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail5">Correo</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-envelope"></i>
                                                                    </div>
                                                                    <input type="email" class="form-control" name="Correo" id="Correo" placeholder="bodega@dominio.com">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Región</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="region" id="region">
                                                                        <?php
                                                                        $sql = ("SELECT * FROM region");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['Id_Region'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCiudad">Ciudad</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-house-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="ciudad" id="ciudad">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM comuna");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_comuna'] . '">' . $valores['Nombre_comuna'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos de Contacto</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Seleccione jefe de bodega</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="encargado" id="encargado">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        //colocar el where cargo = Jefe Bodega
                                                                        $sql = ("SELECT * FROM empleado");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['Rut_Empleado'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                                </div>
                                                </form>


                                            </div>

                                        </div>
                                    </div>

                                    <div class="modal fade" id="TipoModelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#3f668d">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Bodega</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form method="POST" action="../../PhP/INSERTAR_Tipomodelo.php">
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos de Bodega</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Nombre:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="NombreTipo" id="NombreTipo" placeholder="Ingrese el tipo de modelo">
                                                                </div>

                                                            </div>



                                                        </div>




                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                                </div>
                                                </form>


                                            </div>

                                        </div>
                                    </div>


                                    <div class="modal fade" id="AgregarMaterialOProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#3f668d">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Producto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form method="POST" action="../../PhP/INSERTAR_MaterialProducto.php">
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos de Material o producto</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputNombreEmpleado">Código:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="nf4k-5">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Nombre:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Cámara video 4k...">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputRegion">Tipo de modelo</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="modelo">
                                                                        <?php
                                                                        $sql = ("SELECT * FROM tipomodelo");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_TipoModelo'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>


                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputNombreEmpleado">Descripción:</label>
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="fas fa-user"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Agregue una descripción del producto">
                                                                    </div>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputRegion">Rubro asociado: </label>
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="rubro" placeholder="Agregue el rubro del producto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCiudad">Categoria</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-house-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="categoria">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM categoria");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_Categoria'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCiudad">SubCategoria</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-house-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="subcategoria">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM subcategoria");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            $var = $valores['id_Categoria'];
                                                                            $sql2 = ("SELECT * FROM categoria WHERE id_Categoria =$var");
                                                                            $query2 = $conn->query($sql2);
                                                                            $valor = mysqli_fetch_array($query2);
                                                                            if ($valores['id_Categoria'] == $valor['id_Categoria'])
                                                                                echo '<option value="' . $valores['id_subcategoria'] . '">' . $valores['NombreSubcategoria'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>




                                                        </div>
                                                        <!--  fin form row -->
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Unidad de medida:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="unidadmedida">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM unidadmedida");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['ID_UnidadMedida'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Afecto/exento: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="afectoexento">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM afectoexento");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['id_afectoExento'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">

                                                            <div class="form-group col-md-6">
                                                                <label for="ListaPrecio">Seleccione el proveedor:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="listaprecios">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM listaprecios");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['ID_ListaPrecio'] . '">' . $valores['rut_proveedor'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputMoneda">Tipo de moneda: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="listamonedas">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM moneda");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['ID_moneda'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                        </div>



                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Cantidad:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="cantidad" id="Cantidad">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Bodega: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="bodega">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM bodega");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['Codigo_bodega'] . '">' . $valores['Nombre_Bodega'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- seguir -->
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Alerta Stock: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control-file" name="stock">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Imagen: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input name="img" type="file" class="inputFile" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Stock Mínimo: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control-file" name="Stockminimo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Valor Unitario : </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control-file" name="valorUni">
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                                </div>
                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="categoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#3f668d">
                                                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Categoría</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form method="POST" action="../../PhP/INSERTAR_categoria.php">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                        Datos de la categoría</h4>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Nombre:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="categoria" placeholder="Ingrese nombre de la categoría">
                                                            </div>

                                                        </div>



                                                    </div>




                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Agregar</button>
                                            </div>
                                            </form>


                                        </div>

                                    </div>
                                </div>
                                <div class="modal fade" id="subcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background-color:#3f668d">
                                                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Categoría</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">


                                                <form method="POST" action="../../PhP/INSERTAR_subcategoria.php">
                                                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                        Datos de la categoría</h4>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputNombreEmpleado">Nombre:</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-user"></i>
                                                                </div>
                                                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de la Subcategoría">
                                                            </div>

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputRegion">Seleccione Categoría</label>
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text"><i class="fas fa-building"></i>
                                                                </div>
                                                                <select class="form-control" name="categoria" id="categoria">
                                                                    <?php
                                                                    $sql = ("SELECT * FROM categoria");
                                                                    $query = $conn->query($sql);
                                                                    while ($valores = mysqli_fetch_array($query)) {
                                                                        echo '<option value="' . $valores['id_Categoria'] . '">' . $valores['Nombre'] . '</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>

                                                        </div>


                                                    </div>




                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Agregar</button>
                                            </div>
                                            </form>


                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre de Bodega</th>
                                            <th>Dirección</th>
                                            <th>Comuna</th>
                                            <th>Email</th>
                                            <th>Nombre del Encargado</th>
                                            <th>Teléfono</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM bodega";
                                        //ver como mostrar el nombre en vez del cargo

                                        $resultado = mysqli_query($conn, $sql);
                                        while ($filas = mysqli_fetch_array($resultado)) {
                                            $var = $filas['Comuna_id'];
                                            $sql2 = "SELECT * FROM comuna where id_comuna=$var";
                                            $resultado2 = mysqli_query($conn, $sql2);
                                            $nombrecomu = mysqli_fetch_array($resultado2);
                                            $var2 = $filas['Rut_Encargado'];
                                            $sql3 = "SELECT * FROM empleado where Rut_Empleado='$var2'";
                                            $resultado3 = mysqli_query($conn, $sql3);
                                            $datosEmpleado = mysqli_fetch_array($resultado3);
                                        ?>
                                            <tr>
                                                <td><?php echo $filas['Nombre_Bodega'] ?></td>
                                                <td><?php echo $filas['Direccion'] ?></td>


                                                <!-- Consulta para tener el telefono del empleado y el nombre de la comuna -->
                                                <td><?php echo $nombrecomu['Nombre_comuna'] ?></td>
                                                <td><?php echo $filas['Email'] ?></td>
                                                <td><?php echo $datosEmpleado['Nombre'] ?></td>
                                                <td><?php echo $datosEmpleado['Telefono'] ?></td>
                                                <td>
                                                    <a href="../../CRUD/DELETE_Bodega.php?id=<?php echo $filas['Codigo_bodega'] ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                                    <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#update_bodega<?php echo $filas['Codigo_bodega']; ?>"><i class="fas fa-edit"></i></button>
                                                </td>
                                            </tr>
                                        <?php
                                            include 'editarmodalbodega.php';
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card">
                                <div class="card-header">
                                    <!-- Aquí poner los botones -->
                                    <!-- Button trigger modal -->
                                    <div class="botones" style="margin-bottom:1%; margin-top:1%">

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AgregarMaterialOProducto">
                                            Agregar Producto
                                        </button>


                                    </div>

                                    <!-- Modal -->

                                    <div class="modal fade" id="AgregarMaterialOProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#3f668d">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Producto</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form method="POST" action="../../PhP/INSERTAR_MaterialProducto.php" enctype="multipart/form-data">
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos de Material o producto</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputNombreEmpleado">Código:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="codigo" id="codigo" placeholder="nf4k-5">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Nombre:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Cámara video 4k...">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputRegion">Tipo de modelo</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="modelo">
                                                                        <?php
                                                                        $sql = ("SELECT * FROM tipomodelo");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_TipoModelo'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>


                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputNombreEmpleado">Descripción:</label>
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="fas fa-user"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="Descripcion" id="Descripcion" placeholder="Agregue una descripción del producto">
                                                                    </div>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputRegion">Rubro asociado: </label>
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                                                        </div>
                                                                        <input type="text" class="form-control" name="rubro" placeholder="Agregue el rubro del producto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCiudad">Categoria</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-house-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="categoria">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM categoria");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['id_Categoria'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputCiudad">SubCategoria</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-house-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="subcategoria">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM subcategoria");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            $var = $valores['id_Categoria'];
                                                                            $sql2 = ("SELECT * FROM categoria WHERE id_Categoria =$var");
                                                                            $query2 = $conn->query($sql2);
                                                                            $valor = mysqli_fetch_array($query2);
                                                                            if ($valores['id_Categoria'] == $valor['id_Categoria'])
                                                                                echo '<option value="' . $valores['id_subcategoria'] . '">' . $valores['NombreSubcategoria'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>

                                                                </div>

                                                            </div>




                                                        </div>
                                                        <!--  fin form row -->
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Unidad de medida:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="unidadmedida">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM unidadmedida");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['ID_UnidadMedida'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Afecto/exento: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="afectoexento">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM afectoexento");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['id_afectoExento'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">

                                                            <div class="form-group col-md-6">
                                                                <label for="ListaPrecio">Seleccione el proveedor:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <select class="form-control" name="listaprecios">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM listaprecios");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['ID_ListaPrecio'] . '">' . $valores['rut_proveedor'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputMoneda">Tipo de moneda: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="listamonedas">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM moneda");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['ID_moneda'] . '">' . $valores['Nombre'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                        </div>



                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputNombreEmpleado">Cantidad:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="cantidad" id="Cantidad">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Bodega: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <select class="form-control" name="bodega">
                                                                        <!-- php aquí -->
                                                                        <?php
                                                                        $sql = ("SELECT * FROM bodega");
                                                                        $query = $conn->query($sql);

                                                                        while ($valores = mysqli_fetch_array($query)) {

                                                                            echo '<option value="' . $valores['Codigo_bodega'] . '">' . $valores['Nombre_Bodega'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <!-- seguir -->
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputalert">Alerta Stock: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control-file" name="stock">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">

                                                                <label for="inputimg">Imagen: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="file" class="form-control-file" name="img">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Stock Mínimo: </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control-file" name="Stockminimo">
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputRegion">Valor Unitario : </label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-images"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control-file" name="valorUni">
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" name="guardar" class="btn btn-primary">Agregar</button>
                                                </div>
                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Código</th>
                                            <th>Descripcion</th>
                                            <th>Categoria</th>
                                            <th>SubCategoria</th>
                                            <th>Cantidad</th>
                                            <th>imagen</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM materialoproducto";
                                        //ver como mostrar el nombre en vez del cargo

                                        $resultado = mysqli_query($conn, $sql);
                                        while ($filas = mysqli_fetch_array($resultado)) {
                                            $var = $filas['SubCategoria_id'];
                                            $sql2 = "SELECT * FROM subcategoria where id_subcategoria =$var";
                                            $resultado2 = mysqli_query($conn, $sql2);
                                            $nombrecomu = mysqli_fetch_array($resultado2);
                                            $var2 = $filas['Categoria_id'];
                                            $sql3 = "SELECT * FROM categoria where id_Categoria='$var2'";
                                            $resultado3 = mysqli_query($conn, $sql3);
                                            $datosEmpleado = mysqli_fetch_array($resultado3);
                                        ?>
                                            <tr>
                                                <td><?php echo $filas['Nombre'] ?></td>
                                                <td><?php echo $filas['CodigoMP'] ?></td>
                                                <td><?php echo $filas['Descripcion'] ?></td>
                                                <td><?php echo $datosEmpleado['Nombre'] ?></td>
                                                <td><?php echo $nombrecomu['NombreSubcategoria'] ?></td>
                                                <td><?php echo $filas['Cantidad'] ?></td>
                                                <?php
                                                echo '<td>' . '<img height="80" width="80" src="data:image/png;base64,' . base64_encode($filas["imagen"]) . '"/>';
                                                '</td>'; ?>
                                                <td>
                                                    <a href="../../CRUD/DELETE_materialoproducto.php?id=<?php echo $filas['CodigoMP'] ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                                    <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#updateMaterial<?php echo $filas['CodigoMP']; ?>"><i class="fas fa-edit"></i></button>
                                                </td>
                                            </tr>
                                        <?php
                                            include 'editarproducto.php';
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>







                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Propiedad de Mline 2021
            <a href="https://mlineseg.wixsite.com/website">Mline</a>.</strong>
        Todos los derechos reservados
        <div class="float-right d-none d-sm-inline-block">
            <b>Versión</b> 1.0
        </div>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="../../recursos/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../recursos/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../recursos/plugins/chart.js/Chart.min.js"></script>

    <!-- DataTables  & Plugins -->

    <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(' .$editbtn').on('click', function() {

                $('#crud').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();
                $('#NombreCliente').val(data[0]);
            });
        });
    </script>
</body>

</html>