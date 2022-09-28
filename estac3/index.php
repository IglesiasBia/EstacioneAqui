<?php
include "base/ch_pages.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="shortcut icon" href="assets/img/logos/logo.ico" type="image/x-icon">
  <title>
    Estacione Aqui
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/main2.css">
</head>

<body class="bg-gray-200">


  <!-- INICIO CONTENT -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://www.fredericksburgpavingpros.com/wp-content/uploads/2019/02/Parking-Lot-Paving-Fredericksburg-VA-2.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-danger shadow-danger border-radius-lg py-3 pe-1">
                  <img src="assets/img/logos/logo.png" height="100px" class="imglogin">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>
                </div>
              </div>
              <div class="card-body">
                <?php
                  include "./base/mensagens.php";
                ?>
                <form action="?page=validacao" method="post" class=" user login100-form validate-form p-b-33 p-t-5">
                  <form role="form" class="text-start">
                    <div class="input-group input-group-outline my-3">
                      <input type="text" class="form-control" name="usuario" placeholder="usuário" id="usuario" required>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="password" class="form-control" name="senha" placeholder="senha" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Entrar</button>
                    </div>
                  </form>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- INÍCIO FOOTER -->
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <?php include "base/footer.php"; ?>
      </footer>
      <!-- FIM FOOTER -->

    </div>
  </main>
  <!-- FIM CONTENT -->

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/main.js"></script>
</body>

</html>