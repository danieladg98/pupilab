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

                    <div class="row flex-container-services" id="services_margin">

                        <h2 class="separation-title oswald_title"> OS NOSSOS SERVIÇOS </h2>
                        <h5 class="service-description">Para além do comércio de aparelhos e equipamentos oftalmológicos,<br> a Pupilab oferece também diversos serviços.</h5>

                        <!-- start of Web dev container -->
                        <div class="flex-item-services d-flex justify-content-center">
                            <figure class=services-icon>
                                <i style="color: #DF4743" class="fa fa-tools" aria-hidden="true"></i>
                            </figure>
                            <div class="title-services"> Assistência técnica e reparação </div>

                        </div>

                        <div class="flex-item-services d-flex justify-content-center">
                            <figure class=services-icon>
                                <i style="color: #DF4743" class="fa fa-toolbox" aria-hidden="true"></i>
                            </figure>
                            <div class="title-services"> Reparação Multimarca </div>
                        </div>

                        <div class="flex-item-services d-flex justify-content-center">
                            <figure class=services-icon>
                                <i style="color: #DF4743" class="fa fa-hands-helping" aria-hidden="true"></i>
                            </figure>
                            <div class="title-services text-center"> Assistência Técnica preventiva e/ou correctiva </div>
                        </div>


                        <div class="flex-item-services d-flex justify-content-center">
                            <figure class=services-icon>
                                <i style="color: #DF4743" class="fa fa-file-signature" aria-hidden="true"></i>
                            </figure>
                            <div class="title-services"> Contrato de manutenção</div>
                        </div>

                        <div class="flex-item-services d-flex justify-content-center">
                            <figure class=services-icon>
                                <i style="color: #DF4743" class="fa fa-plug" aria-hidden="true"></i>
                            </figure>
                            <div class="title-services"> Instalação</div>
                        </div>

                        <div class="flex-item-services d-flex justify-content-center">
                            <figure class=services-icon>
                                <i style="color: #DF4743" class="fa fa-cogs" aria-hidden="true"></i>
                            </figure>
                            <div class="title-services">Montagem</div>
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
