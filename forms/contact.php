<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */


  use PHPMailer\PHPMailer\PHPMailer;

  require_once 'C:/xampp/htdocs/theschoolpro/girlschool/phpmailer/Exception.php';
  require_once 'C:/xampp/htdocs/theschoolpro/girlschool/phpmailer/PHPMailer.php';
  require_once 'C:/xampp/htdocs/theschoolpro/girlschool/phpmailer/SMTP.php';
    // Replace contact@example.com with your real receiving email address
  

  $mail = new PHPMailer(true);

  $alert = "";
  
  // $contact->to = $receiving_email_address;


  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $subject = $_POST['subject'];


      try{
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->username = "nehasparks2@gmail.com";
        $mail->password = 'sparks@2';
        $mail->SMTPsecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom("nehasparks2@gmail.com");
        $mil->addAddress('nehapanchal2606@gmail.com');


        $mail->isHTML(true);
        $mail->subject = "mesahe recircev0";
        $mail->Body = "hellooocgdudjcgd";

      }catch (Exceprion $e){
        $alert = "Somthin is Wrong";
      }

    }
       else {
          $errorMessage = 'Oops, something went wrong. Please try again later';
      }



  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  // */

  // $toEmail = 'pujagyanchandx`ani@gamil.com';
  // $emailSubject = 'New email from your contact form';
  // $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
  // $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message, "Subject:", $subject];
  // $body = join(PHP_EOL, $bodyParagraphs);

  // if (mail($toEmail, $emailSubject, $body, $headers)) {
  //   echo $contact->send();
      
  // } else {
  //     $errorMessage = 'Oops, something went wrong. Please try again later';
  // }

  
?>
