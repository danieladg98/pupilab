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

  <div class="row">

    <div class="col-1"> </div>

    <div class="col-10">

      <div class="row">
        <div class="container-fluid main_text animated fadeInUp slower">
            <center>
                <p class="white">Assistência Técnica, Manutenção e Comércio de Aparelhos
                    <br> e Equipamentos Oftalmológicos</p>
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
