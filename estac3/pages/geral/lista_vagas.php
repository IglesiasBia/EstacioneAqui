
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

        $sqlPegaVagas = mysqli_query($con, "select * from vagas;");

        while($dadosPegaVagas = mysqli_fetch_array($sqlPegaVagas)){
            if($dadosPegaVagas["status_vaga"] == 0){
                echo "<button type='button' class='btn btn-success btnvaga'>
                <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
                </button>";
            }else{
                echo "<button type='button' class='btn btn-danger btnvaga'>
                <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
                </button>";
            }
            
        }


        ?>
    
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>