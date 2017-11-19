<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Games</title>
<link rel="icon" href="Img/icon.ico" >
<link rel="stylesheet" href="script/style.css"> 
</head>
<style>
a {
	text-decoration: none;
	color: black;
}
a:hover {
	color: Red;
}
</style
<body>
<div class="main">
<?php include "Header.php" ?>
<?php include "menu.php" ?>
<div class="container">
<?php  
include "conn.php";
	$sql = "SELECT * FROM `delgames` ORDER BY `Id` DESC";
	$result = mysqli_query($conn,$sql);
	echo "<table align='center' width='100%'>";
	echo "<tr style='background-color:#D0E9F4;' align='center'>
	<td style='font-size:22px; font-weight:bold;'>Name</td>
	<td style='font-size:22px; font-weight:bold;'>Genere</td>
	<td style='font-size:22px; font-weight:bold;'>Size</td>
	</tr>";
	
    while($arr = mysqli_fetch_array($result))
	{
		echo 
		"<tr>
		<td style='font-size:22px; padding-left: 100px; font-weight:bold;'><a href='https://www.google.co.in/search?hl=en&site=imghp&tbm=isch&source=hp&biw=&bih=&q=".$arr['Name']."&btnG=Search+by+image' target='_blank'>".$arr['Name']."</a></td>
		<td style='font-size:22px; padding-left: 100px; font-weight:bold;'>".$arr['Genere']."</td>
		<td style='font-size:22px; padding-left: 100px; font-weight:bold;'>".$arr['Size']."</td>
		</tr>";
	}
	echo "</table>";
	$sql = "SELECT * FROM `delgames`";   
	$cat = "delgames";
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>

</div>
</body>
</html>