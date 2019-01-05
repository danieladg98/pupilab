<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Pupilab</title>

    <?php
      include_once 'parts/head.php';
    ?>

</head>

<body id="bd_else">

  <?php
    include_once 'parts/navbar.php';
  ?>

  <?php
    session_start();
  ?>


  <div class="row" style="width:100%;">

    <div class="col-1"> </div>

    <div class="col-10 bodycontent">

      <div class="row">

        <h1>Serviços</h1>

        <p>Assistência técnica e reparação</p>
        <p>Reparação Multimarca</p>
        <p>Assistência Técnica preventiva e/ou correctiva</p>
        <p>Contrato de manutenção</p>
        <p>Instalação</p>
        <p>Montagem</p>

        </div>

    </div>

    <div class="col-1"> </div>

  </div>

  <?php

  include_once 'parts/footer.php';

  ?>


</body>

</html>
