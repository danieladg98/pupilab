<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pupilab</title>

    <?php
      include_once 'parts/head.php';
    ?>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
           <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="media/logo/logo.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactos.php">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h3 class="text-uppercase oswald_title title_main">
                        <strong>Assistência Técnica, Manutenção e Comércio de Aparelhos
                    <br> e Equipamentos Oftalmológicos</strong>
                    </h3>
                </div>
                <div class="col-lg-8 mx-auto btn-main">
                    <a class="detalhes" href="produtos.php">VER PRODUTOS</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center">
                    <h2 class="section-heading text-white oswald_title">A EMPRESA</h2>
                    <hr class="light my-4">
                    <p class="text-faded main_p mb-4">Empresa fundada em 2006 na área da oftalmologia, optometria e optica. Vocacionada para a assistência técnica, manutenção e comércio de aparelhos e equipamentos. Criada para contribuir para a solução de avarias dos aparelhos/equipamentos com rapidez, eficiência e profissionalismo, reduzindo o transtorno causado pela sua paragem. Corpo técnico com formação atualizada e progressiva, sustentada na experiência adquirida ao longo de mais de duas décadas.</p>

                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading oswald_title">OS NOSSOS SERVIÇOS</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-tools text-primary mb-3 sr-icon-1"></i>
                        <h5 class="mb-3">Assistência técnica e reparação</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-toolbox text-primary mb-3 sr-icon-2"></i>
                        <h5 class="mb-3">Reparação Multimarca</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-hands-helping text-primary mb-3 sr-icon-3"></i>
                        <h5 class="mb-3">Assistência Técnica preventiva e/ou correctiva</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-file-signature text-primary mb-3 sr-icon-4"></i>
                        <h5 class="mb-3">Contrato de manutenção</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-plug text-primary mb-3 sr-icon-4"></i>
                        <h5 class="mb-3">Instalação</h5>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fas fa-4x fa-cogs text-primary mb-3 sr-icon-4"></i>
                        <h5 class="mb-3">Montagem</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
      <?php

  include_once 'parts/footer.php';

  ?>

    <!-- Bootstrap core JavaScript -->
    <script src="main/vendor/jquery/jquery.min.js"></script>
    <script src="main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="main/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="main/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="main/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="main/js/creative.min.js"></script>

</body>

</html>
