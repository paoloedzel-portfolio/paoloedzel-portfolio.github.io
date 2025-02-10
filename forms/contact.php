<?php

  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
  require 'assets/vendor/phpmailer/Exception.php';
  require 'assets/vendor/phpmailer/PHPMailer.php';
  require 'assets/vendor/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  $mail = new PHPMailer(true);

  try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  // Change for your SMTP provider
    $mail->SMTPAuth   = true;
    $mail->Username   = 'edpa92@gmail.com';  // Your email
    $mail->Password   = 'frfu kjim fqpz lrdm';  // Use an App Password for Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;  // Use 465 for SSL or 587 for TLS

    // Sender & Recipient
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('edpa92@gmail.com', 'PAOLO EDZEL');

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['message'];

    // Send Email
    $mail->send();
    

    
  header("Location: https://paoloedzel-portfolio.github.io/#contact?msg=send");
  exit(); // Important to prevent further execution

} catch (Exception $e) {
  header("Location: https://paoloedzel-portfolio.github.io/#contact?msg=notsend");
  exit(); // Important to prevent further execution
} 

// Redirect to another page


  // Replace contact@example.com with your real receiving email address
 /*  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
 */
 /*  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
 */
  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  /* $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send(); */
?>
