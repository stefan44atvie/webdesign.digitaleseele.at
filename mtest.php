<?php

$debug = true; // or
$debug = false; 

require_once "vendor/autoload.php";

$mailtext = "Hallo, soeben wurde über das Kontaktformular von webdesign.digitaleseele.at eine neue Anfrage gesendet.";

if(sendEMail('office@webdesign.digitaleseele.at', 'Office WebDesign', 'Soeben kam eine neue Kundenanfrage!', '<h1>Spiderman!</h1>', $mailtext, array("Spiderman.png" => "/path/to/img.png"))) 
{ echo "\nPasst! Schau mal in dein Postfach Spiderman ist da!\n"; }
else
{ echo "\nERROR! Ein interner Fehler ist aufgetreten! Die E-Mail konnte nicht korrekt zugestellt werden\n"; }

function sendEMail($receiver,$receiverName,$subject,$html,$text,$AttmFiles=array()){
    global $debug;

    $mail = new PHPMailer\PHPMailer\PHPMailer($debug);

    if ($debug)
    { $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; }

    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = "w0123896.kasserver.com";
    $mail->Port       = "465";
    $mail->Username   = "kundenanfrage@webdesign.digitaleseele.at";
    $mail->Password   = "ZSHheH6phoiGukheaRZ9";
    // $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // port 587
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

    $mail->setFrom("anfrage@webdesign.digitaleseele.at", 'Anfrage WebDesign');
    $mail->addAddress($receiver, $receiverName);

    foreach($AttmFiles as $key => $value)
    { $mail->addAttachment($value, $key); }

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $html.' '.$text;
    $mail->AltBody = $text;
    $mail->AddReplyTo('replyto@email.com', 'Reply to name');


    try {
        $mail->send();
        return true;
    } catch (PHPMailer\PHPMailer\Exception $e) {
        if($debug)
        { echo "Message could not be sent. Mailer Error: ".$mail->ErrorInfo; }
        return false;
    }
}