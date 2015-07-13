<html>
<body>
<div id="wrap">
	<?php include 'header.php';?>
  <div id="content-wrap">
	<?php include 'sidebar.php';?>
    <div id="main"> <a name="TemplateInfo"></a>
	<h1><strong>Military Experience</strong></h1>
	
<?php
require 'connect.inc.php';
$table = 'military';
$query = "SELECT * FROM ".$table." ORDER BY `ID`";
if($query_run = mysql_query($query)){

	while($query_row = mysql_fetch_assoc($query_run)){
		$filename=$root.$query_row['filename'];
		$width=$query_row['width'];
		$height=$query_row['height'];
		$description=$query_row['description'];

		$html_string='<!--Picture on Left--><table width="100%" border="0"><tr>
			<td style ="float:left"><img src ="'.$filename.'" width="'.$width.'" height="'.$height.'" class="float-left"></img></td>
			<td style ="float:left">'.$description.'</td>
			</tr></table></br>';
		
		if ($query_row = mysql_fetch_assoc($query_run)){
				$filename=$query_row['filename'];
			$width=$query_row['width'];
			$height=$query_row['height'];
			$description=$query_row['description'];
		
			$html_string.='<!--Picture on Right--><table width="100%" border="0"><tr>
			<td style ="float:left">'.$description.'</td>
			<td style ="float:left"><img src ="'.$filename.'" width="'.$width.'" height="'.$height.'" class="float-right"></td>
			</tr></table></br>';
		}
		
		echo $html_string;
	}
}else{
	echo "Query failed";
}
?>
    </div>
    <br />
  </div>
</div>
<?php include 'footer.php';?>
</body>
</html>