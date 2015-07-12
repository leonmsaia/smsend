<?php
// Cargo el Script
require('engine.php');

// Creo Variables
$CountryCode = $_POST["CountryCode"];
$PhoneNumber = $_POST["PhoneNumber"];
$TxtMsg = $_POST["TxtMsg"];
$NumberConcat = $CountryCode . '' . $PhoneNumber;

// Llamo a funcion
$envio = SendSMS($NumberConcat, $TxtMsg, false);
if (!$envio){
	print "Mensaje enviado correctamente!\n";
} else{
	echo strstr($envio,"ERROR");
}
?>