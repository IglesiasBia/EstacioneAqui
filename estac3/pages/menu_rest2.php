<?php
  	$nivel_necessario = 2;
    include "../base/testa_nivel.php";
    
    //include "../base/ch_pages.php";

?>

<div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/estac3/pages/dash.php">
        <img src="../assets/img/logo-provisoria.png" class="navbar-brand-img h-150" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">ESTACIONE AQUI</span>
      </a>
</div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-danger" href="/estac3/pages/dash.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- Abrir parte de atualizar dados do estaci -->
        <li class="nav-item">
          <a class="nav-link text-white " href="dash.php?page=view_estac">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Atualiza</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?page=lista_func">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Funcionários</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white " href="dash.php?page=form_att_cliente">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Inserir</span>
            </a>
        </li>
      </ul>
    </div>