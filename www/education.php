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
  </script>
  <div id="content-wrap">
	<?php include 'sidebar.php';?>
    <div id="main"> <a name="TemplateInfo"></a>
	<h1><strong>Education</strong></h1>
				<br/>
			<h2><a href="http://www.cs.purdue.edu/">Purdue University</a></h2>
			<p>Studied: Computer Science</p>
			<p>Degree: Masters of Science</p>
			<p>Graduated: May 2016(expected)</p>
			<p>GPA: N/A</p>
			<br/>
			<h2><a href="http://www.cs.siue.edu/">Southern Illinois University of Edwardsville</a></h2>
			<p>Studied: Computer Science</p>
			<p>Degree: Bachelors of Science</p>
			<p>Graduated: May 10 2014</p>
			<p>Activities: Research, Computer Association of SIUE (ACM Chapter)</p>
			<p>GPA:3.8</p>
			<center><h3>Projects</h3></center>
			<div id="accordion">
				<h3><strong>LearnOBA: Senior Project</strong></h3>
					<div>
						<p><b>Class:</b> CS 425 &amp CS 499 &ndash; Senior Project: Software Design &amp Software Implementation </p>
						<p><b>Program Description:</b> LearnOBA (<a href="http://en.wikipedia.org/wiki/Outcome-based_education" target="_blank">Learning Outcomes Based Assessment</a>) is a grading system that was designed to assist educators with maintaining a grade book that guided them to strictly adhere to the Learning Outcomes Bases Assessment paradigm.</p>
						<p><b>Comments:</b>  The primary challenge with this project was getting the final builds multi-platform (OS X, Windows, and Linux). We wrote the software in Java to avoid redundant writing of code but still ran into many compliance issues in the end.</p>
						<a href="images/education/loba.png"><img src="images/education/loba.png" width="80%" class="center"></img></a>
						
						<p><b>To run:</b> This program was written in Java and we have compiled distributions for each of the popular operatins systesm :). One thing to note, we only tested the Ubuntu Linux distribution. Make sure you have the latest Java version installed on your machine to run this!!
						<br/><br/>
						<ol>
						<li>Open the Software Distributions folder and download LearnOBA.exe (Windows), LearnOBA.dmg (OS X), or LearnOBA.tar (Linux).</li>
						<li>Open the /LearnOBA/resources folder and open LOBA-MANUAL R 1.0.pdf</li>
						<li>Follow the installation instructions listed in the PDF. The manual will also function as a guide to use the software.</li>
						</ol></p>
						
						<p><b>Project Directory</b></p><div id="lobaTree" class= "filetree"	width="100%" height="400px"></div>
						<script>newFileTree("lobaTree", "snips/loba/")</script>
					</div>
					
				<h3><strong>Geometric Data Simplifier</strong></h3>
					<div>
						<p><b>Class:</b> CS 490 &ndash; Advanced Database Topics</p>
						<p><b>Program Description:</b> For our final homework assignment we were assigned to complete a project that could potentially be used for a computing competition called the <a href="http://mypages.iit.edu/~xzhang22/GISCUP2014/" target="_blank">2014 SIG SPATIAL GIS Cup</a>. We were then
						encouraged to revise and submit our program to the competition if our algorithm showed promise. That's exactly what I did. So I implemented the project in python for school and to get the algorithm worked out and finished for school. After school I rewrote the program in C and got it
						running much faster. Below is a description of the problem from the website.
						<br/><br/>
						Geometry generalization is a well known concept in the field of <a href="http://en.wikipedia.org/wiki/Cartographic_generalization" target="_blank">cartography</a>. This concept is used in producing maps with less detail according to map scale. 
						The algorithms used for geometry generalization usually concentrate on the techniques for simplifying individual geometry objects. When these algorithms are applied to a map, the result might not be what the user expects. 
						<br/><br/>
						Consider a map that displays a set of state boundaries at a very detailed level. Some states share boundaries with other states and the areas of the states do not overlap with each other. In addition, let's add a set of cities to the map. Some of these cities might be very 
						close to the state boundaries. Now let us consider a simplified version of the same map. If geometry generalization algorithms are applied to each state boundary independently, the resulting map might not be accurate. For example, the simplified state boundaries might not 
						align with each other exactly as they did before the simplification. Some of the cities that are very close to the state boundaries might now be in a different state if the simplified state boundary now falls on the other side of the point used to represent the city. 
						<br/><br/>
						To facilitate this type of map simplification, it is often desirable to break the state boundaries into different line geometries so that all shared boundaries are represented as unique line geometries. These lines are then simplified and connected back together to form the
						state boundaries. With this approach, the state boundaries will still preserve the non-overlapping property they had before the boundary is simplified. But this itself does not guarantee that the cities still maintain their relative position with respect to their state boundaries. 
						<br/><br/>
						This year's SIG Spatial competition explores this map generalization problem and challenges the students to come up with novel solutions for this very useful problem. The scope of the problem is limited to allow the students to develop a meaningful solution in a short amount of time.</p>

						<h3>Problem Definition</h3>
						<p><strong>INPUT:</strong> A set of linear geometries that bound polygonal regions and a set of constraining points.

						<strong>OBJECTIVE:</strong> Simplify the linear geometries such that the relationship between the constraining points and linear geometries before and after the simplification does not change. In addition, the topological relationships between the original set of input linear geometries does not change after the simplification.</p>
												
						<p><b>Comments:</b>  The primary challenge with this project was coming up with a good algoirithm and thinking through all the particular edge cases that would cause incorrect results. If you look in the Simplify/Simplify/BUGS/ folder you will find some pictures that display these issues. 
						The next challenge once the school project was complete was to rewrite the program in C and make it better. My main goal was optimizing the file reading segment since that takes the longest.</p>
						<a href="images/education/simplify.jpg"><img src="images/education/simplify.jpg" width="80%" class="center"></img></a>
						
						<p><b>To run:</b> I'm only going to provide instructions to run the C version that should run on Windows and Linux. So sorry Mac. The python version is slower and requires numpy and some other math libraries...it's kind of a pain.
						<br/><br/>
						<ol>
						<li>Navigate to Simplify/Debug/ and Download Simplify.exe.</li>
						<li>Navigate to Simplify/Simplify/. Here you will see folders labelled with U.S. states. Choose any of these folders and download lines_out.txt and points_out.txt. </li>
						<li>In a prompt you will enter: Simplify [ PointToRemove ] [ LineInputFilePath ] [ PointInputFilePath ] [ OutputFilePath ]
							<ul>
								<li>[ PointToRemove ] &ndash; Technically the minimum number of points to remove but my program removes the max every time so just pass a random integer.</li>
								<li>[ LineInputFilePath ] &ndash; Value to specify the location of the "lines_out.txt" file.</li>
								<li>[ PointInputFilePath ] &ndash; Value to specify the location of the "points_out.txt" file.</li>
								<li>[ OutputFilePath ] &ndash; Value to specify the location and name of the simplified lines file.</li>
							</ul>
						</li>
						<li>Now the lines file that is fed out by the program is the minimum amount of lines that don't violate topological constraints of the contest.</li>
						</ol></p>
						
						<p><b>Project Directory</b></p><div id="simplifyTree" class= "filetree" width="100%" height="400px"></div>
						<script>newFileTree("simplifyTree", "snips/simplify/")</script>
					</div>
					
				<h3><strong>Engineering Building Information Kiosk Software</strong></h3>
					<div>
						<p><b>Class:</b> CS 321 &ndash; Human-Computer Interaction Design</p>
						<p><b>Program Description:</b> Team assignment where we implemented an interactive software application that would ultimately be installed on screen kiosks at every entrance of the SIUE Engineering building. The application provides visitors with information regarding the location in the building of each of the following:</p>
						<ul>
						<li>Office numbers for all faculty, staff, and administrators, including posted office hours for each individual.</li>
						<li>Room numbers for all laboratory facilities, including the name of the department in charge of the lab and the location of that department's main office.</li>
						<li>Room numbers and meeting times for all classes being conducted in the building during the current semester, Including instructor names and office room numbers.</li>
						<li>All restrooms and vending machines.</li>
						</ul> 
						<p>We also had to make a map of the engineering building. Since it was a touch kiosk we wanted to make it as interactive as 
						possible to provide directions and put those directions on a map.</p>
						
						<p><b>Comments:</b>  The primary challenge with this project was coordination with our team and our test subjects in the HCI Lab. Time management was crucial for this class. This project and this class forced many to come out of their shell in regards to working on teams since the size of the projects were too big for one person to take on by themselves. My team's name was Team Annex and I got along with my group pretty well. I put the project description called Project Description.pdf that goes into detail of what was expected at each phase.</p>
						<a href="images/education/Annex.png"><img src="images/education/Annex.png" width="80%" class="center"></img></a>
						
						<p><b>To run:</b> This program is done in Visual Basic so sadly it can only be run on a Windows machine :(.
						<br/><br/>
						<ol>
						<li>Download Annex_bin.zip.</li>
						<li>Extract the file and open the Annex_bin folder.</li>
						<li>Double-click on TeamAnnex.exe.</li>
						<li>You will need to choose a kiosk to indicate the location of the kiosk that the software is running on.</li>
						</ol></p>
						
						<p><b>Project Directory</b></p><div id="annexTree" class= "filetree" width="100%" height="400px"></div>
						<script>newFileTree("annexTree", "snips/annex/")</script>
					</div>
				<h3><strong>MIPS Processor Simulator</strong></h3>
					<div>
						<p><b>Class:</b> CS 312 &ndash; Introduction to Organization and Architecture</p>
						<p><b>Program Description:</b> Processor simulator that reads in binary files and parses them into assembly code instructions. 
						Another important thing is it checks for hazards that are found in a pipeline processor (e.g. Read before write, write before read, etc..)</p>
						<p><b>Comments:</b>  This was one of the first projects where I started thinking like an object oriented programmer. 
						To keep some order we decided to make an object to encapsulate <a href="http://en.wikipedia.org/wiki/MIPS_instruction_set#MIPS_I_instruction_formats" target="_blank">the various instructions types</a> 
						while abstracting the processor. I made an Instruction class that was originally supposed to be the superclass for the R, I, and J instructions but I had some issues 
						getting it to work. Under the MIPS Project 2 folder you can see my attempt commented out in the instruction.h file. In the end I had to settle with making a single class that set flags 
						to indicate which type of instruction it was. I was still very happy I finally had a solid example of how to use polymorphism to simplify the organization of my code. 
						The memory.h header contains data abstractions for the buffers, cache and queues used in this architecture. Finally, main.cpp is the driver and handles I/O of the binary 
						files to ascii output files. The dis.txt output files are a listing of <a href="http://en.wikipedia.org/wiki/MIPS_instruction_set#MIPS_assembly_language" target="_blank">MIPS assembly language instructions</a>. 
						The pipeline.txt files display a snapshot of the state of the registers, buffers and cache at a given cycle.</p>

						<p>Here is an abstract flow chart of how the processor would handle our MIPS instructions.</p>
						<a href="images/education/Processor.jpg"><img src="images/education/Processor.jpg" width="100%" class="center"></img></a>
						
						<p><b>To run:</b> I have only run this on a windows machine, but there should be no issues on Linux. Mac users are out of luck. 
						<br/><br/>
						<ol>
						<li>Open the first Debug folder and download mipssim.exe.</li>
						<li>In that same Debug folder, download any of the bin files.</li>
						<li>Execute mipssim.exe with the arguments -i [inputfile] -o [outputfile] where [inputfile] maps to one of the .bin files and [outputfile] is the name to be added to the _dis.txt and _pipeline.txt files. 
						(ex. mipssim.exe -i t1.bin -o t1). <br/> <strong>NOTE: </strong> -o [outputfile] parameter is optional and will use the name of the binary file if not present. </li>
						</ol></p>
						
						<p><b>Project Directory</b></p><div id="mipsTree" class= "filetree"	width="100%" height="400px"></div>
						<script>newFileTree("mipsTree", "snips/mips/")</script>
					</div>
				<h3><strong>Word Finder</strong></h3>
					<div>
						<p><b>Class:</b> CS 275 &ndash; Interaction Programming</p>
						<p><b>Program Description:</b> Word Finder Application that loads different word puzzles from a saved text file and allows the user to select letters until a word is found.</p>
						<p><b>Comments:</b> I chose this code to display my ability of problem solving by narrowing down variables to simplify the ability to track the moves of the user based on the previous direction they had clicked on. Since Visual Basic does a lot of auto generated files it looks pretty busy in the directory but in fact the only file that is my original work is WordFinder.vb. If you look at that file and look at the Puzzle_Click method this was the meat and potatoes of the program.</p>
					
						
						<a href="images/education/WordFinder.png"><img src="images/education/WordFinder.png" width="80%" class="center"></img></a>
						<p>This is the algorithm that used positioning of labels in the multidimensional array. If the position that the users click followed this pattern then you could determine the angle they were selecting letters in remained constant.</p>
						
						<p><b>To run:</b> This program is done in Visual Basic so sadly it can only be run on a Windows machine :(. 
						<br/><br/>
						<ol>
						<li>Open the bin/Debug folder and download WordFinder.exe.</li>
						<li>In that same Debug folder, download any of the hnt files (Hunt files were a made up extension for this project).</li>
						<li>Double-click WordFinder.exe.</li>
						<li>Click File > Open.</li>
						<li>Open an .hnt file of your choice.</li>
						<li>Play.</li>
						</ol></p>
						
						<p><b>Project Directory</b></p><div id="wordTree" class= "filetree"	width="100%" height="400px"></div>
						<script>newFileTree("wordTree", "snips/wordfinder/Assignment 5/")</script>
					</div>
				<br/>
			</div>
			<br/>
			<h2><a href="http://www.wcusd5.net/">Waterloo High School</a></h2>
			<br/>
			<p>Studied: General Studies</p>
			<p>Graduated: May 2006</p>
			<p>Activities: Rockband, Chorus</p>

			<br/><br/><br/>

    </div>
    <br />
  </div>
</div>
<?php include 'footer.php';?>
</body>
</html>