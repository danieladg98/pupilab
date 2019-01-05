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


 ?>
