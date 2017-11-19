<?php 
extract($_REQUEST);
if( isset($name) ) {
	$n = $name;
	$s = $size;
	$g = $gen;
	$f = "http://localhost/icon/".$_FILES['att']['name']."";
	$control = new control();
	$control->add($n,$f,$g,$s);
}

if( isset($data) ) {
	$c = new control();
	$c->del($data);
}

class control {
	function add($n,$f,$g,$s) {
		include 'conn.php';
		$sql = "INSERT INTO `gamecoll`(`Image`, `Name`, `Genere`, `Size`) VALUES 
		( '$f','$n','$g','$s')"; 
		if( mysqli_query($conn,$sql) ) {
			echo "<script>alert('Save Successfully');</script>";
			move_uploaded_file( $_FILES['att']['tmp_name'], "D:/users/inder/Documents/Documents/FOLDER WALL/GAMES ICONS/".$_FILES['att']['name'] );
		}
		else {
			echo "<script>alert('Error Something Wrong !');</script>";
		}
	}
	
	function del($id) {
		include ("conn.php");
		$sql = "INSERT INTO `delgames`(`Name`, `Genere`, `Size`) SELECT `Name` , `Genere` , `Size` FROM `gamecoll` WHERE `Id` = $id";
		if( mysqli_query($conn,$sql) ) {
			$sql = "DELETE FROM `gamecoll` WHERE Id = $id";
	        mysqli_query($conn,$sql);
			echo "<script>alert('Deleted');</script>";
			include ('manage2.php');
		}
	}
}
?>