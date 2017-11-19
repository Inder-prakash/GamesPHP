<link rel="stylesheet" type="text/css" href="../script/style.css">
<?php 
extract ($_REQUEST);
if(isset ($n)) {
	include 'conn.php';
	$sql = "SELECT * FROM `gamecoll` WHERE Id = $n";
	$res = mysqli_query($conn,$sql);
	$arr = mysqli_fetch_array($res);
	extract ($arr);
	?>
    <form id="form" method="post">
    <table style="font-size:20px; font-weight:bolder" align="center" cellspacing="3" >
    <tr align="center">
    <td width="200px" height="200px">
    <img width="190px" src="<?php echo $Image; ?>" id="img" name="img"></td>
    </tr>
    <tr>
    <td>
    <textarea style="width:300px; height:200px"
    rows="10" cols="10" id="reason" name="reason"></textarea>
    </td>
    </tr>
    <tr>
    <Td><input class="bu" type="submit" value="Add" name="sub"></Td>
    </tr>
    </table>
</form>
    <?php
}
if(isset($sub)) {
	extract ($_REQUEST);
	include 'conn.php';
	$sql = "INSERT INTO `blacklist` 
	( `id`, `Name`, `Size`) VALUES
	('$n' , '$Image','$Size')";
    if ( mysqli_query($conn,$sql) ) {
		$myfile = fopen("../Blacklist/".$n.".txt", "w");
        $txt = $reason;
        fwrite($myfile, $txt);
        fclose($myfile);
	}
	echo "<script>window.close();</script>";
}
?>
