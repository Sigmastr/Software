<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Ingresar compra</title>

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
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>





                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
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
                            <a href="../MenuAdministrador/administrador.php" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> ícono descriptivo -->
                                <p>
                                    Administrador
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../MenuAdministrador/administrador.php" class="nav-link">
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
                                    <a href="../Maestro/Maestro.php" class=" nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maestros</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
                                <p>
                                    Adquisiciones
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="FichaProveedor.php" class="nav-link ">
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
                                    <a href="#" class="nav-link active">
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
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fas fa-tree"></i> -->
                                <p>
                                    Bodega
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Bodega/Bodega.php" class="nav-link">
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
                            <a href="#" class="nav-link ">
                                <!-- <i class="nav-icon fas fa-table"></i> -->
                                <p>
                                    Cliente
                                    <i class="fas fa-angle-left right "></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Cliente/FichaCliente.php" class="nav-link ">
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
                            <h1 class="m-0">Sección Ingresar Lista</h1>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FichaCliente">
                                        Ingresar lista de precio
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="FichaCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color:#3f668d">
                                                    <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Proveedor</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">


                                                    <form method="POST" action="../../PhP/INSERTAR_listaprecio.php">
                                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                                            Datos de la lista</h4>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputFecha">Fecha de la compra:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                                    </div>
                                                                    <input type="date" class="form-control" name="fecha">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPrecioNeto">Precio Neto:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-address-card"></i>
                                                                    </div>
                                                                    <input type="text" class="form-control" name="Precio_neto" placeholder="20000">
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="form-row">

                                                            <div class="form-group col-md-6">
                                                                <label for="inputTlf">Afecto/Exento:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-mobile"></i>
                                                                    </div>
                                                                    <select class="form-control" name="iva">
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
                                                            <div class="form-group col-md-6">
                                                                <label for="inputActividad">Precio Final:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="final" id="final">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="form-row">

                                                            <div class="form-group col-md-6">
                                                                <label for="inputPais">Margen:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                                                    </div>
                                                                    <input type="number" class="form-control" name="margen" placeholder="5,10,15">
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputproveedor">Seleccione el proveedor:</label>
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="fas fa-mobile"></i>
                                                                    </div>
                                                                    <select class="form-control" name="proveedor">
                                                                        <?php
                                                                        $sql = ("SELECT * FROM proveedor");
                                                                        $query = $conn->query($sql);
                                                                        while ($valores = mysqli_fetch_array($query)) {
                                                                            echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre_Empresa'] . '</option>';
                                                                        }
                                                                        ?>
                                                                    </select>
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

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Proveedor</th>
                                                <th>Fecha</th>
                                                <th>Precio neto</th>
                                                <th>Afecto/Exento</th>
                                                <th>Precio Final</th>
                                                <th>Margen</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM listaprecios";
                                            //ver como mostrar el nombre en vez del cargo

                                            $resultado = mysqli_query($conn, $sql);
                                            while ($filas = mysqli_fetch_array($resultado)) {
                                                $var = $filas['rut_proveedor'];
                                                $sql = "SELECT * FROM proveedor WHERE Rut ='$var'";
                                                $query = mysqli_query($conn, $sql);
                                                $filaProveedor = mysqli_fetch_array($query);
                                                $var1 = $filas['iva'];
                                                $sql1 = "SELECT * FROM afectoExento WHERE id_afectoExento = '$var1'";
                                                $query1 = mysqli_query($conn, $sql1);
                                                $filaAfecto = mysqli_fetch_array($query1);
                                            ?>
                                                <tr>
                                                    <td><?php echo $filaProveedor['Nombre_Empresa'] ?></td>
                                                    <td><?php echo $filas['Fecha'] ?></td>
                                                    <td><?php echo $filas['Precio_neto'] ?></td>
                                                    <td><?php echo $filaAfecto['Nombre'] ?></td>
                                                    <td><?php echo $filas['PrecioFinal'] ?></td>
                                                    <td><?php echo $filas['Margen'] ?></td>
                                                    <td>
                                                        <a href="../../CRUD/DELETE_ListaCompra.php?id=<?php echo $filas['ID_ListaPrecio'] ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button></a>
                                                        <button type="button" class="btn btn-primary editbtn" data-toggle="modal" data-target="#lista<?php echo $filas['ID_ListaPrecio']; ?>"><i class="fas fa-edit"></i></button>

                                                    </td>
                                                </tr>
                                            <?php
                                                include 'EditarLista.php';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
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
            $('#example3').DataTable({
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