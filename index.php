<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Pupilab</title>

    <?php
      include_once 'parts/head.php';
    ?>

</head>

<body id="bd_main">

  <?php
    session_start();
  ?>

  <?php
    include_once 'parts/navbar_main.php';
  ?>

  <div class="row align-items-center">

    <div class="col-1"> </div>

    <div class="col-10">

      <div class="row align-items-center mx-auto text-center">
        <div class="container-fluid  main_text animated fadeInUp slower">
            <center>
                <p class="white">Assistência Técnica, <br class="br_mobile"> Manutenção e Comércio <br class="br_mobile"> de Aparelhos
                    <br class="br_desktop">e Equipamentos <br class="br_mobile">Oftalmológicos</p>
            </center>
        </div>
          <div class="container-fluid botao_main animated fadeInUp slower">
            <center>
                <a href="produtos.php" class="detalhes_white">VER PRODUTOS</a>
            </center>
        </div>
      </div>
    </div>

    <div class="col-1"> </div>

  </div>

</body>

</html>
