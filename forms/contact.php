<?php
include('../assets/vendor/php-email-form/php-email-form.php');
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $toEmail = 'pujagyanchandani@gamil.com';
  $emailSubject = 'New email from your contact form';
  $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
  $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message, "Subject:", $subject];
  $body = join(PHP_EOL, $bodyParagraphs);

  if (mail($toEmail, $emailSubject, $body, $headers)) {
    echo $contact->send();
      
  } else {
      $errorMessage = 'Oops, something went wrong. Please try again later';
  }

  
?>
