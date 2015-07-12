<html>
<body>
<div id="wrap">
<?php include '../header.php';?>
  <div id="content-wrap">
	<?php include '../sidebar.php';?>
    <div id="main"> <a name="TemplateInfo"></a>
	<h1><strong>News Entry</strong></h1>
	<?php 	
	require '../connect.inc.php';
	if(isset($_POST['s'])){

		$h1 = $_POST['h1'];
		$h2 = $_POST['h2'];
		$a = $_POST['a'];
		$m = $_POST['m'];
		$l = $_POST['l'];
		$iL = 1;
		if ($l==""){
			$iL=0;
			$l="NULL";
		}
	
		$table = 'News';
		$query = "INSERT INTO ".$table." VALUES (NULL,'".$h1."' ,'".$h2."', '".$m."', '".$a."', DAYNAME( NOW( ) ), CURRENT_TIMESTAMP, ".$iL.", '".$l."')";

		$result = mysql_query($query);

		if($result){
			echo "<script>alert(Success!! Query: ".$query.");</script>";
		}else{
			echo "<script>alert(Failure!! Query: ".$query.");</script>";
		}
	}
	?>
	<form method="post" action="<?php $_PHP_SELF ?>" style = "padding:10px 25px;">
		Main Header: <input type="text" name="h1" id="h1"><br><br>
		Sub Header: <input type="text" name="h2" id="h2"><br><br>
		Posted By: <select name="a" id="a">
						<option value="Brian">Brian</option>
						<option value="Silvia">Silvia</option>
						<option value="Guest">Guest</option>
				   </select><br><br>
		Message: <textarea type="text" name="m" id="m"></textarea><br><br>
		Link: <input type="text" name="l" id="l">  
		<input type="submit" value="Submit" name='s'>
	</form>	

	<p id="status"></p>
    </div>
    <br />
  </div>
</div>
<?php include '../footer.php';?>
</body>
</html>