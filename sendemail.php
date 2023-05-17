<?php 

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


    $mail = new PHPMailer();


    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "nehapanchal2606@gmail.com";
    $mail->Password = "Neha@2606";
    $mail->Post = '465';
    $mail->SMTPSecure =  "ssl";


    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("nehapanchal2606@gmail.com");
    $mail->Subject = ("$email($subject)");
    $mail->Body = $message;


    if ($mail>send()){
      $status  = "success";
      $response = "Email is Sent";

    }else{
      $status = "failed";
      $response = "Something is wrong : <br>" . $mail->ErrorInfo;
    }


    exit(json_encode(array("status" => $status, "response" => $response)));

} 


?>