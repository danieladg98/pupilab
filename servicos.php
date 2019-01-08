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


           <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading oswald_title">OS NOSSOS SERVIÇOS</h2>
                    <hr class="hr_red my-4">
                    <p class="service-description">Para além do comércio de aparelhos e equipamentos oftalmológicos,<br> a Pupilab oferece também diversos serviços.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row services_row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-2x fa-tools mb-3 sr-icon-1 animated fadeInUp" id="icon_color"></i>
                        <p class="mb-3">Assistência técnica e reparação</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-2x fa-toolbox mb-3 sr-icon-2 animated fadeInUp" id="icon_color"></i>
                        <p class="mb-3">Reparação Multimarca</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-2x fa-hands-helping mb-3 sr-icon-3 animated fadeInUp" id="icon_color"></i>
                        <p class="mb-3">Assistência Técnica preventiva e/ou correctiva</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-2x fa-file-signature mb-3 sr-icon-4 animated fadeInUp" id="icon_color"></i>
                        <p class="mb-3">Contrato de manutenção</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-2x fa-plug mb-3 sr-icon-4 animated fadeInUp" id="icon_color"></i>
                        <p class="mb-3">Instalação</p>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-2x fa-cogs mb-3 sr-icon-4 animated fadeInUp" id="icon_color"></i>
                        <p class="mb-3">Montagem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
            <?php

  include_once 'parts/footer.php';

  ?>


</body>

</html>
