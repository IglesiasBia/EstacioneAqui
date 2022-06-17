<?php
  include "../base/testa_nivel.php";
  $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if($_SESSION['UsuarioNivel'] == 1){
    if($link == "http://localhost:8080/estac3/pages/dash.php"){
      echo '<div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <li class="nav-item d-flex align-items-center">
                    <a class="dropdown-item" href="../base/logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>';
    }elseif($link == "http://localhost:8080/estac3/pages/dash.php?page=form_att_cliente"){
      echo '<div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Inserir</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Inserir</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <li class="nav-item d-flex align-items-center">
                    <a class="dropdown-item" href="../base/logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>';
    }
  }elseif($_SESSION['UsuarioNivel'] == 2){
    if($link == "http://localhost:8080/estac3/pages/dash.php"){
      echo '<div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Dashboard</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <li class="nav-item d-flex align-items-center">
                    <a class="dropdown-item" href="../base/logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>';
    }elseif($link == "http://localhost:8080/estac3/pages/dash.php?page=view_estac"){
      echo '<div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Atualiza</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Atualiza</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <li class="nav-item d-flex align-items-center">
                    <a class="dropdown-item" href="../base/logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>';
    }elseif($link == "http://localhost:8080/estac3/pages/dash.php?page=lista_func"){
      echo '<div class="container-fluid py-1 px-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                  <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Funcionários</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Funcionários</h6>
              </nav>
              <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="ms-md-auto pe-md-3 d-flex align-items-center">
                  <li class="nav-item d-flex align-items-center">
                    <a class="dropdown-item" href="../base/logout.php" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </li>
                </ul>
              </div>
            </div>';
    }
  }

?>

