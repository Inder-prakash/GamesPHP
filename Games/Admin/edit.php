<link rel="stylesheet" type="text/css" href="../script/style.css">
<script type="text/javascript" src="../../Img/jquery-1.11.3.min.js"></script>
<script>
function preview( input ) {
		if( input.files ){
			var read = new FileReader();
			read.onload = function (e) {
				$("#img").attr('src',e.target.result);
			}
			read.readAsDataURL(input.files[0]);
		}
	}
</script>
<?php 
extract ($_REQUEST);
if(isset ($n)) {
	include 'conn.php';
	$sql = "SELECT * FROM `gamecoll` WHERE Id = $n";
	$res = mysqli_query($conn,$sql);
	$arr = mysqli_fetch_array($res);
	extract ($arr);
	?>
    <form id="form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="iid" value="<?php echo $n; ?>">
    <table style="font-size:20px; font-weight:bolder" align="center" cellspacing="3" >
    <tr>
    <td>Name</td>
    <td><input value="<?php echo $Name; ?>" type="text" name="name" required></td>
    <td width="200px" height="200px" rowspan="5">
    <img width="190px" src="<?php echo $Image; ?>" id="img" name="img"></td>
    </tr>
    <tr>
    <td>Icon</td><td><input type="file" onChange="preview(this)" name="att" id="att"        style="width:90px" ></td>
    </tr>
    <tr>
    <td>Genere</td>
    <td><select style="width:100px" id="gen" name="gen" required>
    <option selected><?php echo $Genere; ?></option><option>Action</option><option>Arcade</option><option>Racing</option><option>Role Playing</option><option>Sports</option><option>Strategy</option></select></td>
   </tr>
   
   <Tr>
   <td>Size</td>
   <?php $st = split(" ",$Size); ?>
   <td><input style="width:110px" type="text" value="<?php echo $st[0]; ?>" required id="sz1" name="sz1">&nbsp;&nbsp;<select style="width:50px" required id="sz2" name="sz2"><option selected><?php echo $st[1]; ?></option><option>GB</option><option>MB</option></select>
   </td>
   </Tr>
   <tr>
   <td colspan="1"></td>
   <Td><input class="bu" type="submit" value="Update" name="sub"></Td>
   </tr>
   </table>
</form>
    <?php
}
if(isset($sub)) {
	include 'conn.php';
	$size = $sz1." ".$sz2;
	if( $_FILES['att']['tmp_name'] == "") {
		$sql = "UPDATE `gamecoll` SET `Name`= '$name' , `Genere`='$gen' , 
		`Size`='$size' WHERE Id = $iid";
	    mysqli_query($conn,$sql);
	}
	else {
		$f = "http://localhost/icon/".$_FILES['att']['name']."";
		$sql = "UPDATE `gamecoll` SET `Image`='$f',`Name`= '$name' ,`Genere`='$gen' ,
		`Size`='$size' WHERE Id = $iid";
	    mysqli_query($conn,$sql);
		move_uploaded_file( $_FILES['att']['tmp_name'],"D:/users/inder/Documents/Documents/FOLDER WALL/GAMES ICONS/".$_FILES['att']['name']."" );
	}
	echo "<script>window.close();</script>";
}
?>
