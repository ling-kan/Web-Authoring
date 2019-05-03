
<head>
<title>CreativeTee | Contact Us</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="http://www.jeasyui.com/easyui/themes/default/easyui.css" rel="stylesheet" type="text/css">
<link href="http://www.jeasyui.com/easyui/themes/icon.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"  type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="http://www.jeasyui.com/easyui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="js/java.js"  type="text/javascript"></script>
<script src="js/slideshow.js"  type="text/javascript"></script>
<script src="js/backtotop.js"  type="text/javascript"></script>
</head>

<body>

<section>
	<img height="170px" longdesc="Creative Tee Logo" margin-left="202px" src="Images/Logo.jpg" />
	<div class="flip-container" style="left: 0px; top: 0px; width: 255px">
		<div class="flip">
			<div class="front">
				<img height="80px" src="images/delivery.png" /></div>
			<div class="front back" style="text-align: center">
				<a href="delivery.html" style="color: #FFFFFF;">FREE standard delivery 
				in UK only<br />
				Click here for more details</a></div>
		</div>
	</div>
		<social-menu>
	<a href="http://www.pintrest.com">
	<img id="social" alt="Pintrest" src="images/social/pintrest.jpg" /></a>
	<a href="http://www.plus.google.com">
	<img id="social" alt="Google+" src="images/social/google.jpg" /></a>
	<a href="http://www.youtube.com">
	<img id="social" alt="Youtube" src="images/social/youtube.jpg" /></a>
	<a href="http://www.instagram.com">
	<img id="social" alt="Instagram" src="images/social/instagram.jpg" /></a>
	<a href="http://www.twitter.com">
	<img id="social" alt="Twitter" src="images/social/twitter.jpg" /></a>
	<a href="http://www.facebook.com">
	<img id="social" alt="Facebook" src="images/social/facebook.jpg" /></a>
	</social-menu>
	<nav>
		<label class="show-menu" for="show-menu">Show Menu</label>
		<input id="show-menu" name="button" type="checkbox" />
		<ul id="menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="design.html">Design your own</a></li>
			<li><a href="shirts.html">Shirts</a>
			<ul class="hidden">
				<li><a href="shirts.html#ny">Limited Edition</a></li>
				<li><a href="shirts.html#peace">Peace</a></li>
				<li><a href="shirts.html#panda">Panda</a></li>
				<li><a href="shirts.html#plain">Plain</a></li>
			</ul>
			</li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="contact.html">Contact Us</a></li>
		</ul>
	</nav>
</section>
<section>
	<section class="center">
		<h1>Contact Us</h1>
		<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "you@yourdomain.com";
 
    $email_subject = "Your email subject line";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>Thank you for contacting us. We will be in touch with you very soon.
	</section>
</section>
<footer>
	<table width="100%">
		<tr>
			<td>
			<p>Ling Kan, 13489110 </p>
			</td>
			<td>
			<p align="center">&copy;2015 Copyright CreativeTee. All Rights Reserved.</p>
			</td>
			<td>
			<p align="right"><a href="delivery.html">Delivery</a> |
			<a href="about.html">About Us</a> |<a href="contact.html"> Contact Us</a>
			</p>
			</td>
		</tr>
	</table>
</footer>
<a class="back-to-top" href="#">Back to Top</a>

</body>
<?php
 
}
 
?>