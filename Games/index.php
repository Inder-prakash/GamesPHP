<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Games</title>
<link rel="icon" href="Img/icon.ico" >
<link rel="stylesheet" href="script/style.css"> 
</head>
<body>
<div class="main">
<?php include "Header.php" ?>
<?php include "menu.php" ?>
<div class="container">
<?php  
include "conn.php";
	$sql = "SELECT * FROM `gamecoll` ORDER BY `Id` DESC limit $s_point , $v_onpage";
	$result = mysqli_query($conn,$sql);
	echo "<table align='center' width='100%'>";
	echo "<tr style='background-color:#D0E9F4;' align='center'><td style='font-size:22px; font-weight:bold;'>Game Image</td>
	<td style='font-size:22px; font-weight:bold;'>Name</td>
	<td style='font-size:22px; font-weight:bold;'>Genere</td>
	<td style='font-size:22px; font-weight:bold;'>Size</td>
	</tr>";
    while($arr = mysqli_fetch_array($result))
	{
		echo 
		"<tr align='center'>
		<td><img width='256px' src='".$arr['Image']."'></td>
		<td style='font-size:22px; font-weight:bold;'>".$arr['Name']."</td>
		<td style='font-size:22px; font-weight:bold;'>".$arr['Genere']."</td>
		<td style='font-size:22px; font-weight:bold;'>".$arr['Size']."</td>
		</tr>";
	}
	echo "</table>";
	$sql = "SELECT * FROM `gamecoll`";   
	$cat = "index";
?>
<br>
<br>
<div class="page"> <?php include "page.php" ?></div>
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