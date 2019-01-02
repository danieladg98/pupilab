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
                      <input type="submit" name="imagem" value="Lampadas de Fenda">
                      <input type="submit" name="imagem" value="Oftalmoscópios">
                      <input type="submit" name="imagem" value="Retinoscópios">
                      <input type="submit" name="imagem" value="Retinómetros">
                  </div>
              </div>

              <div>
                <input id="category2" type="button" data-toggle="collapse" data-target="#sub_menu2" aria-expanded="false" aria-controls="sub_menu2" value="Refração">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu2">
                  <div class="col-1 in">
                      <input type="submit" name="outro" value="Unidades de Refração">
                      <input type="submit" name="outro" value="Auto-Refractómetros">
                      <input type="submit" name="outro" value="Forópteros">
                      <input type="submit" name="outro" value="Pojectores Optotipos">
                      <input type="submit" name="outro" value="LCD">
                      <input type="submit" name="outro" value="Mesas Electricas">
                      <input type="submit" name="outro" value="Caixa de Lentes">
                      <input type="submit" name="outro" value="Armações de Prova">
                      <input type="submit" name="outro" value="Frontofocómetros L/ Interna">
                      <input type="submit" name="outro" value="Frontofocómetros Digitais">
                      <input type="submit" name="outro" value="Arkeratómetros">
                  </div>
              </div>

              <div>
                <input id="category3" type="button" data-toggle="collapse" data-target="#sub_menu3" aria-expanded="false" aria-controls="sub_menu3" value="Diagnóstico/Medição">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu3">
                  <div class="col-1 in">
                      <input type="submit" name="outro" value="OCT">
                      <input type="submit" name="outro" value="Paquimetro">
                      <input type="submit" name="outro" value="Biometro">
                      <input type="submit" name="outro" value="Topógrafo">
                      <input type="submit" name="outro" value="Campímetro/Perímetro">
                      <input type="submit" name="outro" value="Ultrasom">
                      <input type="submit" name="outro" value="Microscópio Especular">
                  </div>
              </div>

              <div>
                <input id="category4" type="button" data-toggle="collapse" data-target="#sub_menu4" aria-expanded="false" aria-controls="sub_menu4" value="Oficina/Ópticas">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu4">
                  <div class="col-1 in">
                      <input type="submit" name="outro" value="Biseladoras">
                      <input type="submit" name="outro" value="Máquinas/Acabamentos/Ranhuras">
                      <input type="submit" name="outro" value="Polidoras">
                      <input type="submit" name="outro" value="Ultrasons">
                      <input type="submit" name="outro" value="Ventilete">
                      <input type="submit" name="outro" value="Ferramentas">
                  </div>
              </div>

              <div>
                <input id="category5" type="button" data-toggle="collapse" data-target="#sub_menu5" aria-expanded="false" aria-controls="sub_menu5" value="Lâmpadas">
              </div>
              <div class="collapse collapsesubmenu" id="sub_menu5">
                  <div class="col-1 in">
                      <input type="submit" name="outro" value="Oftalmoscópio">
                      <input type="submit" name="outro" value="Retinoscópio">
                      <input type="submit" name="outro" value="Frontofocómetro">
                      <input type="submit" name="outro" value="Lâmpada de Fenda">
                      <input type="submit" name="outro" value="Projector">
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
            }else if (isset($_POST['observacao'])) {
                header('Location: produtos.php?message=observacao');
            } else if (isset($_POST['imagem'])) {
                header('Location: produtos.php?message=imagem');
            } else if (isset($_POST['oficina'])) {
                header('Location: produtos.php?message=oficina');
            } else if (isset($_POST['outro'])) {
                header('Location: produtos.php?message=outro');
            } else {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1");
            }

            if ($_GET['message'] == 'all') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1");
            } else if ($_GET['message'] == 'observacao') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao'");
            } else if ($_GET['message'] == 'imagem') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Observacao' AND subcategory = 'Imagem'");
            } else if ($_GET['message'] == 'oficina') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina'");
            } else if ($_GET['message'] == 'outro') {
                $resultados = mysqli_query($conn, "select id, title, subtitle, category, subcategory, image from produtos where active = 1 AND category = 'Oficina' AND subcategory = 'Outro'");
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
