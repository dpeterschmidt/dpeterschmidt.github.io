<?php
header('Content-type: text/html; charset=utf-8');
if (isset($_POST['send'])) {
     $to = 'dpete93@gmail.com'; // Use your own email address
     $subject = 'Test';
     $message = 'Name: ' . $_POST['artist'] . "\r\n\r\n";
     $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	 $message .= 'Comments: ' . $_POST['desc'];
	echo $message;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta charset="utf-8" http-equiv="encoding">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>LIAM TULLY & JOHNNY MEI</title>
	<!-- Bootrstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="test.css">
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,300italic,400,600' rel='stylesheet' type='text/css'>
</head>

<body>

<h4 class = "mobile">LIAM TULLY & JOHNNY MEI</h4>

<nav class="navbar navbar-default">
  <div class="navbar-header">
  <!-- Hamburger button -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
  </div>
  <div id = "navbar" class="navbar-collapse collapse">
  <ul class="nav nav-stacked">
      <li><a href="/LJ/test.html">Home</a></li>
      <li><a href="/LJ/news.html">News</a></li>
      <li><a href="/LJ/music.html">Our Music</a></li>
      <li class = "active"><a href="/LJ/commissions.html">Commission A Song</a></li>
      <li><a href="/LJ/book.html">Book A Show</a></li>
  </ul>  
  </div>
</nav>

<div class = "mobile"><hr></div>


<h1>Thank You</h1>
<p>Your message has been sent.</p>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message.</p>

<hr>

<div class = "footer">
  Handcrafted by <a style = "color:black; text-decoration:underline;" href="http://danielpeterschmidt.com">Daniel Peterschmidt</a> © 2015
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>

