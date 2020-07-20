<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['fio'];
$phone = $_POST['tel'];
$email = $_POST['email'];

$mail->isSMTP();                                    
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'leonapd98@mail.ru';
$mail->Password = 'Vfylfhby30061998';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('leonapd98@mail.ru');
$mail->addAddress('onemedesu@gmail.com');     
$mail->isHTML(true);                              

$mail->Subject = 'Заявка продажа окон.';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Почта этого пользователя: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.php');
}
?>