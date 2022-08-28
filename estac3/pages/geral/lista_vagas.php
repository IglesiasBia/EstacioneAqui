
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

        $sqlPegaVagas = mysqli_query($con, "select * from vagas order by setor_vaga, pav_vaga, num_vaga;");

//         $resultadoPegaVagas = mysqli_fetch_array($sqlPegaVagas);
// $arraySetores = array();
//         while($resultadoPegaVagas = mysqli_fetch_array($sqlPegaVagas)){
//           array_push($arraySetores, "oi");
//         }
//         echo $arraySetores;

        $numVaga = 1;
        while($dadosPegaVagas = mysqli_fetch_array($sqlPegaVagas)){
          // echo "oi";
          
          // while($dadosPegaVagas["num_vaga"]){
          // echo $dadosPegaVagas["num_vaga"];
          //   $numVaga++;
          // }

          // foreach($dadosPegaVagas["num_vaga"] as $numVaga){
          //   echo $numVaga;
          //   $numVaga++;
          // }
          // if($dadosPegaVagas["pav_vaga"] == "A"){

          // }
          // if($dadosPegaVagas["pav_vaga"] == $pavimento){

          // }
          // for($numVaga == $dadosPegaVagas["num_vaga"]; $numVaga != ""; $numVaga++){
          //   echo $dadosPegaVagas["num_vaga"];
          // }
          // $dadosPegaVagas["num_vaga"] == $numVaga;
          // while($dadosPegaVagas["num_vaga"] && $dadosPegaVagas["setor_vaga"] == "A"){
          //   // echo $dadosPegaVagas["num_vaga"];
          //   echo $numVaga;
          //   $numVaga++;
          // }
          // while($dadosPegaVagas = mysqli_fetch_array($sqlPegaVagas)){
          //   if($dadosPegaVagas["setor_vaga"] == "A"){

          //     echo $dadosPegaVagas["num_vaga"];
          //   }
          // }
          // if($dadosPegaVagas["num_vaga"] == $numVaga && $dadosPegaVagas["setor_vaga"] == "A"){
          //   echo $dadosPegaVagas["num_vaga"];
          // }
          // echo $dadosPegaVagas["num_vaga"];
          
          if($dadosPegaVagas["setor_vaga"] == "A" && $dadosPegaVagas["id_vaga"] != 0){
            // echo $dadosPegaVagas["num_vaga"];
            if($dadosPegaVagas["status_vaga"] == 0){
              // echo $dadosPegaVagas["num_vaga"] . "<br>";
              echo "<button type='button' class='btn btn-success btnvaga'>
              <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
              </button>";
              $numVaga++;
            }else{
              // echo $dadosPegaVagas["num_vaga"];
                echo "<button type='button' class='btn btn-danger btnvaga'>
                <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
                </button>";
                $numVaga++;
            }
          }

                    
          if($dadosPegaVagas["setor_vaga"] == "B" && $dadosPegaVagas["id_vaga"] != 0){
            // echo $dadosPegaVagas["num_vaga"];
            if($dadosPegaVagas["status_vaga"] == 0){
              // echo $dadosPegaVagas["num_vaga"] . "<br>";
              echo "<button type='button' class='btn btn-success btnvaga'>
              <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
              </button>";
              $numVaga++;
            }else{
              // echo $dadosPegaVagas["num_vaga"];
                echo "<button type='button' class='btn btn-danger btnvaga'>
                <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
                </button>";
                $numVaga++;
            }
          }
          // elseif($dadosPegaVagas["setor_vaga"] == "B"){
          //   echo "<br>";
          //   if($dadosPegaVagas["status_vaga"] == 0){
          //     // echo $dadosPegaVagas["num_vaga"] . "<br>";
          //     echo "<button type='button' class='btn btn-success btnvaga'>
          //     <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
          //     </button>";
          //     $numVaga++;
          //   }else{
          //     // echo $dadosPegaVagas["num_vaga"];
          //       echo "<button type='button' class='btn btn-danger btnvaga'>
          //       <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
          //       </button>";
          //       $numVaga++;
          //   }
          // }
          // echo $numVaga;
          //elseif($dadosPegaVagas["setor_vaga"] == "B"){
          //   echo "<br>";
          //   if($dadosPegaVagas["status_vaga"] == 0){
          //     echo "<button type='button' class='btn btn-success btnvaga'>
          //     <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
          //     </button>";
          //   }else{
          //       echo "<button type='button' class='btn btn-danger btnvaga'>
          //       <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
          //       </button>";
          //   }
          // }
            
        }

        // while($dadosPegaVagas = mysqli_fetch_array($sqlPegaVagas)){

        //   if($dadosPegaVagas["setor_vaga"] == "B" && $dadosPegaVagas["id_vaga"] != 0){
        //     // echo $dadosPegaVagas["num_vaga"];
        //     if($dadosPegaVagas["status_vaga"] == 0){
        //       // echo $dadosPegaVagas["num_vaga"] . "<br>";
        //       echo "<button type='button' class='btn btn-success btnvaga'>
        //       <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
        //       </button>";
        //       $numVaga++;
        //     }else{
        //       // echo $dadosPegaVagas["num_vaga"];
        //         echo "<button type='button' class='btn btn-danger btnvaga'>
        //         <img src='../assets/img/icons/carlayout.png' width='30em'alt=''>
        //         </button>";
        //         $numVaga++;
        //     }
        //   }

            
        // }


        ?>
    
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>