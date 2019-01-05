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


            <div class="row" id="products_margin" style="width:100%;">

                <div class="col-1"> </div>

                <div class="col-10 bodycontent">

                    <div class="row">
                        <h2 class="oswald_title">PRODUTOS</h2>
                    </div>

                    <div class="row row_products">
                        
                        <div class="row">

                        <div class="lateral col-2 submenu">
                            <form method="post" action="">
                                <div>
                                    <input id="category1" type="button" data-toggle="collapse" data-target="#sub_menu1" aria-expanded="false" aria-controls="sub_menu1" value="OBSERVAÇÃO">
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
                                    <input id="category2" type="button" data-toggle="collapse" data-target="#sub_menu2" aria-expanded="false" aria-controls="sub_menu2" value="REFRAÇÃO">
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
                                    <input id="category3" type="button" data-toggle="collapse" data-target="#sub_menu3" aria-expanded="false" aria-controls="sub_menu3" value="DIAGNÓSTICO/MEDIÇÃO">
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
                                    <input id="category4" type="button" data-toggle="collapse" data-target="#sub_menu4" aria-expanded="false" aria-controls="sub_menu4" value="OFICINA/ÓPTICAS">
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
                                    <input id="category5" type="button" data-toggle="collapse" data-target="#sub_menu5" aria-expanded="false" aria-controls="sub_menu5" value="LÂMPADAS">
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
                                <input type="submit" name="usados" value="USADOS">
                            </form>
                        </div>

                        <div class="col-10">

                            <?php

            if (isset($_POST['lampadasdefenda'])) {
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
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Outro'");
            }


            if ($_GET['message'] == 'lampadasdefenda') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Lâmpadas de Fenda'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Lâmpadas de Fenda\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'oftalmoscopios') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Oftalmoscopicos'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Oftalmoscópios\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'retinoscopios') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Retinoscopios'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Retinoscópios\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'retinometros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Retinometros'");
                print"<script> $('#sub_menu1').addClass('transition_none'); $('#sub_menu1').collapse(); $('#sub_menu1').removeClass('transition_none'); $('input[value=\'Retinómetros\']').focus().addClass('dontLooseFocus'); category1selected=true; </script>";
            } else if ($_GET['message'] == 'unidadesrefracao') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Unidade de Refracao'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Unidades de Refração\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'autorefractometros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Auto-Refractometros'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Auto-Refractómetros\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'foropteros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Foroptero'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Forópteros\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'projetoresoptotipos') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Projetores Optotipos'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Pojectores Optótipos\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'lcd') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'LCD'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'LCD\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'mesaseletricas') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Mesas Electricas'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Mesas Electricas\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'caixadelentes') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Caixas de Lentes'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Caixa de Lentes\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'armacoesdeprova') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Armacoes de Prova'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Armações de Prova\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'frontofocometrosinterna') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Frontofocometros L/Interna'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Frontofocómetros L/ Interna\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'frontofocometrosdigitais') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Frontofocometros Digitais'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Frontofocómetros Digitais\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'arkeratometros') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Refracao' AND subcategory = 'Arkeratometros'");
                print"<script> $('#sub_menu2').addClass('transition_none'); $('#sub_menu2').collapse(); $('#sub_menu2').removeClass('transition_none'); $('input[value=\'Arkeratómetros\']').focus().addClass('dontLooseFocus'); category2selected=true; </script>";
            } else if ($_GET['message'] == 'oct') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'OCT'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'OCT\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'paquimetro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'Paquimetro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Paquimetro\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'biometro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'Biometro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Biometro\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'topografo') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'Topografo'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Topógrafo\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'campimetroperimetro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'Campimetro/Perimetro'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Campímetro/Perímetro\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'ultrasom') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'Ultrassom'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Ultrassom\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'microscopioespecular') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Diagnostico / Medicao' AND subcategory = 'Microscopio Especular'");
                print"<script> $('#sub_menu3').addClass('transition_none'); $('#sub_menu3').collapse(); $('#sub_menu3').removeClass('transition_none'); $('input[value=\'Microscópio Especular\']').focus().addClass('dontLooseFocus'); category3selected=true; </script>";
            } else if ($_GET['message'] == 'biseladoras') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Oficina / Opticas' AND subcategory = 'Biseladoras'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Biseladoras\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'maquinasacabamentosranhuras') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Oficina / Opticas' AND subcategory = 'Maquinas / Acabamentos / Ranhuras'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Máquinas/Acabamentos/Ranhuras\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'polidoras') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Oficina / Opticas' AND subcategory = 'Polidoras'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Polidoras\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'ultrasons') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Oficina / Opticas' AND subcategory = 'Ultrassons'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Ultrassons\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'ventilete') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Oficina / Opticas' AND subcategory = 'Ventiletes'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Ventilete\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'ferramentas') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Oficina / Opticas' AND subcategory = 'Ferramentas'");
                print"<script> $('#sub_menu4').addClass('transition_none'); $('#sub_menu4').collapse(); $('#sub_menu4').removeClass('transition_none'); $('input[value=\'Ferramentas\']').focus().addClass('dontLooseFocus'); category4selected=true; </script>";
            } else if ($_GET['message'] == 'oftalmoscopio') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Lampadas' AND subcategory = 'Oftalmoscopio'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Oftalmoscópio\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'retinoscopio') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Lampadas' AND subcategory = 'Retinoscopio'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Retinoscópio\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'frontofocometro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Lampadas' AND subcategory = 'Frontofocometro'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Frontofocómetro\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'lampadadefenda') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Lampadas' AND subcategory = 'Lampadas de Fenda'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Lâmpada de Fenda\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else if ($_GET['message'] == 'projetor') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, description, category, subcategory, image, pdf, full_article from produtos where active = 1 AND category = 'Lampadas' AND subcategory = 'OProjectores'");
                print"<script> $('#sub_menu5').addClass('transition_none'); $('#sub_menu5').collapse(); $('#sub_menu5').removeClass('transition_none'); $('input[value=\'Projector\']').focus().addClass('dontLooseFocus'); category5selected=true; </script>";
            } else {
                header('Location: produtos.php?message=lampadasdefenda');
            }


            /*$nrows = (mysqli_num_rows($resultados) / 3);
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
            } */
            ?>


                                <!-- COMEÇA AQUI -->

                                <div class="row">
                                    <div class="col-1"></div>

                                    <div class="col-5 productmedia">
                                        <img src="media/images/produtos/arkeratometros.jpg" alt="Product Preview">
                                    </div>

                                    <div class="col-6 productinfo">
                                        <h3 class="oswald_title"> TÍTULO </h3>
                                            <h5> Sub-Título </h5>
                                            <p class="products_text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                            <a href="pdfs/arkeratometros.pdf" class="button" download><i class="fa fa-download"></i> Download PDF</a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-1"> </div>

            </div>
     <?php
    include_once 'parts/footer.php';
  ?>


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
