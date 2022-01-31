<?php
$to      = 'skyfloyd2004@gmail.com';
$subject = 'New Order';
$message = 'Hello';
$headers = 'From: mcdonoughg@delawareareacc.org' . "\r\n" .
    'Reply-To: mcdonoughg@delawareareacc.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>