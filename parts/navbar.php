<div id="app" class="container">
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
           <a class="navbar-brand" href="index.php"><img src="media/logo/logo.png"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    
                        <a <?php if($current == 'empresa') echo " id=\"currentpage\""; ?>
                           class="nav-link" href="empresa.php">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a <?php if($current == 'servicos') echo " id=\"currentpage\""; ?>
                           class="nav-link" href="servicos.php">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a <?php if($current == 'produtos') echo " id=\"currentpage\""; ?>
                           class="nav-link" href="produtos.php">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a<?php if($current == 'contactos') echo " id=\"currentpage\""; ?>
                         class="nav-link" href="contactos.php">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<?php
                ob_start();
                $servername = "localhost";
                $username = "root";
                $password = "";
                $bd = "pupilab";
                $conn = mysqli_connect($servername, $username, $password, $bd);
                if (!$conn) {
                    die("Erro na ligacao: " . mysqli_connect_error()); //Mensagem de erro caso nao haja ligação à base de dados
                    //Caso haja ligação executa o código abaixo!vv
                }

                $conn->set_charset('utf8');

?>
