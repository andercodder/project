<?php
$smsErro = "";
$smsSucesso = "";
if ($_POST) {
    if (!$_POST['nome']) {
        $smsErro .= "O campo nome é obrigatorio preencha-o .<br>";
    }
    if (!$_POST['email']) {
        $smsErro .= "O campo de email é obrigatorio preencha-o .<br>";
    }
    if (!$_POST['telefone']) {
        $smsErro .= "O campo telefone é obrigatorio preencha-o .<br>";
    }
    if (!$_POST['mensagem']) {
        $smsErro .= "O campo de mensagem é obrigatorio preencha-o .<br>";
    }
   //verificar o email
    if (!$_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
        $smsErro .= "O seu endereço de email é invalido .<br>";
    }
  //verificar se Existem erros na variavel erro
    if ($smsErro != "") {
        $smsErro = '<div class="alert alert-danger sendSms"><p>Existem erros no seu formulario, corriga-os e tente de novo</p>' . $smsErro . '<div>';
        //header("Location:../index.php?#form");
    
    }
  /*se a conexão estiver boa enviar o email */
    else {
        $emailTo = "andrevmc1000@hotmail.com";
        $nome = $_POST['nome'];
        $headers = "From:" . $_POST['email'];
        $telefone = " Numero de Telefone do visitante da pagina.: " . $_POST['nome'] . " : " . $_POST['numeroDeTelefone'];
        $subject = "Mensagem da minha pagina Portfolio " . $_POST['mensagem'];
        $mailBody = "Dados do cliente: $nome\n$telefone\n";
        if (mail($emailTo, $headers, $mailBody, $subject)) {
            
            //http://localhost/project/portfolio/

            $smsSucesso = '<div class="alert alert-success sendSms>
      <strong>A sua mensagem foi enviada com sucesso</strong>
      </div>';
          // header("Location:index.php?#form");
        } else {
            $smsErro = '<div class=alert alert-danger sendSms>A sua mensagem não pode ser enviada <strong>Tente Novamente</strong> </div>';
          //  header("Location:index.php?#form");

        }
    }
}