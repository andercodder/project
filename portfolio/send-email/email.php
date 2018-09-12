<?php
$erro = "";
$sucessosms = "";
if ($_POST) {
    if (!$_POST['name']) {
        $erro .= "O campo nome é obrigatorio preencha-o .<br>";
    }
    if (!$_POST['email']) {
        $erro .= "O campo de email é obrigatorio preencha-o .<br>";
    }
    if (!$_POST['telefone']) {
        $erro .= "O campo telefone é obrigatorio preencha-o .<br>";
    }
    if (!$_POST['mensagem']) {
        $erro .= "O campo de mensagem é obrigatorio preencha-o .<br>";
    }
   //verificar o email
    if (!$_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $erro .= "O seu endereço de email é invalido .<br>";
    }
  //verificar se Existem erros na variavel erro
    if ($erro != "") {
        $erro = '<div class="alert alert-danger" role="alert"><p>Existem erros no seu formulario, corriga-os e tente de novo</p>' . $erro . '<div>';
    }
  /*se a conexão estiver boa enviar o email */
    else {
        $emailTo = "andrevmc1000@hotmail.com";
        $nome = $_POST['nome'];
        $headers = "From:" . $_POST['email'];
        $telefone = " Numero de Telefone do visitante da pagina.: " . $_POST['nome'] . " : " . $_POST['numeroDeTelefone'];
        $subject = "Mensagem da minha pagina Portfolio " . $_POST['mensagem'];
        $mailBody = "Dados do cliente: $nome\n $telefone\n";
        if (mail($emailTo, $headers, $mailBody, $subject)) {
            $sucessosms = '<div class="alert alert-success alert-dismissable" role="alert">
      <strong>A sua mensagem foi enviada com sucesso</strong>
      <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      </div>';
        } else {
            $erro = '<div class=alert alert-danger role="alert">A sua mensagem não pode ser enviada </div>';
        }
    }
}