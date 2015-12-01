<?php

/* Modification by Toni for Windows servers */
ini_set("sendmail_from", "info@sitiosflex.com");

$EmailFrom = "info@sitiosflex.com";
$EmailTo = "efrainbarcena@gmail.com";
$Subject = "Green Clean Estimate Inquiry Form";
$firstname = Trim(stripslashes($_POST['firstname']));
$lastname = Trim(stripslashes($_POST['lastname']));
$email = Trim(stripslashes($_POST['email']));
$phone = Trim(stripslashes($_POST['phone']));
$address = Trim(stripslashes($_POST['address']));
$city = Trim(stripslashes($_POST['city']));
$zip = Trim(stripslashes($_POST['zip']));
$hometype = Trim(stripslashes($_POST['hometype']));
$servicefrequency = Trim(stripslashes($_POST['servicefrequency']));
$bedrooms = Trim(stripslashes($_POST['bedrooms']));
$bathrooms = Trim(stripslashes($_POST['bathrooms']));
$residents = Trim(stripslashes($_POST['residents']));
$currentlycleaned = Trim(stripslashes($_POST['currentlycleaned']));
$nicknacks = Trim(stripslashes($_POST['nicknacks']));
$dust = Trim(stripslashes($_POST['dust']));
$soapscum = Trim(stripslashes($_POST['soapscum']));
$pethair = Trim(stripslashes($_POST['pethair']));

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

$newsletter = $_POST['newsletter'];
if ($newsletter != 'Yes') {
    $newsletter = 'No';
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lastname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $address;
$Body .= "\n";
$Body .= "City: ";
$Body .= $city;
$Body .= "\n";
$Body .= "Zip: ";
$Body .= $zip;
$Body .= "\n";
$Body .= "Home Type: ";
$Body .= $hometype;
$Body .= "\n";
$Body .= "Service Frequency: ";
$Body .= $servicefrequency;
$Body .= "\n";
$Body .= "Bedrooms: ";
$Body .= $bedrooms;
$Body .= "\n";
$Body .= "Bathrooms: ";
$Body .= $bathrooms;
$Body .= "\n";
$Body .= "Residents: ";
$Body .= $residents;
$Body .= "\n";
$Body .= "Currently Cleaned by a Pro?: ";
$Body .= $currentlycleaned;
$Body .= "\n";
$Body .= "Nick Nacks: ";
$Body .= $nicknacks;
$Body .= "\n";
$Body .= "Dust: ";
$Body .= $dust;
$Body .= "\n";
$Body .= "Soap Scum: ";
$Body .= $soapscum;
$Body .= "\n";
$Body .= "Pet Hair: ";
$Body .= $pethair;
$Body .= "\n";
$Body .= "Joined Newsletter?: ";
$Body .= $newsletter;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
