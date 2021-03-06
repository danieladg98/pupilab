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
    $current = 'produtos';
    include_once 'parts/navbar.php';
  ?>

        <?php
    session_start();
  ?>


            <div class="row" id="products_margin" style="width:100%;">

                <div class="col-1"> </div>

                <div class="col-10 bodycontent">

                    <div class="row">

                        <h4 class="oswald_title" id="submenutitle2">PRODUTOS</h4>
                        <button id="submenuToggler"> <i class="fas plus_margin fa-lg fa-plus mb-3 sr-icon-2" id="icon_color"></i> </button>

                        <div class="lateral col-2 submenu ">
                            <h4 class="oswald_title" id="submenutitle1">PRODUTOS</h4>
                            <br>
                            <form method="post" action="" id="submenuform">
                                <div>
                                    <input id="category1" type="button" data-toggle="collapse" data-target="#sub_menu1" aria-expanded="false" aria-controls="sub_menu1" value="Observação">
                                </div>
                                <div class="collapse collapsesubmenu" id="sub_menu1">
                                    <div class="col-1 in">
                                        <input type="submit" name="oftalmoscopios" value="Oftalmoscópios">
                                        <input type="submit" name="retinoscopios" value="Retinoscópios">
                                        <input type="submit" name="retinometros" value="Retinómetros">
                                          <input type="submit" name="lampadasdefenda" value="Lâmpadas de Fenda">
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
                                        <input id="categorybreak" class="duohover1" type="submit" name="frontofocometrosinterna" value="Frontofocómetros ">
                                        <input type="submit" class="duohover1" name="frontofocometrosinterna" value="L/ Interna">
                                        <input id="categorybreak" class="duohover2" type="submit" name="frontofocometrosdigitais" value="Frontofocómetros">
                                        <input type="submit" class="duohover2" name="frontofocometrosdigitais" value="Digitais">
                                        <input type="submit" name="arkeratometros" value="AR Keratómetros">
                                    </div>
                                </div>

                                <div>
                                    <input id="category3" type="button" data-toggle="collapse" data-target="#sub_menu3" aria-expanded="false" aria-controls="sub_menu3" value="Diagnóstico/Medição">
                                </div>
                                <div class="collapse collapsesubmenu" id="sub_menu3">
                                    <div class="col-1 in">
                                        <input type="submit" name="oct" value="OCT - p/ Seg. Anterior">
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
                                        <input id="categorybreak" class="duohover3" type="submit" name="maquinasacabamentosranhuras" value="Máquinas/">
                                        <input type="submit" class="duohover3" name="maquinasacabamentosranhuras" value="Acabamentos/Ranhuras">
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
                                <input type="submit" name="usados" value="Usados">
                            </form>
                        </div>

                        <div class="col-xl-10 col-lg-10 pl-4">

          <?php

            include_once 'parts/productsfetch.php';

            $nrows = mysqli_num_rows($resultados);

            $iteration_counter = 0;

            while ($linha = mysqli_fetch_assoc($resultados)) {

              $iteration_counter++;

              if($linha['full_article'] == 0) {

                echo "

                <div class='row row_orcamento'>
                    <div class='col-xl-8 col-lg-8 productinfo'>
                      <h4 class='oswald_title'> ". $linha['title'] ." </h4>
                      <h5 id='orcamento'>Sob Consulta</h2>
                      <form action=''>
                          <div class='row'>
                              <div class='col-lg-6'>
                                  <div class='form-group'>
                                      <input type='text' class='form-control mt-2' placeholder='Nome' required>
                                  </div>
                              </div>
                              <div class='col-lg-6'>
                                  <div class='form-group'>
                                      <input type='text' class='form-control mt-2' placeholder='Apelido' required>
                                  </div>
                              </div>
                              <div class='col-lg-6'>
                                  <div class='form-group'>
                                      <input type='email' class='form-control mt-2' placeholder='Email' required>
                                  </div>
                              </div>
                              <div class='col-lg-6'>
                                  <div class='form-group'>
                                      <input type='text' class='form-control mt-2' placeholder='Telefone' required>
                                  </div>
                              </div>
                              <div class='col-12'>
                                  <div class='form-group'>
                                      <textarea class='form-control' id='exampleFormControlTextarea1' placeholder='Mensagem' rows='3' required></textarea>
                                  </div>
                              </div>

                              <div class='col-12'>
                                  <button class='detalhes' type='submit'>ENVIAR</button>
                              </div>
                          </div>
                      </form>
                    </div>

                </div>
                ";

                if($iteration_counter != $nrows){
                  echo"
                  <br>
                  <hr>";
                }

              } else {

                echo "

                <div class='row row_products'>

                    <div class='col-xl-5 col-lg-5 productmedia text-center'>
                      <img class='img-fluid' src='". $linha['image'] ."' alt='Product Preview'>
                    </div>

                    <div class='col-xl-7 col-lg-7 productinfo'>
                      <h4 class='oswald_title' id='producttitle'> ". $linha['title'] ." </h4>
                      <h5> ". $linha['subtitle'] ." </h5>
                      <p class='products_text'> ". $linha['description'] ." </p>
                      <a class='detalhes' href='". $linha['pdf'] ."' class='button' target='_blank'>VER DETALHES</a>
                    </div>

                </div>
                ";

                if($iteration_counter != $nrows){
                  echo"
                  <br>
                  <hr>";
                }
              }

            }
    ?>


                                <!-- COMEÇA AQUI -->



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
