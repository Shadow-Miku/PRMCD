<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>Weirdo Comics</title>
</head>

<body class="bg-blue">
<div>

<!--barra navegacion-->
<div class="container-fluid">
  <div class="row flex-nowrap">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
          <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <!--enlace /-->
              <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                  <span class="fs-5 d-none d-sm-inline">Weirdo Comics</span>
              </a>
              <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <!--enlace menu-->
                  <li class="nav-item">
                      <a href=" {{ route('apPrin') }} " class="nav-link align-middle px-0">
                          <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Menu</span>
                      </a>
                  </li>
                  <!--enlace submenu de comic y articulos-->
                  <li>
                      <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Registrar</span> </a>
                          <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                          <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Registrar Proveedores</span> </a>
                          </li>
                          <li class="w-100">
                              <a href=" {{ route('articulo.create') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Registrar Articulos</span> </a>
                          </li>
                          <li>
                              <a href=" {{ route('comic.create') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Registrar Comics</span> </a>
                          </li>
                      </ul>
                  </li>

                  <!--enlace pedidos-->
                  <li>
                      <a href=" {{ route('pedidosB.listado') }} " class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span></a>
                  </li>

                  <!--enlace stock
                  <li>
                      <a href=" {{ route('apStock') }} " class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Stock</span> </a>
                  </li>
                            -->
                  <!--enlace ventas-->
                  <li>
                    <a href=" {{ route('apVentas') }} " class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Ventas</span> </a>
                  </li>
                  <!--enlace submenu de consultas-->
                  <li>
                      <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                          <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Consultas</span> </a>
                          <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                          <li class="w-100">
                              <a href=" {{ route('articulo.index') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Stock Articulos</span> </a>
                          </li>
                          <li>
                              <a href=" {{ route('comic.index') }} " class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Stock Comics</span> </a>
                          </li>
                          <li>
                            <a href="{{ route('proveedor.index') }}" class="nav-link px-0"> <span class="d-none d-sm-inline">&nbsp; &nbsp; Consultas Proveedores</span> </a>
                        </li>
                        </li>
                      </ul>
                  </li>
              </ul>
              <hr>
              <!--<div class="dropdown pb-4">
                  <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                      <span class="d-none d-sm-inline mx-1">loser</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                      <li><a class="dropdown-item" href="#">New project...</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
              </div>-->
          </div>
      </div>
      <div class="col py-3">

        <!--  Contenido -->
        @yield('contenido')

      </div>
  </div>
</div>
<!--Termina Barra navegación-->

<!--Pie de Pagina-->
<!--Alertas-->
<div class="alert alert-success" role="alert">
  Macuin Dashboards.   <?php  echo date('Y');?> CopyRigth® 
  
  <?php 
  date_default_timezone_set('America/Mexico_City');

  $fechaActual = date('d/m/y h:i:s');

  echo "$fechaActual <br>";
  
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>