<?php 
session_start();

include "palavras_proibidas.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['textarea'];

if (empty($nome) || empty($telefone) || empty($email) || empty($assunto) || empty($mensagem)) {
	$_SESSION['estado_var'] = "<h6 class='red-text'><b>Preencha os Campos Abaixo!!</b></h6>";
	header('Location: contatos.php');
	exit();
}

// VERIFICA EMAIL
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "redirecionando...";
	$_SESSION['estado_var'] = "<h6 class='red-text'><b>Preencha com um email válido!</b></h6>";
  header('Location: contatos.php');
  exit();
}

$comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú', ' ');

$semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U', 'a');

$ver_alf = ctype_alnum(str_replace($comAcentos, $semAcentos, $nome));

// VERIFICA ALFA-NUMERICO
if (!($ver_alf == 1)) {
	$_SESSION['estado_var'] = "<h6 class='red-text'><b>Não use simbolos como: @, $, !, %...</b></h6>";
  header('Location: contatos.php');
  exit();
}

// VERIFICA PALVRAO - NOME
$consulta_nome = strtolower($nome);
$ver_palavrao = in_array($consulta_nome, $palavroes);

echo $ver_palavrao;

if ($ver_palavrao == 1) {
	echo "redirecionando...";
	$_SESSION['estado_var'] = "<h6 class='red-text'><b>Palavras imprópria detectada.</b></h6>";
  header('Location: contatos.php');
  exit();
}
// VERIFICA PALVRAO - MESSAGE
$consulta_nome = strtolower($mensagem);
$ver_palavrao = in_array($consulta_nome, $palavroes);

if ($ver_palavrao == 1) {
	echo "redirecionando...";
	$_SESSION['estado_var'] = "<h6 class='red-text'><b>Palavras imprópria detectada.</b></h6>";
  header('Location: contatos.php');
  exit();
}

$headers = "From: ". $email ." \r\n";
$headers .= "Reply-To: no-reply@gmail.com \r\n";
$headers .= "CC: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "<h1 style='text-align: center; font-size: 35px;'>Nome: ".$nome."</h1>";
$message .= "<div style='font-size: 20px;'>";
$message .= "<p style='text-align: center;'>Telefone: ".$telefone."</p>";
$message .= "<p style='text-align: center;'>email de contato: ".$email."</p>";
$message .= "<p style='text-align: center;'>Assunto a ser tratado: <b>".$assunto."</b></p>";
$message .= "<p style='text-align: center;'>Mensagem: ".$mensagem."</p>";
$message .= "</div>";

$to = ' dgs_desenhoprojeto@outlook.com.br';

$subject = 'Contato Hostinger';

if (mail($to, $subject, nl2br($message), $headers)) {
	$_SESSION['estado_var'] = "<h6 class='green-text'><b>Mensagem Enviada</b></h6>";
	header('Location: contatos.php');
	exit();
} else {
	$_SESSION['estado_var'] = "<h6 class='yellow-text'><b>Erro Durante o Envio... Tente novamente</b></h6>";
	header('Location: contatos.php');
	exit();
}


 ?>
