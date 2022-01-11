<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SegProject|Administración Clientes</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

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


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: 0.8" />
        <span class="brand-text font-weight-light">SegProject</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- foto de usuario -->
            <img src="../../../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">UserName</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> ícono descriptivo -->
                <p>
                  Administrador
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/layout/top-nav.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Inicio</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Configuración</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/boxed.html" class="nav-link">
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
                  <a href="#" class="nav-link">
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
                  <a href="#" class="nav-link">
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
                  <a href="#" class="nav-link">
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
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Estado ST - SM - SD - SP
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Conformación Servicio ST - SM - SD - SP
                    </p>
                  </a>
                </li>
                <!-- <li class="nav-header">Servicio Tecnico</li> -->
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Solicitud de ST
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Check List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Actas de Cierre
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Guía de Servicio
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informe Técnico
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Solicitud de Materiales
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Presupuesto
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cotización
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Conformación Servicio
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reportes especificos
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cuadros de mando Soporte Técnico
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Correos Informativos y Alertas
                    </p>
                  </a>
                </li>
                <li class="nav-header">Servicio Mantención</li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Conformación Servicio
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reportes especificos
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Check List
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Actas de Cierre
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Informe Técnico
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Solicitud de Materiales
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Presupuesto
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cotización
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Conformación Servicio
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reportes especificos
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cuadros de mando Soporte Mantención
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/jsgrid.html" class="nav-link">
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
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ficha Cliente
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reportes especificos
                    </p>
                  </a>
                </li>
                <!-- <li class="nav-header">Servicio Tecnico</li> -->
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cuadro de Mando
                    </p>
                  </a>
                </li>




              </ul>
            </li>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Ficha Clientes</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Ficha Clientes</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <!-- Acá van los botones -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Agregar Cliente
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ficha Cliente</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">


                          <form method="POST" >
                             <h4
                              style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                              Datos del Cliente</h4>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Nombre de Cliente</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control" id="NombreCliente"
                                    placeholder="Ingrese Cliente">
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Rut</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-address-card"></i>
                                  </div>
                                  <input type="text" class="form-control" id="RutCliente" placeholder="11111111-1">
                                </div>

                              </div>
                              
                            </div> 
                             <div class="form-row">
                              
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Telefono</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-mobile"></i>
                                    </div>
                                    <input type="text" class="form-control" id="NombreCliente" placeholder="911111111">
                                </div>
                               
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Actividad</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                    </div>
                                    <input type="text" class="form-control" id="RutCliente" placeholder="Ingrese su actividad">
                                </div>
                                
                              </div>
                            </div> 
                               <div class="form-row"> 
                              
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">País</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-flag"></i>
                                    </div>
                                    <select class="form-control" id="pais">
                                      <option value="0">Seleccione el país</option>
                                    </select>
                                </div>
                               
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Región</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                    </div>
                                    <select class="form-control" id="region">
                                      <option value="0">Seleccione la región</option>
                                    </select>
                                </div>
                                
                              </div>
                              
                            </div> 
                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Ciudad</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-house-user"></i>
                                    </div>
                                    <select class="form-control" id="ciudad">
                                      <option value="0">Seleccione la Ciudad</option>
                                    </select>
                                </div>
                               
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Dirección</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <input type="text" class="form-control" id="direccion"
                                    placeholder="Ingrese la dirección">
                                </div>

                              </div>
                            </div>

                            <h4
                              style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                              Datos de Crédito y cobranza</h4>

                            <div class="form-row">

                              <div class="form-group col-md-4">
                                <label for="inputPassword4">Plazo Pago</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                  </div>
                                  <select class="form-control" id="ciudad">
                                    <option value="0">Seleccionar Plazo de pago</option>
                                    <option value="1">Contado</option>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputContactoCobranza">Contacto Cobranza</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-phone"></i>
                                  </div>
                                  <input type="text" class="form-control" id="ContactoPago"
                                    placeholder="Ingrese nombre del contacto">
                                </div>

                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail5">Correo Pago</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope"></i>
                                  </div>
                                  <input type="email" class="form-control" id="CorreoPago"
                                    placeholder="contacto@dominio.com">
                                </div>

                              </div>
                            </div>
                       

                         <div class="form-row">
                              
                              <div class="form-group col-md-6">
                            
                                <label for="inputFonoPago">Dirección Pago</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-building"></i>
                                    </div>
                                    <input type="text" class="form-control" id="FonoPago" placeholder="Ingrese la dirección de pago">
                                </div>
                                
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputLineaCredito">Línea de crédito</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-wallet"></i>
                                    </div>
                                    <input type="text" class="form-control" id="CorreoPago" placeholder="Ingrese Línea de pago">
                                </div>
                               
                              </div>
                            </div> 

                            <h4
                              style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #8b11fd;">
                              Datos de Contacto</h4>

                              <div class="form-row">

                                <div class="form-group col-md-4">
                                  <label for="inputPassword4">Representante</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" id="NombreRepresentante" placeholder="ingrese nombre de Representante">
                                  </div>
  
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputEmail4">Email</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-envelope"></i>
                                    </div>
                                    <input type="email" class="form-control" id="CorreoPago"
                                      placeholder="contacto@dominio.com">
                                  </div>
  
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputEmail4">Correo Pago</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <input type="email" class="form-control" id="CorreoPago"
                                      placeholder="contacto@dominio.com">
                                  </div>
  
                                </div>
                              </div>
                              <h4
                              style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #4437ff;">
                              Configuración Cliente</h4>
                              <div class="form-row">

                                <div class="form-group col-md-4">
                                  <label for="inputEstadoCliente">Estado de Cliente en el sistema</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <select class="form-control" id="EstadoCliente">
                                      <option value="0">Seleccionar Estado de Cliente</option>
                                    </select>
                                  </div>
  
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputEmail4">Tipo de Cliente</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <select class="form-control" id="ciudad">
                                      <option value="0">Seleccionar tipo de Cliente</option>
                                    </select>
                                  </div>
  
                                </div>
                                <div class="form-group col-md-4">
                                  <label for="inputcontrato">Tipo de contrato</label>
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-copy"></i>
                                    </div>
                                    <select class="form-control" id="contrato">
                                      <option value="0">Seleccionar tipo de contrato</option>
                                    </select>
                                  </div>
  
                                </div>
                              </div>
                        </form>


                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Rut</th>
                      <th>Email</th>
                      <th>Telefono</th>
                      <th>Actividad</th>
                      <th>Representante</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>

                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2022 <a href="https://mlineseg.wixsite.com/website">Mline</a>.</strong> Todos los derechos
    reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <!-- jQuery -->
  <script src="../../../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src=../../../..//dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="../../../../plugins/chart.js/Chart.min.js"></script>

  <!-- DataTables  & Plugins -->
  <script src="../../../../Segproject/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../../../Segproject/plugins/jszip/jszip.min.js"></script>
  <script src="../../../../Segproject/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../../../Segproject/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../../../Segproject/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../../../Segproject/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,

      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>