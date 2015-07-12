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
			<p>Here is my github repository explaining my research.</p>
			
			<a class="embedly-card" href="https://github.com/brianolsen87/SIUE-Projects/tree/master/CS%20495%20-%20Spatiotemporal%20Databases%20(IS)">Research</a>
			<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
			
			<p>Here is a direct link to my Rain Cloud collector</p>
			<a href="https://github.com/brianolsen87/SIUE-Projects/blob/master/CS%20495%20-%20Spatiotemporal%20Databases%20(IS)/raincloudcollector/RCC.py#L53">Rain Cloud Collector</a>
			</div>

    </div>
    <br />
  </div>
</div>
<?php include 'footer.php';?>
</body>
</html>