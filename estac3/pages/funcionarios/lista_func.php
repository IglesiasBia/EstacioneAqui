<?php
  	$nivel_necessario = 2;
    include "../base/testa_nivel.php";
    //include "../base/con.php"; 
    //include "../base/con_escola.php";
    // include "../base/ch_pages.php";
?>

<!-- INICIO CONTENT -->
<div class="container-fluid py-4 ">
    <div class="row">
      <div class="col-md-1" >
        <!-- Chama o Formulário para adicionar funcionário -->
         <a href="?page=fadd_func" class="btn bg-gradient-danger btn-sm text, buttonfunc">Novo Funcionário</a> 
      </div>
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-danger shadow-danger border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Funcionários</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0, table">
              <?php
  
                $quantidade = 5;

                $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
                $inicio = ($quantidade * $pagina) - $quantidade;

                $data_all = mysqli_query($con, "select * from usuarios order by id asc limit $inicio, $quantidade;") or die(mysqli_error($con));
                // $data_all = mysqli_query($con, "select * from usuarios order by id;") or die(mysqli_error($con));
                echo "<table class='table align-items-center mb-0'>";
                echo "<thead><tr>";
                echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>ID</th>";
                echo "<th class='text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2'>Nome do funcionário</th>";
                echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>E-mai</th>";
                echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Nível</th>";
                echo "<th class='text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7'>Status</th>";
                echo "<th class='text-secondary opacity-7'></th>";
                echo "</tr></thead><tbody>";
               
                while($info = mysqli_fetch_array($data_all)){ 
                  if($info["ativo"] == 1){
                  echo "<tr>";
                  echo "<td>".$info['id']."</td>";
                  echo "<td>".$info['nome']."</td>";
                  echo "<td>".$info['email']."</td>";
                  echo "<td>".$info['nivel']."</td>";
                  if($info["nivel"] == 1){
                    echo "<td>Funcionário Usuário</td>";
                  }else if($info["nivel"] == 2){
                    echo "<td>Administrador</td>";
                  }else if($info["nivel"] == 3){
                      echo "<td>Funcionário não-usuário</td>";
                  }
                  if($info['ativo'] == 1){
                    echo "<td>Ativo</td>";
                  }else if($info['ativo'] == 0){
                    echo "<td>Inativo</td>";
                  }
                  echo "<td><div class='btn-group btn-group-xs'>";
                  echo "<a class='btn btn-info btn-xs' href=?page=view_func&id=".$info['id']."> Detalhar </a>";
                  echo "<a class='btn btn-warning btn-xs' href=?page=form_att_func&id=".$info['id']."> Editar </a>";
                  if($info['ativo'] == 1){
                    echo "<a class='btn btn-danger btn-xs'  href=?page=att_status_func&id=".$info['id']."> Desativar </a>";
                  }else if($info['ativo'] == 0){
                    echo "<a class='btn btn-success btn-xs'  href=?page=att_status_func&id=".$info['id'].">&nbsp;&nbsp;&nbsp;Ativar&nbsp;&nbsp;</a></div></td>";
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
            $sqlTotal 		= "select id from usuarios;";
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
  </div><!--bottom-->
 