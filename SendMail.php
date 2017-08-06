<?php  


require_once 'vendor/autoload.php';

date_default_timezone_set('Etc/UTC');
/*function ValidateEmail ($email) 
{
   if  (filter_var ($email, FILTER_VALIDATE_EMAIL)):
      return true;
   else:
      return false;
   endif;
}*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = $_POST["name"];
	echo $_POST["email"];
	if  (filter_var ($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$email = $_POST["email"];
	} else {
		echo "<h1>Invalid e-mail :(</h1>";
	}

}

/*************************************************** PHPMailer ***************************************************/

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP -> protocolo de comunicao para e-mails
$mail->isSMTP();

//Enable SMTP debugging -> modo de resposta
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output -> resposta de debug final no formato html
$mail->Debugoutput = 'html';

//Set the hostname of the mail server -> usando o gmail neste caso (configurar de acordo com o servidor)
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls <---- IMPORTANTE!
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication -> autenticacao de conta
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "marcelixoo@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Minha senha";

//Set who the message is to be sent from
$mail->setFrom('marcelixoo@gmail.com', 'Marcelo T.');

//Set an alternative reply-to address -> Alternativa para respostas para um outro e-mail MUITO USADO EM E-MAILS AUTOMATICOS
// $mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
// $mail->addAddress('emaildaaline.a@Gmail.com', 'Aline Araujo');
$mail->addAddress($email, $nome);

//Set the subject line
$mail->Subject = 'Resposta do Marcelo';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('response.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body -> Seu e-mail nao carregou a mensagem :(';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script>window.location='index.html'; alert('Sua mensagem foi enviada com sucesso!');</script>";

}

?>  
