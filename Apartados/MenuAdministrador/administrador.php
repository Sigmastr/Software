<?php
include('../../Conexion/conexion.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SegProject|Administración Inicio</title>

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
  <link rel="stylesheet" href="../../recursos/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
              <a href="../MenuAdministrador/administrador.php" class="nav-link active">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> ícono descriptivo -->
                <p>
                  Administrador
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../MenuAdministrador/administrador.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inicio</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../Empleado/ConfiguracionEmpleado.php" class="nav-link ">
                    <!-- <i class="nav-icon fas fa-circle"></i> -->
                    <p>
                      Configuración
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">

                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cuadrilla</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="Cargo.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Cargos</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="Especialidad.php" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Especialidad</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./ConfiguracionEmpleado.php" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Empleados</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Unidades/Monedas
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="./UnidadDeMedida.php" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Unidad de medida</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Monedas</p>
                          </a>
                        </li>

                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
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
              <h1 class="m-0">Sección Administrador</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">


              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="Administrador.html">Inicio</a></li>

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
        <button type="button1" class="btn btn-block btn-primary" style="height:10%" data-toggle="modal" data-target="#exampleModal">Añadir tipo de Cliente</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Administración</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


                <form method="POST" action="../../PhP/INSERTAR_TipoCliente.php">

                  <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                    Tipo de Cliente</h4>
                  <div class="form-row">
                    <div class="form-group col-md-6" style>
                      <label for="inputCategoria">Categoría de cliente:</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="CategoriaCliente" id="CategoriaCliente" placeholder="semanal/mensual/anual">
                      </div>

                    </div>


                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" value="guardar">Agregar</button>
                  </div>
                </form>


              </div>

            </div>
          </div>
        </div>

        <!-- Crear modal -->
        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#tipoContrato">Agregar Tipo Contrato</button>
        <!-- Consultar a que se refiere, se puede tomar como tipo de cliente también -->
        <div class="modal fade" id="tipoContrato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Administración</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


                <form method="POST" action="../../PhP/INSERTAR_TipoContrato.php">

                  <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                    Tipo de Contrato</h4>
                  <div class="form-row">
                    <div class="form-group col-md-6" style>
                      <label for="inputPeriodo">Servicio a dar:</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="PeriodoAcceso" id="PeriodoAcceso" placeholder="Fijo, indefinido,etc">
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
        <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#EstadoClienteSistema">Estado Cliente Sistema</button>

        <div class="modal fade" id="EstadoClienteSistema" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Administración</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


                <form method="POST" action="../../PhP/INSERTAR_EstadoCliente_Sistema.php">

                  <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                    Estado Cliente en el sistema</h4>
                  <div class="form-row">
                    <div class="form-group col-md-6" style>
                      <label for="inputTiempo">Definir tiempo de cuenta:</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="EstadoCliente" id="EstadoCliente" placeholder="15 días,30 días,60, etc">
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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php
                  $sql = "SELECT * FROM cliente";
                  $resultado = mysqli_query($conn, $sql);
                  $row = mysqli_num_rows($resultado);
                  ?>
                  <h3><?php
                      echo $row;
                      ?> </h3>

                  <p>Clientes</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="../Cliente/FichaCliente.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3> <?php
                        $sql = "SELECT * FROM proyecto";
                        $resultado = mysqli_query($conn, $sql);
                        $row = mysqli_num_rows($resultado);
                        ?>
                    <h3><?php
                        echo $row;
                        ?> </h3>

                    <p>Proyectos</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3>n° </h3>

                  <p>Mantenciones</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <?php
                  $sql = "SELECT * FROM empleado";
                  $resultado = mysqli_query($conn, $sql);
                  $row = mysqli_num_rows($resultado);
                  ?>
                  <h3><?php
                      echo $row;
                      ?>
                  </h3>


                  <p>Cantidad de empleados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="../Empleado/ConfiguracionEmpleado.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>n° </h3>

                  <p>Estados de proyecto</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
                <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <?php
                  //no reconocerá a los solitarios, solo dúos
                  $sql = "SELECT * FROM cuadrilla WHERE Tipo_cuadrilla='Duo'";
                  $resultado = mysqli_query($conn, $sql);
                  $row = mysqli_num_rows($resultado);
                  ?>
                  <h3><?php
                      echo $row;
                      ?> </h3>

                  <p>Grupos de Trabajo</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clipboard"></i>
                </div>
                <a href="../Empleado/ConfiguracionEmpleado.php" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php
                  // $sql = "SELECT * FROM bodega";
                  // $resultado = mysqli_query($conn, $sql);
                  // $row = mysqli_num_rows($resultado);
                  ?>
                  <h3>
                    n°
                  </h3>
                  <p>Servicio Técnico</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">Ver Más <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-6">
              <!-- /.card -->
              <!-- Tabla Productos -->
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Lista Mantenciones</h3>

                </div>

                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Rut Cliente</th>
                        <th>Servicio</th>
                        <th>Especialidad</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
            </div>

            <div class="col-lg-6">
              <!-- /.card -->
              <!-- Tabla Productos -->
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Cuadro Informativo #</h3>

                </div>

                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Rut Cliente</th>
                        <th>Servicio</th>
                        <th>Especialidad</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
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
  <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../recursos/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../recursos/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
  <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../recursos/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../recursos/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../recursos/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</body>

</html>