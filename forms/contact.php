<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  mb_internal_encoding('UTF-8');
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'manuelbassi_8@hotmail.com';
/*
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'ssl://smtp.gmail.com',
    'username' => 'tecsoSMTP@gmail.com',
    'password' => 'a_12345678',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);*/
  try{
		
    if($_POST !== array()){
      require_once('../assets/vendor/php-email-form/PHPMailer-6.2.0/PHPMailer-master/src/PHPMailer.php');
      require_once('../assets/vendor/php-email-form/PHPMailer-6.2.0/PHPMailer-master/src/SMTP.php');
      require_once('../assets/vendor/php-email-form/PHPMailer-6.2.0/PHPMailer-master/src/Exception.php');
      $mail = new PHPMailer(true);
      $mail->CharSet = 'utf-8';
      $mail->SetLanguage('es');
      $mail->isSMTP();
      $mail->SMTPDebug = 0;
      $mail->Host = 'ssl://smtp.gmail.com';
      $mail->Port = 465;
      $mail->SMTPAuth = true;
      $mail->SMTPOption = array(
        'ssl'=> array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      $mail->Username = 'tecsoSMTP@gmail.com';						//Cuenta SMTP
      $mail->Password = 'a_12345678';										      //Password SMTP
      $mail->setFrom($_POST['email'], 'Email');				//Cuenta EMISORA
      $mail->AddReplyTo($_POST['email'], 'Email');				//Email y nombre A RESPONDER
      $mail->AddAddress('manuelbassi_8@hotmail.com', 'Manuel');			//Email y nombre RECEPTOR
      $mail->Subject = 'Mensaje desde sitio web';
      $mail->Body = ''
      . 'Nombre: ' . $_POST['name']; . '<br>'
      . 'Email: ' . $_POST['email']; . '<br>'
      . 'Mensaje: ' . $_POST['message'], 'Message', 10); . '<br>';
      $mail->AltBody = ''
      . 'Nombre: ' . $_POST['name']; . "\r\n"
      . 'Email: ' . $_POST['email']; . "\r\n"
      . 'Mensaje: ' . $_POST['message'], 'Message', 10); . "\r\n";

      echo $mail->Send();
      header('Location: mensaje-enviado.html', true, 302);
      exit;	

	} else {
	/*	$con = new Contacto();
		$con->setNombre('');
		$con->setEmail('');
		$con->setMensaje('');*/
	}
	} catch (Exception $e){
		$mensaje = $e->getMessage();
	} catch (\Exception $e){
		$mensaje = $e->getMessage();
}

?>
