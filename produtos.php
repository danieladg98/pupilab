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

    <div class="container-fluid main_text animated fadeInUp slower">
        <center>
            <p class="black">Assistência Técnica, Manutenção e Comércio de Aparelhos
                <br> e Equipamentos Oftalmológicos</p>
        </center>
    </div>
    <div class="container-fluid botao_main animated fadeInUp slower">
        <center>
            <a id="ver_produtos" class="black borderblack">VER PRODUTOS</a>
            <a id="seta" class="borderblack" ><i class="fas fa-caret-right fa-lg black"></i> </a>
        </center>
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
