<?php 
extract ($_REQUEST);
if( isset ($del ) ) {
	?><script>
	var r = confirm("Are You Sure !");
    if (r == true) {
		<?php 
		include ("conn.php");
	    $sql = "DELETE FROM `blacklist` WHERE id = $del";
	    if( mysqli_query($conn,$sql) ) {
			$file = "Blacklist/".$del.".txt";
			if( file_exists( $file ) ) {
				unlink($file);
			}
		}
		?>
    }
	else {	
    }
    </script>
    <?php
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Action</title>
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
	$sql = "SELECT * FROM `blacklist` ORDER BY `Id` DESC limit $s_point , $v_onpage";
	$result = mysqli_query($conn,$sql);
	echo "<table align='center' width=100%>";
	echo "<tr style='background-color:#D0E9F4' align='center'>
	<td style='font-size:22px; font-weight:bold;'>Name</td>
	<td style='font-size:22px; font-weight:bold;'>Size</td>
	<td style='font-size:22px; font-weight:bold;'>Reason</td>
	<td style='font-size:22px; font-weight:bold;'>Option</td>
	</tr>";
    while($arr = mysqli_fetch_array($result))
	{
		extract ($arr);
		?>
		<tr align='center'>
		<td width="400px"><a href='<?php echo "Blacklist/$id.txt"; ?>'>
        <img width='256px' src='<?php echo $Name ?>'></a></td>
		<td width="100px" style='font-size:22px; font-weight:bold;'>
		<?php echo $Size ?></td>	
        <?php 
		$myfile = fopen("Blacklist/$id.txt", "r");
		echo "<td class='reason' align='left'  
		style='font-size:22px; font-weight:bold;'>";
        while(!feof($myfile)) {
		?>
		<?php echo fgets($myfile) . "<br>"; 
        }
        fclose($myfile);
		echo "</td>"; ?>
		<td width="100px"><a style=" font-size:18px; color:red; 
        text-decoration:none" href="blacklist.php?del=<?php echo $id; ?>">DELETE</a>
        </td>
        <?php
	}
	echo "</table>";
		$sql = "SELECT * FROM `blacklist`";  
		$cat = "blacklist";
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