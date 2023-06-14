<?php
session_start();
// nome do arquivo: reset_password.php
require 'vendor/autoload.php';
if(isset($_POST['enviar'])) {
    $email = $_POST['email'];
    $nome = $_POST['name'];
    $telefone = $_POST['phone'];
    $message = '';  // Inicia a variável mensagem

    $mail = new \PHPMailer\PHPMailer\PHPMailer;

    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'gabrielpereira16032002@gmail.com';  // Seu e-mail do Gmail
    $mail->Password   = 'muvqlnslnpoadruk'; // Sua senha de aplicativo gerada
    $mail->SMTPSecure = 'tls';         
    $mail->Port       = 587;

    $mail->setFrom('gabrielpereira16032002@gmail.com', 'Sistema de Troca de Senha'); // Seu e-mail e nome do sistema
    $mail->addAddress($email);  // Adicione um destinatário

    $mail->IsHTML(true);
    $mail->Subject = 'Interesse Confirmado em Nosso Sistema';
    $mail->CharSet = 'UTF-8';
    $mail->Body = '
        <div style="text-align:center; color: #333333; font-family: Arial, sans-serif;">
            <img src="https://i.imgur.com/jTkEZIs.png" alt="Logo da Empresa" style="width:200px;">
            <h1 style="color: #004085;">Agradecemos Seu Interesse!</h1>
            <p style="color: #6c757d;">Olá, ' . $nome . '. Ficamos muito felizes com seu interesse em nosso sistema! Acreditamos que nosso serviço pode fazer a diferença em sua empresa ou empreendimento.</p>
            <p style="color: #6c757d;">Para conhecer mais sobre nossos serviços e como podemos lhe ajudar, entre em contato conosco pelo WhatsApp. Estamos sempre prontos para atendê-lo(a).</p>
            <a href="https://wa.me/5567981957833" style="background-color: #007bff; color: #ffffff; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-top:20px;">Entrar em contato pelo WhatsApp</a>
            <br><br>
            <p style="color: #6c757d;">Aguardo seu contato. Tenha um ótimo dia!</p>
            <hr>
            <small style="color: #6c757d;">Somos Devs - Endereço da Empresa<br>Contato: +5567981957833</small>
        </div>';

    $mail->AltBody = 'Olá, ' . $nome . '. Ficamos muito felizes com seu interesse em nosso sistema! Acreditamos que nosso serviço pode fazer a diferença em sua empresa ou empreendimento. Para conhecer mais sobre nossos serviços e como podemos lhe ajudar, entre em contato conosco pelo WhatsApp: https://wa.me/5567981957833. Aguardo seu contato. Tenha um ótimo dia! - Sua Empresa - Contato: +5567981957833';


    if(!$mail->send()) {
        $_SESSION['error_message'] = 'O Email não pôde ser enviada. Erro do Mailer: ' . $mail->ErrorInfo;
    } else {
        $_SESSION['success_message'] = 'Email enviado Com Sucesso!';
    }

    // Redireciona para a página editar-useradmin.php após enviar o email
    header('Location: manutencaolabs.php');
    exit;
}
?>