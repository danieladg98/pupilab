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

    <div class="container-fluid main_text animated fadeInUp slower">
        <center>
            <p class="white">Assistência Técnica, Manutenção e Comércio de Aparelhos
                <br> e Equipamentos Oftalmológicos</p>
        </center>
    </div>
      <div class="container-fluid botao_main animated fadeInUp slower">
        <center>
            <a id="ver_produtos" class="white borderwhite">VER PRODUTOS</a>
            <a id="seta" class"borderwhite">  <i class="fas fa-caret-right fa-lg white"></i> </a>
        </center>
    </div>


</body>

</html>
