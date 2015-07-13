<html>
<body>
<div id="wrap">
<?php include 'header.php';?>
  <script>
  $(function() {
    $( "#accordion" ).accordion({
	  heightStyle: "content"
	});
  });
  </script>
  <div id="content-wrap">
	<?php include 'sidebar.php';?>
    <div id="main"> <a name="TemplateInfo"></a>
	<h1><strong>Work Projects</strong></h1>
			<br/>
			
			<div id="accordion">
				<h3><strong>Emerson Climate Technologies Comfort Guard</strong><a id="scottrade"></a></h3>
				<div>
					<p><b>Client:</b> Scottrade</p>
					<p><b>Project Brief:</b> Worked as a .NET Software Development Intern using C#, Java, HTML and javascript(jQuery). The software goal was geared to alert the client if something was wrong with their heating & cooling system. Sensors were installed with the systems to verify that they were running properly. The core software was Microsoft's MVC .NET framework.</p>					
					<br/>
					<iframe width="100%" height="325" src="https://media.licdn.com/media-proxy/ext?w=545&h=306&f=&hash=wpbyfhEegXMBHYFm17QCeeJlWEM%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta9Er0VjkhRIXxxMi5KDPrkC9q1FOQYfTTTSmWyOi_dCHYRjoe8_fZ-jh8w" frameborder="0" allowfullscreen></iframe>	
				</div>
				
				<h3><strong>Scottrader Trading Application</strong><a id="scottrade"></a></h3>
				<div>
					<p><b>Client:</b> Scottrade</p>
					<p><b>Project Brief:</b> I assisted in the debugging, testing, and development for this client-facing trading application. These are public tutorials that display various functionality used within the application.</p>					
					<br/>
					<a href="https://www.scottrade.com/online-trading/trading-platform-scottrader.html">
					<img src="https://www.scottrade.com/online-trading/trading-platform-scottrader/_jcr_content/par/image.img.jpg/1378998112577.jpg" width="95%"height="200">
					</a>
				</div>
				<h3><strong>VSNAP Networking Specialist</strong><a id="scottrade"></a></h3>
				<div>
					<p><b>Client:</b> United States Marine Corps</p>
					<p><b>Project Brief:</b> Performed work transporting, installing, and preparing the VSNAP (Virtual Secure / Non-secure Internet Protocol Router Network Access Point) for operation which provided much needed connection from the remote site in Ubaydi to Baghdad, Iraq where data was processed to identify potential terrorist movement. Identified components and techniques to properly operate and troubleshoot the Cisco switches and properly install, operate, and troubleshoot the KG-175D, an integrated cryptographic network device that encrypted and decrypted SIPRNet(Secure Internet Protocol Router Network) traffic. This is a small overview of the type of technology I worked with overseas. For more information about my military experiences look at my <?php echo '<a href="'.$root.'military.php">';?>Military Experience</a> page.</p>					
					<br/>
					<iframe src="//www.slideshare.net/slideshow/embed_code/key/RaVsy8ZoRoGUO" width="100%" height="510" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/BrianOlsen3/snap-overview-21209" title="SNAP Overview 2-12-09" target="_blank">SNAP Overview 2-12-09</a> </strong> from <strong><a href="//www.slideshare.net/BrianOlsen3" target="_blank">Brian Olsen</a></strong> </div>
				</div>
				
				<?php
				echo
				'<h3><strong>Transition Assistance Website</strong><a id="website"></a></h3>
				<div>
					<p><b>Client:</b> Airman & Family Readiness Center</p>
					
					
					<p><b>Project Brief:</b> I established a website that expedited the job finding process for recently retired military members. I also provided many user friendly tutorials for the client and tracked statistical data for the company.</p>
					<p>Main Page</p>
					<a href="'.$root.'images/Website1.jpg"><img src="'.$root.'images/Website1.jpg" width="95%" class="center"></img></a>
					<p>Google Docs - Job Listings</p>
					<a href="'.$root.'images/Website2.jpg"><img src="'.$root.'images/Website2.jpg" width="95%" class="center"></img></a>
					<p>Download Assistance</p>
					<a href="'.$root.'images/Website3.jpg"><img src="'.$root.'images/Website3.jpg" width="60%" class="center"></img></a>
					<p>Monthly Report For The Website</p>		
					<a href="'.$root.'images/Website4.jpg"><img src="'.$root.'images/Website4.jpg" width="95%" align="center"></img></a>
				</div>
				
				<h3><strong>Statistical Knowledge Checks using Microsoft Excel</strong><a id="microsoft"></a></h3>
				<div>
					<p><b>Client:</b> Airman & Family Readiness Center</p>
					<p><b>Project Brief:</b> I created a spreadsheet that takes input from our clients that measures the amount that they learned during our various classes and seminars.</p>

					<p>This chart represented a bi-weekly look at how much knowledge increased during a seminar during the last two weeks. Each bar represents a question that could specify a high or low knowledge increase.</p>
					<a href="'.$root.'images/KnowledgeCheck1.jpg"><img src="'.$root.'images/KnowledgeCheck1.jpg" width="95%" class="center"></img></a>
					<p>This was the area that my clients inputed the data in. The other areas are protected from user manipulation to avoid accidental tampering with the document.</p>
					<a href="'.$root.'images/KnowledgeCheck2.jpg"><img src="'.$root.'images/KnowledgeCheck2.jpg" width="60%" class="center"></img></a>
					<p>As the bi-weekly reports are filled in, the quartly reports update as well.</p>
					<a href="'.$root.'images/KnowledgeCheck4.jpg"><img src="'.$root.'images/KnowledgeCheck4.jpg" width="60%" class="center"></img></a>
					<p>As data from the quarterly reports are filled the annual report is automatically completed as well. </p>		
					<a href="'.$root.'images/KnowledgeCheck3.jpg"><img src="'.$root.'images/KnowledgeCheck3.jpg" width="60%" class="center"></img></a>
				</div>';
				?>
			</div>
    </div>
    <br />
  </div>
</div>
<?php include 'footer.php';?>
</body>
</html>