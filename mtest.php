<?php

$debug = true; // or
$debug = false; 

require_once "vendor/autoload.php";

  // $mailer->clearAllRecipients (); 
  global $email;
  $dname = $_POST["namen"];
  $firma = $_POST["firma"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $theme = $_POST["theme"];
  $details = $_POST["description_details"];

  $mailtext = "<br>Hallo Stefan, soeben wurde über das Kontaktformular von webdesign.digitaleseele.at eine neue Anfrage gesendet. <br><br> <b>Name<b>: $dname <br><b>Firma</b>: $firma <br><b>email</b>: $email <br><b>Telefon</b>: $phone <br><b>Thema</b>: $theme <br><br><b>Details des Anliegens</b>: <br>$details";

  if(sendEMail('office@webdesign.digitaleseele.at', 'Office WebDesign', 'Kundenanfrage webdesign.digitaleseele.at!', '<h1>Spiderman!</h1>', $mailtext, array("Spiderman.png" => "/path/to/img.png"))) 
  { echo "\nPasst! Schau mal in dein Postfach Spiderman ist da!\n"; }
  else
  { echo "\nERROR! Ein interner Fehler ist aufgetreten! Die E-Mail konnte nicht korrekt zugestellt werden\n"; }


  
  function sendEMail($receiver,$receiverName,$subject,$html,$text,$AttmFiles=array()){
      global $debug;
      global $reply;
      // $reply = $email;
      $email = $_POST["email"];
  
      $replymail = "office@ruedesworld.net";
  
      $mail = new PHPMailer\PHPMailer\PHPMailer($debug);
  
      if ($debug)
      { $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; }
      $mail->clearAllRecipients (); 
      $mail->isSMTP();
      $mail->SMTPAuth   = true;
      $mail->Host       = "w0123896.kasserver.com";
      $mail->Port       = "465";
      $mail->Username   = "kundenanfrage@webdesign.digitaleseele.at";
      $mail->Password   = "ZSHheH6phoiGukheaRZ9";
      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // port 587
      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // port 465
      $mail->CharSet    = 'utf-8';
      $mail->Debugoutput = 'html';
      $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false
            ,'verify_peer_name' => false
            ,'allow_self_signed' => true
        ),
        'tls' => array(
          'verify_peer' => false
          ,'verify_peer_name' => false
          ,'allow_self_signed' => true
        )
      );
      // $mailer->clearAllRecipients (); 
      $mail->setFrom("anfrage@webdesign.digitaleseele.at", 'Anfrage WebDesign');
      $mail->addAddress($receiver, $receiverName);
  
      foreach($AttmFiles as $key => $value)
      { $mail->addAttachment($value, $key); }
  
      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body    = $html.' '.$text;
      $mail->AltBody = $text;
      $mail->AddReplyTo($email, 'Reply to name');
  
      try {
          $mail->send();
          return true;
      } catch (PHPMailer\PHPMailer\Exception $e) {
          if($debug)
          { echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo; }
          return false;
      }
  }