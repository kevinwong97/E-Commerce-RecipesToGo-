<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recipes To Go &rarr; Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="resources/styles/style.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <div id="logo"> <!-- <img src="logoImage.png" alt="sample logo"> --> 
      <!-- Company Logo text --> 
       </div>
    <div id="headerLinks"><a href="login-test.php" title="Login">Login/Logout</a><a href="cart.html" class="button">View Cart (<span class="simpleCart_quantity"
></span> items)</a></div>
  </header>
  <section id="offer"> 
      <!-- The offer section displays a banner text for promotions -->
	<div class="banner"><br>
     <h2>Recipes To Go</h2>
		<p>Ingredient and recipe meal kit service</p><br>
  </div>
  </section>
  <div id="content">
    <section class="sidebar"> 
      <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
      
      <div id="menubar">
        <nav class="menu">
			<!-- <center>
				<img src="resources/images/logo2.png"></center>
			<br> -->
          <h2><!-- Title for menuset 1 -->NAVIGATION</h2>
          <hr>
          <ul>
            <!-- List of links under menuset 1 -->
			<li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html" title="about">About Us</a></li>
            <li><a href="products.html" title="products">Products</a></li>
			<li><a href="contact.php" title="contact">Contact Us</a></li>
			  <li><a href="faqs.html" title="faqs">FAQs</a></li>
          </ul>
        </nav>
        <br>
        <nav class="menu"> <!-- Title for menuset 2 -->
         <h2><!-- Title for menuset 1 -->SOCIAL MEDIA</h2>
			<hr><br>
			<center><img src="resources/images/iconfb.png">&nbsp;<img src="resources/images/icontwitter.png">&nbsp;
			<img src="resources/images/iconig.png">&nbsp;<img src="resources/images/iconyt.png"></center>
         </nav>
		  <br>
		  <nav class="menu">
          <h2><!-- Title for menuset 1 -->PAYMENT OPTIONS</h2>
          <hr>
          <br><center><img src="resources/images/iconvcd.png">&nbsp;<img src="resources/images/iconmcd.png">&nbsp;<img src="resources/images/iconamex.png">&nbsp;<img src="resources/images/iconpp.png"></center>
        </nav>
		  
      </div>
    </section>
	     <section class="mainContent">
		<div class="main">
			 <h1>Contact Us</h1>
			<p>Please fill out the form below to lodge an enquiry. A representative will get back to you within 24 to 48 hours.</p>
		
			<div id="wrapper">
<div id="contactform">			

	<form class="email" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Phone</p> <input type="text" name="phone">

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send">&nbsp;<input type="reset" value="Clear">
</form>
	
<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "s3494827@student.rmit.edu.au";
    $email_subject = "Recipes To Go contact form";
	
	$error_message = "There is an error with your input. Please try again.";
 
    function died($error) {
        // your error code can go here
        // echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        // echo "These errors appear below.<br /><br />";
        // echo $error."<br /><br />";
        // echo "Please go back and fix these errors.<br /><br />";
        
		echo "<script type='text/javascript'>alert('$error_message');</script>";
		
		// die();
    }
  
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['message'])) {
        // died('We are sorry, but there appears to be a problem with the form you submitted.');  
		echo "<script type='text/javascript'>alert('$error_message');</script>";
    }
  
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // not required
    $message = $_POST['message']; // required
 
    $error_message = "There is an error with your input. Please try again.";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
	
	
	
  if(!preg_match($email_exp,$email)) {
    // $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  	echo "<script type='text/javascript'>alert('$error_message');</script>";
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    // $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  	echo "<script type='text/javascript'>alert('$error_message');</script>";
  }
 
  /* if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  } */
 
  // if(strlen($message) < 2) {
    // $error_message .= 'The Comments you entered do not appear to be valid.<br />';
	// echo "<script type='text/javascript'>alert('$error_message');</script>";  	
  // }
 
  // if(strlen($error_message) > 0) {
    // died($error_message);
  //}
 
    $email_message = "Form details below:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    /* $email_message .= "First Name: ".clean_string($first_name)."\n"; */
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Comments: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
} ?>
 
<!-- include your own success html here -->

	<!-- Thank you for contacting us. We will be in touch with you very soon. -->
			</div>

<div id="map">
	<p><b>Tel:</b> 03 9312 3456<br><b>E-mail:</b> hello@recipestogo.com.au<br><b>Address:</b> 445 Swanston Street, Melbourne VIC 3000</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1576.1140342821682!2d144.9625792775065!3d-37.808126603964375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cb6413e7f7%3A0xc8d24dd99dd3def!2sRMIT+University+Swanston+Academic+Building!5e0!3m2!1sen!2sau!4v1537102909289" width="350" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	<br><br><br><br><br>
		</div>	
			 </div>	
			
			 </div>
      <div class="productRow"><!-- Each product row contains info of 3 elements -->      </div>
	<div class="productRow"> </div> 
    </section>
</div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    <div>
      <p>We support our hardworking customers who want to eliminate the time and effort taken to decide on and prepare a meal on the daily.</p>
    </div>
    <div>
      <p><center>&copy; Recipes To Go 2018<br>Template by Adobe Dreamweaver</center></p>
    </div>
    <div class="footerlinks">
    <p><a href="sitemap.html" title="Link">Sitemap</a></p>
	<p><a href="shipping.html" title="Link">Shipping</a></p>
	<p><a href="privacy.html" title="Link">Privacy Policy</a></p>
    </div>
  </footer>
</div>
</body>
</html>
