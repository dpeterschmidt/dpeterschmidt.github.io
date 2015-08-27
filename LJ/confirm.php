<?php
if (isset($_POST['send'])) {
     $to = 'dpete93@gmail.com'; // Use your own email address
     $subject = 'Test';
     $message = 'Name: ' . $_POST['artist'] . "\r\n\r\n";
     $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	 $message .= 'Comments: ' . $_POST['desc'];
	echo $message;
}
?>

<h1>Thank You</h1>
<p>Your message has been sent.</p>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message.</p>

