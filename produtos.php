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

        <div class="lateral col-2 submenu">
            <h2 class="">PRODUTOS</h2>
            <br>
            <form method="post" action="">
              <input type="submit" name="todos" value="Ver Todos"><br>
              <div >
                <input id="category1" type="button" data-toggle="collapse" data-target="#sub_menu1" aria-expanded="false" aria-controls="sub_menu1" value="Observação">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu1">
                  <div class="col-1 in">
                      <input type="submit" name="lampadasdefenda" value="Lâmpadas de Fenda">
                      <input type="submit" name="oftalmoscopios" value="Oftalmoscópios">
                      <input type="submit" name="retinoscopios" value="Retinoscópios">
                      <input type="submit" name="retinometros" value="Retinómetros">
                  </div>
              </div>

              <div>
                <input id="category2" type="button" data-toggle="collapse" data-target="#sub_menu2" aria-expanded="false" aria-controls="sub_menu2" value="Refração">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu2">
                  <div class="col-1 in">
                      <input type="submit" name="unidadesrefracao" value="Unidades de Refração">
                      <input type="submit" name="autorefractometros" value="Auto-Refractómetros">
                      <input type="submit" name="foropteros" value="Forópteros">
                      <input type="submit" name="projetoresoptotipos" value="Pojectores Optótipos">
                      <input type="submit" name="lcd" value="LCD">
                      <input type="submit" name="mesaseletricas" value="Mesas Electricas">
                      <input type="submit" name="caixadelentes" value="Caixa de Lentes">
                      <input type="submit" name="armacoesdeprova" value="Armações de Prova">
                      <input type="submit" name="frontofocometrosinterna" value="Frontofocómetros L/ Interna">
                      <input type="submit" name="frontofocometrosdigitais" value="Frontofocómetros Digitais">
                      <input type="submit" name="arkeratometros" value="Arkeratómetros">
                  </div>
              </div>

              <div>
                <input id="category3" type="button" data-toggle="collapse" data-target="#sub_menu3" aria-expanded="false" aria-controls="sub_menu3" value="Diagnóstico/Medição">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu3">
                  <div class="col-1 in">
                      <input type="submit" name="oct" value="OCT">
                      <input type="submit" name="paquimetro" value="Paquimetro">
                      <input type="submit" name="biometro" value="Biometro">
                      <input type="submit" name="topografo" value="Topógrafo">
                      <input type="submit" name="campimetroperimetro" value="Campímetro/Perímetro">
                      <input type="submit" name="ultrasom" value="Ultrassom">
                      <input type="submit" name="microscopioespecular" value="Microscópio Especular">
                  </div>
              </div>

              <div>
                <input id="category4" type="button" data-toggle="collapse" data-target="#sub_menu4" aria-expanded="false" aria-controls="sub_menu4" value="Oficina/Ópticas">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu4">
                  <div class="col-1 in">
                      <input type="submit" name="biseladoras" value="Biseladoras">
                      <input type="submit" name="maquinasacabamentosranhuras" value="Máquinas/Acabamentos/Ranhuras">
                      <input type="submit" name="polidoras" value="Polidoras">
                      <input type="submit" name="ultrasons" value="Ultrassons">
                      <input type="submit" name="ventilete" value="Ventilete">
                      <input type="submit" name="ferramentas" value="Ferramentas">
                  </div>
              </div>

              <div>
                <input id="category5" type="button" data-toggle="collapse" data-target="#sub_menu5" aria-expanded="false" aria-controls="sub_menu5" value="Lâmpadas">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu5">
                  <div class="col-1 in">
                      <input type="submit" name="oftalmoscopio" value="Oftalmoscópio">
                      <input type="submit" name="retinoscopio" value="Retinoscópio">
                      <input type="submit" name="frontofocometro" value="Frontofocómetro">
                      <input type="submit" name="lampadadefenda" value="Lâmpada de Fenda">
                      <input type="submit" name="projetor" value="Projector">
                  </div>
              </div>
            </form>
        </div>

        <div class="col-10">

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $bd = "pupilab";
            $conn = mysqli_connect($servername, $username, $password, $bd);
            if (!$conn) {
                die("Erro na ligacao: " . mysqli_connect_error()); //Mensagem de erro caso nao haja ligação à base de dados
                //Caso haja ligação executa o código abaixo!vv
            }

            if(isset($_POST['todos'])){
                header('Location: produtos.php?message=all');
            }else if (isset($_POST['lampadasdefenda'])) {
                header('Location: produtos.php?message=lampadasdefenda');
            } else if (isset($_POST['oftalmoscopios'])) {
                header('Location: produtos.php?message=oftalmoscopios');
            } else if (isset($_POST['retinoscopios'])) {
                header('Location: produtos.php?message=retinoscopios');
            } else if (isset($_POST['retinometros'])) {
                header('Location: produtos.php?message=retinometros');
            } else if (isset($_POST['unidadesrefracao'])) {
                header('Location: produtos.php?message=unidadesrefracao');
            } else if (isset($_POST['autorefractometros'])) {
                header('Location: produtos.php?message=autorefractometros');
            } else if (isset($_POST['foropteros'])) {
                header('Location: produtos.php?message=foropteros');
            } else if (isset($_POST['projetoresoptotipos'])) {
                header('Location: produtos.php?message=projetoresoptotipos');
            } else if (isset($_POST['lcd'])) {
                header('Location: produtos.php?message=lcd');
            } else if (isset($_POST['mesaseletricas'])) {
                header('Location: produtos.php?message=mesaseletricas');
            } else if (isset($_POST['caixadelentes'])) {
                header('Location: produtos.php?message=caixadelentes');
            } else if (isset($_POST['armacoesdeprova'])) {
                header('Location: produtos.php?message=armacoesdeprova');
            } else if (isset($_POST['frontofocometrosinterna'])) {
                header('Location: produtos.php?message=frontofocometrosinterna');
            } else if (isset($_POST['frontofocometrosdigitais'])) {
                header('Location: produtos.php?message=frontofocometrosdigitais');
            } else if (isset($_POST['arkeratometros'])) {
                header('Location: produtos.php?message=arkeratometros');
            } else if (isset($_POST['oct'])) {
                header('Location: produtos.php?message=oct');
            } else if (isset($_POST['paquimetro'])) {
                header('Location: produtos.php?message=paquimetro');
            } else if (isset($_POST['biometro'])) {
                header('Location: produtos.php?message=biometro');
            } else if (isset($_POST['topografo'])) {
                header('Location: produtos.php?message=topografo');
            } else if (isset($_POST['campimetroperimetro'])) {
                header('Location: produtos.php?message=campimetroperimetro');
            } else if (isset($_POST['ultrasom'])) {
                header('Location: produtos.php?message=ultrasom');
            } else if (isset($_POST['microscopioespecular'])) {
                header('Location: produtos.php?message=microscopioespecular');
            } else if (isset($_POST['biseladoras'])) {
                header('Location: produtos.php?message=biseladoras');
            } else if (isset($_POST['maquinasacabamentosranhuras'])) {
                header('Location: produtos.php?message=maquinasacabamentosranhuras');
            } else if (isset($_POST['polidoras'])) {
                header('Location: produtos.php?message=polidoras');
            } else if (isset($_POST['ultrasons'])) {
                header('Location: produtos.php?message=ultrasons');
            } else if (isset($_POST['ventilete'])) {
                header('Location: produtos.php?message=ventilete');
            } else if (isset($_POST['ferramentas'])) {
                header('Location: produtos.php?message=ferramentas');
            } else if (isset($_POST['oftalmoscopio'])) {
                header('Location: produtos.php?message=oftalmoscopio');
            } else if (isset($_POST['retinoscopio'])) {
                header('Location: produtos.php?message=retinoscopio');
            } else if (isset($_POST['frontofocometro'])) {
                header('Location: produtos.php?message=frontofocometro');
            } else if (isset($_POST['lampadadefenda'])) {
                header('Location: produtos.php?message=lampadadefenda');
            } else if (isset($_POST['projetor'])) {
                header('Location: produtos.php?message=projetor');
            } else {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1");
            }

            if ($_GET['message'] == 'all') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1");
            } else if ($_GET['message'] == 'lampadasdefenda') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Lâmpadas de Fenda\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'oftalmoscopios') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Oftalmoscópios\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'retinoscopios') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Retinoscópios\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'retinometros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Retinómetros\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'unidadesrefracao') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Unidades de Refração\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'autorefractometros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Auto-Refractómetros\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'foropteros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Forópteros\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'projetoresoptotipos') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Pojectores Optótipos\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'lcd') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'LCD\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'mesaseletricas') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Mesas Electricas\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'caixadelentes') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Caixa de Lentes\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'armacoesdeprova') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Armações de Prova\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'frontofocometrosinterna') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Frontofocómetros L/ Interna\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'frontofocometrosdigitais') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Frontofocómetros Digitais\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'arkeratometros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Arkeratómetros\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'oct') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'OCT\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'paquimetro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Paquimetro\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'biometro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Biometro\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'topografo') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Topógrafo\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'campimetroperimetro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Campímetro/Perímetro\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'ultrasom') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Ultrassom\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'microscopioespecular') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Microscópio Especular\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'biseladoras') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Biseladoras\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'maquinasacabamentosranhuras') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Máquinas/Acabamentos/Ranhuras\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'polidoras') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Polidoras\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'ultrasons') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Ultrassons\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'ventilete') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Ventilete\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'ferramentas') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Ferramentas\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'oftalmoscopio') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Oftalmoscópio\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'retinoscopio') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Retinoscópio\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'frontofocometro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Frontofocómetro\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'lampadadefenda') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Lâmpada de Fenda\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'projetor') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Projector\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else {
                header('Location: produtos.php?message=all');
            }


            $nrows = ceil(mysqli_num_rows($resultados) / 3);
            for ($i = 0; $i < $nrows; $i++) {
                print "<div class='row'>";
                for ($j = 0; $j < 3; $j++) {
                    while ($linha = mysqli_fetch_assoc($resultados)) {

                        print "<a class='mx-2' href='vinyl.php?id=" . $linha['id'] . "'><div class='card border-0' style='width: 20rem;'>
                            <img class='card-img-top' src='" . $linha['image'] . "' alt='Card image cap'>
                            <div class='card-block'>
                                <h4 class='card-title'>" . $linha['title'] . "</h4>
                                <p class='card-text'>" . $linha['subtitle'] . "</p>
                            </div>
                        </div></a>
                      ";
                    }

                    $nrows = ceil(mysqli_num_rows($resultados) / 3);
                    for ($i = 0; $i < $nrows; $i++) {
                        print "<div class='row'>";
                        for ($j = 0; $j < 3; $j++) {
                            while ($linha = mysqli_fetch_assoc($resultados)) {
                                print "<a class='mx-left' href='vinyl.php?id=" . $linha['id'] . "'><div class='card border-0' style='width: 20rem;'>
                            <img class='card-img-top' src='" . $linha['image'] . "' alt='Card image cap'>
                            <div class='card-block'>
                                <h4 class='card-title'>" . $linha['title'] . "</h4>
                                <p class='card-text'>" . $linha['subtitle'] . "</p>
                            </div>
                        </div></a>
                      ";
                            }


                            print "</div>";
                        }
                    }
                }
            }



            ?>

          </div>

        </div>

    </div>

    <div class="col-1"> </div>

  </div>


</body>

</html>
<?php

/*

CREATE TABLE produtos (
	id		 BIGINT,
	title	 VARCHAR(128),
	subtitle	 VARCHAR(128),
	description VARCHAR(1024),
	category	 VARCHAR(128),
	subcategory VARCHAR(128),
	image	 VARCHAR(512),
	pdf	 VARCHAR(512),
	active	 BOOLEAN DEFAULT 0,
	PRIMARY KEY(id)
);

CREATE TABLE admins (
	id	 BIGINT,
	name	 VARCHAR(254) NOT NULL,
	email	 VARCHAR(254) UNIQUE NOT NULL,
	password VARCHAR(128) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE inventory (
	id		 BIGINT,
	admins_id	 BIGINT NOT NULL,
	produtos_id BIGINT NOT NULL,
	PRIMARY KEY(id)
);

ALTER TABLE inventory ADD CONSTRAINT inventory_fk1 FOREIGN KEY (admins_id) REFERENCES admins(id);
ALTER TABLE inventory ADD CONSTRAINT inventory_fk2 FOREIGN KEY (produtos_id) REFERENCES produtos(id);

*/

?>
