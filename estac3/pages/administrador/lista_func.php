<?php
  	$nivel_necessario = 2;
    include "../base/testa_nivel.php";
?>

<!-- INICIO CONTENT -->
<div class="container-fluid py-4 ">
        <!-- Chama o Formulário para adicionar funcionário -->
      <div class="row"><a href="?page=fadd_func" class="btn bg-gradient-danger fs-6 buttonfunc ">Novo Funcionário</a> </div>
         
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-danger shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3 fs-4">Funcionários</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive ">
              <?php
  
                $quantidade = 5;

                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade * $pagina) - $quantidade;

                $data_all = mysqli_query($con, "select * from funcionario where status_func= 1 order by id_func asc limit $inicio, $quantidade;") or die(mysqli_error($con));
                // $data_all = mysqli_query($con, "select * from usuarios order by id;") or die(mysqli_error($con));
                echo "<table class='table align-items-center mb-0'>";
                echo "<thead><tr>";
                echo "<th class='text-uppercase text-secondary fs-5 font-weight-bolder opacity-7'>ID</th>";
                echo "<th class='text-uppercase text-secondary fs-5 font-weight-bolder opacity-7 ps-2'>Nome</th>";
                echo "<th class='text-center text-uppercase text-secondary fs-5 font-weight-bolder opacity-7 d-none d-md-table-cell'>E-mail</th>";
                echo "<th class='text-center text-uppercase text-secondary fs-5 font-weight-bolder opacity-7 d-none d-md-table-cell'>Nível</th>";
                // echo "<th class='text-center text-uppercase text-secondary fs-5 font-weight-bolder opacity-7 d-none d-md-table-cell'>Status</th>";
                echo "<th class='text-secondary opacity-7'></th>";
                echo "</tr></thead><tbody>";
               
                while($info = mysqli_fetch_array($data_all)){ 
                  if($info["status_func"] == 1){
                  echo "<tr>";
                  echo "<td class='fs-5'>".$info['id_func']."</td>";
                  echo "<td class='fs-5'>".$info['nome_func']."</td>";
                  echo "<td class='d-none d-md-table-cell fs-5'>".$info['email_func']."</td>";
                  // echo "<td class='d-none d-md-table-cell'>".$info['nivel_func']."</td>";
                  if($info["nivel_func"] == 1){
                    echo "<td class='d-none d-md-table-cell fs-5'>Funcionário Usuário</td>";
                  }else if($info["nivel_func"] == 2){
                    echo "<td class='d-none d-md-table-cell fs-5'>Administrador</td>";
                  }else if($info["nivel_func"] == 3){
                      echo "<td class='d-none d-md-table-cell fs-5'>Funcionário não-usuário</td>";
                  }
                  // if($info['status_func'] == 1){
                  //   echo "<td class='d-none d-md-table-cell'>Ativo</td>";
                  // }else if($info['status_func'] == 0){
                  //   echo "<td class='d-none d-md-table-cell'>Inativo</td>";
                  // }
                  echo "<td><div class='btn-group btn-group-xs'>";
                  echo "<a class='btn btn-info btn-xs' href=?page=view_func&id=".$info['id_func']."> 
                  <img src='../assets/img/icons/view.png' height='23em'>
                  </a>";
                  echo "<a class='btn btn-warning btn-xs' href=?page=form_att_func&id=".$info['id_func']."> <img src='../assets/img/icons/edit.png' height='23em'> </a>";
                  if($info['status_func'] == 1){
                    echo "<a class='btn btn-danger btn-xs'  href=?page=att_status_func&id=".$info['id_func']."> <img src='../assets/img/icons/desativado.png' height='23em'> </a>";
                  }else if($info['status_func'] == 0){
                    echo "<a class='btn btn-success btn-xs'  href=?page=att_status_func&id=".$info['id_func'].">&nbsp;&nbsp;&nbsp;<img src='../assets/img/icons/verifica.png' height='21em'>&nbsp;&nbsp;</a></div></td>";
                  }
                }
                }
                echo "</tr></tbody></table>";
              ?>
            </div>
          </div>
        </div>
      </div>
      
    </div>
      <!-- PAGINAÇÃO -->
      <div id="bottom" class="row">
        <div class="col-md-12">
          <?php
            $sqlTotal 		= "select id_func from funcionario;";
            $qrTotal  		= mysqli_query($con, $sqlTotal);
            $numTotal 		= mysqli_num_rows($qrTotal);
            $totalpagina = (ceil($numTotal/$quantidade)<=0) ? 1 : ceil($numTotal/$quantidade);

            $exibir = 3;

            $anterior = (($pagina-1) <= 0) ? 1 : $pagina - 1;
            $posterior = (($pagina+1) >= $totalpagina) ? $totalpagina : $pagina+1;

            echo "<ul class='pagination'>";
            echo "<li class='page-item'><a class='page-link' href='?page=lista_func&pagina=1'> Pri</a></li> "; 
            echo "<li class='page-item'><a class='page-link' href=\"?page=lista_func&pagina=$anterior\"> Ant</a></li> ";

            echo "<li class='page-item'><a class='page-link' href='?page=lista_func&pagina=".$pagina."'><strong>".$pagina."</strong></a></li> ";

            for($i = $pagina+1; $i < $pagina+$exibir; $i++){
              if($i <= $totalpagina)
              echo "<li class='page-item'><a class='page-link' href='?page=lista_func&pagina=".$i."'> ".$i." </a></li> ";
            }

            echo "<li class='page-item'><a class='page-link' href=\"?page=lista_func&pagina=$posterior\"> Próx</a></li> ";
            echo "<li class='page-item'><a class='page-link' href=\"?page=lista_func&pagina=$totalpagina\"> Últ</a></li></ul>";

          ?>	
        </div>
        <a href="?page=lista_func_inativo" class="btn btn-danger pull-right h2">Inativos</a>  
  </div>
 