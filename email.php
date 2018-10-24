  <?php
  require_once "vendor/autoload.php";
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  // below variables are sent from Contact form
  $name = $_POST['name'] ;
  $email = $_POST['email'] ;
  $subject = $_POST['subject'] ;
  $email_type = $_POST['email_type'] ;
  $version = $_POST['version'] ;
  $message = $_POST['message'] ;

  // configuration for email server
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->Host = "ssl://smtp.gmail.com";
  $mail->Port = 465;
  $mail->SMTPAuth = true;

  // When sending email using PHPMailer, we need a valid email address
  // This email is registered for the testing purpose
  $mail->Username = "quynhhuongnguyen2305@gmail.com";  // SMTP username
  $mail->Password = "Luckyoctober2018"; // SMTP password

  //Support team's email
  $mail->From = "quynhhuongnguyen2305@gmail.com";
  $mail->FromName = "Mailbutler Support Team";

  // address of configurable email (supporter's email)
  $mail->AddAddress("nguyenquynhhuong2305@gmail.com", "Huong Nguyen");
  // user's email address
  $mail->AddAddress($email,$name);

  // set word wrap to 50 characters
  $mail->WordWrap = 50;

  // add attachments
  for($i=0; $i < count($_FILES['attachment']['name']); $i++){
      $ftype[]       = $_FILES['attachment']['tmp_name'][$i];
      $fname[]       = $_FILES['attachment']['name'][$i];
      $mail->AddAttachment($ftype[$i],$fname[$i]);
  }

  // set email format to HTML
  $mail->MsgHTML($body);

  $mail->Subject = $subject;
  $mail->Body    = 'Client message:<br>"'.$message.'"<i><br><br>Email type is '.$email_type.'<br> Version is '.$version.'</i>';
  $mail->AltBody = $message;

  if(!$mail->Send())
  {
     echo "Message could not be sent.
  ";
     echo "Mailer Error: " . $mail->ErrorInfo;
     header("Location: /contact_us/feedback/error.php");
     exit;
  }

  echo "Message has been sent";
  header("Location: /contact_us/feedback/success.php");

  ?>
