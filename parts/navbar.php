<div id="app" class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="nav_branca">
        <a class="navbar-brand" href="index.php"><img src="media/logo/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
            </ul>
            
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicos.php">Serviços</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="produtos.php">Produtos</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="contactos.php">Contactos</a>
                </li>
            </ul>
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
