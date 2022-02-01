<?php
$mysubmit = $_POST["return"];
$name = $_POST["name"];
$email = $_POST["email"];
$file = $_POST["objFile"];
$metal = $_POST["metalType"];
$extra = $_POST["specifics"];
if($mysubmit) {
    mail("skyfloyd2004@gmail.com", "New Order From " . $name, 
    $metal. "\n" . $file . "\n" . $extra . "\n ". $email);
}
?>