<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/main2">
</head>

<body>

  <?php

  $sqlPegaVagas = mysqli_query($con, "select * from vagas order by pav_vaga, setor_vaga, num_vaga;");

  // Pegar os dados da primeira vaga
  $dadosPrimeiraVaga = mysqli_fetch_array($sqlPegaVagas);
  // Pegar o primeiro setor
  $setor = $dadosPrimeiraVaga['setor_vaga'];
  // Pegar o primeiro pavimento
  $pavimento = $dadosPrimeiraVaga['pav_vaga'];
  echo "</br>";
  echo "Pavimento: " . $pavimento;
  echo "</br>";
  echo "</br>";
  echo "Setor: " . $setor;
  echo "</br>";

  while ($dadosVaga = mysqli_fetch_array($sqlPegaVagas)) {


    if ($dadosVaga["pav_vaga"] != $pavimento) {
      $pavimento = $dadosVaga["pav_vaga"];
      echo "</br>";
      echo "</br>";
      echo "Pavimento: " . $pavimento;
      echo "</br>";
    }

    if ($dadosVaga["setor_vaga"] != $setor ) {
      $setor = $dadosVaga["setor_vaga"];
      echo "</br>";
      echo "Setor: " . $setor;
      echo "</br>";
    }
    
    if ($dadosVaga["status_vaga"] == 0) {
      echo "<button type='button' class='btn btn-success btnvaga'>
            <img src='../assets/img/icons/carlayout.png' width='30em'alt=''> " . $dadosVaga["setor_vaga"] . $dadosVaga["num_vaga"] . "
            </button>";
    } else {
      echo "<button type='button' class='btn btn-danger btnvaga'>
                    <img src='../assets/img/icons/carlayout.png' width='30em'alt=''> " . $dadosVaga["setor_vaga"] . $dadosVaga["num_vaga"] . "
                      </button>";
    }
  }

  ?>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>