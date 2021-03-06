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
       <iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=41.964558, -8.713621&amp;q=+(Auto%20RPM)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe>
                                    </div>
                                    <div class="col-md-5 contacts_padding_left">
                                        <h2 class="oswald_title title_margin text-uppercase mt-3">CONTACTE-NOS</h2>
                                        <form action="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mt-2" placeholder="Nome" name="nome" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mt-2" placeholder="Apelido" name="apelido" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control mt-2" placeholder="Email" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mt-2" placeholder="Telefone" name="telefone" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensagem" name="mensagem" rows="3" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button class="detalhes" type="submit">ENVIAR</button>
                                                </div>
                                            </div>
                                        </form>

                                        <?php
                                          include 'parts/emailsender.php';
                                        ?>
                                        <div class="list_contacts">
                                            <i class="fas fa-phone mt-3"></i> <a href="tel:+">+351 251 798 632</a><br>
                                            <i class="fa fa-envelope mt-3"></i> <a href="">geral@pupilab.com</a><br>
                                            <i class="fa fa-envelope mt-3"></i> <a href="">tecnico@pupilab.com</a><br>
                                            <i class="fa fa-envelope mt-3"></i> <a href="">comercial@pupilab.com</a><br>
                                            <i class="fas fa-globe mt-3"></i> Rua da Valinha, Nº 6 Loja - Reboreda <br>
                                            <i class="fas fa-globe mt-3" id="icon_white"></i> 4920-110 Vila Nova de Cerveira <br>
                                            <i class="fas fa-globe mt-3" id="icon_white"></i> Portugal<br>

                                            <div class="my-4">
                                                <a href="https://www.facebook.com/Pupilab-817111421964957/" target="_blank"><i class="fab fa-facebook fa-3x pr-4"></i></a>
                                                <a href="https://www.linkedin.com/in/pupilab-lda-519573a9/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
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
