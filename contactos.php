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
    $current = 'contactos';
    include_once 'parts/navbar.php';
  ?>

        <?php
    session_start();
  ?>


            <div class="row" id="website_content">

                <div class="col-1"> </div>

                <div class="col-10 bodycontent">

                    <div class="row" id="products_margin">

                        <div class="row" id="contatti">
                            <div class="container">

                                <div class="row" style="height:550px;">
                                    <div class="col-md-6 maps">
                                        <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Reboreda%2C%20Vila%20Nova%20de%20Cerveira%2C%20Portugal+(Pupilab)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Plot a route map</a></iframe>
                                    </div>
                                    <div class="col-md-5 contacts_padding_left">
                                        <h2 class="oswald_title title_margin text-uppercase mt-3">CONTACTE-NOS</h2>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mt-2" placeholder="Nome" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mt-2" placeholder="Apelido" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control mt-2" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mt-2" placeholder="Telefone" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensagem" rows="3" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="detalhes" type="submit">ENVIAR</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="list_contacts">
                                            <i class="fas fa-phone mt-3"></i> <a href="tel:+">+351 251 798 632</a><br>
                                            <i class="fa fa-envelope mt-3"></i> <a href="">geral@pupilab.com</a><br>
                                            <i class="fa fa-envelope mt-3"></i> <a href="">tecnico@pupilab.com</a><br>
                                            <i class="fa fa-envelope mt-3"></i> <a href="">comercial@pupilab.com</a><br>
                                            <i class="fas fa-globe mt-3"></i> Rua da Valinha, Nº 6 Loja - Reboreda <br>
                                            <i class="fas fa-globe mt-3" id="icon_white"></i> 4920-110 Vila Nova de Cerveira <br>
                                            <i class="fas fa-globe mt-3" id="icon_white"></i> Portugal<br>

                                            <div class="my-4">
                                                <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
                                                <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
                                            </div>
                                        </div>
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
