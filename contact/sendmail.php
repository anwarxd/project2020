<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'junaidianwar125@gmail.com';
    $mail->Password = '08042003';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('junaidianwar125@gmail.com');
    $mail->addAddress('junaidianwar280@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Message Recived (Contact Page)';
    $mail->Body = "<h3>Nama : $name <br>Email : $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-succes">
                <span>Laporan Telah Terkirim! Terimakasih Telah Menghubungi Layanan Kami.</span>
              </div>';
  } catch (Exception $e) {
    $alert = '<div class="alert-error">
                <span>' . $e->getMessage() . '.</span>
              </div>';
  }
}
