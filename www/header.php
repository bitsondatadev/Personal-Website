<?php include 'settings.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
echo '<link rel=" shortcut icon" href="'.$root.'images/favicon.ico">
	  <script type="text/javascript" src="'.$root.'js/jquery-1.10.2.min.js"></script>
	  <link rel="stylesheet" href="'.$root.'css/style.css" type="text/css" />
	  <script src="'.$root.'js/jquery-ui-1.10.4.custom.js"></script>
	  <link href="'.$root.'css/jquery-ui-1.10.4.custom.css" rel="stylesheet">';
	  
echo '<style>
		#wrap {
			background: #212B5C url('.$root.'images/bg.jpg) repeat-x 0 0; 
			margin: 20px auto 0 auto;	
			text-align: left;		
			border-color: #444;
			border-style: solid;
			border-width: 1px 1px 5px 1px;	
		}
		#header {
			position: relative;
			height: 110px;	
			background: #7F8082 url('.$root.'images/header-bg.jpg) repeat-x 0% 100%;
			border-bottom: 5px solid #444;		
		}
     </style>';
?>
<title>Brian Olsen's Webspace</title>
</head>
<body>
  <div id="header">
    <h1 id="logo">brian<span class="gray">Olsen</span></h1>
    <h2 id="slogan">n. [brAY-uhn] an organism that turns caffeine into software.</h2>
    <div id="menu">
      <ul>
	  <?php
        echo '<!--li><a href="'.$root.'news.php">News</a></li-->
			<li><a href="'.$root.'about.php">About Me</a></li>
			<li><a href="'.$root.'downloads.php">Downloads</a></li>
			<li><a href="'.$root.'contact.php">Contact</a></li>';
		?>
      </ul>
    </div>
  </div>
</body>

</html>
