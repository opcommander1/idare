<?php

if (isset($_POST['email']) && isset($_POST['surname']) && isset($_POST['firstname']))  {

  $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
  $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $subject = 'Survival Backpack Volunteer Application';

  //Email information
  $admin_email = "Info@idareworld.org";
  $surname = $_POST['surname'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $sponsor = $_POST['sponsor'];
  $sponsorName = $_POST['sponsorName'];
  $website = $_POST['website'];
  $gift = $_POST['gift'];
  $giftName = $_POST['giftName'];

  $message = "<p>Surname: ".$surname."</p> <p>First Name: ".$firstname."</p> <p>Email: ".$email."</p> <p>Phone: ".$phone."</p> <p>Address: ".$address."</p> <p>Gender: ".$gender."</p> <p>Are You The Sponsor: ".$sponsor."</p> <p>Would you like your name to be the Sponsor: ".$sponsorName."</p> <p>Website: ".$website."</p> </p> <p>This is a gift for: ".$gift."</p> <p>First and Last Name for Gift: ".$giftName."</p>";

  //send email
  $send = mail($admin_email, "$subject", $message, $headers);

  if(!$send) {
     echo "<p style='color:red font-weight:bold'>Error sending email!</p>";
  } else {
     echo "<p style='color:green; font-weight:bold'>Message sent successfully. Thank you for contacting us!</p>";
  }

} else {

}
