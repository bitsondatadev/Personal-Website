<html>
<body>
<div id="wrap">
	<?php include 'header.php';?>
  <div id="content-wrap">
	<?php include 'sidebar.php';?>
    <div id="main"> <a name="TemplateInfo"></a>
	<h1><strong>Contact</strong></h1>
        <h3>Try to reach me by...</h3>
        <ol>
			  <li>finding me on <strong><a href="http://www.linkedin.com/pub/brian-olsen/31/164/79">Linked In</a></strong>.</li>
			  <li><strong><a href="mailto:brianolsen87@gmail.com?subject=Inquiry from Website.">emailing me</a></strong>.</li>
			  <li>or leaving me a comment below...</li>
				<h3>Comments - This currently doesn't work.</h3>
				<form action="contact.php">
				  <p>
					<label>Name</label>
					<input name="dname" value="Your Name" type="text" size="30" />
					<label>Email</label>
					<input name="demail" value="Your Email" type="text" size="30" />
					<label>Your Comments</label>
					<textarea rows="5" cols="5"></textarea>
					<br />
					<input class="button" type="submit" />
				  </p>
				</form>
        <br />
        </ol>
    </div>
    <br />
  </div>
</div>
<?php include 'footer.php';?>
</body>
</html>