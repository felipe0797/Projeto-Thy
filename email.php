<?php


require './mailer/PHPMailer.php';
require './mailer/SMTP.php';

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
	$nome = $_POST['nome'];
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = $_POST['email'];
}
if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {
$telefone = $_POST['telefone'];
}
if (isset($_POST['faturamento']) && !empty($_POST['faturamento'])) {
$faturamento = $_POST['faturamento'];
}


    $mail = new  PHPMailer\PHPMailer\PHPMailer(true);

	$mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'bancodedados98@outlook.com';
    $mail->Password = 'banco.98';
    $mail->Port = 587;

    $mail->setFrom('bancodedados98@outlook.com', "Formulario de $nome");
    $mail->addAddress('bancodedados98@outlook.com');

    $mail->isHTML(true);

	$mail->isHTML(true);       
	$mail->Subject = "Formulario de $nome;";
	$mail->Body    = nl2br("Nome: $nome");
	$mail->Body .= nl2br("<br><br>Email: $email");
	$mail->Body .= nl2br("<br><br>Telefone: $telefone");
	$mail->Body .= nl2br("<br><br>Faturamento: $faturamento");

    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
         header();
    }
?>