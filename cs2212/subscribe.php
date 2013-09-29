<?php

include 'header.php.inc';

$database = "addresses.txt";

$email = $_POST['email'];

if ($email){

$fh = fopen($database, 'a') or die("<h1>Can't open file</h1>");

fwrite($fh, $email);

fwrite($fh, "\n");

fclose($fh);

?>

  <h1>Thank you</h1>
  <p><?=  $email?> has been added to my mailing list.</p>

<?php

}

else {

?>

  <h1>Error</h1>
  <p>Please enter your email address.</p>

<?php

}

include 'footer.php.inc';

?>
