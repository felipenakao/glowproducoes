<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));
$EmailTo = "fnakao@glowproducoes.com.br";
$Subject = Trim(stripslashes($_POST['Subject']));
$Name = Trim(stripslashes($_POST['Name']));
$City = Trim(stripslashes($_POST['City']));
$Estado = Trim(stripslashes($_POST['Estado']));
$Tel = Trim(stripslashes($_POST['Tel']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Cidade: ";
$Body .= $City;
$Body .= "\n";
$Body .= "Estado: ";
$Body .= $Estado;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
