<?php
$field_email = $_POST['email'];


$mail_to = 'support@healme.io';
$subject = '#Message# '.$field_email;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";

$headers = 'From: '.$E-Mail."\r\n";
$headers .= 'Reply-To: '.$E-Mail."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
 <script language="javascript" type="text/javascript">
  alert('Thank you for registering with us.');
  window.location = 'index.html';
 </script>
<?php
}
else { ?>
 <script language="javascript" type="text/javascript">
  alert('Registration failed. Please, send an email to support@healme.io');
  window.location = 'index.html';
 </script>
<?php
}
?>
