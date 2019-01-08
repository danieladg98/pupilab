<?php

//Verifica se o botão de registo já foi carregado ou não
if (isset($_POST['submit'])) {

    //Verifica se todos os campos do formulário foram preenchidos e não estão vazios
    if ((isset($_POST['nome']) && !empty($_POST['nome'])) && (isset($_POST['apelido']) && !empty($_POST['apelido'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['telefone']) && !empty($_POST['telefone'])) && (isset($_POST['message']) && !empty($_POST['message']))) {
        $escapedNome = mysqli_real_escape_string($conn, $_POST['nome']);
        $escapedApelido = mysqli_real_escape_string($conn, $_POST['apelido']);
        $escapedEmail = mysqli_real_escape_string($conn, $_POST['email']);
        $escapedTelefone = mysqli_real_escape_string($conn, $_POST['telefone']);
        $escapedMessage = mysqli_real_escape_string($conn, $_POST['message']);

        if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $escapedMail)) {
          $msg = 'Email inválido, por favor tente de novo';
        } else {
          $msg = 'Email enviado!';

          $para = $escapedMail; // Send email to our user
          $assunto = 'Contacto Pupilab'; // Give the email a subject
          $mensagem = '

          Obrigado por se registar em Vinyl Records!
          A sua conta foi criada, pode fazer o login no nosso website com as credenciais que utilizou e confirmadas abaixo, logo após verificar a sua conta através do link fornecido.

          ------------------------
          Email: ' . $escapedMail . '
          ------------------------

          Nota: o acesso à àrea de cliente é restrita até confirmar o seu email.

          ';

          $headers = 'From:noreply@vinylrecordslda.com'; // Nome de quem envia o email
          mail($para, $assunto, $mensagem, $headers); // Envia o email

          mysqli_close($conn);
        }


    } else {
        //mensagem a imprimir caso o prenchimento dos dados ao inicio tenham sido inválido
        print "erro a preencher o formulário";
    }


}

if (isset($msg)) {
  print "<script type='text/javascript'>
          alert(".$msg.");
        </script>";
}


?>
