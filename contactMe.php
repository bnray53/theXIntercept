<!DOCTYPE html>

<html lang="en-US">

<head>

	<title>The X-Intercept | Contact Me</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link href="mainStyles.css" rel="stylesheet" type="text/css" media="screen and (min-width: 416px)" />
	<link href="mobile.css" rel="stylesheet" media="only screen and (max-width: 415px)"/>
	
	<meta name="author" content="Benjamin Ray"/>
	<meta name="date" content="Summer 2017"/>
	
	<meta name="description" content="The X-Intercept Tutoring Services. College Level Tutoring Services for the Frisco, Texas Area. Custom Made Lessons Built Specifically Around Each Student.">

	<meta charset="utf-8" />
	
	<?php include('form_process.php'); ?> 
	
</head>

<body>

	<header>
		<img src="FinalLogo.jpg" id="logo" alt="Picture of X-Intercept" usemap="#homeMap" />
		
		<map name="homeMap">
			<area shape="rect" coords="0,10,388,185" alt="X-Intercept Home-Page" href="index.html">
		</map>
		
		<!--<h1>Test</h1>
		<h3>Test</h3>-->
		
		<h1>The X-Intercept Tutoring Services</h1>
		<h3>College Level Mathematics Learning Solutions</h3>
	</header>
	
	<nav id="horizontal">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="aboutMe.html">About</a></li>
			<li><a href="contactMe.php">Contact</a></li>
			<li id="last"><a href="services.html">Services</a></li>
		</ul>
	</nav>
	
	<div id="sidebar">
		<h4>Rates:</h4>
		
		<p>$30 per hour</p>
		
		<p>Group and Semester Long Discount Rates Available</p>
		
		<h4>Location:</h4>
		
		<p>Willing to Meet at Any Public Place in<br /> Frisco, Texas</p>
	</div>	
	
	
	<div id="mainBody">
		<h4>&nbsp;</h4>
		<div id="form">
		
		
		<form id="contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<h2 id="head1">Ready to Get Started?</h2>
			<h4 id="head2">Contact me today to schedule a free consultation, and<br /> get a reply within 24 hours!</h4>
				<fieldset>
				  <input placeholder="* Your name" type="text" maxlength="40" name="name" value="<?= $name ?>" tabindex="1">
				  <br /><span class="error"><?= $name_error ?></span>
				</fieldset>
				<fieldset>
				  <input placeholder="* Your Email Address" type="text" maxlength="40" name="email" value="<?= $email ?>" tabindex="2">
				  <br /><span class="error"><?= $email_error ?></span>
				</fieldset>
				<fieldset>
				  <input placeholder="Your Phone Number" type="text" maxlength="12" name="phone" value="<?= $phone ?>" tabindex="3">
				  <br /><span class="error"><?= $phone_error ?></span>
				</fieldset>
				<fieldset>
				  <textarea placeholder="Questions or Comments" value="<?= $message ?>" name="message" maxlength="300" tabindex="4"></textarea>
				</fieldset>
				<fieldset>
				  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
				</fieldset>
				<div class="success"><?= $success ?></div>
				<div id="reqField"><p><i>* Indicates Required Field</i></p></div>
		</form>
		</div>
	</div>




<footer id="footer">

	<p><a id="siteTag" href="index.html">www.thexintercept.com</a></p>
	
	<p><a id="devTag" href="https://www.linkedin.com/in/bnray53">Developer</a></p>
	
</footer>

</body>

</html>	