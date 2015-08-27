<?php 
if(isset($_POST['submit'])){
    $to = "dpete93@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $artist = $_POST['artist'];
    $desc = $_POST['desc'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $artist . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $artist . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $artist . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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

<h2>COMMISSION A SONG</h2>
<h3>Want a song? We write them. Fill out the form below to give us some details and we'll get back to you as soon as we can.</h3>

<form method = "post" action = "">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="What's your email address?" name = "email">
  </div>
  <div class="form-group">
  	<label for="exampleInputEmail1">Artist</label>
    <input type="text" class="form-control" id="exampleInputName2" placeholder = "What artist do you represent?" name = "artist"></textarea>
  </div>
  <div class="form-group">
  	<label for="exampleInputEmail1">Description</label>
    <textarea class="form-control" rows="3" placeholder = "Give us an idea of the vibe of the song." name = "desc"></textarea>
  </div>
  <button type="submit" name = "submit" value = "Submit" class="btn btn-default pull-left">Submit</button>
</form>

<br><br><br><br><br><br>

<hr>

<div class = "footer">
  Handcrafted by <a style = "color:black; text-decoration:underline;" href="http://danielpeterschmidt.com">Daniel Peterschmidt</a> © 2015
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>