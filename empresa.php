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
    $current = 'empresa';
    include_once 'parts/navbar.php';
  ?>

        <?php
    session_start();
  ?>


          <section class="" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center">
                    <h2 class="section-heading oswald_title">A EMPRESA</h2>
                    <hr class="hr_red my-4">
                    <p class="main_p mb-4"><br class="br_mobile">Empresa fundada em 2006 na área da oftalmologia, optometria e optica. Vocacionada para a assistência técnica, manutenção e comércio de aparelhos e equipamentos. <br class="br_mobile"><br class="br_mobile"> Criada para contribuir para a solução de avarias dos aparelhos/equipamentos com rapidez, eficiência e profissionalismo, reduzindo o transtorno causado pela sua paragem. <br class="br_mobile"><br class="br_mobile">Corpo técnico com formação atualizada e progressiva, sustentada na experiência adquirida ao longo de mais de duas décadas. <br class="br_mobile"><br class="br_mobile">Na área comercial cooperamos estreitamente com marcas/empresas formando parcerias saudáveis para soluções adequadas exigidas às necessidades dos clientes.</p>

                </div>
            </div>
        </div>
    </section>

    

            <?php

  include_once 'parts/footer.php';

  ?>


</body>

</html>
