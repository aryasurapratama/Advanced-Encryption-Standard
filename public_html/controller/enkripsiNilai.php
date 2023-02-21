<?php
session_start();
require '../../library/aes.class.php';     // AES PHP implementation
require '../../library/aesctr.class.php';  // AES Counter Mode implementation
include '../../config/connection.php';

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

ob_start();

$query = $mysqli->query("SELECT * FROM tb_nilai WHERE id_siswa='$_SESSION[id_siswa]'");

while ($value = $query->fetch_object()) {
  $nilai_siswa = AesCtr::encrypt($value->nilai_siswa, $_POST['password'], $_POST['key_size']);
  $keterangan = AesCtr::encrypt($value->keterangan, $_POST['password'], $_POST['key_size']);
  $mysqli->query("UPDATE tb_nilai SET nilai_siswa='$nilai_siswa', keterangan='$keterangan', key_size='$_POST[key_size]', pass_key='$_POST[password]', status='1' WHERE id_siswa='$_SESSION[id_siswa]'");
}

#sget User Selection
$setUser = $mysqli->query("SELECT * FROM tb_siswa WHERE id_siswa='$_SESSION[id_siswa]'");
$getUser = $setUser->num_rows;

$myuser = $setUser->fetch_object();
$email = $myuser->email;

#veriy data user true or not
if($getUser==1){

  $data = 'Selamat anda berhasil melakukan enkripsi data, <br>Password : '.$_POST['password'].'<br> Key Size : '.$_POST['key_size'].'';

  // Load Composer's autoloader
  require '../../vendor/vendor/autoload.php';

  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->SMTPDebug = 2;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "selvyerhita@gmail.com";                     // SMTP username
    $mail->Password   = "eudtijbgunkbrbff";                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('selvyerhita@gmail.com', 'AES System Data');
    $mail->addAddress($email);     // Add a recipient
    $mail->addReplyTo('selvyerhita@gmail.com', 'Information');

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = 'Information your encryption';
    $mail->Body    = $data;
    $mail->AltBody = '';

    $mail->send();

    header('Location:../siswa/v_nilai.php?alert=1&myalert="Sukses melakukan enkripsi, detail pada email anda!"');
  } catch (Exception $e) {
    header('Location:../siswa/v_nilai.php?alert=2&myalert="Gagal Melakukan enkripsi!"');
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>
