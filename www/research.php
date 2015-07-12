<html>
<body>
<div id="wrap">
	<?php include 'header.php';?>
	<script>
	$(function() {
	$( "#accordion" ).accordion({
	  collapsible: true,
	  heightStyle: "content"
	});
	});

	function associateDialogAndOpener(dialogID, openerID) {
		$( "#" + dialogID ).dialog(
			{
				autoOpen: false,
				width: 700,
				show: {
					effect: "blind",
					duration: 1000
				},
				hide: {
					effect: "explode",
					duration: 1000
				}	
			}
		);

		$( "#" + openerID ).click(function(){
			$( "#" + dialogID ).dialog( "open" );
		});
	}
	</script>
  <div id="content-wrap">
	<?php include 'sidebar.php';?>
    <div id="main"> <a name="TemplateInfo"></a>
	<h1><strong>Research</strong></h1>
		<h2><strong>Publications</strong></h2>
			<div>
				<ul>
					<li><strong>Title:</strong> Algorithms for fundamental spatial aggregate operations over regions.
						<br/><strong>Authors:</strong> Mark McKenney, Brian Olsen
						<br/><strong>Publisher:</strong> ACM
						<br/><strong>Publication Date:</strong> November, 4, 2013
						<br/><strong>DOI:</strong> <a href="http://dl.acm.org/citation.cfm?doid=2534921.2534930" target="_blank">10.1145/2534921.2534930</a>
						<br/><button id="opener1">Click Here for Abstract!</button>
						<div id="dialog1" title="Algorithms for fundamental spatial aggregate Abstract">
							<p>Aggregate operators are a useful class of operators in relational databases. In this 
							paper, we examine spatial aggregate operators over regions. Spatial aggregates are 
							defined to operate over a set of regions, and return a single region as a result. We 
							systematically identify individual spatial aggregate operations by extending existing 
							spatial operations into aggregate form. Semantic meaning for each operator is defined 
							over a specified data model. Once defined, algorithms for computing spatial aggregates 
							over regions are provided. We show that all proposed aggregates can be computed using a 
							single algorithm. Furthermore, we provide serial and parallel algorithm constructions 
							that can take advantage of vector co-processors, such as graphical processing units 
							(GPUs), and that can be integrated into map/reduce queries to take advantage of big 
							data-style clusters. Example queries and their results are provided.</p>
						</div>
						<script>associateDialogAndOpener("dialog1","opener1");</script>
					</li>
					<br/>
					<li><strong>Title:</strong> Storm System Database: A Big Data Approach to Moving Object Databases.
						<br/><strong>Authors:</strong> Mark McKenney, Brian Olsen
						<br/><strong>Publisher:</strong> IEEE
						<br/><strong>Publication Date:</strong> July, 24, 2013
						<br/><strong>DOI:</strong> <a href="http://ieeexplore.ieee.org/xpl/login.jsp?tp=&arnumber=6602059&isnumber=6602019&url=http%3A%2F%2Fieeexplore.ieee.org%2Fstamp%2Fstamp.jsp%3Ftp%3D%26arnumber%3D6602059%26isnumber%3D6602019" target="_blank">10.1109/COMGEO.2013.30</a>
						<br/><button id="opener">Click Here for Abstract!</button>
						<div id="dialog" title="Storm System Database Abstract">
							<p>Rainfall data is often collected by measuring the amount of precipitation collected 
							in a physical container at a site. Such methods provide precise data for those sites, 
							but are limited in granularity to the number and placement of collection devices.  We 
							use radar images of storm systems that are publicly available and provide rainfall 
							estimates for large regions of the globe, but at the cost of loss of precision. We 
							present a moving object database called Storm DB that stores decibel measurements of 
							rain clouds as moving regions, i.e., we store a single rain cloud as a region that 
							changes shape and position over time. Storm DB is a prototype system that answers rain 
							amount queries over a user defined time duration for any point in the continental 
							United States. In other words, a user can ask the database for the amount of rainfall 
							that fell at any point in the US over a specified time window. Although this single 
							query seems straightforward, it is complicated due to the expected size of the data 
							set: storm clouds are numerous, radar images are available in high resolution, and our 
							system will collect data over a large time frame; thus, we expect the number and size 
							of moving regions representing storm clouds to be large. To implement our proposed 
							query, we bring together the following concepts: (i) image processing to retrieve storm 
							clouds from radar images, (ii) interpolation mechanisms to construct moving regions with 
							infinite temporal resolution from region snapshots, (iii) transformations to compute exact 
							point in moving polygon queries using 2-dimensional rather than 3-dimensional algorithms, 
							(iv) GPU algorithms for massively parallel computation of the duration that a point lies 
							inside a moving polygon, and (v) map/reduce algorithms to provide scalability. The 
							resulting prototype lays the groundwork for building big data solutions for moving object 
							databases.</p>
						</div>
						<script>associateDialogAndOpener("dialog","opener");</script>
					</li>
				</ul>
			</div>
		<h2><strong>Projects</strong></h2>
		
		<div id="accordion">
			<!--h3><strong>Purdue</strong></h3>
			<div>
			</div-->
			<h3><strong>Southern Illinois University of Edwardsville</strong></h3>
			<div>
			During undergraduate studies I conducted research with Dr. Mark McKenney. 
			
			<a href="images/research/CONUS.gif"><img src="images/research/CONUS.gif" width="80%" class="center"></img></a>

			<strong>Summary:</strong> <p>Our research focuses primarily on writing an analysis framework for spatiotemporal databases. 
			This framework consists of a small subset of common aggregate operations, for example min, 
			max, difference, etc. The algorithms are written in CUDA and are run on a GPU processor to 
			optimize the speed of the queries. The information is stored in a database utilizing a 
			map-reduced model to support efficient storage and retrieval of data. During my research I 
			wrote programs that collect, analyze, and store storm information in the database. I also set 
			up and administered our Linux based Hadoop cluster. We attended the 2013 COM.Geo 
			conference in San Jose, CA where I presented a prototype and staged a poster of our work. 
			The conference published our material to IEEE and is available on the IEEE Digital Library. 
			The future work of this project focuses on enhancing our algorithms to handle the increasing 
			size of our data.</p>
			
			<a href="images/research/combined.png"><img src="images/research/combined.png" width="80%" class="center"></img></a>
			
			<p>My first task was writing the program that would pull weather data in the form of cloud 
			reflectivity maps of the Continental U.S. (CONUS) from the <a href="http://forecast.weather.gov/jetstream/doppler/ridge_download.htm" target="_blank">National Oceanic &amp Atmospheric Administration</a>. 
			At this point my program traced the edges of each cloud and singled out each individual decibel 
			level areas (i.e. different colors on the map) that indicate different levels of <a href="http://forecast.weather.gov/jetstream/doppler/baserefl.htm" target ="_blank">base reflectivity</a>.
			For instance, notice the picture above shows the picture below only outlines the "Cyan" color that represents 10 dBZ that indicates a fairly low chance of precipitation.
			Distinguishing these values is important for the queries later in the process as it will allow us to query trends down to a exact point on the map.
			Every 10 minutes the weather data would be <a href="http://radar.weather.gov/ridge/Conus/RadarImg/latest_radaronly.gif">updated</a> and 
			my program would then fetch the next image to analyze and follow to perform the aforementioned 
			process on the new data.</p>
			
			<a href="images/research/plot3DHoriz.png"><img src="images/research/plot3DHoriz.png" width="40%" class="left"></img></a>
			<a href="images/research/plot3DVert.png"><img src="images/research/plot3DVert.png" width="40%" class="right" style="align:right;"></img></a>
			
			<p>Once this occurs my program would then continue to link overlapping 
			clouds in different time segments and associate the two individual regions as a single moving 
			region. This moving region is stored as a binary file containing timestamps for each recorded 
			region in time, as well as a boundary box to make a quick search for previous connecting regions 
			and avoiding the need to instantiate all regions in order to associate individual static regions. 
			In the end we have a multitude of static regions that can be interpolated (see video below) to 
			account for the times in between. We call these sets of static regions a moving region. After we
			have the appended storms it is saved into the Hadoop Distributed File System.</p>
			
			<div width="70%" class="center">
			<video controls autoplay loop>
			  <source src="images/research/movie.mp4" type="video/mp4">
			  <source src="images/research/movie.webm" type="video/webm">
			  Your browser does not support the video tag.
			</video>
			</div>
			
			<p>My next responsibility was to perform a multi node hadoop cluster install. If you're not familiar 
			with <a href="http://hadoop.apache.org/" target="_blank">hadoop technology</a>, it is an open source framework that facilitates parallel storage and 
			retrieval over massive amounts of data also called <a href="http://en.wikipedia.org/wiki/Batch_processing" target="_blank">batch processing</a>. 
			We can send special jobs called <a href = "http://hadoop.apache.org/docs/r1.2.1/mapred_tutorial.html" target="_blank">mappers and reducers</a> 
			out to the cluster and perform programs that return data or some subset of the data we need 
			depending on our operation. With this database we are able to use 
			to store a massive amount of moving regions efficiently. I will provide a list of steps I went 
			through to accomplish this set up and a list of references I used. You must note that this process 
			is constantly changing and depending on what flavor of Linux you use and the version of hadoop 
			you are using.</p>
			
			<p>Since Big Data, Hadoop and Map Reduce are common buzzwords there is criticism when posing this as a solution to your problem. It was hard to tell at first when it is necessary to use
			a NoSQL database versus a traditional database. It is important to analyze <u>what</u> are trying to do and start to draw out the resources that would be needed to execute your task. If
			the amount of data is high, but the questions are only asked once a day could you wait a few hours or maybe run the job overnight? How relational is the data (i.e. do transactions matter)?
			We expect a very large number of small moving regions (each moving region will not have too many line segments, and rain clouds don't last all that long). Our algorithm will need to be executed 
			over a bunch of moving regions, which we chose to store as one moving region per file (so lots of files). Also, the moving regions are not very spatially distinct, they all occur over CONUS, 
			so spatial indexing methods don't help us too much.  Also, the moving regions are rather temporally distinct (again rain clouds don't last all that long), but we are proposing queries over 
			possibly large time windows, so we don't get a whole lot of help from indexing based on temporal values. Map reduce is a nice solution because our algorithms fit the model nicely, it scales very well, and can handle large amounts of data efficiently.
			</p>

			<br/><br/>
			
			<p><b>Project Directory</b></p><div id="rccTree" class= "filetree"	width="100%" height="400px"></div>
			<script>newFileTree("rccTree", "snips/rcc/")</script>
			
			</div>

    </div>
    <br />
  </div>
</div>
<?php include 'footer.php';?>
</body>
</html>