<nav id="navelse" class="navbar fixed-top navbar navbar-expand">
  <div class="col-1"></div>
    <a  class="col-6" href="index.php"><img id="logo" src="media/logo/logo_black.png" alt="eyes"></a>
    <a id="" class="col-1 black" href="empresa.php">A EMPRESA</a>
    <a id="" class="col-1 black" href="servicos.php">SERVIÇOS</a>
    <a id="" class="col-1 black" href="produtos.php">PRODUTOS</a>
    <a id="" class="col-1 black" href="contactos.php">CONTACTOS</a>
  <div class="col-1"></div>
</nav>


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
